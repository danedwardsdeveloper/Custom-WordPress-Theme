<?php

function custom_theme_register_styles()
{
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('custom-style-sheet', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'custom_theme_register_styles');

function custom_theme_register_scripts()
{
	wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js', array(), '4.2.2', true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
}

add_action('wp_enqueue_scripts', 'custom_theme_register_scripts');
