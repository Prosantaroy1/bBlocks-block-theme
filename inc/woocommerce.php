<?php
/**
 * WooCommerce integration.
 *
 * Loaded only while WooCommerce is active: shop styles that follow the
 * theme's design tokens, the WooCommerce section patterns (kept out of
 * /patterns so they never appear without the blocks they use) and the
 * shop starter sites. The shop templates themselves live in /templates.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue the WooCommerce stylesheet.
 */
function bblocks_woocommerce_styles() {
	wp_enqueue_style(
		'bblocks-woocommerce',
		get_theme_file_uri( 'assets/css/woocommerce.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'bblocks_woocommerce_styles', 20 );

/**
 * Load the shop styles in the editors too, so product grids look the same there.
 */
function bblocks_woocommerce_editor_styles() {
	add_editor_style( 'assets/css/woocommerce.css' );
}
add_action( 'after_setup_theme', 'bblocks_woocommerce_editor_styles', 20 );

/**
 * WooCommerce patterns: file name in /inc/woocommerce-patterns => title.
 *
 * @return array<string, string>
 */
function bblocks_woocommerce_pattern_list() {
	return array(
		'woo-fashion-hero'         => __( 'Fashion Store: Hero', 'bblocks' ),
		'woo-fashion-categories'   => __( 'Fashion Store: Shop by Category', 'bblocks' ),
		'woo-fashion-new-arrivals' => __( 'Fashion Store: New Arrivals', 'bblocks' ),
		'woo-fashion-sale'         => __( 'Fashion Store: Sale Banner', 'bblocks' ),
		'woo-fashion-best-sellers' => __( 'Fashion Store: Best Sellers', 'bblocks' ),
		'woo-fashion-story'        => __( 'Fashion Store: Brand Story', 'bblocks' ),
		'woo-fashion-benefits'     => __( 'Fashion Store: Store Benefits', 'bblocks' ),
		'woo-gadget-hero'          => __( 'Electronics Store: Hero', 'bblocks' ),
		'woo-gadget-categories'    => __( 'Electronics Store: Categories', 'bblocks' ),
		'woo-gadget-deals'         => __( 'Electronics Store: Deals', 'bblocks' ),
		'woo-gadget-featured'      => __( 'Electronics Store: Featured Products', 'bblocks' ),
		'woo-gadget-top-rated'     => __( 'Electronics Store: Top Rated', 'bblocks' ),
		'woo-gadget-support'       => __( 'Electronics Store: Support and Warranty', 'bblocks' ),
		'woo-gadget-faq'           => __( 'Electronics Store: FAQ', 'bblocks' ),
	);
}

/**
 * Register the shop pattern category and the WooCommerce patterns.
 */
function bblocks_woocommerce_patterns() {
	register_block_pattern_category(
		'bblocks-shop',
		array(
			'label'       => _x( 'bBlocks — Shop', 'Block pattern category', 'bblocks' ),
			'description' => __( 'WooCommerce sections: product grids, categories, offers and store benefits.', 'bblocks' ),
		)
	);

	foreach ( bblocks_woocommerce_pattern_list() as $name => $title ) {
		$file = get_theme_file_path( 'inc/woocommerce-patterns/' . $name . '.php' );

		if ( ! file_exists( $file ) ) {
			continue;
		}

		ob_start();
		include $file;

		register_block_pattern(
			'bblocks/' . $name,
			array(
				'title'      => $title,
				'content'    => ob_get_clean(),
				'categories' => array( 'bblocks', 'bblocks-shop', 0 === strpos( $name, 'woo-fashion' ) ? 'bblocks-site-fashion' : 'bblocks-site-gadget' ),
				'keywords'   => array( 'shop', 'store', 'woocommerce', 'products' ),
			)
		);
	}

	register_block_pattern_category( 'bblocks-site-fashion', array( 'label' => _x( 'bBlocks Site — Fashion Store', 'Block pattern category', 'bblocks' ) ) );
	register_block_pattern_category( 'bblocks-site-gadget', array( 'label' => _x( 'bBlocks Site — Electronics Store', 'Block pattern category', 'bblocks' ) ) );
}
add_action( 'init', 'bblocks_woocommerce_patterns', 20 );

/**
 * Add the shop starter sites while WooCommerce is active.
 *
 * Pages listed under 'woo_pages' are WooCommerce's own pages (shop, cart,
 * my account); they are added to the menu but their content is left alone.
 *
 * @param array $sites Starter sites.
 * @return array
 */
function bblocks_woocommerce_starter_sites( $sites ) {
	$sites['fashion-store'] = array(
		'title'       => __( 'Modista Fashion Store', 'bblocks' ),
		'description' => __( 'WooCommerce fashion shop with a lookbook hero, shop-by-category tiles, new arrivals and best sellers from your store, a sale banner, brand story and store benefits.', 'bblocks' ),
		'style'       => 'Modista',
		'header'      => 'header-search',
		'layout'      => 'marketplace',
		'front'       => 'home',
		'posts'       => 'journal',
		'woo_pages'   => array( 'shop', 'cart', 'myaccount' ),
		'pages'       => array(
			'home'    => array( __( 'Home', 'bblocks' ), array( 'woo-fashion-hero', 'woo-fashion-categories', 'woo-fashion-new-arrivals', 'woo-fashion-sale', 'woo-fashion-best-sellers', 'woo-fashion-story', 'woo-fashion-benefits' ), 'page-landing' ),
			'about'   => array( __( 'About', 'bblocks' ), array( 'woo-fashion-story', 'woo-fashion-benefits' ), 'page-landing' ),
			'journal' => array( __( 'Journal', 'bblocks' ), array(), '' ),
			'contact' => array( __( 'Contact', 'bblocks' ), array( 'contact-01' ), 'page-landing' ),
		),
	);

	$sites['gadget-store'] = array(
		'title'       => __( 'Voltix Electronics Store', 'bblocks' ),
		'description' => __( 'WooCommerce electronics shop with a product spotlight hero, category grid, deals with sale prices, featured and top-rated products from your store, a support band and FAQ.', 'bblocks' ),
		'style'       => 'Voltix',
		'header'      => 'header-topbar',
		'layout'      => 'saas',
		'front'       => 'home',
		'posts'       => 'blog',
		'woo_pages'   => array( 'shop', 'cart', 'myaccount' ),
		'pages'       => array(
			'home'    => array( __( 'Home', 'bblocks' ), array( 'woo-gadget-hero', 'woo-gadget-categories', 'woo-gadget-deals', 'woo-gadget-featured', 'woo-gadget-top-rated', 'woo-gadget-support', 'woo-gadget-faq' ), 'page-landing' ),
			'support' => array( __( 'Support', 'bblocks' ), array( 'woo-gadget-support', 'woo-gadget-faq' ), 'page-landing' ),
			'blog'    => array( __( 'Blog', 'bblocks' ), array(), '' ),
			'contact' => array( __( 'Contact', 'bblocks' ), array( 'contact-01' ), 'page-landing' ),
		),
	);

	return $sites;
}
add_filter( 'bblocks_starter_sites', 'bblocks_woocommerce_starter_sites' );
