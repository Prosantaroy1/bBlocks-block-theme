<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: Departments Grid
 * Slug: bblocks/site-medical-services
 * Categories: bblocks, bblocks-site-medical, bblocks-services, services
 * Keywords: medical, clinic, departments, services, dental, cardiology, pediatrics
 * Description: A centered heading above a responsive grid of six department cards, each with an icon, title and short description, plus a services button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_departments = array(
	array( '✚', __( 'General Care', 'bblocks' ), __( 'Check-ups, chronic condition care and same-week visits with your family doctor.', 'bblocks' ) ),
	array( '◡', __( 'Dental', 'bblocks' ), __( 'Cleanings, fillings, whitening and gentle care for nervous patients of every age.', 'bblocks' ) ),
	array( '♥', __( 'Cardiology', 'bblocks' ), __( 'Heart screenings, ECG tests and long-term support for blood pressure and cholesterol.', 'bblocks' ) ),
	array( '☺', __( 'Pediatrics', 'bblocks' ), __( 'Friendly care for babies, children and teens, from first check-ups to school physicals.', 'bblocks' ) ),
	array( '⚗', __( 'Lab Tests', 'bblocks' ), __( 'On-site blood work and diagnostics, with most results ready within 48 hours.', 'bblocks' ) ),
	array( '✓', __( 'Vaccinations', 'bblocks' ), __( 'Routine, travel and seasonal flu vaccines for children and adults, no long waits.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Our Departments', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Complete care, close to home', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'From routine check-ups to specialist advice, our teams work together so you get the right care at the right time.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_departments as $bblocks_department ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_department[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_department[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_department[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html__( 'View All Services', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
