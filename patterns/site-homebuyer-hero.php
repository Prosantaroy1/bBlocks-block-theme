<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: Cash Offer Hero
 * Slug: bblocks/site-homebuyer-hero
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-hero, banner
 * Keywords: home buyer, cash offer, sell house, real estate, hero, cover
 * Description: A dark neighborhood photo cover with a red eyebrow, a large serif headline, a short intro, a cash offer button and three quick promises.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_promises = array(
	__( 'No agent fees', 'bblocks' ),
	__( 'Sell as-is', 'bblocks' ),
	__( 'Close on your date', 'bblocks' ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/homebuyer-street.jpg' ) ); ?>","dimRatio":70,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/homebuyer-street.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Local cash home buyers', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"huge","style":{"typography":{"lineHeight":"1.1"}}} -->
		<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size" style="line-height:1.1"><?php echo esc_html__( 'Sell Your House Fast. Get a Fair Cash Offer.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"medium"} -->
		<p class="has-text-align-center has-background-color has-text-color has-medium-font-size"><?php echo esc_html__( 'QuickKey Home Buyers purchases homes directly from owners. Skip the listing, the showings and the repairs, and pick a closing date that suits you.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/get-an-offer/' ) ); ?>"><?php echo esc_html__( 'Get My Free Cash Offer', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>"><?php echo esc_html__( 'How It Works', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
			<?php foreach ( $bblocks_promises as $bblocks_promise ) : ?>
			<!-- wp:paragraph {"textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-background-color has-text-color has-small-font-size" style="font-weight:600">✓ <?php echo esc_html( $bblocks_promise ); ?></p>
			<!-- /wp:paragraph -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
