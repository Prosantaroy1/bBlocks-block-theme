<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Coming Soon
 * Slug: bblocks/utility-coming-soon
 * Categories: bblocks, bblocks-utility
 * Keywords: coming soon, launch, under construction, landing, social
 * Description: A full-height dark screen with a large Coming soon title, a short launch message, social links and an email button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"dimRatio":100,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
	<p class="has-text-align-center has-background-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Something new is on the way', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"huge"} -->
	<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Coming soon', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"medium"} -->
	<p class="has-text-align-center has-background-color has-text-color has-medium-font-size"><?php echo esc_html__( 'We are putting the finishing touches on our new website. Follow along for updates, or drop us a line and we will let you know the moment we launch.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

		<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

		<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

		<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
	</ul>
	<!-- /wp:social-links -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php echo esc_html__( 'Email us', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
