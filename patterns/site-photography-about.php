<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Photography: About the Photographer
 * Slug: bblocks/site-photography-about
 * Categories: bblocks, bblocks-site-photography, bblocks-about, about
 * Keywords: photography, photographer, about, bio, story, signature
 * Description: A camera photo beside a short photographer bio, a handwritten-style signature line and a contact button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"2px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photography-viewfinder.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A sunset seen through the viewfinder of a vintage camera', 'bblocks' ); ?>" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.25em;text-transform:uppercase"><?php echo esc_html__( 'About Me', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'I photograph the light, not just the place.', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'I’m Elena, the photographer behind Lumen Studio. For twelve years I have chased early mornings in the mountains, quiet streets at dusk and the clean lines of modern buildings.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Whether it is a portrait session, your event or a commercial brief, I work calmly and carefully, so you get images that feel natural and last for years.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"primary","fontSize":"x-large","fontFamily":"playfair-display","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
			<p class="has-primary-color has-text-color has-playfair-display-font-family has-x-large-font-size" style="font-style:italic;font-weight:400"><?php echo esc_html__( '— Elena Marlowe', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Work With Me', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
