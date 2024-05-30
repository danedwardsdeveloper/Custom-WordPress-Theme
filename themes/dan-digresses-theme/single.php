<?php get_header(); ?>

<main>
    <div class="column-layout">

        <?php get_sidebar(); ?>

        <article class="full-article">
            <nav class="breadcrumbs">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>">
                            Home
                        </a>
                    </li>
                    <li><?php the_category('single=true&echo=false') ?></li>
                    <li><?php the_title() ?></li>
                </ul>
            </nav>
            <section class="article-header">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        $title = get_the_title();
                        $content = get_the_content();
                ?>
                        <h1><?php echo $title; ?></h1>

                        <div class="writer-date">
                            <span>by <?php the_author(); ?></span>
                            <span><?php echo get_the_date('l j F Y') ?></span>
                        </div>
                        <div class="tags-container">
                            <div class="tag">
                                <span>Tag</span>
                            </div>
                            <div class="tag">
                                <span>Another tag</span>
                            </div>
                            <div class="tag">
                                <span>Different tag</span>
                            </div>
                        </div>
                        <div class="image-container">
                            <?php
                            $id = get_post_thumbnail_id($post->ID);
                            $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
                            ?>
                            <img src="<?php echo $src; ?>" alt="<?php echo $alt ?>">
                        </div>
            </section>

            <div class="article-content">
                <?php echo $content; ?>
            </div>

    <?php endwhile;

                else :
                    echo '<p>No content found.</p>';
                endif;

                // Reset the Post Data
                wp_reset_postdata();
    ?>
    </section>
    </div>
</main>

<?php get_footer(); ?>