<?php

function learn_theme_enqueue_styles() {
    wp_enqueue_style('learn-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learn_theme_enqueue_styles');

function learn_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menu' );

    register_nav_menu( array(
        'primary_menu' => __( 'Primary Menu', 'learn-theme' ),
        'footer_menu'  => __( 'Footer Menu', 'learn-theme' ),
    ) );
}