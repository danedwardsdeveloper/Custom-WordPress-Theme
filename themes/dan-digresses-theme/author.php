<?php get_header(); ?>

<main>

    <div class="categories-page">

        <nav class="breadcrumbs">
            <ul>
                <li>
                    <a href="<?php echo home_url(); ?>">
                        Home
                    </a>
                </li>
                <li>Writers</li>
                <li>
                    <?php the_author(); ?>
                </li>
            </ul>
        </nav>


        <h1>Articles by <?php the_author(); ?></h1>

        <div class="container">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <article class="card">

                            <div class="card-text">
                                <h2><?php echo truncate_text((get_the_title()), 35); ?></h2>
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

                <?php endwhile; ?>

            <?php else : ?>

                <p><?php _e('There are no posts in this category.', 'your-theme-name'); ?></p>

            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>