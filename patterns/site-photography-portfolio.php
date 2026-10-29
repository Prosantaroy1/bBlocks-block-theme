<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Photography: Portfolio Gallery
 * Slug: bblocks/site-photography-portfolio
 * Categories: bblocks, bblocks-site-photography, bblocks-portfolio, gallery
 * Keywords: photography, portfolio, gallery, landscape, architecture, work
 * Description: A heading and short intro above a two-column gallery of captioned landscape and architecture photographs.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_photos = array(
	array( 'photography-reflection.jpg', __( 'Still Water at Dusk', 'bblocks' ), __( 'Mountain peaks reflected in a calm lake at sunset', 'bblocks' ) ),
	array( 'photography-arches.jpg', __( 'White Ribs', 'bblocks' ), __( 'Repeating white concrete arches against a pale sky', 'bblocks' ) ),
	array( 'photography-spiral.jpg', __( 'Spiral Study', 'bblocks' ), __( 'An abstract black and white spiral of a building facade', 'bblocks' ) ),
	array( 'photography-winter.jpg', __( 'The Winter Cabin', 'bblocks' ), __( 'A small wooden hut below a snowy forested mountainside', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.25em;text-transform:uppercase"><?php echo esc_html__( 'Selected Work', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Portfolio', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"muted-text"} -->
		<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Landscapes, structures and small still moments, photographed slowly and printed with care.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:gallery {"columns":2,"linkTo":"none","sizeSlug":"full","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-2 is-cropped">
		<?php foreach ( $bblocks_photos as $bblocks_photo ) : ?>
		<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_photo[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_photo[2] ); ?>" style="aspect-ratio:3/2;object-fit:cover"/><figcaption class="wp-element-caption"><?php echo esc_html( $bblocks_photo[1] ); ?></figcaption></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
