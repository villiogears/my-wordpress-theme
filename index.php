<?php get_header(); ?>
<main>
  <?php if ( have_posts() ) : ?>
    <div class="posts-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'post-thumb' ) ); ?></a>
          <?php endif; ?>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry-meta"><?php echo get_the_date(); ?> • <?php the_author(); ?></div>
          <div class="entry-excerpt"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    </div>
    <div style="margin-top:22px"><?php the_posts_pagination(); ?></div>
  <?php else: ?>
    <p>投稿が見つかりませんでした。</p>
  <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
