<?php
/**
 * Theme Color Settings
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
	$wp_customize->add_section( 'gt_workout_section_theme_colors', array(
		'title'    => esc_html_x( 'Theme Colors', 'theme colors', 'gt-workout' ),
		'priority' => 30,
		'panel'    => 'gt_workout_options_panel',
	) );

	// Get Default Colors from settings.
	$default = gt_workout_default_options();

	// Add Navigation Primary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[header_color]', array(
		'default'           => $default['header_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[header_color]', array(
			'label'    => esc_html_x( 'Header', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[header_color]',
			'priority' => 10,
		)
	) );

	// Add Navigation Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[navi_color]', array(
		'default'           => $default['navi_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[navi_color]', array(
			'label'    => esc_html_x( 'Navigation', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[navi_color]',
			'priority' => 20,
		)
	) );

	// Add Navigation Secondary Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[submenu_color]', array(
		'default'           => $default['submenu_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[submenu_color]', array(
			'label'    => esc_html_x( 'Navigation Submenus', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[submenu_color]',
			'priority' => 30,
		)
	) );

	// Add Primary Title Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[title_color]', array(
		'default'           => $default['title_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[title_color]', array(
			'label'    => esc_html_x( 'Titles (primary)', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[title_color]',
			'priority' => 40,
		)
	) );

	// Add Secondary Title Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[title_hover_color]', array(
		'default'           => $default['title_hover_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[title_hover_color]', array(
			'label'    => esc_html_x( 'Titles (secondary)', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[title_hover_color]',
			'priority' => 50,
		)
	) );

	// Add Link Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[link_color]', array(
		'default'           => $default['link_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[link_color]', array(
			'label'    => esc_html_x( 'Links & Buttons (primary)', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[link_color]',
			'priority' => 60,
		)
	) );

	// Add Button Color setting.
	$wp_customize->add_setting( 'gt_workout_theme_options[link_hover_color]', array(
		'default'           => $default['link_hover_color'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'gt_workout_theme_options[link_hover_color]', array(
			'label'    => esc_html_x( 'Links & Buttons (secondary)', 'theme colors', 'gt-workout' ),
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[link_hover_color]',
			'priority' => 70,
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
			'section'  => 'gt_workout_section_theme_colors',
			'settings' => 'gt_workout_theme_options[footer_color]',
			'priority' => 80,
		)
	) );
}
add_action( 'customize_register', 'gt_workout_customize_register_theme_color_settings' );
