<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Spa: Say Hello
 * Slug: bblocks/site-spa-contact
 * Categories: bblocks, bblocks-site-spa, bblocks-contact, contact
 * Keywords: spa, contact, booking, appointment, hours
 * Description: A centered heading over a faded background word, three contact cards (visit, call, email) and an appointment button. Add a form plugin block here if you need an online form.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_cards = array(
	array( __( 'Visit Us', 'bblocks' ), __( '18 Lotus Lane, Springfield', 'bblocks' ) ),
	array( __( 'Call Us', 'bblocks' ), __( '+1 (555) 014 2290', 'bblocks' ) ),
	array( __( 'Email Us', 'bblocks' ), __( 'hello@example.com', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","className":"bblocks-has-watermark","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bblocks-has-watermark" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"align":"center","className":"bblocks-watermark"} -->
	<p class="has-text-align-center bblocks-watermark"><?php echo esc_html__( 'Contact', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php echo esc_html__( 'Say Hello', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $bblocks_cards as $bblocks_card ) : ?>
		<!-- wp:column {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--small)">
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_card[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $bblocks_card[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book Appointment', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
