<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Featured Cottage
 * Slug: bblocks/site-resort-cottage
 * Categories: bblocks, bblocks-site-resort, bblocks-features, featured
 * Keywords: resort, cottage, suite, room, accommodation, cover
 * Description: A heading with a Discover More button above a wide image cover that shows a featured suite with its description and amenities.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"huge"} -->
		<h2 class="wp-block-heading has-huge-font-size"><?php echo esc_html__( 'Eco Cottage', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Discover More ↗', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-cottage.svg' ) ); ?>","dimRatio":40,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":520,"contentPosition":"bottom left","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
	<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-cottage.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large"} -->
		<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size"><?php echo esc_html__( 'Lake Garden Suite', 'bblocks' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html__( 'A cozy timber suite with floor-to-ceiling windows, a private terrace and morning views across the lake.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:list {"fontSize":"small"} -->
		<ul class="wp-block-list has-small-font-size">
			<!-- wp:list-item -->
			<li><?php echo esc_html__( 'Sleeps 4 · 2 bedrooms', 'bblocks' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html__( 'Queen bed and garden view', 'bblocks' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div></div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
