<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Attorneys
 * Slug: bblocks/site-law-attorneys
 * Categories: bblocks, bblocks-site-law, bblocks-team, team
 * Keywords: law, attorneys, lawyers, partners, team, people
 * Description: A centered heading above four attorney cards with an illustrated portrait, name, role, practice focus and a LinkedIn link.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_attorneys = array(
	array( 'portrait-5.svg', __( 'Eleanor Whitfield', 'bblocks' ), __( 'Founding Partner', 'bblocks' ), __( 'Corporate & Real Estate', 'bblocks' ) ),
	array( 'portrait-2.svg', __( 'Marcus Bennett', 'bblocks' ), __( 'Senior Partner', 'bblocks' ), __( 'Criminal Defense', 'bblocks' ) ),
	array( 'portrait-6.svg', __( 'Isabel Moreno', 'bblocks' ), __( 'Partner', 'bblocks' ), __( 'Immigration & Family Law', 'bblocks' ) ),
	array( 'portrait-4.svg', __( 'Thomas Reid', 'bblocks' ), __( 'Associate', 'bblocks' ), __( 'Personal Injury', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Our Attorneys', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Advocates you can rely on', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Seasoned trial lawyers and trusted advisers, each focused on a core area of practice.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_attorneys as $bblocks_attorney ) : ?>
		<!-- wp:group {"backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_attorney[0] ) ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: %s: Attorney's name. */ __( 'Illustrated portrait of %s', 'bblocks' ), $bblocks_attorney[1] ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_attorney[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html( $bblocks_attorney[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_attorney[3] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"primary","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
