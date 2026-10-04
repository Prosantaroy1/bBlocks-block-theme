<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Testimonials: 3-Column Quotes
 * Slug: bblocks/testimonials-01
 * Categories: bblocks, testimonials
 * Description: Three testimonial cards in a row, each with a star rating, quote and a name and role line.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"blockGap":"var:preset|spacing|large"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What clients say', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card bblocks-stars","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card bblocks-stars has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '"The new site paid for itself in the first month. Enquiries are up and it\'s genuinely easy for me to update myself."', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Priya Shah, Founder at Northline Studio', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card bblocks-stars","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card bblocks-stars has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '"Professional from the first call. They asked good questions and the finished pages matched exactly what we needed."', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Marcus Webb, Operations Lead at Fielding & Co.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card bblocks-stars","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card bblocks-stars has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '"Clear communication, fair pricing, and a site that actually loads fast. Would recommend without hesitation."', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Elena Cruz, Marketing Manager at Hearth Goods', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
