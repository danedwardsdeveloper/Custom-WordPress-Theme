<?php get_header(); ?>

<main>

    <nav class="breadcrumbs">
        <ul>
            <li>
                <a href="<?php echo home_url(); ?>">
                    Home
                </a>
            </li>
            <li>Search</li>

            <?php
            $s = get_search_query();
            if (!empty($s)) {
                echo '<li>';
                echo esc_html($s);
                echo '</li>';
            }
            ?>

        </ul>
    </nav>

    <div class="categories-page">

        <h1><?php single_cat_title(); ?></h1>
        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

        <div class="container">

            <?php
            $s = get_search_query();
            $args = array(
                's' => $s
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                _e("<h1>Search Results for " . get_query_var('s') . "</h1>");
                while ($the_query->have_posts()) {
                    $the_query->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>">
                        <article class="card">

                            <div class="card-text">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="image-container">
                                <?php
                                $featured_image = get_the_post_thumbnail_url($post->ID, 'small');
                                $featured_image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                                if ($featured_image) : ?>
                                    <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($featured_image_alt); ?>">
                                <?php endif; ?>
                            </div>

                        </article>
                    </a>
                <?php
                }
            } else {
                ?>
                <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                <div class="alert alert-info">
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                </div>
            <?php } ?>
</main>

<?php get_footer(); ?>