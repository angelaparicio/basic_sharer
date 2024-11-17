<?php
/*
Plugin Name: Basic Sharer
Description: Very simple plugin to add share links
Author: Angel Aparicio
Author URI: https://angelaparicio.dev
Version: 0.6
Text Domain: basic_sharer
Domain Path: /languages
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function basic_sharer_load_plugin_textdomain() {
	load_plugin_textdomain( 'basic-sharer', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'basic_sharer_load_plugin_textdomain' ); 


add_filter( 'the_content', function($content){
	
	$permalink = get_permalink();
	$title = urlencode(get_the_title());
	
	$links = array(
		'Facebook' => array(
			'link' => 'https://www.facebook.com/sharer.php?u='.$permalink.'&t='.$title,
			'logo' => plugin_dir_url(__FILE__).'images/fb-24.png',
			'visible' => get_option('basic_sharer_facebook', true)
		),	
		'X' => array(
			'link' => 'https://x.com/share?text='.$title.'&url='.$permalink,
			'logo' => plugin_dir_url(__FILE__).'images/x-24.png',
			'visible' => get_option('basic_sharer_twitter', true)			
		),
		'Linkedin' => array(
			'link' => 'https://www.linkedin.com/shareArticle?mini=true&title='.$title.'&url='.$permalink,
			'logo' => plugin_dir_url(__FILE__).'images/ln-24.png',
			'visible' => get_option('basic_sharer_linkedin', true)			
		),
	);
	
	$share_links  = '<div id="sharer_links">';
	$share_links .= '<span class="share_links_text">'.__('Share', 'basic-sharer').': </span>';

	foreach ( $links as $network_name => $link_info ){
		if ($link_info['visible']) {
			$share_links .= '<a href="'.$link_info['link'].'" class="external share_'.strtolower($network_name).'" target="_blank"><img style="display: inline" src="'.$link_info['logo'].'" alt="'.$network_name.'" /></a> ';
		}
	}	
	$share_links .= '</div>';
	
	return $content.$share_links;
	
});


add_action( 'admin_menu', function(){
	add_submenu_page( 'options-general.php', 'Basic Sharer Options', 'Basic Sharer', 'manage_options', 'basic_sharer_options', 'basic_sharer_render_options_page');
});

function basic_sharer_render_options_page(){
	
	
	if ( isset($_POST['basic_share_nonce']) && wp_verify_nonce( sanitize_text_field(wp_unslash($_POST['basic_share_nonce'])), 'basic_share_save' ) ) {

		$basic_sharer_facebook = isset($_POST['basic_sharer_facebook']);
		$basic_sharer_twitter  = isset($_POST['basic_sharer_twitter']);
		$basic_sharer_linkedin = isset($_POST['basic_sharer_linkedin']);
		
		update_option('basic_sharer_facebook', $basic_sharer_facebook);
		update_option('basic_sharer_twitter', $basic_sharer_twitter);
		update_option('basic_sharer_linkedin', $basic_sharer_linkedin);
	
	}
	else {
		$basic_sharer_facebook = get_option('basic_sharer_facebook', true);
		$basic_sharer_twitter = get_option('basic_sharer_twitter', true);
		$basic_sharer_linkedin = get_option('basic_sharer_linkedin', true);
	}
	
	include('options_page.php');
}