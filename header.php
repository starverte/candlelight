<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Flint/Candlelight
 * @since 0.1.0
 */
get_header( 'head' );
get_header( 'nav' );

if (is_page()) { get_header( 'branding' ); } ?>
