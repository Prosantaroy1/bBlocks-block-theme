<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Places Directory
 * Slug: bblocks/site-resort-places
 * Categories: bblocks, bblocks-site-resort, bblocks-features, featured
 * Keywords: resort, places, map, directory, amenities
 * Description: A full-width sage band with a white card listing the places around the resort beside a large photo.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_places = array( __( 'Reception', 'bblocks' ), __( 'Entrance', 'bblocks' ), __( 'Park View', 'bblocks' ), __( 'Playground', 'bblocks' ), __( 'Garden Zoo', 'bblocks' ), __( 'Fun Zone', 'bblocks' ) );
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
			<!-- wp:group {"backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Around the Resort', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"className":"bblocks-list-chevron"} -->
				<ul class="wp-block-list bblocks-list-chevron">
					<?php foreach ( $bblocks_places as $bblocks_place ) : ?>
					<!-- wp:list-item -->
					<li><?php echo esc_html( $bblocks_place ); ?></li>
					<!-- /wp:list-item -->
					<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-pool.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Palm trees beside the resort pool', 'bblocks' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
