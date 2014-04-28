<?php
/**
 * Candlelight functions and definitions
 *
 * @package Flint/Candlelight
 */

function cl_enqueue_scripts() {
  
  /**
   * Load Font Awesome
   */
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array() , '4.0.3' );

}
add_action( 'wp_enqueue_scripts', 'cl_enqueue_scripts', 20 );
?>
