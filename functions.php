<?php
/**
 * bBlocks functions and definitions.
 *
 * bBlocks is a block theme (full-site editing). Presentation lives in
 * theme.json, /templates, /parts and /patterns. This file only adds the
 * small handful of things theme.json cannot express: core theme
 * supports, basic WooCommerce compatibility, one block pattern
 * category, a couple of block styles used by the patterns, and one
 * small stylesheet for interactive states outside the Global Styles API.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'bblocks_setup' ) ) {
	/**
	 * Set up theme defaults and register the things a block theme still
	 * needs to register in PHP.
	 */
	function bblocks_setup() {
		// Make the theme translation ready.
		load_theme_textdomain( 'bblocks', get_template_directory() . '/languages' );

		// Let WordPress manage the document <title> tag.
		add_theme_support( 'title-tag' );

		// Featured images.
		add_theme_support( 'post-thumbnails' );

		// RSS feed links in <head>.
		add_theme_support( 'automatic-feed-links' );

		// Full and wide alignment for blocks.
		add_theme_support( 'align-wide' );

		// Responsive embedded content (YouTube, Vimeo, etc).
		add_theme_support( 'responsive-embeds' );

		// Custom line-height controls in the editor.
		add_theme_support( 'custom-line-height' );

		// Editor styles so the back end matches the front end.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor.css' );
		add_editor_style( 'assets/css/custom.css' );

		/*
		 * Basic WooCommerce compatibility. WooCommerce ships its own
		 * block templates and blocks for the shop, product archive,
		 * single product, cart and checkout pages on a block theme, so
		 * no custom WooCommerce templates are bundled here — this only
		 * declares support and enables the standard gallery features.
		 */
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
}
add_action( 'after_setup_theme', 'bblocks_setup' );

if ( ! function_exists( 'bblocks_styles' ) ) {
	/**
	 * Enqueue the small supplemental stylesheet used for hover/focus
	 * states and other interactive details that theme.json cannot set.
	 */
	function bblocks_styles() {
		wp_enqueue_style(
			'bblocks-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'bblocks-custom',
			get_theme_file_uri( 'assets/css/custom.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'bblocks_styles' );

if ( ! function_exists( 'bblocks_pattern_categories' ) ) {
	/**
	 * Register a dedicated pattern category so all of this theme's
	 * bundled patterns are easy to find in the pattern inserter.
	 */
	function bblocks_pattern_categories() {
		register_block_pattern_category(
			'bblocks',
			array(
				'label'       => _x( 'bBlocks', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections bundled with the bBlocks theme.', 'bblocks' ),
			)
		);
	}
}
add_action( 'init', 'bblocks_pattern_categories' );

if ( ! function_exists( 'bblocks_block_styles' ) ) {
	/**
	 * Register the small number of extra block styles the pattern
	 * library relies on for its card and pill treatments.
	 */
	function bblocks_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'card',
				'label' => _x( 'Card', 'Block style', 'bblocks' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'pill',
				'label' => _x( 'Pill', 'Block style', 'bblocks' ),
			)
		);

		register_block_style(
			'core/details',
			array(
				'name'  => 'faq',
				'label' => _x( 'FAQ', 'Block style', 'bblocks' ),
			)
		);
	}
}
add_action( 'init', 'bblocks_block_styles' );
