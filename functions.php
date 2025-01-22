<?php

function my_custom_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

function my_theme_enqueue_scripts() {
    // Enqueue jQuery (built into WordPress)
    wp_enqueue_script('jquery');

    // Enqueue browser.min.js
    wp_enqueue_script('browser-js', get_template_directory_uri() . '/js/browser.min.js', array('jquery'), null, true);

    // Enqueue breakpoints.js (if it exists in your theme)
    wp_enqueue_script('breakpoints-js', get_template_directory_uri() . '/js/breakpoints.min.js', array('jquery', 'browser-js'), null, true);

    // Enqueue util.js
    wp_enqueue_script('util-js', get_template_directory_uri() . '/js/util.js', array('jquery', 'browser-js'), null, true);

    // Enqueue main.js (ensure all dependencies are loaded first)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'browser-js', 'util-js', 'breakpoints-js'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');





