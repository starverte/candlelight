<?php
/**
 * Displays content for the "Full" template.
 *
 * @package Flint/Candlelight
 * @since 0.1.0
 */

$type = get_post_type(); ?>

  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2">
      <?php if (is_singular()) { flint_the_post_thumbnail('page'); } else { flint_the_post_thumbnail( 'page', 'archive' ); } ?>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 col-sm-8'); ?>>

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
    <div class="col-lg-2 col-md-2 col-sm-2"></div>
  </div><!-- .row -->
