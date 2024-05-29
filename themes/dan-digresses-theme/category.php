<?php get_header(); ?>

<main>

  <?php if (have_posts()) : ?>

    <header class="archive-header">
      <h1 class="archive-title"><?php single_cat_title(); ?></h1>
      <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
    </header>

    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class(); ?>>

        <?php the_post_thumbnail('your-thumbnail-size'); ?>

        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>

        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="read-more" rel="bookmark">Read More</a>

      </article>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <p><?php _e('There are no posts in this category.', 'your-theme-name'); ?></p>

  <?php endif; ?>

</main>


<?php get_footer(); ?>