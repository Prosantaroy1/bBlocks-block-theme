<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Centered Statement
 * Slug: bblocks/hero-01
 * Categories: bblocks, banner
 * Description: A centered hero with an eyebrow badge, large headline, supporting paragraph, two buttons and a small star-rating trust line. No imagery required.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html__( 'Built for growing businesses', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
		<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php echo esc_html__( 'A website that works as hard as you do', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"large"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-large-font-size"><?php echo esc_html__( 'Clean pages, clear calls to action and a design system that keeps every section consistent — so visitors understand what you do and how to get in touch.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons is-content-justification-center">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( '★★★★★ Trusted by teams and freelancers alike', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
