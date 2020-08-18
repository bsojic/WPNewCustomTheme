<article <?php post_class( array('class' => 'featured' ) ); ?>>
  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
  </div>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <div class="meta-info">
    <p>
      by <span><?php the_author_posts_link(); ?></span> <span><?php echo get_the_date(); ?></span>
    </p>
    <div class="cat">
        <p>Categories: <?php the_category( '' ); ?></p>
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
      </div>
  </div>
  <p><?php the_excerpt(); ?></p>
</article>