<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: Patient Testimonials
 * Slug: bblocks/site-medical-testimonials
 * Categories: bblocks, bblocks-site-medical, bblocks-testimonials, testimonials
 * Keywords: medical, clinic, patients, reviews, testimonials, quotes
 * Description: A centered heading above three patient review cards, each with a star rating, a short quote and the patient's name and visit type.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reviews = array(
	array( __( '“I used to dread the dentist. The team at Carely explained every step and I didn’t feel a thing. I finally look forward to check-ups.”', 'bblocks' ), __( 'Hannah M.', 'bblocks' ), __( 'Dental patient', 'bblocks' ) ),
	array( __( '“Dr. Hart spotted a problem early and had me seeing a cardiologist down the hall the same week. Fast, thorough and genuinely kind.”', 'bblocks' ), __( 'George T.', 'bblocks' ), __( 'Cardiology patient', 'bblocks' ) ),
	array( __( '“Our kids actually like going to the doctor now. Booking is easy, waits are short and the nurses are wonderful with little ones.”', 'bblocks' ), __( 'Priya and Sam K.', 'bblocks' ), __( 'Pediatrics parents', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Patient Stories', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Trusted by families across town', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_reviews as $bblocks_review ) : ?>
		<!-- wp:group {"className":"is-style-card","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"className":"bblocks-stars"} -->
			<p class="bblocks-stars">★★★★★</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $bblocks_review[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
				<p style="font-weight:700"><?php echo esc_html( $bblocks_review[1] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_review[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
