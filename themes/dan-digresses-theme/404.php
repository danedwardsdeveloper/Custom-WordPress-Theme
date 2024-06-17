<?php get_header(); ?>

<main>
    <div class="categories-page">

        <h1 class="page-title">Sorry, that page can't be found &#x274C;</h1>
        <p>Check the URL, try another search term, or have a look at these recent posts instead.</p>
        </header>

        <div class="container">
            <?php
            $recent_posts_query = new WP_Query(array(
                'posts_per_page' => 10,
                'post_status' => 'publish',
            ));

            if ($recent_posts_query->have_posts()) :
                while ($recent_posts_query->have_posts()) : $recent_posts_query->the_post(); ?>

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

                <?php endwhile;
            else : ?>

                <p><?php _e('There are no recent posts.', 'your-theme-name'); ?></p>

            <?php endif;
            wp_reset_postdata(); // Reset the global $post object
            ?>
        </div>




    </div>
</main>

<?php get_footer(); ?>