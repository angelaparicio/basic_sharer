<?php
/*
Plugin Name: Basic Sharer
Description: Plugin muy simple para añadir enlaces de compartir
Author: Angel Aparicio
Version: 0.1
Text Domain: basic-sharer
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


function basic_sharer_icons($content) {

	$shares  = '<div id="sharer_links">';
	
	$shares .= '<strong> Compartir:</strong> <br/>';
	
	$shares .= '<a href="http://www.facebook.com/sharer.php?u=' . apply_filters("the_permalink", get_permalink()) . '&t=' . urlencode(get_the_title()) . '" target="_blank" style="position: relative; top: 0.15em;" alt="Compartir en Facebook" title="Compartir en Facebook">';
	$shares .= '<img src="'.get_site_url().'/wp-content/plugins/basic-sharer/images/fb-24.png" alt="Facebook" /> </a>';

	$shares .= '<a href="http://twitter.com/share?text=' . urlencode(get_the_title()) . '&url=' . apply_filters("the_permalink", get_permalink()) . '&via=' . get_option('blogname') . '" target="_blank" style="position: relative; top: 0.15em;" alt="Compartir en Twitter" title="Compartir en Twitter">';
	$shares .= '<img src="'.get_site_url().'/wp-content/plugins/basic-sharer/images/tw-24.png" alt="Twitter" /> </a>';	

	$shares .= '<a href="https://www.linkedin.com/shareArticle?mini=true&title=' . urlencode(get_the_title()) . '&url=' . apply_filters("the_permalink", get_permalink()) . '" target="_blank" style="position: relative; top: 0.15em;" alt="Compartir en Twitter" title="Compartir en Twitter">';
	$shares .= '<img src="'.get_site_url().'/wp-content/plugins/basic-sharer/images/ln-24.png" alt="Twitter" /> </a>';	

	$shares .= '<a href="https://plus.google.com/share?url=' . apply_filters("the_permalink", get_permalink()) . '" target="_blank" style="position: relative; top: 0.15em;" alt="Compartir en Twitter" title="Compartir en Twitter">';
	$shares .= '<img src="'.get_site_url().'/wp-content/plugins/basic-sharer/images/gp-24.png" alt="Twitter" /> </a>';

	$shares .= '</div>';

  	return $content.$shares;
}

add_filter( 'the_content', 'basic_sharer_icons' );

?>