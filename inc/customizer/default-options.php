<?php
/**
 * Returns theme options
 *
 * Uses sane defaults in case the user has not configured any theme options yet.
 *
 * @package GT Workout
 */

/**
* Get a single theme option
*
* @return mixed
*/
function gt_workout_get_option( $option_name = '' ) {

	// Get all Theme Options from Database.
	$theme_options = gt_workout_theme_options();

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
function gt_workout_theme_options() {

	// Merge theme options array from database with default options array.
	$theme_options = wp_parse_args( get_option( 'gt_workout_theme_options', array() ), gt_workout_default_options() );

	// Return theme options.
	return apply_filters( 'gt_workout_theme_options', $theme_options );
}


/**
 * Returns the default settings of the theme
 *
 * @return array
 */
function gt_workout_default_options() {

	$default_options = array(
		'site_title'                => true,
		'site_description'          => true,
		'header_color'              => '#282828',
		'navi_color'                => '#ee3333',
		'submenu_color'             => '#383838',
		'title_color'               => '#282828',
		'title_hover_color'         => '#ee3333',
		'link_color'                => '#ee3333',
		'link_hover_color'          => '#282828',
		'footer_color'              => '#282828',
		'block_primary_color'       => '#ee3333',
		'block_secondary_color'     => '#ea8867',
		'block_accent_color'        => '#f2e97e',
		'block_complementary_color' => '#1b8fb8',
		'text_font'                 => 'Rambla',
		'title_font'                => 'Fira Sans',
		'navi_font'                 => 'Fira Sans',
		'footer_text'               => sprintf( '&copy; %1$s %2$s', date( 'Y' ), get_bloginfo( 'name' ) ),
	);

	return apply_filters( 'gt_workout_default_options', $default_options );
}
