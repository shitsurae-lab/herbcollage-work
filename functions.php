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
    wp_enqueue_script('jquery');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
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
        'height'      => 80,
        'width'       => 160,
        'flex-height' => true,
    ));
    /*
    *Enable support for 'title-tag'.
    */

    add_theme_support('title-tag');
}
// add_action('after_setup_theme', 'yomogi_setup_theme');


register_nav_menus(array(
    'primary' => 'プライマリー',
    'footer' => 'フッター'

));

// SwiperのCSS
function swiper_style()
{
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'swiper_style');

// SwiperのJavaScript
function swiper_script()
{
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), '4.5.0', true);
    wp_enqueue_script('swiper-mount', get_stylesheet_directory_uri() . '/js/swiper-mount.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'swiper_script');

// ress.CSS
function ress_style()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/ress.min.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'ress_style');

// M+PLUS+Rounded.CSS

function wpb_add_google_fonts()
{
    wp_enqueue_style(
        'm-plus-rounded',
        'https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400&display=swap'
    );
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');



// BootstrapのCSS
// function bootstrap_style()
// {
//     wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
// }
// add_action('wp_enqueue_scripts', 'bootstrap_style');

// BootstrapのJavaScript
// function bootstrap_script()
// {
//     wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.js', array(), '4.3.1', true);

// }
// add_action('wp_enqueue_scripts', 'bootstrap_script');

function add_jquery_files()
{
    $the_theme = wp_get_theme();
    // WordPress本体のjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryをキューにセット
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    // jQueryの読み込み
    wp_enqueue_script('jquery');
    // wp_enqueue_script(
    //     'popper',
    //     get_stylesheet_directory_uri() . '/js/popper.min.js',
    //     array(),
    //     '',
    //     false
    // );
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'add_jquery_files');
