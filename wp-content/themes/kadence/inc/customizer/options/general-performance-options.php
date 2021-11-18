<?php
/**
 * Header Builder Options
 *
 * @package Kadence
 */

namespace Kadence;

use Kadence\Theme_Customizer;
use function Kadence\kadence;

Theme_Customizer::add_settings(
	array(
		'enable_scroll_to_id' => array(
			'control_type' => 'kadence_switch_control',
			'sanitize'     => 'kadence_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => kadence()->default( 'enable_scroll_to_id' ),
			'label'        => esc_html__( 'Enable Scroll To ID', 'kadence' ),
		),
		'lightbox' => array(
			'control_type' => 'kadence_switch_control',
			'sanitize'     => 'kadence_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => kadence()->default( 'lightbox' ),
			'label'        => esc_html__( 'Enable Lightbox', 'kadence' ),
		),
		'load_fonts_local' => array(
			'control_type' => 'kadence_switch_control',
			'sanitize'     => 'kadence_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => kadence()->default( 'load_fonts_local' ),
			'label'        => esc_html__( 'Load Google Fonts Locally', 'kadence' ),
		),
		'enable_preload' => array(
			'control_type' => 'kadence_switch_control',
			'sanitize'     => 'kadence_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => kadence()->default( 'enable_preload' ),
			'label'        => esc_html__( 'Enable CSS Preload', 'kadence' ),
		),
	)
);
