<?php

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
