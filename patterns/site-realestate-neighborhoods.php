<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Neighborhoods
 * Slug: bblocks/site-realestate-neighborhoods
 * Categories: bblocks, bblocks-site-realestate, bblocks-portfolio, gallery
 * Keywords: real estate, neighborhoods, locations, areas, city, grid
 * Description: A heading and a grid of four photo tiles for neighborhoods, each with the area name, number of listings and a link to the properties page.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_areas = array(
	array( 'realestate-house.jpg', __( 'Northgate', 'bblocks' ), __( '38 homes · from $520,000', 'bblocks' ) ),
	array( 'realestate-suburb.jpg', __( 'Oak Park', 'bblocks' ), __( '24 homes · from $390,000', 'bblocks' ) ),
	array( 'realestate-apartment.jpg', __( 'Riverside', 'bblocks' ), __( '51 homes · from $1,900 / month', 'bblocks' ) ),
	array( 'realestate-living.jpg', __( 'Old Town', 'bblocks' ), __( '19 homes · from $1,650 / month', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Neighborhoods', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Find your neighborhood', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Quiet streets, riverside apartments or a walkable old town: find the area that suits you.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_areas as $bblocks_area ) : ?>
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_area[0] ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":320,"contentPosition":"bottom left","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_area[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size"><?php echo esc_html( $bblocks_area[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"background","fontSize":"small"} -->
			<p class="has-background-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_area[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
			<p class="has-background-color has-text-color has-link-color has-small-font-size" style="font-weight:700"><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'View homes →', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div></div>
		<!-- /wp:cover -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
