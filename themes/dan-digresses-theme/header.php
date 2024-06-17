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
            <?php get_search_form(); ?>
        </header>