<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: Appointment Call to Action
 * Slug: bblocks/site-medical-cta
 * Categories: bblocks, bblocks-site-medical, bblocks-cta, call-to-action
 * Keywords: medical, clinic, appointment, booking, call to action, cover
 * Description: A rounded cover over a bright clinic corridor with a dark overlay, a centered heading, short text, appointment and phone buttons.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/medical-corridor.jpg' ) ); ?>","dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":420,"align":"wide","style":{"border":{"radius":"1.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-cover alignwide" style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/medical-corridor.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Your health can’t wait. Neither should you.', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color"><?php echo esc_html__( 'Book online in under two minutes, or call our friendly front desk. New patients are always welcome.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button {"backgroundColor":"background","textColor":"secondary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book an Appointment', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="tel:+15550100199"><?php echo esc_html__( 'Call +1 555 010 0199', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div></div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
