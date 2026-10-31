<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Neighborhoods We Serve
 * Slug: bblocks/site-rentals-areas
 * Categories: bblocks, bblocks-site-rentals, bblocks-features, featured
 * Keywords: rentals, neighborhoods, areas, locations, town, map, cards
 * Description: A centered heading above three rounded photo cards for the neighborhoods served, each with a title and a short description over a dark overlay.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_areas = array(
	array( 'rentals-town.jpg', __( 'Riverside', 'bblocks' ), __( 'Our oldest streets, right on the water. Walk to cafés, the boat launch and the summer concerts in the park.', 'bblocks' ) ),
	array( 'rentals-commercial.jpg', __( 'Old Mill District', 'bblocks' ), __( 'The busy heart of Millbrook, with upstairs apartments, Main Street shops and offices above the market square.', 'bblocks' ) ),
	array( 'rentals-exterior.jpg', __( 'North Hill', 'bblocks' ), __( 'Quiet, leafy blocks of garden apartments and family homes close to schools, trails and the community pool.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Where we rent', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Homes in Every Corner of Millbrook', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Our buildings sit in three friendly neighborhoods, each with its own pace and plenty of local favorites nearby.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_areas as $bblocks_area ) : ?>
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_area[0] ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_area[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size"><?php echo esc_html( $bblocks_area[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"background","fontSize":"small"} -->
			<p class="has-background-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_area[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div></div>
		<!-- /wp:cover -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
