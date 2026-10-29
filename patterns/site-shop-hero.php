<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Split Hero
 * Slug: bblocks/site-shop-hero
 * Categories: bblocks, bblocks-site-shop, bblocks-hero, banner
 * Keywords: shop, store, ecommerce, products, hero, new arrivals
 * Description: A two-column store hero with a badge, large title, intro, Shop Now and New Arrivals buttons, a perks line and a rounded product photo.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"backgroundColor":"accent","textColor":"foreground","fontSize":"small","className":"bblocks-badge","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="bblocks-badge has-foreground-color has-accent-background-color has-text-color has-background has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'New season drop', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"lineHeight":"1.05"}}} -->
			<h1 class="wp-block-heading has-huge-font-size" style="line-height:1.05"><?php echo esc_html__( 'Everyday goods, made to last', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"medium"} -->
			<p class="has-muted-text-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Sneakers, bags, watches and little things for home, picked for quality and priced fairly. Shipped from our studio in two days.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'Shop Now', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'New Arrivals', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Free shipping over $50 · 30-day returns · Secure checkout', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"5/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-sneakers.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A pair of clean white leather sneakers on green grass', 'bblocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:5/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
