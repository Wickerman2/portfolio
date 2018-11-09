<?php

function enqueue_styles() {
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css');
}


add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

?>