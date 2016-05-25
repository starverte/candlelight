<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint/Candlelight
 * @since 0.2.0
 */
?>

  <nav class="navbar navbar-cl navbar-fixed-top" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
          <img id="logo" src="<?php header_image(); ?>" alt="Vuyiroli — Homes for the Elderly" />
        </a>
      </div><!-- .navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-primary">
        <?php
        if (is_front_page()) {
          wp_nav_menu( array( 'theme_location' => 'front-page', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Walker_Nav_Menu_Navbar ) );
        }
        else {
          wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Walker_Nav_Menu_Navbar ) );
        }
        ?>
        <div class="navbar-right">
          <a class="btn btn-red navbar-btn hidden-sm hidden-xs" href="https://www.worldventure.com/give/donate.php?REFundID=6470949" target="_blank">Donate</a>
          <a class="btn btn-red btn-block navbar-btn visible-xs-block visible-sm-block" href="https://www.worldventure.com/give/donate.php?REFundID=6470949" target="_blank">Donate</a>
        </div>
      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->

<?php if (is_front_page()) { ?>
  <nav class="arrdown">
    <div class="container">
      <i class="fa fa-chevron-down"></i>
    </div><!-- .container -->
  </nav><!-- .navbar -->
<?php } ?>
