<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Architecture: Expertise Zig-Zag
 * Slug: bblocks/site-architecture-expertise
 * Categories: bblocks, bblocks-site-architecture, bblocks-services, services
 * Keywords: architecture, interior, services, expertise, checklist
 * Description: Two alternating rows that pair an edge-to-edge image with an eyebrow, heading, short text and a circled-check list.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_rows = array(
	array(
		'image'   => 'arch-tower.jpg',
		'alt'     => __( 'A modern tower with a blue glass facade', 'bblocks' ),
		'eyebrow' => __( 'Our chief expertise', 'bblocks' ),
		'title'   => __( 'Architecture Design', 'bblocks' ),
		'first'   => 'image',
	),
	array(
		'image'   => 'arch-house.jpg',
		'alt'     => __( 'A bright living room with a blue sofa and a herringbone floor', 'bblocks' ),
		'eyebrow' => __( 'What we specialize in', 'bblocks' ),
		'title'   => __( 'Interior Design', 'bblocks' ),
		'first'   => 'text',
	),
);
$bblocks_points = array( __( 'Core level architecture design', 'bblocks' ), __( 'Planning & making sketch', 'bblocks' ), __( 'Landscape & lighting solutions', 'bblocks' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<?php foreach ( $bblocks_rows as $bblocks_row ) : ?>
		<?php ob_start(); ?>
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html( $bblocks_row['eyebrow'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $bblocks_row['title'] ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'From the first sketch to the final detail, we shape spaces around the people who use them — balancing light, materials and budget at every step.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"bblocks-list-check","fontSize":"small"} -->
			<ul class="wp-block-list bblocks-list-check has-small-font-size">
				<?php foreach ( $bblocks_points as $bblocks_point ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $bblocks_point ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<?php $bblocks_text = ob_get_clean(); ?>
		<?php ob_start(); ?>
		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-fill"} -->
			<figure class="wp-block-image size-full bblocks-fill"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_row['image'] ) ); ?>" alt="<?php echo esc_attr( $bblocks_row['alt'] ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<?php $bblocks_image = ob_get_clean(); ?>

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0","top":"0"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php
		// Both halves are block markup built above from escaped values.
		echo 'image' === $bblocks_row['first'] ? $bblocks_image . $bblocks_text : $bblocks_text . $bblocks_image; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		?>
	</div>
	<!-- /wp:columns -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
