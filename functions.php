<?php
/**
 * Candlelight functions and definitions
 *
 * @package Flint/Candlelight
 */

function cl_enqueue_scripts() {

  require( get_stylesheet_directory() . '/inc/template-tags.php' );

  /**
   * Load Font Awesome
   */
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array() , '4.0.3' );

  register_nav_menus( array(
    'front-page' => __( 'Primary Menu (Home)', 'flint' ),
  ) );

  add_image_size( 'cl-profile', 750, 750, true);

}
add_action( 'wp_enqueue_scripts', 'cl_enqueue_scripts', 20 );

add_action('steel_teams_add_meta','cl_add_teams_meta');
function cl_add_teams_meta() {
  echo '<p><label>Native Language</label><br /><input type="text"  size="25" name="profile_lang" value="' . steel_meta('profile','lang') . '" /></p>';
  echo '<p><label>Native Area</label><br /><input type="text"  size="25" name="profile_home" value="' . steel_meta('profile','home') . '" /></p>';
  echo '<p><label>Physical Ailments</label><br /><input type="text"  size="25" name="profile_ailments" value="' . steel_meta('profile','ailments') . '" /></p>';
}
add_action('steel_teams_save_meta','cl_save_teams_meta');
function cl_save_teams_meta() {
  global $post;
  if (isset($_POST['profile_lang'])) { update_post_meta($post->ID, "profile_lang", $_POST["profile_lang"]); }
  if (isset($_POST['profile_home'])) { update_post_meta($post->ID, "profile_home", $_POST["profile_home"]); }
  if (isset($_POST['profile_ailments'])) { update_post_meta($post->ID, "profile_ailments", $_POST["profile_ailments"]); }
}


?>
