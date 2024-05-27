<!DOCTYPE html>
<html lang="en-GB">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div id="root">
        <header class="header">
            <div class="brand-logo-container">
                <span class="brand-logo">Brand logo</span>
            </div>
            <div class="search-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/icons/google-search-icon.svg" alt="" id="search-icon" />
            </div>
        </header>