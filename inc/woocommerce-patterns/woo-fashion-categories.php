<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_shop_id  = wc_get_page_id( 'shop' );
$bblocks_shop_url = $bblocks_shop_id > 0 ? get_permalink( $bblocks_shop_id ) : '';
if ( ! $bblocks_shop_url ) {
	$bblocks_shop_url = home_url( '/shop/' );
}

$bblocks_categories = array(
	array( __( 'Women', 'bblocks' ), 'fashion-women.jpg', __( 'Blush skirt, soft knit and a leather handbag', 'bblocks' ) ),
	array( __( 'Men', 'bblocks' ), 'fashion-men.jpg', __( 'Navy tailored suit with a polka-dot tie', 'bblocks' ) ),
	array( __( 'Shoes', 'bblocks' ), 'fashion-shoes.jpg', __( 'Polished leather shoes and boots on a shelf', 'bblocks' ) ),
	array( __( 'Accessories', 'bblocks' ), 'fashion-accessories.jpg', __( 'Brown leather weekend bag', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Shop by category', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Find your fit', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><a href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html__( 'View all products', 'bblocks' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"9rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_categories as $bblocks_category ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
			<figure class="wp-block-image size-full"><a href="<?php echo esc_url( $bblocks_shop_url ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_category[1] ) ); ?>" alt="<?php echo esc_attr( $bblocks_category[2] ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><a href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html( $bblocks_category[0] ); ?></a></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
