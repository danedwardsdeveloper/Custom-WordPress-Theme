<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body>
    <div id="root">
        <header class="header">
            <div class="brand-logo-container">
                <a class="brand-logo" href="<?php echo home_url(); ?>">
                    <span>D</span>an <span>D</span>igresses<span>...</span>
                </a>
            </div>
            <div class="search-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/icons/google-search-icon.svg" alt="" id="search-icon" />
            </div>
        </header>