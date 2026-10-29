<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: Doctors
 * Slug: bblocks/site-medical-doctors
 * Categories: bblocks, bblocks-site-medical, bblocks-team, team
 * Keywords: medical, clinic, doctors, dentists, team, staff
 * Description: A heading and intro above four doctor cards with an illustrated portrait, name, specialty and short bio, plus an appointment button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_doctors = array(
	array( 'portrait-1.svg', __( 'Dr. Amelia Hart', 'bblocks' ), __( 'Family Medicine', 'bblocks' ), __( '15 years caring for families, with a focus on prevention.', 'bblocks' ) ),
	array( 'portrait-2.svg', __( 'Dr. Daniel Okafor', 'bblocks' ), __( 'Cardiologist', 'bblocks' ), __( 'Heart health screenings and long-term cardiac care.', 'bblocks' ) ),
	array( 'portrait-3.svg', __( 'Dr. Sofia Lindqvist', 'bblocks' ), __( 'Pediatrician', 'bblocks' ), __( 'Calm, playful visits for babies, children and teens.', 'bblocks' ) ),
	array( 'portrait-4.svg', __( 'Dr. Ravi Menon', 'bblocks' ), __( 'Dental Surgeon', 'bblocks' ), __( 'Gentle general and cosmetic dentistry for all ages.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Our Doctors', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Meet the people who care for you', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book an Appointment', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_doctors as $bblocks_doctor ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full has-custom-border" style="margin-bottom:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_doctor[0] ) ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: %s: Doctor's name. */ __( 'Illustrated portrait of %s', 'bblocks' ), $bblocks_doctor[1] ) ); ?>" style="border-radius:0.75rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_doctor[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_doctor[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_doctor[3] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
