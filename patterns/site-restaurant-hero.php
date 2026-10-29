<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Hero
 * Slug: bblocks/site-restaurant-hero
 * Categories: bblocks, bblocks-site-restaurant, bblocks-hero, banner
 * Keywords: restaurant, food, dining, bistro, hero, cover, reservation
 * Description: A full-width dining photo with a dark overlay, an eyebrow, a large title, a tagline and Book a Table and View Menu buttons.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/restaurant-table.jpg' ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":680,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/restaurant-table.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
	<p class="has-text-align-center has-background-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Savora · Kitchen & Wine Bar', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"huge"} -->
	<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Seasonal Food, Shared Tables', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
	<p class="has-text-align-center has-background-color has-text-color has-large-font-size"><?php echo esc_html__( 'Wood-fired plates, handmade pasta and a wine list we love to talk about, served in the heart of the old town.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/reservations/' ) ); ?>"><?php echo esc_html__( 'Book a Table', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/menu/' ) ); ?>"><?php echo esc_html__( 'View Menu', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
