<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Dark Showcase Gallery
 * Slug: bblocks/site-marketplace-gallery
 * Categories: bblocks, bblocks-site-marketplace, bblocks-portfolio, gallery
 * Keywords: marketplace, gallery, showcase, previews, dark
 * Description: A full-width dark band with six product previews in a three-column grid.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_previews = array(
	array( 2, __( 'Pet adoption theme preview', 'bblocks' ) ),
	array( 3, __( 'Software company theme preview', 'bblocks' ) ),
	array( 4, __( 'Car rental theme preview', 'bblocks' ) ),
	array( 5, __( 'Creative studio theme preview', 'bblocks' ) ),
	array( 1, __( 'Luxury fashion theme preview', 'bblocks' ) ),
	array( 6, __( 'Digital agency theme preview', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_previews as $bblocks_preview ) : ?>
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/theme-preview-' . $bblocks_preview[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_preview[1] ); ?>" style="border-radius:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
