<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package GT Passion
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gt_passion_body_classes( $classes ) {

	// Get theme options from database.
	$theme_options = gt_passion_theme_options();

	// Fullwidth Page Layout?
	if ( is_page() && 'fullwidth' === get_post_meta( get_the_ID(), 'gt_page_layout', true ) ) {
		$classes[] = 'fullwidth-page-layout';
	}

	// Hide Page Title?
	if ( is_page() && get_post_meta( get_the_ID(), 'gt_hide_page_title', true ) ) {
		$classes[] = 'page-title-hidden';
	}

	// Remove bottom margin of page?
	if ( is_page() && get_post_meta( get_the_ID(), 'gt_remove_bottom_margin', true ) ) {
		$classes[] = 'page-bottom-margin-removed';
	}

	// Hide Date?
	if ( false === $theme_options['meta_date'] ) {
		$classes[] = 'date-hidden';
	}

	// Hide Author?
	if ( false === $theme_options['meta_author'] ) {
		$classes[] = 'author-hidden';
	}

	// Hide Categories?
	if ( false === $theme_options['meta_categories'] ) {
		$classes[] = 'categories-hidden';
	}

	// Hide Tags?
	if ( false === $theme_options['meta_tags'] ) {
		$classes[] = 'tags-hidden';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gt_passion_body_classes' );


/**
 * Hide Elements with CSS.
 *
 * @return void
 */
function gt_passion_hide_elements() {

	// Get theme options from database.
	$theme_options = gt_passion_theme_options();

	$elements = array();

	// Hide Site Title?
	if ( false === $theme_options['site_title'] ) {
		$elements[] = '.site-title';
	}

	// Hide Site Description?
	if ( false === $theme_options['site_description'] ) {
		$elements[] = '.site-description';
	}

	// Allow plugins to add own elements.
	$elements = apply_filters( 'gt_passion_hide_elements', $elements );

	// Return early if no elements are hidden.
	if ( empty( $elements ) ) {
		return;
	}

	// Create CSS.
	$classes    = implode( ', ', $elements );
	$custom_css = $classes . ' { position: absolute; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; overflow: hidden; }';

	// Add Custom CSS.
	wp_add_inline_style( 'gt-passion-stylesheet', $custom_css );
}
add_filter( 'wp_enqueue_scripts', 'gt_passion_hide_elements', 11 );
