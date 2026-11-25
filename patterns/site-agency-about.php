<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: About Page Intro
 * Slug: bblocks/site-agency-about
 * Categories: bblocks, bblocks-site-agency, bblocks-about, about
 * Keywords: agency, about, studio, story, page header, values
 * Description: An about page opening with a large page title, two columns of story text and a wide rounded team photo.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"bblocks-eyebrow","textColor":"primary"} -->
		<p class="bblocks-eyebrow has-primary-color has-text-color"><?php echo esc_html__( 'About Kindred', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"lineHeight":"1.05"}}} -->
		<h1 class="wp-block-heading has-huge-font-size" style="line-height:1.05"><?php echo esc_html__( 'A small studio with big ideas and a lot of heart.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html__( 'We started Kindred in 2014 with one belief: good design should be within reach of every ambitious business, not just the biggest brands.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Today we are a team of twelve designers, writers and developers. We keep the team small on purpose, so you always work directly with the people doing the work. No hand-offs, no jargon, just honest advice and careful craft.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
	<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commercial-boardroom.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Bright studio meeting room with a long table and chairs', 'bblocks' ); ?>" style="border-radius:20px;aspect-ratio:21/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
