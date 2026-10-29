<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Theme Browser
 * Slug: bblocks/site-marketplace-themes
 * Categories: bblocks, bblocks-site-marketplace, bblocks-features, features
 * Keywords: marketplace, themes, products, shop, search, grid
 * Description: A heading and search field above a two-by-two grid of product cards, each with a category, price, preview image and a full-width button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_products = array(
	array( 'theme-preview-1.svg', __( 'Personal Portfolio Theme', 'bblocks' ), __( '$59.00', 'bblocks' ), __( 'Preview of a luxury portfolio theme', 'bblocks' ) ),
	array( 'theme-preview-6.svg', __( 'Digital Agency Theme', 'bblocks' ), __( '$49.00', 'bblocks' ), __( 'Preview of a digital agency theme', 'bblocks' ) ),
	array( 'theme-preview-2.svg', __( 'Pet Adoption Theme', 'bblocks' ), __( '$39.00', 'bblocks' ), __( 'Preview of a pet adoption theme', 'bblocks' ) ),
	array( 'theme-preview-3.svg', __( 'Software Product Theme', 'bblocks' ), __( '$69.00', 'bblocks' ), __( 'Preview of a software product theme', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Browse 15K+ Themes', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
	<div class="wp-block-group">
		<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search themes', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search for a theme…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"buttonPosition":"button-inside","buttonUseIcon":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_products as $bblocks_product ) : ?>
		<!-- wp:group {"borderColor":"border-color","style":{"border":{"radius":"0.75rem","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_product[1] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_product[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_product[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_product[3] ); ?>" style="border-radius:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"secondary","textColor":"background","width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background-color has-secondary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/browse-themes/' ) ); ?>"><?php echo esc_html__( 'View Options', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/browse-themes/' ) ); ?>"><?php echo esc_html__( 'Browse 15K+ Themes ↗', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
