<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Call to Action
 * Slug: bblocks/site-fitness-cta
 * Categories: bblocks, bblocks-site-fitness, bblocks-cta, call-to-action
 * Keywords: fitness, gym, join, trial, call to action, cover
 * Description: A full-width treadmill photo cover with a strong overlay, a bold uppercase heading, a short line and Join Now and Free Trial Class buttons.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/fitness-cardio.jpg' ) ); ?>","dimRatio":80,"overlayColor":"background","isUserOverlayColor":true,"minHeight":460,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"textColor":"foreground","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-cover alignfull has-foreground-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fitness-cardio.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
	<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'No excuses. Just start.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","textColor":"foreground","fontSize":"huge","style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-huge-font-size" style="line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Your first class is on us', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"foreground"} -->
	<p class="has-text-align-center has-foreground-color has-text-color"><?php echo esc_html__( 'Book a free trial class, meet the coaches and tour the gym. No commitment, no sales pressure.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/membership/' ) ); ?>"><?php echo esc_html__( 'Join Now', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"textColor":"foreground","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Free Trial Class', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
