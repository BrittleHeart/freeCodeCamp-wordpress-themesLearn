<?php

// REMEMBER! HOOKS MUST TO BE WRAPPED WITH FUNCTIONS
function missflow_handle_theme_support() {

    // Adds dynamic title tags -> Simple, by using it, I can manage my title section
    // What's more, this function corresponds with `wp_head()` hook
    // This title value comes from Wordpress -> admin panel -> settings -> title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'missflow_handle_theme_support');


function missflow_menus() {
    // Location where my target navigation should go,
    // Names can be random but KEY must be unique
    $locations = array(
        'primary' => 'Desktop primary left Sidebar',
        'footer' => 'Footer Menu Items',
    );

    register_nav_menus($locations);
}

// Init function -> on Init
add_action('init', 'missflow_menus');


/**
 * Action for register styles
 */
function missflow_register_styles() {

    // Takes the theme info
    // And gets version of Theme
    $version = wp_get_theme()->get('version');

    /**
     * Enqueue the styles required by application to start running properly
     * Replace(undefined, <style></style> tag
     *
     * @param $handle,
     * @param $src = '',
     * @param $deps = array(),
     * @param $ver = false,
     * @param $media = 'print|all'
     */
    wp_enqueue_style('followandrew-customs',
        get_template_directory_uri() . '/style.css', array('followandrew-bootstrap'), $version, 'all');

    /**
     * Loading bootstrap
     */
    wp_enqueue_style('followandrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');

    /**
     * Loading fontawesome
     */
    wp_enqueue_style('followandrew-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}

// Grabs the action and calls -> `wp_enqueue_scripts' BUILT-IN action
add_action('wp_enqueue_scripts', 'missflow_register_styles');


/**
 * Action for register scripts
 */
function missflow_register_scripts() {

    // Takes the theme info
    // And gets version of Theme
    $version = wp_get_theme()->get('version');



    // Loading JQuery
    /**
     * Enqueue the script -> replace(undefined, <script></script>) tag.
     *
     * @param $handle,
     * @param $src = '',
     * @param $deps = array(),
     * @param $ver = false,
     * @param $infooter = 'true | false'
     */
    wp_enqueue_script('followandrew-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);


    // Loading Popper
    wp_enqueue_script('followandrew-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);


    // Loading Bootstrap
    wp_enqueue_script('followandrew-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);


    // Loading Custom JavaScript
    wp_enqueue_script('followandrew-custom',get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}

// Grabs the action and calls -> `wp_enqueue_scripts' BUILT-IN action
add_action('wp_enqueue_scripts', 'missflow_register_scripts');