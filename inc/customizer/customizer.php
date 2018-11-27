<?php
/**
 * Implement theme options in the Customizer
 *
 * @package GT Workout
 */

// Load Sanitize Functions.
require( get_template_directory() . '/inc/customizer/sanitize-functions.php' );

// Load Custom Controls.
require( get_template_directory() . '/inc/customizer/controls/font-control.php' );
require( get_template_directory() . '/inc/customizer/controls/headline-control.php' );
require( get_template_directory() . '/inc/customizer/controls/license-control.php' );

// Load Customizer Sections.
require( get_template_directory() . '/inc/customizer/sections/website-settings.php' );
require( get_template_directory() . '/inc/customizer/sections/color-settings.php' );
require( get_template_directory() . '/inc/customizer/sections/typography-settings.php' );
require( get_template_directory() . '/inc/customizer/sections/license-settings.php' );

/**
 * Registers Theme Options panel and sets up some WordPress core settings
 *
 * @param object $wp_customize / Customizer Object.
 */
function gt_workout_customize_register_options( $wp_customize ) {

	// Add Theme Options Panel.
	$wp_customize->add_panel( 'gt_workout_options_panel', array(
		'priority'       => 180,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Theme Options', 'gt-workout' ),
	) );

	// Change default background section.
	$wp_customize->get_control( 'background_color' )->section = 'background_image';
	$wp_customize->get_section( 'background_image' )->title   = esc_html__( 'Background', 'gt-workout' );
}
add_action( 'customize_register', 'gt_workout_customize_register_options' );


/**
 * Embed JS file to make Theme Customizer preview reload changes asynchronously.
 */
function gt_workout_customize_preview_js() {
	wp_enqueue_script( 'gt-workout-customize-preview', get_template_directory_uri() . '/assets/js/customize-preview.js', array( 'customize-preview' ), '20181127', true );
}
add_action( 'customize_preview_init', 'gt_workout_customize_preview_js' );


/**
 * Embed JS for Customizer Controls.
 */
function gt_workout_customizer_controls_js() {
	wp_enqueue_script( 'gt-workout-customizer-controls', get_template_directory_uri() . '/assets/js/customizer-controls.js', array(), '20181127', true );
}
add_action( 'customize_controls_enqueue_scripts', 'gt_workout_customizer_controls_js' );


/**
 * Embed CSS styles Customizer Controls.
 */
function gt_workout_customizer_controls_css() {
	wp_enqueue_style( 'gt-workout-customizer-controls', get_template_directory_uri() . '/assets/css/customizer-controls.css', array(), '20181127' );
}
add_action( 'customize_controls_print_styles', 'gt_workout_customizer_controls_css' );
