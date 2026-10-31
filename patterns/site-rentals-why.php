<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Local Owners Cards
 * Slug: bblocks/site-rentals-why
 * Categories: bblocks, bblocks-site-rentals, bblocks-features, featured
 * Keywords: rentals, why us, local, landlord, family, owners, cards
 * Description: A centered heading above four small cards with a red top border, an icon, a title and a short reason to rent from a local owner.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reasons = array(
	array( '☺', __( 'Owner-Run', 'bblocks' ), __( 'Two generations of one family own and manage every building we rent.', 'bblocks' ) ),
	array( '⌖', __( 'Right Downtown', 'bblocks' ), __( 'Our office sits on Main Street, minutes from every property we look after.', 'bblocks' ) ),
	array( '✉', __( 'Straight Answers', 'bblocks' ), __( 'You talk with the people who make decisions, never a distant call center.', 'bblocks' ) ),
	array( '★', __( 'Part of the Town', 'bblocks' ), __( 'We sponsor the river cleanup and support local businesses all year.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Why rent local', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Neighbors, Not a Faceless Landlord', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_reasons as $bblocks_reason ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"0.5rem","top":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-radius:0.5rem;border-top-color:var(--wp--preset--color--primary);border-top-width:3px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
			<p class="bblocks-icon is-small"><?php echo esc_html( $bblocks_reason[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $bblocks_reason[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_reason[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
