<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: CTA: Minimal Strip
 * Slug: bblocks/cta-03
 * Categories: bblocks, call-to-action
 * Description: A minimal, bordered call-to-action strip with a short heading, one line of supporting text and a single button — suited to sitting above a footer.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":3} -->
		<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Stay up to date', 'bblocks' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Occasional updates about new work and availability — no spam.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons is-content-justification-center">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Subscribe', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
