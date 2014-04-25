<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint/Candlelight
 * @since 0.0.0
 *
 */

get_header(); ?>
<?php flint_get_widgets('header'); ?>

  <section class="hero">
  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero.png" />
  	<div class="container">
    	
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<p>Some content</p>
    </div>
    </div>
  </section><!-- .hero -->
  
  <section id="problem" class="canvas-red container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<p>Some content</p>
    </div>
  </section><!-- #problem .canvas-red -->
  
  <section id="what-we-do" class="canvas-green container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<p>Some content</p>
    </div>
  </section><!-- #what-we-do .canvas-green -->
  
  <section id="get-involved" class="canvas-orange container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<p>Some content</p>
    </div>
  </section><!-- #get-involved .canvas-orange -->

<?php get_footer(); ?>
