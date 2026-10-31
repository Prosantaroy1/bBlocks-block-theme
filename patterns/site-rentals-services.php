<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Resident Services (Dark)
 * Slug: bblocks/site-rentals-services
 * Categories: bblocks, bblocks-site-rentals, bblocks-services, services
 * Keywords: rentals, services, maintenance, rent payment, tenants, residents, dark
 * Description: A dark charcoal band with a centered heading and six resident services, each with an icon, a title and a short description.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_services = array(
	array( '⌂', __( 'Friendly Screening', 'bblocks' ), __( 'A simple application, clear criteria and a decision within two business days, with a real conversation along the way.', 'bblocks' ) ),
	array( '$', __( 'Easy Online Rent', 'bblocks' ), __( 'Pay from your phone with the resident portal, set up autopay or drop a check at our Main Street office.', 'bblocks' ) ),
	array( '⚒', __( 'Round-the-Clock Repairs', 'bblocks' ), __( 'Our own maintenance crew answers the emergency line every hour of the day and fixes most issues the same week.', 'bblocks' ) ),
	array( '✓', __( 'Twice-Yearly Checkups', 'bblocks' ), __( 'Spring and fall visits catch worn seals, slow drains and smoke alarm batteries before they become problems.', 'bblocks' ) ),
	array( '✉', __( 'Quick Replies', 'bblocks' ), __( 'Questions by phone, email or text get an answer from our office team within one business day.', 'bblocks' ) ),
	array( '✎', __( 'Online Inquiries', 'bblocks' ), __( 'Tell us your move-in date and wish list, and we will match you with open units and book a viewing.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Resident services', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Renting Made Calm and Simple', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"border-color"} -->
		<p class="has-text-align-center has-border-color-color has-text-color"><?php echo esc_html__( 'From the first viewing to the day you hand back the keys, we take care of the details so home feels like home.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_services as $bblocks_service ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_service[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"medium"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-medium-font-size"><?php echo esc_html( $bblocks_service[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"border-color","fontSize":"small"} -->
			<p class="has-border-color-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_service[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
