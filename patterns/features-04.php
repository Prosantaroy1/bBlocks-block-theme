<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Features: Card Grid with Action
 * Slug: bblocks/features-04
 * Categories: bblocks, bblocks-features, features
 * Keywords: features, cards, grid, icons, services
 * Description: A heading with a call-to-action button followed by six feature cards, each with an icon tile, title, short description and a Read More button. The grid reflows from three to one column.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_features = array(
	array( '◉', __( 'Visual Building', 'bblocks' ), __( 'Create unlimited pages and layouts with a drag-and-drop editor and a real-time preview of every change.', 'bblocks' ) ),
	array( '◆', __( 'Design System', 'bblocks' ), __( 'Keep your brand consistent with shared colors, type styles and reusable sections across the whole site.', 'bblocks' ) ),
	array( '@', __( 'Team Collaboration', 'bblocks' ), __( 'Work alongside your team with roles, feedback and revision history kept together in one place.', 'bblocks' ) ),
	array( '↗', __( 'Analytics Dashboard', 'bblocks' ), __( 'Track engagement, watch how pages perform and turn the numbers into better design decisions.', 'bblocks' ) ),
	array( '‹›', __( 'Developer Handoff', 'bblocks' ), __( 'Export clean, production-ready markup with the specs and documentation your developers need.', 'bblocks' ) ),
	array( '?', __( 'Priority Support', 'bblocks' ), __( 'Get direct access to our experts with priority replies and a personal onboarding session.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Features you can scale with', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started Today', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_features as $bblocks_feature ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_feature[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}},"typography":{"fontWeight":"600"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);font-weight:600"><?php echo esc_html( $bblocks_feature[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html( $bblocks_feature[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"backgroundColor":"background","textColor":"foreground","fontSize":"small"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button"><?php echo esc_html__( 'Read More', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
