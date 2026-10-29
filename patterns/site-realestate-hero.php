<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Hero with Property Search
 * Slug: bblocks/site-realestate-hero
 * Categories: bblocks, bblocks-site-realestate, bblocks-hero, banner
 * Keywords: real estate, realty, property, homes, search, hero, cover
 * Description: A full-width house photo cover with an eyebrow, a large title, a short intro, a property search field and quick links.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/realestate-house.jpg' ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":680,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/realestate-house.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
	<p class="has-text-align-center has-background-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Homely Realty', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"huge"} -->
	<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Find a home that fits your life', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"medium"} -->
	<p class="has-text-align-center has-background-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Local agents, honest advice and hand-picked homes for sale and rent across the city and its neighborhoods.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)">
		<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search properties', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'City, neighborhood or ZIP code', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"buttonPosition":"button-inside"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'Browse Properties', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Talk to an Agent', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
