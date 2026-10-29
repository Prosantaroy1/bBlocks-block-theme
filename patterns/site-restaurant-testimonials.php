<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Guest Reviews
 * Slug: bblocks/site-restaurant-testimonials
 * Categories: bblocks, bblocks-site-restaurant, bblocks-testimonials, testimonials
 * Keywords: restaurant, reviews, guests, testimonials, quotes
 * Description: Three guest review cards with a star rating, a short quote and the guest's name.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reviews = array(
	array( __( '“The short rib melted off the fork and the staff found us the perfect bottle of wine. Our new favourite spot for date night.”', 'bblocks' ), __( 'Hannah L., dinner guest', 'bblocks' ) ),
	array( __( '“We booked the long table for a birthday and every dish arrived like a little celebration. Warm, relaxed and generous.”', 'bblocks' ), __( 'Daniel R., private dining', 'bblocks' ) ),
	array( __( '“Handmade pasta that tastes like a trip to Italy, and a panna cotta I still think about. Book ahead, it fills up fast.”', 'bblocks' ), __( 'Sofia M., Sunday lunch', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Kind Words', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'What Our Guests Say', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_reviews as $bblocks_review ) : ?>
		<!-- wp:group {"className":"is-style-card","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"className":"bblocks-stars","fontSize":"small"} -->
			<p class="bblocks-stars has-small-font-size">★★★★★</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"medium","fontFamily":"playfair-display","style":{"typography":{"fontStyle":"italic","lineHeight":"1.6"}}} -->
			<p class="has-playfair-display-font-family has-medium-font-size" style="font-style:italic;line-height:1.6"><?php echo esc_html( $bblocks_review[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_review[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
