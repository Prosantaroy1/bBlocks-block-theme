<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Testimonial
 * Slug: bblocks/site-startup-testimonial
 * Categories: bblocks, bblocks-site-startup, bblocks-testimonials, testimonials
 * Keywords: startup, testimonial, quote, review, customer story, dark
 * Description: A dark photo band with a large customer quote, the customer's name and role, and a button to more stories.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/commercial-building.jpg' ) ); ?>","dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commercial-building.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"accent","className":"bblocks-eyebrow"} -->
		<p class="bblocks-eyebrow has-accent-color has-text-color"><?php echo esc_html__( 'Customer story', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"background","fontSize":"x-large","style":{"typography":{"fontWeight":"500","lineHeight":"1.35"}}} -->
		<p class="has-background-color has-text-color has-x-large-font-size" style="font-weight:500;line-height:1.35"><?php echo esc_html__( '“Since we switched to Fluxpay, checkout takes half the time and our payouts land the next day. It feels like we hired a finance team.”', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"background","fontSize":"small"} -->
			<p class="has-background-color has-text-color has-small-font-size"><strong><?php echo esc_html__( 'Maya Okafor', 'bblocks' ); ?></strong> · <?php echo esc_html__( 'Founder, Corner Bakery Co.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"background","textColor":"secondary"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'More customer stories', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
