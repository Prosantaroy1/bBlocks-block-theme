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
 * The theme dashboard (Appearance → bBlocks) with its optional modules,
 * starter sites and recommended plugins lives in /inc.
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
	 * Register the theme's pattern categories: one that lists every
	 * bundled pattern, plus one per section type so each kind of section
	 * is easy to find in the pattern inserter.
	 */
	function bblocks_pattern_categories() {
		$categories = array(
			'bblocks'              => array(
				'label'       => _x( 'bBlocks — All', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Every section bundled with the bBlocks theme.', 'bblocks' ),
			),
			'bblocks-hero'         => array(
				'label'       => _x( 'bBlocks — Hero', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Opening sections with a headline, intro and call to action.', 'bblocks' ),
			),
			'bblocks-about'        => array(
				'label'       => _x( 'bBlocks — About', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Company story, mission, values and key numbers.', 'bblocks' ),
			),
			'bblocks-features'     => array(
				'label'       => _x( 'bBlocks — Features', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Feature grids, image cards and alternating feature rows.', 'bblocks' ),
			),
			'bblocks-services'     => array(
				'label'       => _x( 'bBlocks — Services', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Service cards and numbered service lists.', 'bblocks' ),
			),
			'bblocks-team'         => array(
				'label'       => _x( 'bBlocks — Team', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Team member grids and introductions.', 'bblocks' ),
			),
			'bblocks-testimonials' => array(
				'label'       => _x( 'bBlocks — Testimonials', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Customer quotes, reviews and client logos.', 'bblocks' ),
			),
			'bblocks-pricing'      => array(
				'label'       => _x( 'bBlocks — Pricing', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Pricing tables and plan comparisons.', 'bblocks' ),
			),
			'bblocks-cta'          => array(
				'label'       => _x( 'bBlocks — Call to Action', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Banners and strips that ask visitors to take the next step.', 'bblocks' ),
			),
			'bblocks-contact'      => array(
				'label'       => _x( 'bBlocks — Contact', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Contact details and ways to get in touch.', 'bblocks' ),
			),
			'bblocks-blog'         => array(
				'label'       => _x( 'bBlocks — Blog', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Latest posts in grids and lists.', 'bblocks' ),
			),
			'bblocks-faq'          => array(
				'label'       => _x( 'bBlocks — FAQ', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Frequently asked questions in accordions.', 'bblocks' ),
			),
			'bblocks-portfolio'    => array(
				'label'       => _x( 'bBlocks — Portfolio', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Project galleries and case study showcases.', 'bblocks' ),
			),
			// One category per starter site, holding that site's sections.
			'bblocks-site-architecture' => array(
				'label'       => _x( 'bBlocks Site — Architecture', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Nirman architecture starter site.', 'bblocks' ),
			),
			'bblocks-site-marketplace'  => array(
				'label'       => _x( 'bBlocks Site — Theme Marketplace', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the DigiMagnet marketplace starter site.', 'bblocks' ),
			),
			'bblocks-site-resort'       => array(
				'label'       => _x( 'bBlocks Site — Eco Resort', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Naturexplo resort starter site.', 'bblocks' ),
			),
			'bblocks-site-spa'          => array(
				'label'       => _x( 'bBlocks Site — Spa', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Sweet Pixie spa starter site.', 'bblocks' ),
			),
			'bblocks-site-consulting'   => array(
				'label'       => _x( 'bBlocks Site — Consulting', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Conselta consulting starter site.', 'bblocks' ),
			),
		);

		foreach ( $categories as $slug => $args ) {
			register_block_pattern_category( $slug, $args );
		}
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

require_once get_template_directory() . '/inc/modules.php';
require_once get_template_directory() . '/inc/starter-sites.php';
require_once get_template_directory() . '/inc/recommended-plugins.php';
require_once get_template_directory() . '/inc/admin-dashboard.php';
