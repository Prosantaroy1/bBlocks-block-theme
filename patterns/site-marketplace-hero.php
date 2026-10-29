<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Hero with Showcase
 * Slug: bblocks/site-marketplace-hero
 * Categories: bblocks, bblocks-site-marketplace, bblocks-hero, banner
 * Keywords: marketplace, themes, templates, hero, showcase
 * Description: A centered headline, intro and button followed by a bordered showcase card that pairs a featured product with its preview image.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"920px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Enhance Website Aesthetics With The Best Solutions', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Transform your digital space with beautifully crafted themes. From sleek minimalism to vibrant creativity, find the perfect style to amplify your online presence.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/browse-themes/' ) ); ?>"><?php echo esc_html__( 'Browse 15K+ Themes', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","borderColor":"border-color","style":{"border":{"radius":"1rem","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide has-border-color has-border-color-border-color" style="border-width:1px;border-radius:1rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:45%">
				<!-- wp:heading {"fontSize":"large"} -->
				<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Redefining Elegance In The Digital Runway', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:list {"textColor":"muted-text","fontSize":"small","style":{"spacing":{"padding":{"left":"1rem"}}}} -->
				<ul class="wp-block-list has-muted-text-color has-text-color has-small-font-size" style="padding-left:1rem">
					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Refined layouts and sophisticated typography', 'bblocks' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Looks sharp on every device', 'bblocks' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Featured looks, zoomable images and sliders', 'bblocks' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/browse-themes/' ) ); ?>"><?php echo esc_html__( 'Add to cart', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/theme-preview-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Preview of the Conscious Luxury theme', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
