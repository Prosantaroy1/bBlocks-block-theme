<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Hero
 * Slug: bblocks/site-law-hero
 * Categories: bblocks, bblocks-site-law, bblocks-hero, banner
 * Keywords: law, lawyer, attorney, legal, firm, hero, cover
 * Description: A full-width law library cover with a dark navy overlay, a gold eyebrow, a large title, intro text, a free consultation button and a phone line.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/law-library.jpg' ) ); ?>","dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":680,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/law-library.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Justica Law · Attorneys at Law', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textColor":"background","fontSize":"huge","style":{"typography":{"lineHeight":"1.1"}}} -->
		<h1 class="wp-block-heading has-background-color has-text-color has-huge-font-size" style="line-height:1.1"><?php echo esc_html__( 'Steady counsel when it matters most', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"background","fontSize":"large"} -->
		<p class="has-background-color has-text-color has-large-font-size"><?php echo esc_html__( 'For over two decades our attorneys have protected families, businesses and individuals with clear advice and determined representation.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button {"backgroundColor":"accent","textColor":"primary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Free Consultation', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="tel:+15550100199"><?php echo esc_html__( 'Call +1 555 010 0199', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
