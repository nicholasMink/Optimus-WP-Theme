<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package OPTIMUS
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function optimus_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	$pageTemplate = get_page_template_slug();
	
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if( $pageTemplate === 'optimusHome.php' ) {
		$classes[] = 'hfeed, optimusBG';
	}
	if( $pageTemplate === 'optimusAbout.php' ) {
		$classes[] = 'hfeed, optimusBG__About';
	}
	if( $pageTemplate === 'optimusServices.php' ) {
		$classes[] = 'hfeed, optimusBG__Services';
	}
	if( $pageTemplate === 'contact-opportunities.php' ) {
		$classes[] = 'hfeed, optimusBG__Opportunities';
	}
	if( $pageTemplate === 'optimusCommunity.php' ) {
		$classes[] = 'hfeed, optimusBG__Community';
	}
	if( $pageTemplate === 'optimusContact.php' ) {
		$classes[] = 'hfeed, optimusBG__Contact';
	}

	return $classes;
}
add_filter( 'body_class', 'optimus_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function optimus_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'optimus_pingback_header' );
