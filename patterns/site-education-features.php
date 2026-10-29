<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Why Learn With Us
 * Slug: bblocks/site-education-features
 * Categories: bblocks, bblocks-site-education, bblocks-features, features
 * Keywords: education, benefits, features, why us, learning
 * Description: A heading, intro and classroom photo beside four numbered benefits, each with a short title and description.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_features = array(
	array( __( '01', 'bblocks' ), __( 'Learn by doing', 'bblocks' ), __( 'Every module ends with a hands-on project, so you build a portfolio while you learn instead of only watching videos.', 'bblocks' ) ),
	array( __( '02', 'bblocks' ), __( 'Expert instructors', 'bblocks' ), __( 'Courses are taught by designers, developers and managers who use these skills in their day jobs.', 'bblocks' ) ),
	array( __( '03', 'bblocks' ), __( 'Flexible schedule', 'bblocks' ), __( 'Short lessons you can take on any device, at any hour. Pause, rewatch and pick up exactly where you left off.', 'bblocks' ) ),
	array( __( '04', 'bblocks' ), __( 'Certificates that count', 'bblocks' ), __( 'Finish a course to earn a shareable certificate you can add to your résumé and professional profiles.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"42%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Why learn with us', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'A smarter way to build new skills', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Edunova combines clear video lessons, guided projects and friendly feedback, so you always know what to do next and why it matters.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.25rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/education-classroom.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright, empty classroom with rows of desks and a whiteboard', 'bblocks' ); ?>" style="border-radius:1.25rem;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"15rem"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_features as $bblocks_feature ) : ?>
				<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:paragraph {"className":"bblocks-icon","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="bblocks-icon" style="font-weight:700"><?php echo esc_html( $bblocks_feature[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_feature[1] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_feature[2] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
