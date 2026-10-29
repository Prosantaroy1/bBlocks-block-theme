<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: Opening Hours & Emergency
 * Slug: bblocks/site-medical-hours
 * Categories: bblocks, bblocks-site-medical, bblocks-contact, call-to-action
 * Keywords: medical, clinic, opening hours, emergency, phone, contact
 * Description: A dark band with a weekly opening hours list beside a white emergency card with a large phone number and an appointment button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_hours = array(
	array( __( 'Monday – Friday', 'bblocks' ), __( '8:00 am – 8:00 pm', 'bblocks' ) ),
	array( __( 'Saturday', 'bblocks' ), __( '9:00 am – 5:00 pm', 'bblocks' ) ),
	array( __( 'Sunday', 'bblocks' ), __( '10:00 am – 2:00 pm', 'bblocks' ) ),
	array( __( 'Public holidays', 'bblocks' ), __( 'Urgent care only', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Opening hours', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_hours as $bblocks_row ) : ?>
				<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|muted-text","width":"1px"}},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--muted-text);border-bottom-width:1px;padding-top:0.85rem;padding-bottom:0.85rem">
					<!-- wp:paragraph -->
					<p><?php echo esc_html( $bblocks_row[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php echo esc_html( $bblocks_row[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
				<p class="bblocks-eyebrow"><?php echo esc_html__( '24/7 Emergency Line', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"fontWeight":"800","lineHeight":"1.2"}}} -->
				<p class="has-x-large-font-size" style="font-weight:800;line-height:1.2"><a href="tel:+15550100199"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'For urgent but non-life-threatening problems, call us any time. In a life-threatening emergency, call your local emergency number.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book an Appointment', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
