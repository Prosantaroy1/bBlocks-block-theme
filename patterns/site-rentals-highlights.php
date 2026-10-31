<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Highlight Cards
 * Slug: bblocks/site-rentals-highlights
 * Categories: bblocks, bblocks-site-rentals, bblocks-features, featured
 * Keywords: rentals, apartments, commercial, inquiry, cards, cover, links
 * Description: Three edge-to-edge photo cards for apartments, commercial space and rental inquiries, each with an icon, title, short text and a link button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_cards = array(
	array( 'rentals-living.jpg', '⌂', __( 'Apartments by the River', 'bblocks' ), __( 'Bright studios, one-, two- and three-bedroom homes, furnished or unfurnished, with leases that fit your plans.', 'bblocks' ), __( 'View Apartments', 'bblocks' ), '/apartments/' ),
	array( 'rentals-commercial.jpg', '▣', __( 'Downtown Commercial Space', 'bblocks' ), __( 'Street-level shops, upstairs offices and small studios on Main Street, a short walk from the river.', 'bblocks' ), __( 'View Commercial', 'bblocks' ), '/commercial/' ),
	array( 'rentals-kitchen.jpg', '✎', __( 'Looking for a Place?', 'bblocks' ), __( 'Tell us what you need and when you want to move. We reply within one business day with what is open.', 'bblocks' ), __( 'Start an Inquiry', 'bblocks' ), '/contact/' ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|large","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group">
		<?php foreach ( $bblocks_cards as $bblocks_card ) : ?>
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_card[0] ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":420,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_card[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_card[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size"><?php echo esc_html( $bblocks_card[2] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"background","fontSize":"small"} -->
			<p class="has-background-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_card[3] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( $bblocks_card[5] ) ); ?>"><?php echo esc_html( $bblocks_card[4] ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div></div>
		<!-- /wp:cover -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
