<?php

/**
 * ArqamWeb Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ArqamWeb
 * @since 1.0.1
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ARQAMWEB_VERSION', '1.1.5');

/**
 * Load theme textdomain (WPML String Translation)
 */
function child_load_textdomain()
{
    load_child_theme_textdomain('arqamweb', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', 'child_load_textdomain');

/**
 * Register menus
 */
function child_register_menus()
{
    register_nav_menus([
        'footer-services' => __('Footer Services', 'arqamweb'),
    ]);
}

add_action('after_setup_theme', 'child_register_menus');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
    wp_enqueue_style(
        'arqamweb-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'aos-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/aos-css.min.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'blaze-slider-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/blaze.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'style-css',
        get_stylesheet_directory_uri() . '/frontend/public/style.min.css',
        array('arqamweb-theme-css'),
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);



/**

 * Enqueue script

 */

function my_custom_scripts()
{

    wp_enqueue_script(

        'blaze-slider-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/blaze-slider.min.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );


    wp_enqueue_script(

        'aos-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/aos.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );


    wp_enqueue_script(

        'flowbite-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/flowbite.min.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );

    wp_enqueue_script(

        'main-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/main.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'true',
        )
    );
}

add_action('wp_enqueue_scripts', 'my_custom_scripts');


require_once(get_stylesheet_directory() . '/inc/features.php');

add_filter('astra_page_layout', function () {
    return 'no-sidebar';
});
