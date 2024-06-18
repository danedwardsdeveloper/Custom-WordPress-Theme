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
        <?php
        $category = get_queried_object();

        if ($category && $category->taxonomy === 'category') {
          $truncatedText = truncate_text($category->name, 20);
          echo '<li>' . $truncatedText . '</li>';
        }
        ?>
      </ul>
    </nav>


    <h1><?php single_cat_title(); ?></h1>
    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

    <div class="container">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

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
                  <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($featured_image_alt); ?>" width="152" height="152">
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