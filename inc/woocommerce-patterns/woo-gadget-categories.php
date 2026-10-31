<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_shop_id  = wc_get_page_id( 'shop' );
$bblocks_shop_url = $bblocks_shop_id > 0 ? get_permalink( $bblocks_shop_id ) : '';
if ( ! $bblocks_shop_url ) {
	$bblocks_shop_url = home_url( '/shop/' );
}

$bblocks_categories = array(
	array( '⌨', __( 'Laptops', 'bblocks' ), __( 'Work, study and create', 'bblocks' ) ),
	array( '✆', __( 'Phones', 'bblocks' ), __( 'Flagships and best value', 'bblocks' ) ),
	array( '♫', __( 'Audio', 'bblocks' ), __( 'Headphones and speakers', 'bblocks' ) ),
	array( '◷', __( 'Wearables', 'bblocks' ), __( 'Watches and fitness bands', 'bblocks' ) ),
	array( '✛', __( 'Gaming', 'bblocks' ), __( 'Consoles and controllers', 'bblocks' ) ),
	array( '↯', __( 'Accessories', 'bblocks' ), __( 'Chargers, cases and cables', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Shop by category', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
		<p style="font-weight:700"><a href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html__( 'Browse all products →', 'bblocks' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":6,"minimumColumnWidth":"9rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_categories as $bblocks_category ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1rem","width":"1px","color":"var:preset|color|border-color"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--border-color);border-width:1px;border-radius:1rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_category[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><a href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html( $bblocks_category[1] ); ?></a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_category[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
