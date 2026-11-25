<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Hero
 * Slug: bblocks/site-agency-hero
 * Categories: bblocks, bblocks-site-agency, bblocks-hero, banner
 * Keywords: agency, studio, design, branding, hero, headline, image
 * Description: A bold agency hero with a pill label, a very large headline, an intro with two buttons and a wide rounded photo below.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"980px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"backgroundColor":"accent","textColor":"foreground","fontSize":"small","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.9rem","right":"0.9rem"}},"typography":{"fontWeight":"600"}}} -->
			<p class="has-foreground-color has-accent-background-color has-text-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.35rem;padding-right:0.9rem;padding-bottom:0.35rem;padding-left:0.9rem;font-weight:600"><?php echo esc_html__( 'Independent design studio · Since 2014', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"lineHeight":"1.02"}}} -->
		<h1 class="wp-block-heading has-huge-font-size" style="line-height:1.02"><?php echo esc_html__( 'We design brands and websites people remember.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%">
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"large"} -->
			<p class="has-muted-text-color has-text-color has-large-font-size"><?php echo esc_html__( 'Kindred is a small team of strategists, designers and developers helping ambitious businesses look as good as they are.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Start a project', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php echo esc_html__( 'See our work', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
	<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photography-arches.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'White arched architecture in bright sunlight', 'bblocks' ); ?>" style="border-radius:20px;aspect-ratio:21/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
