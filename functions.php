<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));

    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.css', array(), '');

    wp_enqueue_style(
        'ress',
        get_stylesheet_directory_uri() . '/css/ress.min.css',
        array(),
        ''
    );

    wp_enqueue_script('jquery');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);

    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), '4.5.0', true);
    wp_enqueue_script('swiper-mount', get_stylesheet_directory_uri() . '/js/swiper-mount.js', array(), '', true);



    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function yomogi_setup()
{
    register_nav_menus(array(
        'global' => 'グローバル',
        'footer' => 'フッター'

    ));
}





function add_child_theme_textdomain()
{
    load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');

function yomogi_setup_theme()
{
    /*
    *Enable support for custom logo.
    *
    */
    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 160,
        'flex-height' => true,
    ));
}
// add_action('after_setup_theme', 'yomogi_setup_theme');
