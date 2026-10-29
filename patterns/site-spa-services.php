<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Spa: Services Zig-Zag
 * Slug: bblocks/site-spa-services
 * Categories: bblocks, bblocks-site-spa, bblocks-services, services
 * Keywords: spa, massage, services, treatments, zig-zag
 * Description: Three alternating service rows, each with a faded background word, a title, text, an appointment button and a framed photo.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_services = array(
	array( __( 'Face', 'bblocks' ), __( 'Sweet Pixie Facial Massage', 'bblocks' ), 'spa-face.jpg', __( 'White orchids for a gentle facial', 'bblocks' ) ),
	array( __( 'Body', 'bblocks' ), __( 'Sweet Pixie Body Massage', 'bblocks' ), 'spa-towels.jpg', __( 'A rose resting on soft white towels', 'bblocks' ) ),
	array( __( 'Foot', 'bblocks' ), __( 'Sweet Pixie Foot Massage', 'bblocks' ), 'spa-foot.jpg', __( 'Hands holding fresh lavender for a foot soak', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<?php foreach ( $bblocks_services as $bblocks_i => $bblocks_service ) : ?>
		<?php ob_start(); ?>
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html( $bblocks_service[1] ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Our therapists combine gentle pressure, warm oils and calm surroundings so you leave feeling lighter, rested and renewed. Every treatment is tailored to you.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book Appointment', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<?php $bblocks_text = ob_get_clean(); ?>
		<?php ob_start(); ?>
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-frame"} -->
			<figure class="wp-block-image size-full bblocks-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_service[2] ) ); ?>" alt="<?php echo esc_attr( $bblocks_service[3] ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<?php $bblocks_image = ob_get_clean(); ?>

	<!-- wp:group {"align":"wide","className":"bblocks-has-watermark","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide bblocks-has-watermark" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:paragraph {"className":"bblocks-watermark"} -->
		<p class="bblocks-watermark"><?php echo esc_html( $bblocks_service[0] ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<?php
			// Both halves are block markup built above from escaped values.
			echo 1 === $bblocks_i ? $bblocks_image . $bblocks_text : $bblocks_text . $bblocks_image; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			?>
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
