<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About: Values Grid
 * Slug: bblocks/about-03
 * Categories: bblocks, about
 * Description: A centered introduction followed by a three-column grid of company values, each with a symbol, title and short description.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What we value', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'The principles that shape every project we take on.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-primary-color has-text-color" style="font-size:1.75rem">◆</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Transparency', 'bblocks' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Clear pricing, clear timelines, no surprises along the way.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-primary-color has-text-color" style="font-size:1.75rem">◆</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Craft', 'bblocks' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Details matter, from spacing to load time to copywriting.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-primary-color has-text-color" style="font-size:1.75rem">◆</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Longevity', 'bblocks' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'We build sites you can maintain yourself for years, not months.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
