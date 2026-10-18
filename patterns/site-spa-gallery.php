<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Spa: Photo Gallery
 * Slug: bblocks/site-spa-gallery
 * Categories: bblocks, bblocks-site-spa, bblocks-portfolio, gallery
 * Keywords: spa, gallery, photos, images
 * Description: A centered heading over a faded background word and a full-width row of four rounded photos.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_photos = array(
	array( 'spa-stones.svg', __( 'Stacked stones, a candle and orange towels', 'bblocks' ) ),
	array( 'spa-towels.svg', __( 'Soft rolled towels and massage oil', 'bblocks' ) ),
	array( 'spa-bowl.svg', __( 'A bowl of flowers for a foot soak', 'bblocks' ) ),
	array( 'spa-oil.svg', __( 'Fresh herbs and essential oils', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","className":"bblocks-has-watermark","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bblocks-has-watermark" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"align":"center","className":"bblocks-watermark"} -->
	<p class="has-text-align-center bblocks-watermark"><?php echo esc_html__( 'Gallery', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php echo esc_html__( 'Photo Gallery', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignfull">
		<?php foreach ( $bblocks_photos as $bblocks_photo ) : ?>
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_photo[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_photo[1] ); ?>" style="border-radius:0.75rem;aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
