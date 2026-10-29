<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Visit & Reservations
 * Slug: bblocks/site-restaurant-visit
 * Categories: bblocks, bblocks-site-restaurant, bblocks-contact, call-to-action
 * Keywords: restaurant, reservation, booking, opening hours, address, phone, visit
 * Description: A dark band with opening hours, the address and phone number, and a booking call to action with a button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_hours = array(
	array( __( 'Monday', 'bblocks' ), __( 'Closed', 'bblocks' ) ),
	array( __( 'Tuesday – Thursday', 'bblocks' ), __( '5 pm – 10 pm', 'bblocks' ) ),
	array( __( 'Friday – Saturday', 'bblocks' ), __( '12 pm – 11 pm', 'bblocks' ) ),
	array( __( 'Sunday', 'bblocks' ), __( '12 pm – 9 pm', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size"><?php echo esc_html__( 'Opening Hours', 'bblocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
			<?php foreach ( $bblocks_hours as $bblocks_hour ) : ?>
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html( $bblocks_hour[0] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p style="font-weight:600"><?php echo esc_html( $bblocks_hour[1] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size"><?php echo esc_html__( 'Find Us', 'bblocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( '24 Market Lane, Old Town', 'bblocks' ); ?><br><?php echo esc_html__( 'Springfield, ST 10101', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="tel:+15550100199"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a><br><a href="mailto:hello@example.com"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"textColor":"background","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Reserve Your Table', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Book online in a minute. For groups of eight or more, private dining or special occasions, give us a call and we will plan it with you.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/reservations/' ) ); ?>"><?php echo esc_html__( 'Book a Table', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
