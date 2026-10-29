<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Case Results
 * Slug: bblocks/site-law-results
 * Categories: bblocks, bblocks-site-law, bblocks-features, featured
 * Keywords: law, case results, verdicts, settlements, wins, numbers
 * Description: A dark navy section with a heading and four case result cards, each with a large gold figure, a case type and a short summary, plus a disclaimer.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_results = array(
	array( __( '$4.2M', 'bblocks' ), __( 'Personal injury settlement', 'bblocks' ), __( 'Recovered for a cyclist seriously injured by a commercial delivery vehicle.', 'bblocks' ) ),
	array( __( 'Acquitted', 'bblocks' ), __( 'Criminal defense verdict', 'bblocks' ), __( 'Full acquittal on all counts after a two-week jury trial.', 'bblocks' ) ),
	array( __( '$18M', 'bblocks' ), __( 'Corporate acquisition', 'bblocks' ), __( 'Negotiated and closed the sale of a family-owned manufacturer.', 'bblocks' ) ),
	array( __( '100%', 'bblocks' ), __( 'Custody granted', 'bblocks' ), __( 'Secured primary custody for a parent relocating across state lines.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Case Results', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Outcomes that speak for themselves', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_results as $bblocks_result ) : ?>
		<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|accent","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--accent);border-left-width:2px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"fontFamily":"playfair-display"} -->
			<p class="has-accent-color has-text-color has-playfair-display-font-family has-xx-large-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html( $bblocks_result[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_result[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html( $bblocks_result[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
	<p class="has-text-align-center has-small-font-size" style="font-style:italic"><?php echo esc_html__( 'Past results do not guarantee a similar outcome in future cases.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
