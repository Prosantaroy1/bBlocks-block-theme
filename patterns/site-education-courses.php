<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Course Grid
 * Slug: bblocks/site-education-courses
 * Categories: bblocks, bblocks-site-education, bblocks-services, services
 * Keywords: education, courses, catalog, lessons, enroll, grid
 * Description: A heading above six course cards, each with a colored header, a category pill, a title, lessons and duration, a price and an Enroll button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_courses = array(
	array( 'primary', 'background', __( 'Beginner', 'bblocks' ), __( 'UX', 'bblocks' ), __( 'Design', 'bblocks' ), __( 'UX Design Foundations', 'bblocks' ), __( '24 lessons', 'bblocks' ), __( '6 weeks', 'bblocks' ), __( '$89', 'bblocks' ) ),
	array( 'foreground', 'background', __( 'Beginner', 'bblocks' ), __( 'JS', 'bblocks' ), __( 'Development', 'bblocks' ), __( 'Modern JavaScript from Scratch', 'bblocks' ), __( '36 lessons', 'bblocks' ), __( '8 weeks', 'bblocks' ), __( '$119', 'bblocks' ) ),
	array( 'accent', 'foreground', __( 'Intermediate', 'bblocks' ), __( 'DA', 'bblocks' ), __( 'Data', 'bblocks' ), __( 'Data Analysis with Python', 'bblocks' ), __( '30 lessons', 'bblocks' ), __( '7 weeks', 'bblocks' ), __( '$109', 'bblocks' ) ),
	array( 'secondary', 'background', __( 'All levels', 'bblocks' ), __( 'DM', 'bblocks' ), __( 'Marketing', 'bblocks' ), __( 'Digital Marketing Essentials', 'bblocks' ), __( '18 lessons', 'bblocks' ), __( '4 weeks', 'bblocks' ), __( '$69', 'bblocks' ) ),
	array( 'accent', 'foreground', __( 'Intermediate', 'bblocks' ), __( 'PM', 'bblocks' ), __( 'Business', 'bblocks' ), __( 'Project Management Basics', 'bblocks' ), __( '20 lessons', 'bblocks' ), __( '5 weeks', 'bblocks' ), __( '$79', 'bblocks' ) ),
	array( 'primary', 'background', __( 'Beginner', 'bblocks' ), __( 'EN', 'bblocks' ), __( 'Languages', 'bblocks' ), __( 'Business English Writing', 'bblocks' ), __( '16 lessons', 'bblocks' ), __( '4 weeks', 'bblocks' ), __( '$59', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Popular courses', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Pick a course and start learning today', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html__( 'View All Courses', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_courses as $bblocks_course ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.85rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:group {"backgroundColor":"<?php echo esc_attr( $bblocks_course[0] ); ?>","textColor":"<?php echo esc_attr( $bblocks_course[1] ); ?>","style":{"border":{"radius":"0.75rem"},"dimensions":{"minHeight":"9rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group has-<?php echo esc_attr( $bblocks_course[1] ); ?>-color has-<?php echo esc_attr( $bblocks_course[0] ); ?>-background-color has-text-color has-background" style="border-radius:0.75rem;min-height:9rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
				<p class="has-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_course[2] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"800","lineHeight":"1"}}} -->
				<p class="has-xx-large-font-size" style="font-weight:800;line-height:1"><?php echo esc_html( $bblocks_course[3] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"className":"bblocks-badge"} -->
			<p class="bblocks-badge"><?php echo esc_html( $bblocks_course[4] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_course[5] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_course[6] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_course[7] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--small)">
				<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-large-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_course[8] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php echo esc_html__( 'Enroll', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
