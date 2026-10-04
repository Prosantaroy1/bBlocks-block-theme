<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Full-width Gradient Banner
 * Slug: bblocks/hero-03
 * Categories: bblocks, banner
 * Description: A bold, full-bleed gradient hero for SaaS and product landing pages, with a centered headline, subhead and a single primary call to action.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","gradient":"primary-to-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-to-secondary-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge","textColor":"background"} -->
		<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Ship your product\'s story faster', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
		<p class="has-text-align-center has-background-color has-text-color has-large-font-size"><?php echo esc_html__( 'A single, focused landing page for your SaaS: what it does, why it matters, and one clear next step.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"background","textColor":"text"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background-color has-background has-text-color wp-element-button"><?php echo esc_html__( 'Try It Free', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
