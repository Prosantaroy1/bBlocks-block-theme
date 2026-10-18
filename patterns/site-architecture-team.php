<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Architecture: Team Portraits
 * Slug: bblocks/site-architecture-team
 * Categories: bblocks, bblocks-site-architecture, bblocks-team, team
 * Keywords: architecture, team, architects, people, portraits
 * Description: A centered eyebrow and heading above three tall team portraits.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_people = array(
	array( 2, __( 'Portrait of architect Daniel Reyes', 'bblocks' ) ),
	array( 1, __( 'Portrait of architect Laura Taylor', 'bblocks' ) ),
	array( 5, __( 'Portrait of architect Amy Glacier', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
	<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Our expert team', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Meet Our Architects', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_people as $bblocks_person ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_person[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_person[1] ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
