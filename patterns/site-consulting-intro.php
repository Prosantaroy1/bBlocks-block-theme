<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Mission Statement
 * Slug: bblocks/site-consulting-intro
 * Categories: bblocks, bblocks-site-consulting, bblocks-about, about
 * Keywords: consulting, mission, statement, intro
 * Description: A centered mission statement with a booking button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"lineHeight":"1.35"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.35"><?php echo esc_html__( 'Guiding entrepreneurs to scale their businesses with smart strategies, actionable insights and sustainable growth solutions.', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Book a Session', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
