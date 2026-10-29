<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Gallery
 * Slug: bblocks/site-restaurant-gallery
 * Categories: bblocks, bblocks-site-restaurant, bblocks-portfolio, gallery
 * Keywords: restaurant, gallery, photos, food, dining room
 * Description: A centered heading above a wide four-photo gallery of the dining room and signature dishes.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_photos = array(
	array( 'restaurant-bistro.jpg', __( 'The bistro dining room with set tables', 'bblocks' ) ),
	array( 'restaurant-main.jpg', __( 'A plated main course with a rich sauce', 'bblocks' ) ),
	array( 'restaurant-pizza.jpg', __( 'A wood-fired flatbread with rocket', 'bblocks' ) ),
	array( 'restaurant-dessert.jpg', __( 'A raspberry panna cotta dessert', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Gallery', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'A Look Inside Savora', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:gallery {"columns":4,"linkTo":"none","sizeSlug":"full","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped">
		<?php foreach ( $bblocks_photos as $bblocks_photo ) : ?>
		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_photo[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_photo[1] ); ?>" style="border-radius:0.5rem;aspect-ratio:3/4;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
