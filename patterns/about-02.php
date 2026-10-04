<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About: Mission Split
 * Slug: bblocks/about-02
 * Categories: bblocks, about
 * Description: A visual panel paired with a mission statement and a single supporting call to action link.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":{"left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"3rem","lineHeight":"1"}}} -->
			<p class="has-text-align-center has-secondary-color has-text-color" style="font-size:3rem;line-height:1">▲</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Our mission', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted-text","fontSize":"large"} -->
		<p class="has-muted-text-color has-text-color has-large-font-size"><?php echo esc_html__( 'We believe a good website should be simple to explain in one sentence: who it\'s for, what it offers, and how to get started.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
		<p style="margin-top:1rem"><?php echo esc_html__( 'Read more about how we work →', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
