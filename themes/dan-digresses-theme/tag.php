<?php get_header(); ?>

<main>

    <nav class="breadcrumbs">
        <ul>
            <li>
                <a href="<?php echo home_url(); ?>">
                    Home
                </a>
            </li>
            <li>Tag</li>
            <li>
                <?php
                $current_tag = get_queried_object();
                if ($current_tag && $current_tag->taxonomy === 'post_tag') {
                    $truncatedText = truncate_text($current_tag->name, 20);
                    echo $truncatedText;
                }
                ?>
            </li>
        </ul>
    </nav>

    <div class="categories-page">

        <h1><?php single_cat_title(); ?></h1>
        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

        <div class="container">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <a href="<?php the_permalink(); ?>">
                        <article class="card">

                            <div class="card-text">
                                <h2><?php echo truncate_text(get_the_title(), 35); ?></h2>
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