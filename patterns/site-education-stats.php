<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Stats Band
 * Slug: bblocks/site-education-stats
 * Categories: bblocks, bblocks-site-education, bblocks-about, about
 * Keywords: education, stats, numbers, students, courses
 * Description: A full-width library photo band with a dark overlay and four large figures for students, courses, instructors and satisfaction.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '48K+', 'bblocks' ), __( 'Students enrolled', 'bblocks' ) ),
	array( __( '120+', 'bblocks' ), __( 'Online courses', 'bblocks' ) ),
	array( __( '35', 'bblocks' ), __( 'Expert instructors', 'bblocks' ) ),
	array( __( '97%', 'bblocks' ), __( 'Learner satisfaction', 'bblocks' ) ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/education-library.jpg' ) ); ?>","dimRatio":85,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":360,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-background-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/education-library.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","fontSize":"huge","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}}} -->
			<p class="has-text-align-center has-huge-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}}} -->
			<p class="has-text-align-center" style="font-weight:500"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
