<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Services: 3-Column Cards
 * Slug: bblocks/services-01
 * Categories: bblocks, services
 * Description: A heading followed by three bordered service cards, each with a symbol, title, description and a text link.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What we offer', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.75rem"}}} -->
				<p class="has-primary-color has-text-color" style="font-size:1.75rem">◆</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__( 'Web Design', 'bblocks' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Custom page layouts built entirely from core blocks and your brand colors.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Learn more →', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"1.75rem"}}} -->
				<p class="has-secondary-color has-text-color" style="font-size:1.75rem">●</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__( 'Development', 'bblocks' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Clean, maintainable builds using WordPress full-site editing.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Learn more →', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"1.75rem"}}} -->
				<p class="has-accent-color has-text-color" style="font-size:1.75rem">▲</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__( 'Ongoing Support', 'bblocks' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Updates, small edits and advice whenever you need a hand.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Learn more →', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
