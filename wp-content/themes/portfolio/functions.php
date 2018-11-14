<?php

function themebs_enqueue_styles() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
  
  function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

if ( ! function_exists ( 'portfolio_setup' ) ) :
    function portfolio_setup() {
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'portfolio_setup');

function register_portfolio_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu')
        )
    );
}
add_action('init', 'register_portfolio_menus');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}