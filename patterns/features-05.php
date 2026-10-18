<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Features: Image Cards
 * Slug: bblocks/features-05
 * Categories: bblocks, bblocks-features, features
 * Keywords: features, cards, images, services, products
 * Description: A split header with a heading and intro text, followed by three white feature cards with a title, description and image on a light surface background.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_cards = array(
	array( 'scene-meeting.svg', __( 'Visual Page Builder', 'bblocks' ), __( 'Build sophisticated layouts and working prototypes with a drag-and-drop editor. Connect sections, set behaviors and preview in real time — all without touching code.', 'bblocks' ), __( 'A team planning a project around a table', 'bblocks' ) ),
	array( 'scene-cafe.svg', __( 'Component Library', 'bblocks' ), __( 'Start from hundreds of responsive building blocks that adapt to your brand. Every piece is accessible, fully customizable and ready to drop into a page.', 'bblocks' ), __( 'Colleagues collaborating at a counter', 'bblocks' ) ),
	array( 'scene-shop.svg', __( 'Design Library', 'bblocks' ), __( 'Browse ready-made templates that match any visual identity, from social graphics to full presentation layouts — each one professionally crafted and easy to edit.', 'bblocks' ), __( 'A small business team serving customers', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Features you can grow and scale with', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'From startups to industry leaders, we help companies transform their digital presence and get exceptional results. Here are the tools that help you grow.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_cards as $bblocks_card ) : ?>
		<!-- wp:group {"backgroundColor":"background","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"600"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_card[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html( $bblocks_card[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full has-custom-border" style="margin-top:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_card[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_card[3] ); ?>" style="border-radius:0.75rem;aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
