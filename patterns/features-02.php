<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Features: Alternating Rows
 * Slug: bblocks/features-02
 * Categories: bblocks, features
 * Description: Two stacked feature rows that alternate the visual panel from right to left, each paired with a heading and description.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html__( 'Organize your content your way', 'bblocks' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Patterns snap together using the same spacing and color system, so pages stay consistent no matter how you combine them.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"align":"center","textColor":"primary","style":{"typography":{"fontSize":"2.5rem","lineHeight":"1"}}} -->
				<p class="has-text-align-center has-primary-color has-text-color" style="font-size:2.5rem;line-height:1">▦</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"2.5rem","lineHeight":"1"}}} -->
				<p class="has-text-align-center has-secondary-color has-text-color" style="font-size:2.5rem;line-height:1">⬢</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html__( 'Works with the tools you already use', 'bblocks' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Basic WooCommerce compatibility is built in, and the optional bBlocks plugin adds extra blocks later without ever being required.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
