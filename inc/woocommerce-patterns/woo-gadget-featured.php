<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_shop_id  = wc_get_page_id( 'shop' );
$bblocks_shop_url = $bblocks_shop_id > 0 ? get_permalink( $bblocks_shop_id ) : '';
if ( ! $bblocks_shop_url ) {
	$bblocks_shop_url = home_url( '/shop/' );
}

$bblocks_promos = array(
	array( 'gadget-headphones.jpg', __( 'Audio week', 'bblocks' ), __( 'Studio sound, anywhere you go', 'bblocks' ), __( 'Shop audio', 'bblocks' ) ),
	array( 'gadget-phone.jpg', __( 'Trade in and save', 'bblocks' ), __( 'Upgrade your phone for less', 'bblocks' ), __( 'Shop phones', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Staff picks', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Featured products', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Hand-picked gear our team uses and recommends every day.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
		<p style="font-weight:700"><a href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html__( 'View all products →', 'bblocks' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":32,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/featured","hideControls":["featured","filterable"],"queryContextIncludes":["collection"],"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1rem","width":"1px","color":"var:preset|color|border-color"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--border-color);border-width:1px;border-radius:1rem;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
				<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1"} -->
					<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
				<!-- /wp:woocommerce/product-image -->

				<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0"}},"typography":{"fontWeight":"700"}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"medium"} /-->

				<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->

		<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
			<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Featured products will appear here once you mark some products as featured.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->
	</div>
	<!-- /wp:woocommerce/product-collection -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_promos as $bblocks_promo ) : ?>
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_promo[0] ) ); ?>","dimRatio":60,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":300,"contentPosition":"bottom left","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_promo[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_promo[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"textColor":"surface","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-surface-color has-text-color has-x-large-font-size"><?php echo esc_html( $bblocks_promo[2] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"foreground"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html( $bblocks_promo[3] ); ?></a></div>
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
