<?php

//////////////////////////////
// ENQUE SCRIPTS AND STYLES //
//////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {

	wp_enqueue_script('jquery');

	wp_register_style('normalize', get_template_directory_uri().'/normalize.css');
	wp_enqueue_style('normalize');

	wp_register_style('main-style', get_stylesheet_uri());
	wp_enqueue_style('main-style');

	global $is_IE;
	if ( $is_IE ) {

		wp_register_style('ie8-style', get_template_directory_uri().'/ie8_style.css');
		wp_enqueue_style('ie8-style');		

		// script to help with IE
		wp_register_script('selectivizr', get_template_directory_uri().'/js/selectivizr-min.js');
		wp_enqueue_script('selectivizr');
	}

	wp_register_script('main-script', get_template_directory_uri().'/js/script.js');
	wp_enqueue_script('main-script');

}

add_theme_support( 'post-thumbnails' );
add_image_size('mobile-development-thumbnail', 286, 166, true);
add_image_size('design-thumb', 300, 174, true);


// Adding shortcode to add relative link to posts
function template_link() {
	return get_template_directory_uri();
}
add_shortcode('templateLink', 'template_link');

// Remove default <p>'s and </br>'s
remove_filter( 'the_content', 'wpautop' );

?>