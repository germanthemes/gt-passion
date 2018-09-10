<?php
/**
 * Add theme support for the Gutenberg Editor
 *
 * @package GT Workout
 */


/**
 * Registers support for various Gutenberg features.
 *
 * @return void
 */
function gt_workout_gutenberg_support() {

	// Add theme support for wide and full images.
	add_theme_support( 'align-wide' );

	// Add theme support for block color palette.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => esc_html_x( 'Primary', 'block color', 'gt-workout' ),
			'slug'  => 'primary',
			'color' => '#ee3333',
		),
		array(
			'name'  => esc_html_x( 'Secondary', 'block color', 'gt-workout' ),
			'slug'  => 'secondary',
			'color' => '#EA8867',
		),
		array(
			'name'  => esc_html_x( 'Accent', 'block color', 'gt-workout' ),
			'slug'  => 'accent',
			'color' => '#F2E97E',
		),
		array(
			'name'  => esc_html_x( 'Complementary', 'block color', 'gt-workout' ),
			'slug'  => 'complementary',
			'color' => '#1B8FB8',
		),
		array(
			'name'  => esc_html_x( 'White', 'block color', 'gt-workout' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => esc_html_x( 'Light Gray', 'block color', 'gt-workout' ),
			'slug'  => 'light-gray',
			'color' => '#e5e5e5',
		),
		array(
			'name'  => esc_html_x( 'Dark Gray', 'block color', 'gt-workout' ),
			'slug'  => 'dark-gray',
			'color' => '#555555',
		),
		array(
			'name'  => esc_html_x( 'Black', 'block color', 'gt-workout' ),
			'slug'  => 'black',
			'color' => '#242424',
		),
	) );

	// Disable theme support for custom colors.
	#add_theme_support( 'disable-custom-colors' );

	// Add theme support for font sizes.
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => esc_html_x( 'Small', 'block font size', 'gt-workout' ),
			'shortName' => esc_html_x( 'S', 'block font size', 'gt-workout' ),
			'size'      => 16,
			'slug'      => 'small',
		),
		array(
			'name'      => esc_html_x( 'Medium', 'block font size', 'gt-workout' ),
			'shortName' => esc_html_x( 'M', 'block font size', 'gt-workout' ),
			'size'      => 20,
			'slug'      => 'medium',
		),
		array(
			'name'      => esc_html_x( 'Large', 'block font size', 'gt-workout' ),
			'shortName' => esc_html_x( 'L', 'block font size', 'gt-workout' ),
			'size'      => 24,
			'slug'      => 'large',
		),
		array(
			'name'      => esc_html_x( 'Extra Large', 'block font size', 'gt-workout' ),
			'shortName' => esc_html_x( 'XL', 'block font size', 'gt-workout' ),
			'size'      => 36,
			'slug'      => 'extra-large',
		),
	) );
}
add_action( 'after_setup_theme', 'gt_workout_gutenberg_support' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function gt_workout_block_editor_assets() {
	#wp_enqueue_script( 'gt-workout-block-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-editor' ), '20180529' );
	wp_enqueue_style( 'gt-workout-block-editor', get_theme_file_uri( '/assets/css/editor.css' ), array(), '20180910', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'gt_workout_block_editor_assets' );
