<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Architecture: Project Grid
 * Slug: bblocks/site-architecture-portfolio
 * Categories: bblocks, bblocks-site-architecture, bblocks-portfolio, gallery
 * Keywords: architecture, portfolio, projects, gallery, masonry
 * Description: A centered eyebrow and heading above a two-row masonry grid of project images and a View All button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_rows = array(
	array(
		array( array( 'architecture-1.jpg', '3/4', __( 'Looking up at a glass tower', 'bblocks' ) ) ),
		array( array( 'architecture-2.jpg', '3/4', __( 'A building with a colorful glass facade', 'bblocks' ) ) ),
		array( array( 'architecture-3.jpg', '16/10', __( 'A dark facade with rows of angled windows', 'bblocks' ) ), array( 'architecture-4.jpg', '16/10', __( 'Brick and glass skyscrapers in the mist', 'bblocks' ) ) ),
	),
	array(
		array( array( 'arch-skyline.jpg', '16/10', __( 'City towers lit by the morning sun', 'bblocks' ) ), array( 'arch-classic.jpg', '16/10', __( 'A classical brick villa with a white portico', 'bblocks' ) ) ),
		array( array( 'arch-tower.jpg', '3/4', __( 'A glass tower reflecting the clouds', 'bblocks' ) ) ),
		array( array( 'arch-house.jpg', '3/4', __( 'A bright living room with a blue sofa', 'bblocks' ) ) ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
	<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Portfolio', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Our Recent Projects', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<?php foreach ( $bblocks_rows as $bblocks_row ) : ?>
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_row as $bblocks_col ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column">
			<?php foreach ( $bblocks_col as $bblocks_img ) : ?>
			<!-- wp:image {"aspectRatio":"<?php echo esc_attr( $bblocks_img[1] ); ?>","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_img[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_img[2] ); ?>" style="aspect-ratio:<?php echo esc_attr( $bblocks_img[1] ); ?>;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
	<?php endforeach; ?>

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"gradient":"primary-to-secondary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-primary-to-secondary-gradient-background has-background wp-element-button" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><?php echo esc_html__( 'View All', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
