<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Photography: Booking Call to Action
 * Slug: bblocks/site-photography-contact
 * Categories: bblocks, bblocks-site-photography, bblocks-contact, call-to-action
 * Keywords: photography, booking, contact, email, phone, call to action
 * Description: A winter landscape cover with a booking invitation, email and phone links and a Book a Session button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/photography-winter.jpg' ) ); ?>","dimRatio":80,"overlayColor":"background","isUserOverlayColor":true,"minHeight":520,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photography-winter.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
	<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.25em;text-transform:uppercase"><?php echo esc_html__( 'Now Booking', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","textColor":"foreground","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Let’s make something beautiful.', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"foreground"} -->
	<p class="has-text-align-center has-foreground-color has-text-color"><?php echo esc_html__( 'Tell me about your session, event or project and I will reply within two working days with availability and a tailored quote.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","textColor":"foreground","fontSize":"large"} -->
	<p class="has-text-align-center has-foreground-color has-text-color has-large-font-size"><a href="mailto:hello@example.com"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a> · <a href="tel:+15550100199"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book a Session', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
