<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: About the Firm
 * Slug: bblocks/site-law-about
 * Categories: bblocks, bblocks-site-law, bblocks-about, about
 * Keywords: law, firm, about, history, stats, numbers
 * Description: Firm story text beside a law books photo, followed by a navy strip of four statistics for years, cases won, attorneys and client satisfaction.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '25+', 'bblocks' ), __( 'Years in practice', 'bblocks' ) ),
	array( __( '1,200', 'bblocks' ), __( 'Cases won', 'bblocks' ) ),
	array( __( '18', 'bblocks' ), __( 'Attorneys', 'bblocks' ) ),
	array( __( '96%', 'bblocks' ), __( 'Client satisfaction', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'About the Firm', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'A tradition of integrity, a record of results', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Justica Law was founded on a simple belief: everyone deserves an advocate who listens, explains the law plainly and fights for the best possible outcome.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Today our attorneys serve clients across six practice areas, combining the attention of a small firm with the experience and resources of a large one.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Speak With an Attorney', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-frame"} -->
			<figure class="wp-block-image size-full bblocks-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/law-books.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A stack of leather-bound law report volumes', 'bblocks' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"7rem"}} -->
	<div class="wp-block-group alignwide has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"fontFamily":"playfair-display"} -->
			<p class="has-accent-color has-text-color has-playfair-display-font-family has-xx-large-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
			<p class="has-small-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
