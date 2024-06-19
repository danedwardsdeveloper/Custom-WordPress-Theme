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
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'dan_digresses_theme_support');

function my_custom_image_sizes()
{
    add_image_size('thumbnail-square', 152, 152, true);
    add_image_size('thumbnail-category', 196, 120, true);
    add_image_size('thumbnail-medium', 350, 234, true);
    add_image_size('featured-image-full', 535, 190, true);
}
add_action('after_setup_theme', 'my_custom_image_sizes');


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

function theme_featured_image_setup()
{
    add_theme_support('post-thumbnails');
}

function get_excerpt($count = 110)
{
    $excerpt = "content" ? get_the_excerpt() : get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = substr($excerpt, 0, $count);
    $excerpt =  $excerpt . "...";
    return $excerpt;
}

function truncate_text($text, $max_length = 50)
{
    if (strlen($text) > $max_length) {
        return substr($text, 0, $max_length) . '...';
    } else {
        return $text;
    }
}

add_filter('pre_site_transient_update_core', '__return_null');
add_filter('pre_site_transient_update_themes', '__return_null');
add_filter('pre_site_transient_update_plugins', '__return_null');

function custom_author_base()
{
    global $wp_rewrite;
    $wp_rewrite->author_base = 'writer';
    $wp_rewrite->flush_rules();
}
add_action('init', 'custom_author_base');

function custom_rewrite_rules($rules)
{
    $new_rules = array();
    $new_rules['writer/([^/]+)/?$'] = 'index.php?author_name=$matches[1]';
    return $new_rules + $rules;
}
add_filter('rewrite_rules_array', 'custom_rewrite_rules');

function custom_author_query($query)
{
    if ($query->is_author) {
        $query->set('author_name', get_query_var('author_name'));
    }
}
add_action('pre_get_posts', 'custom_author_query');

add_filter('admin_email_check_interval', '__return_false');
