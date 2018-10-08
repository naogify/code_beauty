<?php

//require header.php and footer.php.
if ( ! is_admin() && ! is_login_page() ) {
	require dirname( __FILE__ ) . '/header.php';
}

// check if current page is login-page or not
function is_login_page() {
	return in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) );
}


add_action( 'after_setup_theme', 'code_beauty_setup' );
function code_beauty_setup() {
	add_theme_support( 'title-tag' );
}

add_action( 'wp_enqueue_scripts', 'code_beauty_scripts' );
function code_beauty_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'normalize', get_stylesheet_uri() . 'css/normalize.css' );
	wp_enqueue_style( 'font-awesome', get_stylesheet_uri() . 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}