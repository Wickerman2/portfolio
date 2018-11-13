<?php

function enqueue_styles() {
    wp_enqueue_style( "stylesheet", get_template_directory_uri() . "/style.css");
    wp_enqueue_style( "bs_css", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

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