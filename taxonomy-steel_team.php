<?php
/**
 * The template for displaying Archive pages
 *
 * @package Flint/Candlelight
 * @since 0.1.0
 */

get_header(); ?>

  <div class="page-title">

      <div class="container">

        <h1><?php printf( __( '%s', 'flint' ), '<span>' . single_term_title( '', false ) . '</span>' ); ?></h1>

      </div><!-- .container -->

  </div><!-- .page-title -->

  <section id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

    <?php global $query_string;
          query_posts( $query_string . '&orderby=rand&posts_per_page=99' );
          if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'type', get_post_type() ); ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

    </div><!-- #content -->
  </section><!-- #primary -->

</div><!-- #page -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>

