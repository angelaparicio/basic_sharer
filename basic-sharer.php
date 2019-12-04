<?php
/*
Plugin Name: Basic Sharer
Description: Plugin muy simple para añadir enlaces de compartir
Author: Angel Aparicio
Version: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter( 'the_content', function($content){
	
	$permalink = get_permalink();
	$title = urlencode(get_the_title());
	
	$links = array(
		'Facebook' => array(
			'link' => 'https://www.facebook.com/sharer.php?u='.$permalink.'&t='.$title,
			'logo' => plugin_dir_url(__FILE__).'images/fb-24.png'
		),	
		'Twitter' => array(
			'link' => 'https://twitter.com/share?text='.$title.'&url='.$permalink,
			'logo' => plugin_dir_url(__FILE__).'images/tw-24.png'
		),
		'Linkedin' => array(
			'link' => 'https://www.linkedin.com/shareArticle?mini=true&title='.$title.'&url='.$permalink,
			'logo' => plugin_dir_url(__FILE__).'images/ln-24.png'
		),
	);
	
	$share_links  = '<div id="sharer_links">';
	foreach ( $links as $network_name => $link_info ){
		$share_links .= '<a href="'.$link_info['link'].'" class="external share_'.strtolower($network_name).'" target="_blank"><img style="display: inline" src="'.$link_info['logo'].'" alt="'.$network_name.'" /></a> ';
	}	
	$share_links .= '</div>';
	
	return $content.$share_links;
	
});


add_action( 'admin_menu', function(){
	add_submenu_page( 'tools.php', 'Basic Sharer Configuration', 'Basic Sharer', 'manage_options', 'basic_sharer_options', 'basic_sharer_render_options_page');
});

function basic_sharer_render_options_page(){
	echo '<h1>Basic sharer options</h1>';
}