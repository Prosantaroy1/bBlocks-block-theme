<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: CTA: Centered Gradient Banner
 * Slug: bblocks/cta-01
 * Categories: bblocks, call-to-action
 * Description: A full-width gradient call-to-action band with a centered heading, short line and a single button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","gradient":"primary-to-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-to-secondary-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"background"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php echo esc_html__( 'Ready to get started?', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color"><?php echo esc_html__( 'Let\'s talk about what a new site could do for your business.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"background","textColor":"text"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background-color has-background wp-element-button"><?php echo esc_html__( 'Get in Touch', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
