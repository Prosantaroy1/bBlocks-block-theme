<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Product Grid
 * Slug: bblocks/site-shop-products
 * Categories: bblocks, bblocks-site-shop, bblocks-portfolio, featured
 * Keywords: shop, store, products, best sellers, grid, add to cart
 * Description: A centered heading and a responsive grid of six static product cards, each with a photo, badge, name, rating line, price and an add to cart button linking to the shop page.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_products = array(
	array( 'shop-sneakers.jpg', __( 'White leather sneakers on grass', 'bblocks' ), __( 'Best seller', 'bblocks' ), __( 'Everyday Leather Sneaker', 'bblocks' ), __( '★★★★★ 4.9 (212 reviews)', 'bblocks' ), __( '$89.00', 'bblocks' ) ),
	array( 'shop-watch.jpg', __( 'A classic watch with a white dial and leather strap', 'bblocks' ), __( 'New', 'bblocks' ), __( 'Classic Leather Watch', 'bblocks' ), __( '★★★★★ 4.8 (96 reviews)', 'bblocks' ), __( '$149.00', 'bblocks' ) ),
	array( 'shop-bag.jpg', __( 'A tan canvas duffel bag on a wooden floor', 'bblocks' ), __( '-20%', 'bblocks' ), __( 'Weekend Canvas Duffel', 'bblocks' ), __( '★★★★☆ 4.6 (148 reviews)', 'bblocks' ), __( '$76.00', 'bblocks' ) ),
	array( 'shop-mug.jpg', __( 'A white ceramic mug of coffee beside a biscuit', 'bblocks' ), __( 'Best seller', 'bblocks' ), __( 'Stoneware Coffee Mug', 'bblocks' ), __( '★★★★★ 4.9 (341 reviews)', 'bblocks' ), __( '$18.00', 'bblocks' ) ),
	array( 'shop-plant.jpg', __( 'A small succulent in a dark ceramic pot on a desk', 'bblocks' ), __( 'Eco', 'bblocks' ), __( 'Desk Succulent & Pot', 'bblocks' ), __( '★★★★★ 4.7 (87 reviews)', 'bblocks' ), __( '$24.00', 'bblocks' ) ),
	array( 'shop-sunglasses.jpg', __( 'Black sunglasses with mirrored lenses on the sand', 'bblocks' ), __( 'New', 'bblocks' ), __( 'Polarized Sunglasses', 'bblocks' ), __( '★★★★☆ 4.5 (64 reviews)', 'bblocks' ), __( '$59.00', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Trending now', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Customer favorites', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_products as $bblocks_product ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full has-custom-border" style="margin-bottom:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_product[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_product[1] ); ?>" style="border-radius:1rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $bblocks_product[3] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-medium-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_product[5] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_product[4] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"backgroundColor":"accent","textColor":"foreground","className":"bblocks-badge","style":{"typography":{"fontWeight":"600","fontSize":"0.75rem"}}} -->
				<p class="bblocks-badge has-foreground-color has-accent-background-color has-text-color has-background" style="font-size:0.75rem;font-weight:600"><?php echo esc_html( $bblocks_product[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'Add to cart', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'Shop all products', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
