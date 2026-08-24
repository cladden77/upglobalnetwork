<?php
/**
 * UP Global Network theme functions.
 *
 * @package Upglobalnetwork
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'UPGN_VERSION', '1.2.6' );
define( 'UPGN_DIR', get_template_directory() );
define( 'UPGN_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function upgn_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'upglobalnetwork' ),
			'footer'  => __( 'Footer Navigation', 'upglobalnetwork' ),
		)
	);
}
add_action( 'after_setup_theme', 'upgn_setup' );

/**
 * Theme CSS for front end and Site Editor.
 */
function upgn_enqueue_styles() {
	wp_enqueue_style(
		'upgn-style',
		get_stylesheet_uri(),
		array(),
		UPGN_VERSION
	);

	wp_enqueue_style(
		'upgn-main',
		UPGN_URI . '/assets/css/main.css',
		array( 'upgn-style' ),
		UPGN_VERSION
	);
}
add_action( 'enqueue_block_assets', 'upgn_enqueue_styles' );

/**
 * Front-end scripts only.
 */
function upgn_enqueue_scripts() {
	wp_enqueue_script(
		'upgn-navigation',
		UPGN_URI . '/assets/js/navigation.js',
		array(),
		UPGN_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'upgn_enqueue_scripts' );

/**
 * Register button styles used in the mockup.
 */
function upgn_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'up-outline',
			'label' => __( 'White Outline', 'upglobalnetwork' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'up-ghost',
			'label' => __( 'Ghost', 'upglobalnetwork' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'up-dark-outline',
			'label' => __( 'Dark Outline', 'upglobalnetwork' ),
		)
	);
}
add_action( 'init', 'upgn_register_block_styles' );

/**
 * Enqueue editor styles.
 */
function upgn_editor_assets() {
	add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'upgn_editor_assets' );

/**
 * Register pattern category.
 */
function upgn_register_pattern_category() {
	register_block_pattern_category(
		'upglobalnetwork',
		array(
			'label' => __( 'UP Global Network', 'upglobalnetwork' ),
		)
	);
}
add_action( 'init', 'upgn_register_pattern_category' );

/**
 * Helper: theme image URL.
 *
 * @param string $path Relative path under assets/images/.
 * @return string
 */
function upgn_image( $path ) {
	return esc_url( UPGN_URI . '/assets/images/' . ltrim( $path, '/' ) );
}
