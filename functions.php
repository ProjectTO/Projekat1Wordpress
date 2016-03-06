<?php
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.

	// Load our main stylesheet.
	wp_enqueue_style( 'slick', '/wp-content/themes/Projekat 1/slick/slick.css', array(), '20120208', 'all' );
	wp_enqueue_style( 'slick-theme','/wp-content/themes/Projekat 1/slick/slick-theme.css', array(), '20120208', 'all' );
	wp_enqueue_style( 'selectivity', '/wp-content/themes/Projekat 1/selectivity/selectivity-full.css', array(), '20120208', 'all' );
	wp_enqueue_style( 'font-awesome','/wp-content/themes/Projekat 1/css/font-awesome.css"', array(), '20120208', 'all' );

	wp_enqueue_style( 'style', get_stylesheet_uri());
	

	
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );
	

// function ssl_srcset( $sources ) {
//   foreach ( $sources as &$source ) {
//     $source['url'] = set_url_scheme( $source['url'], 'https' );
//   }

//   return $sources;
// }
// add_filter( 'wp_calculate_image_srcset', 'ssl_srcset' );