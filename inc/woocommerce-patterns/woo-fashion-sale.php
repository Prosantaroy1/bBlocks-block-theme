<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_shop_id  = wc_get_page_id( 'shop' );
$bblocks_shop_url = $bblocks_shop_id > 0 ? get_permalink( $bblocks_shop_id ) : '';
if ( ! $bblocks_shop_url ) {
	$bblocks_shop_url = home_url( '/shop/' );
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center has-background-color has-primary-background-color has-text-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large);flex-basis:55%">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
			<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'End of season sale', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textColor":"background","fontSize":"huge","style":{"typography":{"lineHeight":"1.05"}}} -->
			<h2 class="wp-block-heading has-background-color has-text-color has-huge-font-size" style="line-height:1.05"><?php echo esc_html__( 'Up to 40% off', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Selected knitwear, tailoring and leather goods are marked down for a limited time. Take an extra 10% off at checkout with this code:', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"foreground","backgroundColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700","letterSpacing":"0.25em"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1.25rem","right":"1.25rem"}}}} -->
				<p class="has-foreground-color has-accent-background-color has-text-color has-background has-medium-font-size" style="padding-top:0.6rem;padding-right:1.25rem;padding-bottom:0.6rem;padding-left:1.25rem;font-weight:700;letter-spacing:0.25em"><?php echo esc_html_x( 'MODISTA10', 'Discount code shown in the sale banner', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html__( 'Shop the sale', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fashion-shoes.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Polished leather shoes and boots on a shelf', 'bblocks' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
