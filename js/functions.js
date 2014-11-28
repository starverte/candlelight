/**
 * JavaScript functions for Candlelight
 *
 * @package Flint/Candlelight
 * @since 0.1.0
 *
 */

/**
 * Full-screen hero elements
 *
 * After page loads, set the height
 * of hero elements to fit screen
 * on medium and large screens.
 */
jQuery(window).ready( function(){

  var win_height = jQuery(window).height();
  var win_width = jQuery(window).width()
  var hero_height = win_height - 50;

  if (win_width > 991)
    jQuery('.hero').height(hero_height);

});

/**
 * Fades arrow in and out on front page,
 * indicating if there is content futher
 * down the page.
 */
jQuery(document).scroll( function(){

  var win_height = jQuery(window).height();
  var doc_height = jQuery(document).height();
  var trigger    = doc_height - (1.5 * win_height);
  var position   = jQuery(document).scrollTop();

  if (position < trigger) {
    jQuery('.arrdown').fadeIn();
  }
  else {
    jQuery('.arrdown').fadeOut();
  }

});
