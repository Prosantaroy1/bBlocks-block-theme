<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Architecture: Get In Touch
 * Slug: bblocks/site-architecture-contact
 * Categories: bblocks, bblocks-site-architecture, bblocks-contact, contact
 * Keywords: architecture, contact, address, phone, email
 * Description: A full-width split with a building image on one side and a dark panel with address, phone, email and a directions button on the other.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_lines = array(
	array( '⌖', __( '24 Harbour Street, London, WC1B 3DG', 'bblocks' ) ),
	array( '✆', __( '+1 (555) 019 7755', 'bblocks' ) ),
	array( '✉', __( 'hello@example.com', 'bblocks' ) ),
);
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0","top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0">
	<!-- wp:column {"verticalAlignment":"stretch"} -->
	<div class="wp-block-column is-vertically-aligned-stretch">
		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-fill"} -->
		<figure class="wp-block-image size-full bblocks-fill"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arch-tower.svg' ) ); ?>" alt="<?php echo esc_attr__( 'A white modern tower with a blue glass facade', 'bblocks' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","backgroundColor":"foreground","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
		<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
		<p class="bblocks-eyebrow"><?php echo esc_html__( 'Contact', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Get In Touch', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<?php foreach ( $bblocks_lines as $bblocks_line ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"secondary"} -->
			<p class="has-secondary-color has-text-color"><?php echo esc_html( $bblocks_line[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html( $bblocks_line[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button {"gradient":"primary-to-secondary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-to-secondary-gradient-background has-background wp-element-button"><?php echo esc_html__( 'Get Directions', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
