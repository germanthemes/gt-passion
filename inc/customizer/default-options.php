<?php
/**
 * Returns theme options
 *
 * Uses sane defaults in case the user has not configured any theme options yet.
 *
 * @package GT Passion
 */

/**
* Get a single theme option
*
* @return mixed
*/
function gt_passion_get_option( $option_name = '' ) {

	// Get all Theme Options from Database.
	$theme_options = gt_passion_theme_options();

	// Return single option.
	if ( isset( $theme_options[ $option_name ] ) ) {
		return $theme_options[ $option_name ];
	}

	return false;
}


/**
 * Get saved user settings from database or theme defaults
 *
 * @return array
 */
function gt_passion_theme_options() {

	// Merge theme options array from database with default options array.
	$theme_options = wp_parse_args( get_option( 'gt_passion_theme_options', array() ), gt_passion_default_options() );

	// Return theme options.
	return apply_filters( 'gt_passion_theme_options', $theme_options );
}


/**
 * Returns the default settings of the theme
 *
 * @return array
 */
function gt_passion_default_options() {

	$default_options = array(
		'site_title'         => true,
		'site_description'   => true,
		'meta_date'          => true,
		'meta_author'        => true,
		'meta_categories'    => true,
		'meta_tags'          => false,
		'primary_color'      => '#e13737',
		'secondary_color'    => '#a40000',
		'accent_color'       => '#37e18c',
		'highlight_color'    => '#37bbe1',
		'light_gray_color'   => '#e8e8e8',
		'gray_color'         => '#787878',
		'dark_gray_color'    => '#282828',
		'link_color'         => '#e13737',
		'button_color'       => '#e13737',
		'button_hover_color' => '#a40000',
		'header_color'       => '#282828',
		'title_color'        => '#282828',
		'title_hover_color'  => '#e13737',
		'footer_color'       => '#282828',
		'text_font'          => 'SystemFontStack',
		'title_font'         => 'SystemFontStack',
		'title_is_bold'      => true,
		'title_is_uppercase' => false,
		'navi_font'          => 'SystemFontStack',
		'navi_is_bold'       => true,
		'navi_is_uppercase'  => true,
		'license_key'        => '',
		'license_status'     => 'inactive',
	);

	return apply_filters( 'gt_passion_default_options', $default_options );
}
