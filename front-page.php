<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint/Candlelight
 * @since 0.2.0
 *
 */

get_header(); ?>

  <section id="intro">

    <div class="hero">

      <div class="container">

        <div class="col-lg-6 col-md-8 hidden-sm hidden-xs">
          <span class="text">
            <p><img id="logo" src="<?php header_image(); ?>" alt="Vuyiroli — Homes for the Elderly" /></p>
            <p>is a non-profit<br>
            organization that serves<br>
            the abandoned elderly in need,<br>
            regardless of caste, creed,<br>
            religion, or language.</p>

          </span>
        </div><!-- .col-lg-12 -->

      </div><!-- .container -->

    </div><!-- #intro .hero -->

    <div class="canvas-white container visible-xs-block visible-sm-block">

        <div class="col-sm-12 col-xs-12">
          <p>Vuyiroli is a non-profit<wbr>
            organization that serves<wbr>
            the abandoned elderly in need,<wbr>
            regardless of caste, creed,
            religion,<wbr> or language.</p>
        </div><!-- .col-xs-12 -->

    </div><!-- .canvas-white -->

    <div class="canvas-white hidden-sm hidden-xs"></div>

  </section><!-- #intro -->

  <section id="problem">

    <div class="hero">

      <div class="container">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">

          <span class="text">

            <h1>Abandoned</h1>

            <p>by their families,<br>
              elders are left on streets<br>
              with no home,<br>
              no food and no support</p>

          </span>

        </div><!-- .col-lg-12 -->

      </div><!-- .container -->

    </div><!-- .hero -->

    <div class="canvas-white container visible-xs-block visible-sm-block text-red">

        <div class="col-sm-12 col-xs-12">

          <h1>Abandoned</h1>

          <p>by their families,<wbr>
            elders are left on streets<wbr>
            with no home,<wbr>
            no food and no support</p>
            <p>leaving elders alone and hurting</p>

        </div><!-- .col-xs-12 -->

    </div><!-- .canvas-white -->

    <div class="canvas-white text-red hidden-sm hidden-xs">

      <div class="container">

        <div class="col-lg-12 col-md-12">
          <p>leaving elders alone and hurting</p>
        </div><!-- .col-lg-12 -->

      </div><!-- .container -->

    </div><!-- .canvas-white -->

    <div class="canvas-red infograph">

      <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>In a country without</h1>
          </div><!-- .col-lg-12 -->

        </div>

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-hospital-o fa-5x"></i>
            <h2>Medicare</h2>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-money fa-5x"></i>
            <h2>Social Security</h2>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-shield fa-5x"></i>
            <h2>or other social safety nets</h2>
          </div><!-- .col-lg-4 -->

        </div><!-- .row -->

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-wheelchair" id="disability-icon"></i>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 txt-center">
            <h1>Elders in India with illness or disability cannot support themselves</h1>
          </div><!-- .col-lg-4 -->

        </div><!-- .row -->

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Families in India are changing</h1>
          </div><!-- .col-lg-12 -->

        </div>

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-2 col-md-1"></div>

          <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 txt-center">
            <img class="max-215" src="<?php echo get_stylesheet_directory_uri(); ?>/img/extended-family.png" />
            <h2>Extended families</h2>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-2 col-md-2 col-sm-2"></div>

          <div class="visible-xs-block spacer"></div>

          <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 txt-center">
            <img class="max-215" src="<?php echo get_stylesheet_directory_uri(); ?>/img/nuclear-family.png" />
            <h2>...are now nuclear</h2>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-2 col-md-1"></div>

        </div><!-- .row -->

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Elders are seen as liabilities because they</h2>
          </div><!-- .col-lg-12 -->

        </div>

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-user-md fa-5x"></i>
            <h2>create high medical costs</h2>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-home fa-5x"></i>
            <h2>increase housing costs</h2>
          </div><!-- .col-lg-4 -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt-center">
            <i class="fa fa-plane fa-5x"></i>
            <h2>and limit the pursuit of global opportunities</h2>
          </div><!-- .col-lg-4 -->

        </div><!-- .row -->

        <div class="spacer"></div>

      </div><!-- .container -->

    </div><!-- .canvas-red -->

    <div class="canvas-white text-red">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p>so families abandon them</p>
        </div><!-- .col-lg-12 -->
      </div><!-- .container -->
    </div><!-- .canvas-white -->

  </section><!-- #problem -->

  <section id="what-we-do">

    <div class="hero">

      <div class="container">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">

          <span class="text">
          <h1>Rescued</h1>

          <p>by Vuyiroli, elders have a home,<br>
            food and community</p>

          </span>

        </div><!-- .col-lg-12 -->

      </div><!-- .container -->

    </div><!-- .hero -->

    <div class="canvas-white container visible-xs-block visible-sm-block text-green">

        <div class="col-sm-12 col-xs-12">

          <h1>Rescued</h1>

          <p>by Vuyiroli, elders have a home,<wbr>
            food and community</p>
          <p>bringing light to those in the dark</p>

        </div><!-- .col-xs-12 -->

    </div><!-- .canvas-white -->

    <div class="canvas-white text-green hidden-sm hidden-xs">

      <div class="container">

        <div class="col-lg-12 col-md-12">
          <p>bringing light to those in the dark</p>
        </div><!-- .col-lg-12 -->

      </div><!-- .container -->

    </div><!-- .canvas-white -->

    <div class="canvas-green infograph">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center">Vuyiroli provides</h1>
          </div><!-- .col-lg-12 -->

        </div>

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 txt-center">
            <i class="fa fa-home fa-5x"></i>
            <h2>a permanent home</h2>
          </div><!-- .col-lg-3 -->

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 txt-center">
            <i class="fa fa-cutlery fa-5x"></i>
            <h2>daily food</h2>
          </div><!-- .col-lg-3 -->

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 txt-center">
            <i class="fa fa-medkit fa-5x"></i>
            <h2>medical care</h2>
          </div><!-- .col-lg-3 -->

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 txt-center">
            <i class="fa fa-users fa-5x"></i>
            <h2>community activities</h2>
          </div><!-- .col-lg-3 -->

        </div><!-- .row -->

        <div class="spacer"></div>

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center hidden-xs">Vuyiroli helps them live out their remaining years with dignity, companionship, and happiness</h1>
            <h2 class="text-center visible-xs-block">Vuyiroli helps them live out their remaining years with dignity, companionship, and happiness</h2>
          </div><!-- .col-lg-12 -->

        </div>

        <div class="spacer"></div>

      </div><!-- .container -->
    </div><!-- .canvas-green -->

    <div class="canvas-white"></div>

  </section><!-- #what-we-do -->

  <section id="get-involved">

    <div class="canvas-orange infograph">
      <div class="container">

        <div class="spacer"></div>

        <div class="row hidden-sm">

          <div class="col-lg-4 col-md-4 col-xs-12 txt-center">
            <i class="fa fa-money fa-5x"></i>
            <h1>Donate</h1>
            <p>$3 a day provides one elder with shelter, food, medicine, and more.</p>
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

    </div><!-- .canvas-orange -->

  </section><!-- #get-involved -->

<?php get_footer(); ?>
