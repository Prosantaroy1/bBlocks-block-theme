<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_shop_id  = wc_get_page_id( 'shop' );
$bblocks_shop_url = $bblocks_shop_id > 0 ? get_permalink( $bblocks_shop_id ) : '';
if ( ! $bblocks_shop_url ) {
	$bblocks_shop_url = home_url( '/shop/' );
}

$bblocks_perks = array(
	__( 'Free 2-day delivery', 'bblocks' ),
	__( '2-year warranty', 'bblocks' ),
	__( '30-day returns', 'bblocks' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"is-style-pill","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-pill">
					<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'New', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html__( 'The spring tech drop is here', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"lineHeight":"1.05"}}} -->
			<h1 class="wp-block-heading has-huge-font-size" style="line-height:1.05"><?php echo esc_html__( 'Smarter tech at sharper prices', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"medium"} -->
			<p class="has-muted-text-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Laptops, phones, audio and accessories from the brands you trust, tested by our team and delivered fast.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $bblocks_shop_url ); ?>"><?php echo esc_html__( 'Shop deals', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php echo esc_html__( 'Ask an expert', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
				<?php foreach ( $bblocks_perks as $bblocks_perk ) : ?>
				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html( '✓ ' . $bblocks_perk ); ?></p>
				<!-- /wp:paragraph -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gadget-hero.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Open laptop next to a cup of coffee on a light wooden desk', 'bblocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
