<?php
add_action( 'wp_enqueue_scripts', 'novella_child_theme_styles' );
function novella_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}