<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Features: 3-Column Icon Grid
 * Slug: bblocks/features-01
 * Categories: bblocks, bblocks-features, features
 * Description: A centered heading followed by a three-column grid of features, each with a symbol, title and short description.
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
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Everything you need, nothing you don\'t', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'A focused set of features that cover the essentials well.', 'bblocks' ); ?></p>
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
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Fast by default', 'bblocks' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Lightweight markup and no bloated frameworks slowing pages down.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-secondary-color has-text-color" style="font-size:1.75rem">●</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Easy to edit', 'bblocks' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Every section is a block you can rearrange in the site editor.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-accent-color has-text-color" style="font-size:1.75rem">▲</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Built to last', 'bblocks' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Core WordPress blocks only, so there\'s nothing extra to maintain.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
