<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint/Candlelight
 * @since 0.0.0
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
        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
      </div><!-- .navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-primary">
        <?php
        if (is_front_page()) {
          wp_nav_menu( array( 'theme_location' => 'front-page', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) );
        }
        else {
          wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) );
        }
        ?>
        <div class="navbar-right">
          <a class="btn btn-red navbar-btn hidden-sm hidden-xs" href="https://www.worldventure.com/page.aspx?pid=984&fid=65135&fdesc=Vuyiroli%20Home%20for%20the%20Elderly%20Destitute-6473913" data-toggle="tooltip" data-placement="bottom" title="Donations are handled by WorldVenture" target="_blank">Donate</a>
          <a class="btn btn-red btn-block navbar-btn visible-sm visible-xs" href="https://www.worldventure.com/page.aspx?pid=984&fid=65135&fdesc=Vuyiroli%20Home%20for%20the%20Elderly%20Destitute-6473913" target="_blank">Donate</a>
          <p class="text-muted visible-sm visible-xs" style="text-align:center;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-transform:none;">Donations are processed by WorldVenture</p>
        </div>
      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->