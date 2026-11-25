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
		 * WooCommerce support and the standard product gallery features.
		 * The theme's own shop, product, cart and checkout templates live
		 * in /templates, and the extra styles and starter sites load from
		 * inc/woocommerce.php while WooCommerce is active.
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
		/*
		 * The theme's own style.css only holds the theme header, so it is
		 * not loaded (one less render-blocking request). A child theme's
		 * style.css is loaded so child themes keep working as expected.
		 */
		if ( is_child_theme() ) {
			wp_enqueue_style(
				'bblocks-style',
				get_stylesheet_uri(),
				array(),
				wp_get_theme()->get( 'Version' )
			);
		}

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
			'bblocks-utility'      => array(
				'label'       => _x( 'bBlocks — Utility', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Coming soon, maintenance, newsletter and not-found sections.', 'bblocks' ),
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
			'bblocks-site-restaurant'   => array(
				'label'       => _x( 'bBlocks Site — Restaurant', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Savora restaurant starter site.', 'bblocks' ),
			),
			'bblocks-site-photography'  => array(
				'label'       => _x( 'bBlocks Site — Photography', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Lumen photography starter site.', 'bblocks' ),
			),
			'bblocks-site-medical'      => array(
				'label'       => _x( 'bBlocks Site — Medical Clinic', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Carely medical clinic starter site.', 'bblocks' ),
			),
			'bblocks-site-law'          => array(
				'label'       => _x( 'bBlocks Site — Law Firm', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Justica law firm starter site.', 'bblocks' ),
			),
			'bblocks-site-education'    => array(
				'label'       => _x( 'bBlocks Site — Education', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Edunova online academy starter site.', 'bblocks' ),
			),
			'bblocks-site-fitness'      => array(
				'label'       => _x( 'bBlocks Site — Gym & Fitness', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Pulsefit gym starter site.', 'bblocks' ),
			),
			'bblocks-site-realestate'   => array(
				'label'       => _x( 'bBlocks Site — Real Estate', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Homely real estate starter site.', 'bblocks' ),
			),
			'bblocks-site-shop'         => array(
				'label'       => _x( 'bBlocks Site — Shop', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Shoplane online store starter site.', 'bblocks' ),
			),
			'bblocks-site-rentals'      => array(
				'label'       => _x( 'bBlocks Site — Rental Homes', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Harbor Lane rental homes starter site.', 'bblocks' ),
			),
			'bblocks-site-commercial'   => array(
				'label'       => _x( 'bBlocks Site — Commercial Real Estate', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Summit Ridge commercial real estate starter site.', 'bblocks' ),
			),
			'bblocks-site-homebuyer'    => array(
				'label'       => _x( 'bBlocks Site — Cash Home Buyer', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the QuickKey cash home buyer starter site.', 'bblocks' ),
			),
			'bblocks-site-startup'      => array(
				'label'       => _x( 'bBlocks Site — Startup', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Fluxpay startup starter site.', 'bblocks' ),
			),
			'bblocks-site-agency'       => array(
				'label'       => _x( 'bBlocks Site — Agency', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Kindred Studio agency starter site.', 'bblocks' ),
			),
			'bblocks-site-magazine'     => array(
				'label'       => _x( 'bBlocks Site — Magazine', 'Block pattern category', 'bblocks' ),
				'description' => __( 'Sections from the Daily Ink magazine starter site.', 'bblocks' ),
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

		/*
		 * Mega menu: a wide, multi-column dropdown for a top-level submenu
		 * of the core Navigation block. Pure CSS (assets/css/custom.css);
		 * nested submenus become columns and link descriptions are shown.
		 */
		register_block_style(
			'core/navigation-submenu',
			array(
				'name'  => 'mega',
				'label' => _x( 'Mega Menu', 'Block style', 'bblocks' ),
			)
		);
	}
}
add_action( 'init', 'bblocks_block_styles' );

if ( ! function_exists( 'bblocks_related_posts_query' ) ) {
	/**
	 * Turn the "Keep reading" query on single posts into related posts:
	 * same categories as the current post, current post excluded. The
	 * Query block only supports excluding the current post natively from
	 * WordPress 7.1, so both are set here for older versions too.
	 *
	 * @param array $parsed_block The block being rendered.
	 * @return array
	 */
	function bblocks_related_posts_query( $parsed_block ) {
		if (
			'core/query' !== $parsed_block['blockName'] ||
			empty( $parsed_block['attrs']['className'] ) ||
			false === strpos( $parsed_block['attrs']['className'], 'bblocks-related-posts' ) ||
			! is_singular( 'post' )
		) {
			return $parsed_block;
		}

		$post_id    = get_queried_object_id();
		$categories = wp_get_post_categories( $post_id );

		$parsed_block['attrs']['query']['exclude'] = array( $post_id );

		if ( $categories ) {
			$parsed_block['attrs']['query']['taxQuery'] = array( 'category' => array_map( 'intval', $categories ) );
		}

		return $parsed_block;
	}
}
add_filter( 'render_block_data', 'bblocks_related_posts_query' );

if ( ! function_exists( 'bblocks_theme_image_size' ) ) {
	/**
	 * Intrinsic width and height of an image bundled in assets/images.
	 *
	 * @param string $url Image URL.
	 * @return int[]|null Width and height, or null when unknown.
	 */
	function bblocks_theme_image_size( $url ) {
		static $cache = array();

		$base = get_template_directory_uri() . '/assets/images/';

		if ( ! is_string( $url ) || 0 !== strpos( $url, $base ) ) {
			return null;
		}

		$name = basename( (string) wp_parse_url( $url, PHP_URL_PATH ) );

		if ( array_key_exists( $name, $cache ) ) {
			return $cache[ $name ];
		}

		$file           = get_template_directory() . '/assets/images/' . $name;
		$cache[ $name ] = null;

		if ( ! is_readable( $file ) ) {
			return null;
		}

		if ( '.svg' === strtolower( substr( $name, -4 ) ) ) {
			$head = (string) file_get_contents( $file, false, null, 0, 512 ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- Reading a local theme file.

			if ( preg_match( '/<svg[^>]*\swidth="(\d+)"[^>]*\sheight="(\d+)"/', $head, $match ) ) {
				$cache[ $name ] = array( (int) $match[1], (int) $match[2] );
			}
		} else {
			$size = wp_getimagesize( $file );

			if ( $size ) {
				$cache[ $name ] = array( (int) $size[0], (int) $size[1] );
			}
		}

		return $cache[ $name ];
	}
}

if ( ! function_exists( 'bblocks_add_theme_image_dimensions' ) ) {
	/**
	 * Add width and height attributes to images that come from the theme
	 * (pattern photos, illustrations and logos). WordPress only lazy-loads
	 * images, and gives the main image a high fetch priority, when both
	 * attributes are present; CSS keeps the rendered size unchanged.
	 *
	 * @param string $block_content Rendered block.
	 * @return string
	 */
	function bblocks_add_theme_image_dimensions( $block_content ) {
		if ( false === strpos( $block_content, '/assets/images/' ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
			return $block_content;
		}

		$tags = new WP_HTML_Tag_Processor( $block_content );

		while ( $tags->next_tag( 'img' ) ) {
			if ( null !== $tags->get_attribute( 'width' ) || null !== $tags->get_attribute( 'height' ) ) {
				continue;
			}

			$size = bblocks_theme_image_size( $tags->get_attribute( 'src' ) );

			if ( $size ) {
				$tags->set_attribute( 'width', (string) $size[0] );
				$tags->set_attribute( 'height', (string) $size[1] );
			}
		}

		return $tags->get_updated_html();
	}
}
add_filter( 'render_block_core/image', 'bblocks_add_theme_image_dimensions' );
add_filter( 'render_block_core/cover', 'bblocks_add_theme_image_dimensions' );

require_once get_template_directory() . '/inc/modules.php';
require_once get_template_directory() . '/inc/starter-sites.php';
require_once get_template_directory() . '/inc/design.php';
require_once get_template_directory() . '/inc/recommended-plugins.php';
require_once get_template_directory() . '/inc/admin-dashboard.php';

if ( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/inc/woocommerce.php';
}
