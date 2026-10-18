<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About: Story with Quote
 * Slug: bblocks/about-04
 * Categories: bblocks, bblocks-about, about
 * Keywords: about, story, history, quote, company
 * Description: A company story with a large opening statement, three paragraphs of history and a short customer quote with an avatar, on a light surface background.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"align":"wide","className":"bblocks-dots","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide bblocks-dots"></div>
	<!-- /wp:group -->

	<!-- wp:heading {"align":"wide","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Our story starts over twenty years ago in a cramped co-working space downtown.', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-5.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Michelle Harris', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:1;object-fit:cover;width:56px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html__( '"Working with this team let me build the kind of experiences I always imagined, without writing a line of code along the way. It\'s truly inspiring."', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Michelle Harris, Astrocode', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'We were founded by a small group of designers frustrated with the gap between visual creativity and technical implementation. What began with three people and a shared desk has grown into a team of makers who help brands launch better websites, faster.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Our breakthrough came when we turned our own design system into a product. Teams could finally build fully working pages without waiting on a developer, and word spread quickly among agencies and growing companies.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Looking ahead, we keep investing in tools that remove busywork while staying true to one belief: creativity should never be held back by technical limits. Our community keeps pushing us to make that real.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
