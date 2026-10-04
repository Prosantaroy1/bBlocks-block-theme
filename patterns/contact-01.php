<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Contact: Info Split
 * Slug: bblocks/contact-01
 * Categories: bblocks, contact
 * Description: A two-column contact section pairing a heading and contact details list with a bordered office-hours panel.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":{"left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:column {"width":"55%"} -->
	<div class="wp-block-column" style="flex-basis:55%">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Get in touch', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted-text"} -->
		<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Send a message and we\'ll get back to you within one business day.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:list {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
		<ul class="wp-block-list">
			<!-- wp:list-item --><li><?php echo esc_html__( 'Email:', 'bblocks' ); ?> <a href="mailto:hello@example.com">hello@example.com</a></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php echo esc_html__( 'Phone:', 'bblocks' ); ?> <a href="tel:+15551234567">(555) 123-4567</a></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php echo esc_html__( 'Address: 123 Main Street, Suite 400', 'bblocks' ); ?></li><!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"45%"} -->
	<div class="wp-block-column" style="flex-basis:45%">
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Office hours', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Monday – Friday: 9am – 5pm', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Saturday – Sunday: Closed', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
