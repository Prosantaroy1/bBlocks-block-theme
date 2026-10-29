<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Our Approach
 * Slug: bblocks/site-law-approach
 * Categories: bblocks, bblocks-site-law, bblocks-features, featured
 * Keywords: law, process, approach, steps, how we work
 * Description: A gavel photo beside a heading and three numbered steps explaining how the firm handles a case from first call to resolution.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_steps = array(
	array( __( 'I', 'bblocks' ), __( 'Listen', 'bblocks' ), __( 'A free, confidential consultation to understand your situation and goals.', 'bblocks' ) ),
	array( __( 'II', 'bblocks' ), __( 'Plan', 'bblocks' ), __( 'A clear strategy, realistic timeline and written fee estimate before work begins.', 'bblocks' ) ),
	array( __( 'III', 'bblocks' ), __( 'Resolve', 'bblocks' ), __( 'Skilled negotiation or determined advocacy in court — whatever your case needs.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/law-gavel.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A wooden judge’s gavel resting beside leather-bound books', 'bblocks' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Our Approach', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Clear advice, every step of the way', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<?php foreach ( $bblocks_steps as $bblocks_step ) : ?>
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--medium)">
				<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"3.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"textColor":"primary","fontSize":"x-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"fontFamily":"playfair-display"} -->
					<p class="has-primary-color has-text-color has-playfair-display-font-family has-x-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html( $bblocks_step[0] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_step[1] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"muted-text"} -->
					<p class="has-muted-text-color has-text-color"><?php echo esc_html( $bblocks_step[2] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
