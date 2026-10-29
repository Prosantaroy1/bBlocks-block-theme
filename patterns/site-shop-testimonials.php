<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Customer Reviews
 * Slug: bblocks/site-shop-testimonials
 * Categories: bblocks, bblocks-site-shop, bblocks-testimonials, testimonials
 * Keywords: shop, reviews, testimonials, customers, ratings, verified buyer
 * Description: A heading with an overall rating above three review cards, each with stars, a quote, the customer name and the product they bought.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reviews = array(
	array( __( '"Comfortable from the first wear and they still look new after months of daily use. Already ordered a second pair."', 'bblocks' ), __( 'Jordan M.', 'bblocks' ), __( 'Verified buyer · Everyday Leather Sneaker', 'bblocks' ) ),
	array( __( '"The duffel is the perfect size for a weekend away. Sturdy zips, great canvas and it arrived in two days."', 'bblocks' ), __( 'Priya K.', 'bblocks' ), __( 'Verified buyer · Weekend Canvas Duffel', 'bblocks' ) ),
	array( __( '"Returned a watch that did not suit me and the refund landed the same week. Easy, friendly and fast."', 'bblocks' ), __( 'Sam R.', 'bblocks' ), __( 'Verified buyer · Classic Leather Watch', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Loved by 20,000+ customers', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Rated 4.8 out of 5 from over 3,000 verified reviews.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_reviews as $bblocks_review ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card">
			<!-- wp:paragraph {"className":"bblocks-stars","fontSize":"small"} -->
			<p class="bblocks-stars has-small-font-size">★★★★★</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $bblocks_review[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--small);font-weight:700"><?php echo esc_html( $bblocks_review[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_review[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
