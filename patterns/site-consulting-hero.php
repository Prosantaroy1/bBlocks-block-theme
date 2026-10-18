<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Hero with Portrait
 * Slug: bblocks/site-consulting-hero
 * Categories: bblocks, bblocks-site-consulting, bblocks-hero, banner
 * Keywords: consulting, coach, consultant, hero, portrait, video
 * Description: A dark hero with a two-tone headline, short intro, a portrait with a rating card, and a wide video poster with a play button below.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:heading {"level":1,"textColor":"background","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-muted-text-color"><?php echo esc_html__( 'Empowering you_', 'bblocks' ); ?></mark><br><?php echo esc_html__( 'With Strategic Direction', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'I help businesses thrive with data-driven decisions, creative campaigns and measurable results — every time.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Book a Call', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/consult-portrait.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of a business consultant in a dark suit', 'bblocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"0.6rem"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1rem","right":"1rem"},"blockGap":"0.1rem","margin":{"top":"-4rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
			<div class="wp-block-group has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:0.6rem;margin-top:-4rem;padding-top:0.75rem;padding-right:1rem;padding-bottom:0.75rem;padding-left:1rem">
				<!-- wp:paragraph {"className":"bblocks-stars"} -->
				<p class="bblocks-stars">★★★★★</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html__( '4.8/5 Client Reviews', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/consult-wide.svg' ) ); ?>","dimRatio":20,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":440,"align":"wide","style":{"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignwide" style="border-radius:1rem;min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/consult-wide.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"align":"center","className":"bblocks-play"} -->
		<p class="has-text-align-center bblocks-play">▶</p>
		<!-- /wp:paragraph -->
	</div></div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
