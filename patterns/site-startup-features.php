<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Feature Grid
 * Slug: bblocks/site-startup-features
 * Categories: bblocks, bblocks-site-startup, bblocks-features, featured
 * Keywords: startup, saas, features, grid, icons, product
 * Description: A heading with a highlighted word above an eight-item feature grid, each with an icon tile, title and short description.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_rows = array(
	array(
		array( '↻', __( 'Subscriptions', 'bblocks' ), __( 'Bill customers monthly or yearly and let payments run on autopilot.', 'bblocks' ) ),
		array( '$', __( 'Online payments', 'bblocks' ), __( 'Accept cards and wallets on your website with a few lines of setup.', 'bblocks' ) ),
		array( '⚡', __( 'Instant checkout', 'bblocks' ), __( 'A fast, mobile-friendly checkout that helps more visitors finish buying.', 'bblocks' ) ),
		array( '%', __( 'Discount codes', 'bblocks' ), __( 'Create coupons and offers in seconds to reward loyal customers.', 'bblocks' ) ),
	),
	array(
		array( '★', __( 'Affiliates', 'bblocks' ), __( 'Pay partners who send you customers, tracked automatically.', 'bblocks' ) ),
		array( '✉', __( 'Smart invoices', 'bblocks' ), __( 'Send branded invoices with a pay button and automatic reminders.', 'bblocks' ) ),
		array( '▤', __( 'Live reports', 'bblocks' ), __( 'See sales, refunds and payouts in real time from any device.', 'bblocks' ) ),
		array( '⛨', __( 'Fraud protection', 'bblocks' ), __( 'Machine learning checks every payment and blocks risky ones.', 'bblocks' ) ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:separator {"align":"wide","backgroundColor":"border-color","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-border-color-color has-alpha-channel-opacity has-border-color-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php echo esc_html__( 'Features that', 'bblocks' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'scale', 'bblocks' ); ?></mark> <?php echo esc_html__( 'with you', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<?php foreach ( $bblocks_rows as $bblocks_row ) : ?>
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_row as $bblocks_item ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"0.6rem"}}} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
			<p class="bblocks-icon is-small"><?php echo esc_html( $bblocks_item[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $bblocks_item[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_item[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
