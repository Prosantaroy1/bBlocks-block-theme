<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Architecture: Hero
 * Slug: bblocks/site-architecture-hero
 * Categories: bblocks, bblocks-site-architecture, bblocks-hero, banner
 * Keywords: architecture, hero, cover, building, studio
 * Description: A full-width dark cover over a city skyline with an eyebrow, a large title, a gradient button and an outline button. Designed for the Nirman style.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/arch-skyline.svg' ) ); ?>","dimRatio":70,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":620,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arch-skyline.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
	<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Welcome to', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Nirman Architecture Solution', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"gradient":"primary-to-secondary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-primary-to-secondary-gradient-background has-background wp-element-button"><?php echo esc_html__( 'Book A Meeting', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button"><?php echo esc_html__( 'Portfolio', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div></div>
<!-- /wp:cover -->
