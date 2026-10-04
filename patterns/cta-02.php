<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: CTA: Split with Two Buttons
 * Slug: bblocks/cta-02
 * Categories: bblocks, call-to-action
 * Description: A bordered call-to-action row with a heading on the left and two buttons on the right, for a lower-key section break.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-radius:1.25rem;margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
	<h3 class="wp-block-heading" style="margin-bottom:0"><?php echo esc_html__( 'Still have questions?', 'bblocks' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'View FAQ', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Contact Us', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
