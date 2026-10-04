<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Minimal with Checklist
 * Slug: bblocks/hero-04
 * Categories: bblocks, banner
 * Description: A left-aligned, text-first hero with a small eyebrow badge, headline, short checklist of value points and a single button. Suited to freelancers and small agencies.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"className":"bblocks-badge"} -->
		<p class="bblocks-badge"><?php echo esc_html__( 'Freelance designer & developer', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'I help small teams launch sites they\'re proud of', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted-text","fontSize":"large"} -->
		<p class="has-muted-text-color has-text-color has-large-font-size"><?php echo esc_html__( 'Design, development and a bit of strategy — delivered as one clear, fixed-scope project.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:list {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
		<ul class="wp-block-list">
			<!-- wp:list-item -->
			<li><?php echo esc_html__( 'Fixed timeline and fixed price', 'bblocks' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html__( 'Built with WordPress full-site editing', 'bblocks' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html__( 'You can edit every page yourself afterwards', 'bblocks' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Book a Call', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
