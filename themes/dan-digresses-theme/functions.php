<?php

function dan_digresses_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 78,
        'width'       => 522,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}

add_action('after_setup_theme', 'dan_digresses_theme_support');

function dan_digresses_menus()
{
    $locations = array(
        "primary" => "desktop primary menu",
        "footer" => "footer menu"
    );
    register_nav_menus($locations);
}
add_action("init", "dan_digresses_menus");

function dan_digresses_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('danDigressesStyleSheet', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), $version, "all");
}
add_action("wp_enqueue_scripts", "dan_digresses_register_styles");

function dan_digresses_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script("danDigressesMainJS", get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action("wp_enqueue_scripts", "dan_digresses_register_scripts");

add_theme_support('post-thumbnails');

function get_excerpt($count = 100)
{
    $excerpt = "content" ? get_the_excerpt() : get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = substr($excerpt, 0, $count);
    $excerpt =  $excerpt . "...";
    return $excerpt;
}

add_filter('pre_site_transient_update_core', '__return_null');
add_filter('pre_site_transient_update_themes', '__return_null');
add_filter('pre_site_transient_update_plugins', '__return_null');
