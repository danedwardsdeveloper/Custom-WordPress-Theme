<?php /* Template Name: Static Page*/

get_header(); ?>

<main>
    <article class="static-page">
        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
    </article>
</main>

<?php get_footer();
