<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Instructors
 * Slug: bblocks/site-education-instructors
 * Categories: bblocks, bblocks-site-education, bblocks-team, team
 * Keywords: education, instructors, teachers, tutors, team
 * Description: A centered heading above four instructor cards, each with a portrait, name, subject and course count.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_people = array(
	array( '1', __( 'Maya Fernández', 'bblocks' ), __( 'UX & Product Design', 'bblocks' ), __( '6 courses · 4,200 students', 'bblocks' ) ),
	array( '2', __( 'Daniel Okafor', 'bblocks' ), __( 'Web Development', 'bblocks' ), __( '8 courses · 6,100 students', 'bblocks' ) ),
	array( '3', __( 'Arjun Mehta', 'bblocks' ), __( 'Data Science', 'bblocks' ), __( '5 courses · 3,800 students', 'bblocks' ) ),
	array( '4', __( 'Lucas Martin', 'bblocks' ), __( 'Marketing & Business', 'bblocks' ), __( '7 courses · 5,300 students', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Our instructors', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Learn from people who do the work', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Every instructor is a working professional who reviews student projects and answers questions in the course community.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_people as $bblocks_person ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.35rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full has-custom-border" style="margin-bottom:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_person[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_person[1] ); ?>" style="border-radius:0.75rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_person[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-primary-color has-text-color" style="font-weight:600"><?php echo esc_html( $bblocks_person[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_person[3] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
