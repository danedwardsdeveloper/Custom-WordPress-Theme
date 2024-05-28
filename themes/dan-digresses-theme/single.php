<?php
get_header();
?>

<main>
    <div class="column-layout">
        <aside>
            <ul>
                <li>Article 1</li>
                <li>Article 2</li>
                <li>Article 3</li>
                <li>Article 4</li>
                <li>Article 5</li>
                <li>Article 6</li>
            </ul>
        </aside>
        <article class="full-article">
            <nav class="breadcrumbs">
                <ul>
                    <li>Home</li>
                    <li>Articles</li>
                    <li>Category</li>
                </ul>
            </nav>
            <section class="article-header">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_title();
                        get_template_part('template-parts/content', 'article');
                        get_template_part('template-parts/content', 'gallery');
                    }
                }
                ?>

                <h1>Article Title</h1>
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



<?php
get_footer();
?>