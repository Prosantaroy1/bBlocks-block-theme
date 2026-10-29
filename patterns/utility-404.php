<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Page Not Found
 * Slug: bblocks/utility-404
 * Categories: bblocks, bblocks-utility
 * Keywords: 404, not found, error, missing page, search
 * Description: An alternative 404 section with an oversized 404, a Page not found title, a helpful message, a search form and a button back to the homepage.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:paragraph {"align":"center","textColor":"primary","style":{"typography":{"fontSize":"clamp(6rem, 22vw, 11rem)","fontWeight":"800","lineHeight":"1","letterSpacing":"-0.04em"}}} -->
	<p class="has-text-align-center has-primary-color has-text-color" style="font-size:clamp(6rem, 22vw, 11rem);font-weight:800;letter-spacing:-0.04em;line-height:1"><?php echo esc_html( number_format_i18n( 404 ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Page not found', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
	<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'The page you are looking for may have moved, been renamed or never existed. Try a search, or head back to the homepage.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search this site', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"buttonPosition":"button-inside","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back to the homepage', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
