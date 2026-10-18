<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Journey CTA with Gallery
 * Slug: bblocks/site-resort-cta
 * Categories: bblocks, bblocks-site-resort, bblocks-cta, call-to-action
 * Keywords: resort, cta, booking, gallery, wordmark
 * Description: A deep green band with a centered heading and booking button, a strip of six photos and the brand name as a giant wordmark.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_strip = array( 'resort-hero', 'resort-cottage', 'resort-pool', 'resort-room', 'resort-food', 'resort-forest' );
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"huge"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Let the journey begin', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"accent","textColor":"foreground"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Book Now ↗', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"grid","columnCount":6,"minimumColumnWidth":"9rem"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large)">
		<?php foreach ( $bblocks_strip as $bblocks_img ) : ?>
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_img . '.svg' ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"bblocks-giant-title","textColor":"background","fontFamily":"playfair-display"} -->
		<p class="bblocks-giant-title has-background-color has-text-color has-playfair-display-font-family"><?php echo esc_html__( 'Naturexplo', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
