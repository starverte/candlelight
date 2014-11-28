<?php
/**
 * The template for displaying the elders page
 *
 * @package Flint/Candlelight
 * @since 0.0.0
 */

get_header(); ?>

  <div class="page-title">

      <div class="container">

        <h1><?php printf( __( '%s', 'flint' ), '<span>' . 'Whom We Serve' . '</span>' ); ?></h1>

      </div><!-- .container -->

  </div><!-- .page-title -->

  <section id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

    <div class="row">
    <?php $i = 1;
          global $query_string;
          query_posts( $query_string . '&orderby=rand&posts_per_page=99' );
          if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'type', get_post_type() ); ?>

      <?php if($i % 4 == 0) {echo '<div class="clearfix visible-lg-block"></div>';}
            if($i % 3 == 0) {echo '<div class="clearfix visible-md-block"></div>';}
            if($i % 2 == 0) {echo '<div class="clearfix visible-sm-block"></div>';}
            $i++;
            endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

    </div>

    </div><!-- #content -->
  </section><!-- #primary -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>

