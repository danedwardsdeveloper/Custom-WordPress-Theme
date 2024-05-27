<?php

function dan_digresses_register_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('danDigressesStyleSheet', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $version, "all");
}

add_action("wp_enqueue_scripts", "dan_digresses_register_styles");
