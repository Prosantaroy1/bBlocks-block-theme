<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Sale Promo Banner
 * Slug: bblocks/site-shop-promo
 * Categories: bblocks, bblocks-site-shop, bblocks-cta, call-to-action
 * Keywords: shop, sale, discount, promo code, offer, banner
 * Description: A dark rounded sale banner with a discount headline, a coupon code pill, a shop button and a summer product photo.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","backgroundColor":"foreground","textColor":"background","style":{"border":{"radius":"1.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide has-background-color has-foreground-background-color has-text-color has-background" style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:paragraph {"backgroundColor":"accent","textColor":"foreground","fontSize":"small","className":"bblocks-badge","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="bblocks-badge has-foreground-color has-accent-background-color has-text-color has-background has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Summer sale · ends Sunday', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Up to 40% off summer essentials', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"background"} -->
				<p class="has-background-color has-text-color"><?php echo esc_html__( 'Sunglasses, travel bags and sneakers at their lowest prices of the year. Add the code below at checkout for an extra 10% off.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:paragraph {"className":"is-style-pill","textColor":"foreground","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em"}}} -->
					<p class="is-style-pill has-foreground-color has-text-color" style="font-weight:700;letter-spacing:0.1em"><?php echo esc_html__( 'Code: SUMMER10', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"accent","textColor":"foreground"} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'Shop the sale', 'bblocks' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-sunglasses.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Sunglasses with mirrored lenses resting on a sandy beach', 'bblocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
