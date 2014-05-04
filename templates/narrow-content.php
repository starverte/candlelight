<?php
/**
 * Displays content for the "Narrow" template.
 *
 * @package Flint/Candlelight
 * @since 0.0.0
 */

$type = get_post_type(); ?>

  <div class="row">
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <?php if (is_singular()) { flint_post_thumbnail('page'); } else { flint_post_thumbnail( 'page', 'archive' ); } ?>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 col-sm-6'); ?>>

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
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
  </div><!-- .row -->
