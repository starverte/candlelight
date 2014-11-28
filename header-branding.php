<?php
/**
 * The Header for our theme.
 *
 * Displays the page title
 *
 * @package Flint/Candlelight
 * @since 0.0.0
 */
?>

  <div class="page-title">

      <div class="container">

        <?php $type = get_post_type(); ?>
        <?php do_action('flint_open_entry_header_'.$type); ?>

        <h1 class="entry-title"><?php echo the_title(); ?></h1>
        <?php if ( current_user_can('edit_posts') ) { ?><a class="btn btn-default btn-edit hidden-xs" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>

        <div class="entry-meta">
          <?php do_action('flint_entry_meta_above_'.$type); ?>
        </div><!-- .entry-meta -->

        <?php do_action('flint_close_entry_header_'.$type); ?>

      </div><!-- .container -->

  </div><!-- .entry-header -->

