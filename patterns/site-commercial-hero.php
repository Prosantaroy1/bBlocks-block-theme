<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Commercial: Hero
 * Slug: bblocks/site-commercial-hero
 * Categories: bblocks, bblocks-site-commercial, bblocks-hero, banner
 * Keywords: commercial, real estate, brokerage, property management, office, hero, cover
 * Description: A tall office tower cover with a large left-aligned serif headline, a short line and three outline buttons.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/commercial-hero.jpg' ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":720,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commercial-hero.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-background-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Summit Ridge Commercial', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textColor":"background","fontSize":"xx-large","style":{"typography":{"lineHeight":"1.15"}}} -->
		<h1 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size" style="line-height:1.15"><?php echo esc_html__( 'Commercial brokerage and property management built on trust since 1995.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"background"} -->
		<p class="has-background-color has-text-color"><?php echo esc_html__( 'Clear advice, careful stewardship and people who answer the phone.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/brokerage/' ) ); ?>"><?php echo esc_html__( 'Brokerage', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/property-management/' ) ); ?>"><?php echo esc_html__( 'Property Management', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact Us', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
