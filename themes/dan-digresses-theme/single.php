<?php get_header(); ?>

<main>
    <div class="column-layout">


        <article class="full-article">
            <nav class="breadcrumbs">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $category_name = truncate_text($categories[0]->name, 50); // Truncate category name
                            echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($category_name) . '</a>';
                        }
                        ?>
                    </li>
                    <li><?php echo truncate_text(get_the_title(), 15); // Truncate article title 
                        ?></li>
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
                            <span>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                            <span><?php echo get_the_date('l j F Y') ?></span>
                        </div>
                        <div class="tags-container">
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    $tag_link = get_tag_link($tag->term_id);
                                    echo '<div class="tag"><a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a></div>';
                                }
                            } else {
                                echo '<div class="tag"><span>No tags</span></div>'; // Optional: message when no tags are found
                            }
                            ?>
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

                wp_reset_postdata();
    ?>
    <hr />

        </article>

        <?php get_sidebar(); ?>

    </div>
</main>

<?php get_footer(); ?>