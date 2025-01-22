<?php
function my_custom_theme_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

function enqueue_theme_scripts()
{
    // Enqueue jquery.min.js
    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);

    // Enqueue the breakpoint.min.js script
    wp_enqueue_script('breakpoint-script', get_template_directory_uri() . '/js/breakpoints.min.js', array(), '1.0.0', true);

    // Enqueue browser.min.js
    wp_enqueue_script('browser-script', get_template_directory_uri() . '/js/browser.min.js', array(), '1.0.0', true);

    // Enqueue main.js
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery-script'), '1.0.0', true);

    // Enqueue util.js
    wp_enqueue_script('util-script', get_template_directory_uri() . '/js/util.js', array('jquery-script'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');