<?php
/**
 * Block Color Settings
 *
 * @package GT Workout
 */

/**
 * Adds Block Color settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function gt_workout_customize_register_block_color_settings( $wp_customize ) {

	// Add Section for Theme Colors.
	$wp_customize->add_section( 'gt_workout_section_block_colors', array(
		'title'    => esc_html_x( 'Block Colors', 'Color Settings', 'gt-workout' ),
		'priority' => 20,
		'panel'    => 'gt_workout_options_panel',
	) );

	// Get Default Colors from settings.
	$default = gt_workout_default_options();

	// Add Block Primary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[block_primary_color]', array(
		'default'           => $default['block_primary_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[block_primary_color]', array(
			'label'    => esc_html_x( 'Primary', 'block color', 'gt-workout' ),
			'section'  => 'gt_workout_section_block_colors',
			'settings' => 'gt_workout_theme_options[block_primary_color]',
			'priority' => 10,
		)
	) );

	// Add Block Secondary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[block_secondary_color]', array(
		'default'           => $default['block_secondary_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[block_secondary_color]', array(
			'label'    => esc_html_x( 'Secondary', 'block color', 'gt-workout' ),
			'section'  => 'gt_workout_section_block_colors',
			'settings' => 'gt_workout_theme_options[block_secondary_color]',
			'priority' => 20,
		)
	) );

	// Add Block Accent Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[block_accent_color]', array(
		'default'           => $default['block_accent_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[block_accent_color]', array(
			'label'    => esc_html_x( 'Accent', 'block color', 'gt-workout' ),
			'section'  => 'gt_workout_section_block_colors',
			'settings' => 'gt_workout_theme_options[block_accent_color]',
			'priority' => 30,
		)
	) );

	// Add Block Complementary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[block_complementary_color]', array(
		'default'           => $default['block_complementary_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[block_complementary_color]', array(
			'label'    => esc_html_x( 'Complementary', 'block color', 'gt-workout' ),
			'section'  => 'gt_workout_section_block_colors',
			'settings' => 'gt_workout_theme_options[block_complementary_color]',
			'priority' => 40,
		)
	) );
}
add_action( 'customize_register', 'gt_workout_customize_register_block_color_settings' );
