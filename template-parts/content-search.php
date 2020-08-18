<article <?php post_class(); ?>>
  <h2><?php the_title(); ?></h2>
  <div class="meta-info">
    <p>by <?php the_author_posts_link(); ?></p>
    <div class="cat">
      <?php if( has_category() ): ?>
        <p>Categories: <?php the_category( '' ); ?></p>
      <?php endif; ?>
      <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
  </div>
  <p><?php the_excerpt(); ?></p>
</article>