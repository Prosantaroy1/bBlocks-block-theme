<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: Why Choose Us
 * Slug: bblocks/site-medical-why
 * Categories: bblocks, bblocks-site-medical, bblocks-about, about
 * Keywords: medical, clinic, about, why choose us, stats, numbers
 * Description: A laboratory photo beside a heading, intro, checklist of reasons and a row of four clinic statistics.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reasons = array(
	__( 'Board-certified doctors and dentists with years of experience', 'bblocks' ),
	__( 'Same-week appointments and short waiting times', 'bblocks' ),
	__( 'On-site lab, so most tests happen in a single visit', 'bblocks' ),
	__( 'Clear explanations and fair, upfront pricing', 'bblocks' ),
);

$bblocks_stats = array(
	array( __( '25+', 'bblocks' ), __( 'Years of care', 'bblocks' ) ),
	array( __( '40', 'bblocks' ), __( 'Specialists', 'bblocks' ) ),
	array( __( '15k', 'bblocks' ), __( 'Happy patients', 'bblocks' ) ),
	array( __( '98%', 'bblocks' ), __( 'Would recommend', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/medical-laboratory.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright, modern diagnostic laboratory with analysis equipment', 'bblocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Why Carely', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Modern medicine with a personal touch', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'We take time to listen, explain every option and build a care plan that fits your life. Your records, tests and specialists are all in one place.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"bblocks-list-check"} -->
			<ul class="wp-block-list bblocks-list-check">
				<?php foreach ( $bblocks_reasons as $bblocks_reason ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $bblocks_reason ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"7rem"}} -->
	<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}}} -->
			<p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800;line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
