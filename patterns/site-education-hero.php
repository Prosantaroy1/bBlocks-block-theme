<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Hero
 * Slug: bblocks/site-education-hero
 * Categories: bblocks, bblocks-site-education, bblocks-hero, banner
 * Keywords: education, academy, courses, online learning, hero
 * Description: A split hero with an eyebrow, a large title, a short intro, Browse Courses and Start Free Trial buttons, a rating line and a rounded desk photo.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"52%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:paragraph {"className":"bblocks-badge","backgroundColor":"background"} -->
			<p class="bblocks-badge has-background-background-color has-background"><?php echo esc_html__( 'Edunova Academy · Learn at your own pace', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php echo esc_html__( 'Learn the skills that move your career forward', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"large"} -->
			<p class="has-muted-text-color has-text-color has-large-font-size"><?php echo esc_html__( 'Practical online courses in design, code, data and business, taught by working experts. Short lessons, real projects and a certificate when you finish.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html__( 'Browse Courses', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php echo esc_html__( 'Start Free Trial', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"bblocks-stars"} -->
				<p class="bblocks-stars">★★★★★</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Rated 4.9 by more than 12,000 learners', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/education-desk.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A laptop, a cup of coffee, pencils and sticky notes on a wooden study desk', 'bblocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
