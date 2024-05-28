<?php
get_header();
?>

<main>
    <section class="hero-banner">
        <h1>Dan Digresses</h1>
        <p>Hey, welcome to my blog! I'm Dan - a practical/ creative/ intellectual/ philosophical type of guy. This is my unfocused &amp; random blog where I write about stuff that I want to write about. You can read it if you like.</p>
    </section>

    <section class="categories">
        <h2>Categories</h2>

        <div class="category-cards-container">
            <div class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/graphic-2.webp" alt="Category 1" />
                <span>Category 1 </span>
            </div>
            <div class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/graphic-2.webp" alt="Category 2" />
                <span>Category 2 </span>
            </div>
            <div class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/graphic-3.webp" alt="Category 3" />
                <span>Category 3 </span>
            </div>
            <div class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/graphic-4.webp" alt="Category 4" />
                <span>Category 4 </span>
            </div>
            <div class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/graphic-5.webp" alt="Category 5" />
                <span>Category 5 </span>
            </div>
        </div>
    </section>

    <section class="article-previews-section">
        <div class="article-preview-header">
            <h2>Recommended</h2>
            <button id="sort-article-previews-btn">
                <div>
                    <span>Most recent</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/icons/google-chevron-right-icon.svg" alt="Expand icon" />
                </div>
            </button>
            <div id="sort-article-previews-modal" class="hidden">
                <ul>
                    <li>
                        <span> Most recent </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/icons/google-done-icon.svg" alt="" />
                    </li>
                    <li>
                        <span> Most viewed </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="article-previews-container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $permalink = get_permalink();
            ?>
                    <div class="article-preview-card">

                        <?php
                        $featured_image = get_the_post_thumbnail_url($post->ID, 'small');
                        $featured_image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                        ?>

                        <?php if ($featured_image) : ?>
                            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($featured_image_alt); ?>">
                        <?php endif; ?>
                        <span class="article-preview-title">
                            <a href="<?php echo $permalink ?>">
                                <?php the_title(); ?>
                            </a>
                        </span>

                        <span class="article-preview-content"><?php echo get_excerpt(); ?></span>

                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <?php
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<span>' . $tag->name . '</a></tag>';
                                    }
                                }
                                ?>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>