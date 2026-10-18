<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Spa: Happy Customers
 * Slug: bblocks/site-spa-testimonial
 * Categories: bblocks, bblocks-site-spa, bblocks-testimonials, testimonials
 * Keywords: spa, testimonial, review, customers, quote
 * Description: A centered heading over a faded background word, a short customer quote and the customer's avatar and name.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","className":"bblocks-has-watermark","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull bblocks-has-watermark" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"align":"center","className":"bblocks-watermark"} -->
	<p class="has-text-align-center bblocks-watermark"><?php echo esc_html__( 'Testimonial', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php echo esc_html__( 'Happy Customers', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
	<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( '"From the moment I walked in I felt looked after. The massage was the most relaxing hour of my month and I left feeling completely renewed. I already booked my next visit."', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"width":"40px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-4.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Angelina Juli', 'bblocks' ); ?>" style="border-radius:999px;aspect-ratio:1;object-fit:cover;width:40px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
		<p class="has-small-font-size" style="font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html__( 'Angelina Juli', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
