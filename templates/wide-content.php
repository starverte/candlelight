<?php
/**
 * Displays content for the "Wide" template.
 *
 * @package Flint/Candlelight
 * @since 0.0.0
 */

$type = get_post_type(); ?>

  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 col-md-12 col-sm-12'); ?>>
      
      <?php if ( is_search() ) : ?>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
      <?php else : ?>
      <div class="entry-content">
        <?php flint_the_content(); ?>
        <?php
        flint_link_pages( array(
          'before' => '<ul class="pagination">',
          'after'  => '</ul>',
        ) ); ?>
      </div><!-- .entry-content -->
      <?php endif; ?>
    </article><!-- #page-<?php the_ID(); ?> -->
    
  </div><!-- .row -->
