<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Student Testimonials
 * Slug: bblocks/site-education-testimonials
 * Categories: bblocks, bblocks-site-education, bblocks-testimonials, testimonials
 * Keywords: education, students, reviews, testimonials, quotes
 * Description: Three student review cards on a tinted band, each with a star rating, a quote and the student's photo, name and course.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reviews = array(
	array( '5', __( '"The projects made all the difference. Three months after finishing the UX course I had a portfolio and my first design job."', 'bblocks' ), __( 'Hannah Lee', 'bblocks' ), __( 'UX Design Foundations', 'bblocks' ) ),
	array( '6', __( '"Short lessons fit around my shifts, and the instructor answered every question I posted. I finally understand JavaScript."', 'bblocks' ), __( 'Omar Haddad', 'bblocks' ), __( 'Modern JavaScript from Scratch', 'bblocks' ) ),
	array( '3', __( '"Clear, practical and friendly. Our whole team took the data course together and now we build our own reports."', 'bblocks' ), __( 'Marco Rossi', 'bblocks' ), __( 'Data Analysis with Python', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Student stories', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Loved by learners around the world', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_reviews as $bblocks_review ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"className":"bblocks-stars"} -->
			<p class="bblocks-stars">★★★★★</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $bblocks_review[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-avatar"} -->
				<figure class="wp-block-image size-full is-resized bblocks-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_review[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_review[2] ); ?>" style="object-fit:cover;width:48px;height:48px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
					<p style="font-weight:600"><?php echo esc_html( $bblocks_review[2] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_review[3] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
