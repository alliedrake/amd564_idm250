<?php

if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

// echo '<pre>';
// var_dump(phpversion());
// echo '</pre>';

// Check WP version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WP 5.4.2 or later. Please upgrade WP site');
}

function include_styles() {

    //Example of including an external link 
    wp_enqueue_style('google-fonts', "link");

    //Example of including a style local to your theme root
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/dist/styles/index.css');
}

//When WP preforms this action, call our function, this injects the CSS
add_action('wp_enqueue_scripts', 'include_styles');




function include_js_files() {

    wp_enqueue_script( 
        
        'idm250-js', 
        
        get_template_directory_uri() . '/dist/scripts/main.js', 
            [], // $deps
            false, // $version
            true // $in_footer
        ); 
}

add_action('wp_enqueue_scripts', 'include_js_files');


function register_theme_navigation() {

register_nav_menus([
    'primary_menu' => 'Primary Menu',
    'footer_menu' => 'Footer Menu',
]);
}

add_action('after_setup_theme', 'register_theme_navigation');


function idm250_render_menu($menu_name) {


        if (!$menu_name) {

            return;
        }

    // $menu_name = "footer_menu"; return an array of menu locations that are registered
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
 }
 

//  Enable support for post thumbnails on posts and pages

 function add_post_thumbnails_support()
    {
        add_theme_support('post-thumbnails');
    }
add_action('after_setup_theme', 'add_post_thumbnails_support');