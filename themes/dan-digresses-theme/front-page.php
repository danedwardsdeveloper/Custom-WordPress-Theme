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
            <a href="<?php
                        echo get_category_link('16');
                        ?>">
                <div class="category-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/books.webp" alt="A colourful bookshelf" />
                    <span>Book reviews</span>
                </div>
            </a>
            <a href="<?php
                        echo get_category_link('15');
                        ?>">
                <div class="category-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/philosophy.webp" alt="A wise owl, often used to represent knowledge and philosophy" />
                    <span>Philosophy</span>
                </div>
            </a>
            <a href="<?php
                        echo get_category_link('13');
                        ?>">
                <div class="category-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/recipes.webp" alt="Two people cooking in a kitchen" />
                    <span>Recipes</span>
                    </>
                </div>
                <a href="<?php
                            echo get_category_link('17');
                            ?>">
                    <div class="category-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/music.webp" alt="A music producer using a digital audio workstation" />
                        <span>Music</span>
                    </div>
                </a>
                <a href="<?php
                            echo get_category_link('14');
                            ?>">
                    <div class="category-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/images/category-graphics/life-hacks.webp" alt="A collection of DIY materials and tools" />
                        <span>Life hacks</span>
                    </div>
                </a>
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
                        <span>Most recent</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images-icons/icons/google-done-icon.svg" alt="" />
                    </li>
                    <li>
                        <span>Most viewed</span>
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
                    <a href="<?php echo $permalink ?>">
                        <div class="article-preview-card">
                            <?php
                            $featured_image = get_the_post_thumbnail_url($post->ID, 'small');
                            $featured_image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                            if ($featured_image) : ?>
                                <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($featured_image_alt); ?>">
                            <?php endif; ?>
                            <span class="article-preview-title">
                                <?php the_title(); ?>
                            </span>

                            <span class="article-preview-content"><?php echo get_excerpt(); ?></span>

                            <div class="article-preview-card-footer">
                                <div class="tag">
                                    <?php
                                    $firstTag = get_the_tags() ? reset(get_the_tags()) : null;
                                    if ($firstTag) : ?>
                                        <span><?php echo $firstTag->name; ?></span>
                                    <?php endif; ?>
                                </div>
                                <span class="article-preview-date">
                                    <?php
                                    $formatted_date = get_the_date('l j F Y');
                                    echo $formatted_date;
                                    ?>
                                </span>
                            </div>
                        </div>
                    </a>
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