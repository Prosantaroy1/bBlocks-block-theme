<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Practice Areas
 * Slug: bblocks/site-law-practice
 * Categories: bblocks, bblocks-site-law, bblocks-services, services
 * Keywords: law, practice areas, corporate, family, criminal defense, immigration
 * Description: A heading and intro above a grid of six practice area cards with a numbered label, title and short description, plus a consultation button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_areas = array(
	array( __( '01', 'bblocks' ), __( 'Corporate Law', 'bblocks' ), __( 'Formation, contracts, mergers and day-to-day counsel for growing companies.', 'bblocks' ) ),
	array( __( '02', 'bblocks' ), __( 'Family Law', 'bblocks' ), __( 'Divorce, custody and support matters handled with discretion and care.', 'bblocks' ) ),
	array( __( '03', 'bblocks' ), __( 'Criminal Defense', 'bblocks' ), __( 'Vigorous defense at every stage, from investigation through trial and appeal.', 'bblocks' ) ),
	array( __( '04', 'bblocks' ), __( 'Real Estate', 'bblocks' ), __( 'Purchases, leases, title issues and property disputes for owners and investors.', 'bblocks' ) ),
	array( __( '05', 'bblocks' ), __( 'Immigration', 'bblocks' ), __( 'Visas, green cards and citizenship applications guided from start to finish.', 'bblocks' ) ),
	array( __( '06', 'bblocks' ), __( 'Personal Injury', 'bblocks' ), __( 'Fair compensation after accidents, with no fee unless we win your case.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Practice Areas', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Experienced in the matters that shape your life', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Whether you are building a business, protecting your family or facing a serious charge, a dedicated attorney will guide you through every step.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_areas as $bblocks_area ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"top":{"color":"var:preset|color|accent","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-top-color:var(--wp--preset--color--accent);border-top-width:3px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em"}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.1em"><?php echo esc_html( $bblocks_area[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $bblocks_area[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_area[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Discuss Your Case', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
