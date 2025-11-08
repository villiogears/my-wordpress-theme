<?php get_header(); ?>
<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div class="entry-meta"><?php the_date(); ?> | <?php the_author(); ?></div>
      <div class="entry-content"><?php the_content(); ?></div>
      <?php
        wp_link_pages();
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        }
      ?>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
