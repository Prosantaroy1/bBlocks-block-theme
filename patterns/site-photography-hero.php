<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Photography: Hero
 * Slug: bblocks/site-photography-hero
 * Categories: bblocks, bblocks-site-photography, bblocks-hero, banner
 * Keywords: photography, photographer, studio, portfolio, hero, cover, landscape
 * Description: A full-height landscape photo with a soft overlay, a short statement, and View Portfolio and Book a Session buttons.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/photography-reflection.jpg' ) ); ?>","dimRatio":50,"overlayColor":"background","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photography-reflection.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.25em;text-transform:uppercase"><?php echo esc_html__( 'Lumen Studio', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textColor":"foreground","fontSize":"huge","style":{"typography":{"lineHeight":"1.1"}}} -->
		<h1 class="wp-block-heading has-foreground-color has-text-color has-huge-font-size" style="line-height:1.1"><?php echo esc_html__( 'Quiet light, honest moments.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"foreground","fontSize":"large"} -->
		<p class="has-foreground-color has-text-color has-large-font-size"><?php echo esc_html__( 'Landscape, architecture and commercial photography made with patience and a love for natural light.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><?php echo esc_html__( 'View Portfolio', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"foreground","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book a Session', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
