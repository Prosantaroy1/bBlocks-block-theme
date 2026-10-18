<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Guest Stories
 * Slug: bblocks/site-resort-stories
 * Categories: bblocks, bblocks-site-resort, bblocks-testimonials, testimonials
 * Keywords: resort, guests, stories, testimonial, review
 * Description: A large heading above a guest portrait and a quote with the guest's name and role.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"align":"wide","fontSize":"huge"} -->
	<h2 class="wp-block-heading alignwide has-huge-font-size"><?php echo esc_html__( 'Stories That Stay With Us', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of guest Liam Johnson', 'bblocks' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html__( '"Naturexplo gave our family more than memories — it gave us connection. My children discovered the beauty of nature through play and learning. It\'s a place that leaves a lasting impression."', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Liam Johnson — Design Director', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
