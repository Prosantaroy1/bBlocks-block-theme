<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Selected Work
 * Slug: bblocks/site-agency-work
 * Categories: bblocks, bblocks-site-agency, bblocks-portfolio, gallery
 * Keywords: agency, portfolio, case studies, projects, work, gallery
 * Description: A heading row with a button above a two-by-two grid of project cards with rounded photos, titles and service tags.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_projects = array(
	array( 'scene-cafe.jpg', __( 'Coffee being served across a café counter', 'bblocks' ), __( 'Northstar Coffee', 'bblocks' ), __( 'Brand identity · Website', 'bblocks' ) ),
	array( 'activity-kayak.jpg', __( 'Red kayaks on the shore of a mountain lake', 'bblocks' ), __( 'Atlas Outdoor', 'bblocks' ), __( 'Campaign · Photography', 'bblocks' ) ),
	array( 'gadget-headphones.jpg', __( 'Headphones and a smartphone on a desk', 'bblocks' ), __( 'Mono Audio', 'bblocks' ), __( 'Product launch · E-commerce', 'bblocks' ) ),
	array( 'photography-spiral.jpg', __( 'Abstract spiral pattern in soft light', 'bblocks' ), __( 'Spiral Gallery', 'bblocks' ), __( 'Visual identity · Signage', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Selected work', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php echo esc_html__( 'View all projects', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<?php foreach ( array_chunk( $bblocks_projects, 2 ) as $bblocks_row ) : ?>
	<!-- wp:columns {"align":"wide","className":"bblocks-portfolio","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide bblocks-portfolio">
		<?php foreach ( $bblocks_row as $bblocks_project ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_project[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_project[1] ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_project[2] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_project[3] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
