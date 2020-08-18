<article <?php post_class(); ?>>
  <h2><?php the_title(); ?></h2>
  <?php the_post_thumbnail( 'medium' ); ?>
  <div class="meta-info">
    <p>by <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category( ' ' ); ?></p>
    <p><?php the_tags( 'Tags: ', ', '); ?></p>
  </div>
  <p><?php the_content(); ?></p>
</article>