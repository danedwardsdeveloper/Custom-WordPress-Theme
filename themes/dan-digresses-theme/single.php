<?php get_header(); ?>

<main>
    <section class="article-header">
        <main>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    $title = get_the_title();
                    $content = get_the_content();
            ?>
                    <h1><?php echo $title; ?></h1>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>

            <?php endwhile;

            else :
                echo '<p>No content found.</p>';
            endif;

            // Reset the Post Data
            wp_reset_postdata();
            ?>




            <div>
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
                <span class="article-date">Monday 27 May 2024</span>
            </div>
            <div class="image-container">
                <img src="./assets/images-icons/images/article-photo-1.webp" alt="" />
            </div>
    </section>

    </article>
    </div>
</main>



<?php get_footer(); ?>