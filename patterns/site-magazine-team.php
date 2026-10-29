<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Magazine: Editorial Team
 * Slug: bblocks/site-magazine-team
 * Categories: bblocks, bblocks-site-magazine, bblocks-team, team
 * Keywords: magazine, about, editors, writers, newsroom, team, people
 * Description: An about-the-newsroom intro above a four-up grid of editor portraits, each with name, beat and a one-line bio.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_editors = array(
	array( 1, __( 'Portrait of editor-in-chief Maya Holloway', 'bblocks' ), __( 'Maya Holloway', 'bblocks' ), __( 'Editor-in-chief', 'bblocks' ), __( 'Sets the agenda each morning and still edits every front page herself.', 'bblocks' ) ),
	array( 2, __( 'Portrait of culture editor Daniel Okafor', 'bblocks' ), __( 'Daniel Okafor', 'bblocks' ), __( 'Culture', 'bblocks' ), __( 'Covers music, museums and the people who keep cities interesting.', 'bblocks' ) ),
	array( 5, __( 'Portrait of science editor Lena Fischer', 'bblocks' ), __( 'Lena Fischer', 'bblocks' ), __( 'Science & Tech', 'bblocks' ), __( 'Explains new research and technology without the jargon.', 'bblocks' ) ),
	array( 4, __( 'Portrait of travel editor Sam Rivera', 'bblocks' ), __( 'Sam Rivera', 'bblocks' ), __( 'Travel', 'bblocks' ), __( 'Files dispatches from trails, coastlines and overnight trains.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|foreground","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:3px;padding-top:var(--wp--preset--spacing--medium)">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Our newsroom', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0.5rem"}}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0.5rem"><?php echo esc_html__( 'The people behind Daily Ink', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php echo esc_html__( 'Daily Ink is an independent publication written by a small team of editors and contributors. We report carefully, correct openly and never let advertisers decide what we cover.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Have a tip, a correction or a story we should be telling? Our editors read every message.', 'bblocks' ); ?> <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get in touch', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_editors as $bblocks_editor ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_editor[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_editor[1] ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<p class="has-primary-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html( $bblocks_editor[3] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_editor[2] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_editor[4] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
