<?php
/**
 * Color Settings
 *
 * @package GT Workout
 */

/**
 * Adds all Color settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function gt_workout_customize_register_theme_color_settings( $wp_customize ) {

	// Add Section for Theme Colors.
	$wp_customize->add_section( 'gt_workout_section_colors', array(
		'title'    => esc_html_x( 'Colors', 'theme colors', 'gt-workout' ),
		'priority' => 10,
		'panel'    => 'gt_workout_options_panel',
	) );

	// Get Default Colors from settings.
	$default = gt_workout_default_options();

	// Add Primary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[primary_color]', array(
		'default'           => $default['primary_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[primary_color]', array(
			'label'    => esc_html_x( 'Primary', 'block color', 'gt-workout' ),
			'section'  => 'gt_workout_section_colors',
			'settings' => 'gt_workout_theme_options[primary_color]',
			'priority' => 10,
		)
	) );

	// Add Secondary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[secondary_color]', array(
		'default'           => $default['secondary_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[secondary_color]', array(
			'label'    => esc_html_x( 'Secondary', 'block color', 'gt-workout' ),
			'section'  => 'gt_workout_section_colors',
			'settings' => 'gt_workout_theme_options[secondary_color]',
			'priority' => 20,
		)
	) );

	// Add Header Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[header_color]', array(
		'default'           => $default['header_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[header_color]', array(
			'label'    => esc_html_x( 'Header', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_colors',
			'settings' => 'gt_workout_theme_options[header_color]',
			'priority' => 30,
		)
	) );

	// Add Title Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[title_color]', array(
		'default'           => $default['title_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[title_color]', array(
			'label'    => esc_html_x( 'Titles', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_colors',
			'settings' => 'gt_workout_theme_options[title_color]',
			'priority' => 40,
		)
	) );

	// Add Footer Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[footer_color]', array(
		'default'           => $default['footer_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[footer_color]', array(
			'label'    => esc_html_x( 'Footer', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_colors',
			'settings' => 'gt_workout_theme_options[footer_color]',
			'priority' => 50,
		)
	) );
}
add_action( 'customize_register', 'gt_workout_customize_register_theme_color_settings' );
