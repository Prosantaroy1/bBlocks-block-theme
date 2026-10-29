<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Dining
 * Slug: bblocks/site-resort-dining
 * Categories: bblocks, bblocks-site-resort, bblocks-features, featured
 * Keywords: resort, dining, restaurant, food, menu
 * Description: Two stacked food photos on the left and a heading, short text, button and large plated-dish photo on the right.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-food.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A plated dish of roasted vegetables and herbs', 'bblocks' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-pool.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Wicker chairs and tables beside the pool', 'bblocks' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Dining', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Feel the taste in every bite: delicate flavors, thoughtful preparation and a touch of freshness from our own garden.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/dining-activities/' ) ); ?>"><?php echo esc_html__( 'Explore All ↗', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--large)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-dish.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A colorful breakfast plate with eggs, greens and fresh vegetables', 'bblocks' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
