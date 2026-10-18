<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About: Values Grid
 * Slug: bblocks/about-03
 * Categories: bblocks, bblocks-about, about
 * Description: A centered introduction followed by a three-column grid of company values, each with a symbol, title and short description.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

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

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">

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
