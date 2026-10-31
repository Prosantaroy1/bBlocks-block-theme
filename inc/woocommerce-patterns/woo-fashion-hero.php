<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_shop_id  = wc_get_page_id( 'shop' );
$bblocks_shop_url = $bblocks_shop_id > 0 ? get_permalink( $bblocks_shop_id ) : '';
if ( ! $bblocks_shop_url ) {
	$bblocks_shop_url = home_url( '/shop/' );
}
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/fashion-hero.jpg' ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":680,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fashion-hero.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
		<p class="has-background-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'The Autumn Edit', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textColor":"background","fontSize":"huge","style":{"typography":{"lineHeight":"1.05"}}} -->
		<h1 class="wp-block-heading has-background-color has-text-color has-huge-font-size" style="line-height:1.05"><?php echo esc_html__( 'Quiet luxury, made to last', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"background","fontSize":"medium"} -->
		<p class="has-background-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Soft tailoring, natural fibres and timeless shapes for every day of the season. Discover the new lookbook.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html__( 'Shop the collection', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html__( 'Our story', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
