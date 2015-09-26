<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint
 * @since 1.3.3
 */
?>

<section id="get-involved">

  <div class="fill-orange infograph">
    <div class="container">

      <div class="spacer"></div>

      <div class="row hidden-sm">

        <div class="col-lg-4 col-md-4 col-xs-12 txt-center">
          <i class="fa fa-money fa-5x"></i>
          <h1>Donate</h1>
          <p>$4 a day provides one elder with shelter, food, medicine, and more.</p>
          <a class="btn btn-lg btn-outline-inverse steel-tooltip hidden-sm hidden-xs" href="<?php echo esc_url( home_url() ); ?>/donate">Donate now</a>
          <a class="btn btn-lg btn-block btn-outline-inverse visible-xs-block" href="<?php echo esc_url( home_url() ); ?>/donate">Donate now</a>
        </div><!-- .col-lg-4 -->

        <div class="spacer visible-xs-block"></div>

        <div class="col-lg-4 col-md-4 col-xs-12 txt-center">
          <i class="fa fa-refresh fa-5x"></i>
          <h1>Follow</h1>
          <p>Learn more about Vuyiroli, the residents at Vuyiroli, and more ways to get involved.</p>
          <a class="btn btn-lg btn-outline-inverse">Subscribe to newsletter</a>
        </div><!-- .col-lg-4 -->

        <div class="spacer visible-xs-block"></div>

        <div class="col-lg-4 col-md-4 col-xs-12 txt-center">
          <i class="fa fa-share fa-5x"></i>
          <h1>Share</h1>
          <p>Share with others the problem in India, and how they can help.</p>
          <a class="btn btn-lg btn-outline-inverse" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>" target="_blank"><i class="fa fa-facebook-square"></i> Share</a>
          <a class="btn btn-lg btn-outline-inverse" href="https://twitter.com/share?url=<?php echo urlencode(get_the_permalink()); ?>&text=Vuyiroli is a non-profit organization that serves the abandoned elderly of India in need."><i class="fa fa-twitter"></i> Tweet</a>

        </div><!-- .col-lg-4 -->

      </div><!-- .row -->

      <div class="row visible-sm-block">

        <div class="col-sm-4">
          <i class="fa fa-money fa-5x"></i>
        </div><!-- .col-sm-4 -->
        <div class="col-sm-8">
          <h2>Donate</h2>
          <p>$3 a day provides one elder with shelter, food, medicine, and more.</p>
          <a class="btn btn-lg btn-outline-inverse" href="<?php echo esc_url( home_url() ); ?>/donate" target="_blank">Donate now</a>
          <div class="clearfix"></div>
        </div><!-- .col-sm-8 -->

        <div class="spacer"></div>

        <div class="col-sm-4">
          <i class="fa fa-refresh fa-5x"></i>
        </div><!-- .col-sm-4 -->
        <div class="col-sm-8">
          <h2>Follow</h2>
          <p>Learn more about Vuyiroli, the residents at Vuyiroli, and more ways to get involved.</p>
          <a class="btn btn-lg btn-outline-inverse">Subscribe to newsletter</a>
        </div><!-- .col-sm-8 -->

        <div class="spacer"></div>

        <div class="col-sm-4">
          <i class="fa fa-share fa-5x"></i>
        </div><!-- .col-sm-4 -->
        <div class="col-sm-8">
          <h2>Share</h2>
          <p>Share with others the problem in India, and how they can help.</p>
          <a class="btn btn-lg btn-outline-inverse" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>" target="_blank"><i class="fa fa-facebook-square"></i> Share</a>
          <a class="btn btn-lg btn-outline-inverse" href="https://twitter.com/share?url=<?php echo urlencode(get_the_permalink()); ?>&text=Vuyiroli is a non-profit organization that serves the abandoned elderly of India in need."><i class="fa fa-twitter"></i> Tweet</a>
        </div><!-- .col-sm-8 -->

      </div><!-- .row -->

      <div class="spacer"></div>

    </div><!-- .container -->

  </div><!-- .fill-orange -->

</section><!-- #get-involved -->

<footer id="colophon" class="fill site-footer" role="contentinfo">
  <div class="site-info container">
    <div class="row">
      <div id="custom-footer" class="col-xs-12 col-md-6">
        <?php flint_custom_footer(); ?>
      </div>
      <div id="credits" class="col-xs-12 col-md-6">
        <?php $theme = wp_get_theme(); ?>
        Proudly powered by <a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform">WordPress</a><br />
        Theme: <a href="<?php echo $theme->get( 'ThemeURI' ) ?>"><?php echo $theme ?></a> by <?php echo $theme->get( 'Author' ) ?>
      </div>
    </div><!-- .site-info -->
  </div><!-- .row -->
</footer><!-- #colophon -->

<?php get_footer( 'close' );

