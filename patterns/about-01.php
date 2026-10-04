<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About: Story with Stat Row
 * Slug: bblocks/about-01
 * Categories: bblocks, about
 * Description: An about-page introduction pairing a story paragraph with a visual panel, followed by a row of three key statistics.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php echo esc_html__( 'Our story', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'We started as a two-person studio helping local businesses get online. Today we work with teams of every size, but the goal hasn\'t changed: clear, honest websites that make it easy for people to take the next step.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Every project starts with a conversation about what your visitors actually need to see — not a template we try to make fit.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"align":"center","textColor":"primary","style":{"typography":{"fontSize":"3rem","lineHeight":"1"}}} -->
				<p class="has-text-align-center has-primary-color has-text-color" style="font-size:3rem;line-height:1">●</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">12+</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted-text"} -->
			<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Years in business', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">240</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted-text"} -->
			<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Projects delivered', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">98%</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted-text"} -->
			<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Client satisfaction', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
