<?php

add_action( 'after_setup_theme', 'code_beauty_setup' );
function code_beauty_setup() {
	add_theme_support( 'title-tag' );
	register_nav_menus( array( 'Header Navigation' => 'Header Navigation', ) );
}

add_action( 'wp_enqueue_scripts', 'code_beauty_scripts' );
function code_beauty_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), 1.0 );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap', 'normalize'),1.0 );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}