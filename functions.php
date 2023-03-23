<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function reflect_white_enqueue_scripts() {
	wp_enqueue_script( 'refect-white-scripts', get_template_directory_uri() . '/assets/js/colorscheme.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'reflect_white_enqueue_scripts' );
?>