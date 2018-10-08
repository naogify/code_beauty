<?php

add_action( 'after_setup_theme', 'code_beauty_setup' );
function code_beauty_setup() {
	add_theme_support( 'title-tag' );
}

add_action( 'wp_enqueue_scripts', 'code_beauty_scripts' );
function code_beauty_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'normalize', get_stylesheet_uri() . 'css/normalize.css', array(),1.0 );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap', 'normalize'),1.0 );
	wp_enqueue_style( 'font-awesome', get_stylesheet_uri() . 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}