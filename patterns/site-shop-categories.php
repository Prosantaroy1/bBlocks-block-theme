<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Featured Categories
 * Slug: bblocks/site-shop-categories
 * Categories: bblocks, bblocks-site-shop, bblocks-features, featured
 * Keywords: shop, store, categories, collections, departments, tiles
 * Description: A heading row and four rounded photo tiles for product categories, each with a title, item count and a shop link.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_categories = array(
	array( 'shop-sneakers.jpg', __( 'Footwear', 'bblocks' ), __( '48 products', 'bblocks' ) ),
	array( 'shop-watch.jpg', __( 'Watches', 'bblocks' ), __( '22 products', 'bblocks' ) ),
	array( 'shop-bag.jpg', __( 'Bags & Travel', 'bblocks' ), __( '35 products', 'bblocks' ) ),
	array( 'shop-plant.jpg', __( 'Home & Living', 'bblocks' ), __( '61 products', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Shop by category', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'View all', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_categories as $bblocks_category ) : ?>
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_category[0] ) ); ?>","dimRatio":50,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":340,"contentPosition":"bottom left","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_category[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_category[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"background","fontSize":"small"} -->
			<p class="has-background-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_category[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"background","textColor":"foreground","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html__( 'Shop now', 'bblocks' ); ?></a></div>
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
