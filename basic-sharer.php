<?php
/*
Plugin Name: Basic Sharer
Plugin URI: https://angelaparicioprogramador.com/wordpress/plugin-para-compartir-en-redes-sociales/
Description: Plugin muy simple para añadir enlaces de compartir
Author: Angel Aparicio
Version: 0.2
Text Domain: basic-sharer
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


function basic_sharer_icons($content) {
	
	$links = array(
		'Facebook' => array(
			'link' => 'https://www.facebook.com/sharer.php?u='.apply_filters("the_permalink", get_permalink()).'&t='.urlencode(get_the_title()),
			'logo' => plugin_dir_url(__FILE__).'images/fb-24.png'
		),	
		'Twitter' => array(
			'link' => 'https://twitter.com/share?text='.urlencode(get_the_title()).'&url='.apply_filters("the_permalink", get_permalink()),
			'logo' => plugin_dir_url(__FILE__).'images/tw-24.png'
		),
		'Linkedin' => array(
			'link' => 'https://www.linkedin.com/shareArticle?mini=true&title='.urlencode(get_the_title()).'&url='.apply_filters("the_permalink", get_permalink()),
			'logo' => plugin_dir_url(__FILE__).'images/ln-24.png'
		),
	);
	
	$shares  = '<div id="sharer_links">';
	$shares .= '<strong> Compartir:</strong> <br/>';
	$shares  = '<div id="sharer_links">';
	foreach ( $links as $network_name => $link_info ){
		$shares .= '<a href="'.$link_info['link'].'" class="external share_'.strtolower($network_name).'" target="_blank"><img style="display: inline" src="'.$link_info['logo'].'" alt="'.$network_name.'" /></a> ';
	}	
	$shares .= '</div>';

  	return $content.$shares;
}

add_filter( 'the_content', 'basic_sharer_icons' );
