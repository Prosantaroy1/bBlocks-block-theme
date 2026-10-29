<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Hero with Giant Wordmark
 * Slug: bblocks/site-resort-hero
 * Categories: bblocks, bblocks-site-resort, bblocks-hero, banner
 * Keywords: resort, hotel, nature, hero, cover, wordmark
 * Description: A full-height landscape cover with the brand name set as a giant wordmark along the bottom edge.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-hero.jpg' ) ); ?>","dimRatio":50,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":720,"contentPosition":"bottom left","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--medium);min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-hero.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:heading {"level":1,"align":"wide","className":"bblocks-giant-title","textColor":"background"} -->
	<h1 class="wp-block-heading alignwide bblocks-giant-title has-background-color has-text-color"><?php echo esc_html__( 'Naturexplo', 'bblocks' ); ?></h1>
	<!-- /wp:heading -->
</div></div>
<!-- /wp:cover -->
