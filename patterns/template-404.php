<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: 404 page content
 * Slug: bblocks/template-404
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge","style":{"typography":{"fontWeight":"800"}}} -->
	<p class="has-text-align-center has-primary-color has-text-color has-huge-font-size" style="font-weight:800"><?php echo esc_html_x( '404', 'Error code for a page that was not found', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'This page can&#8217;t be found', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
	<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'The page you were looking for doesn&#8217;t exist, or may have moved. Try searching, or head back home.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"align":"center"} /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back to Homepage', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
