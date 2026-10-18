<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Testimonials: Portrait Spotlight with Logos
 * Slug: bblocks/testimonials-03
 * Categories: bblocks, bblocks-testimonials, testimonials
 * Keywords: testimonial, quote, review, portrait, logos, clients
 * Description: A featured client story with a tall portrait, a large pull quote, the full testimonial and a row of client logos underneath.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_logos = array(
	1 => __( 'Northwind', 'bblocks' ),
	2 => __( 'Mixwell', 'bblocks' ),
	3 => __( 'Futurestack', 'bblocks' ),
	4 => __( 'Fortuna', 'bblocks' ),
	5 => __( 'Heartline', 'bblocks' ),
	6 => __( 'Brightclick', 'bblocks' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"1rem","topRight":"1rem","bottomLeft":"6rem","bottomRight":"1rem"}}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-tall.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Aaron Astra', 'bblocks' ); ?>" style="border-top-left-radius:1rem;border-top-right-radius:1rem;border-bottom-left-radius:6rem;border-bottom-right-radius:1rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.15"}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:600;line-height:1.15"><?php echo esc_html__( '"We needed a new creative direction."', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"var:preset|spacing|large"} -->
			<div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( '"They transformed our entire digital presence with an approach that was both inventive and deeply strategic. The team didn\'t just deliver beautiful designs — they built a system that has scaled smoothly with our growth.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'What truly sets them apart is how they combine creative craft with technical precision. Engagement has doubled since the redesign, and clients keep complimenting our new brand experience.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'They\'re not just a service provider; they\'re a partner in our success."', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
			<p style="font-weight:700"><?php echo esc_html__( 'Aaron Astra, CCO Yellowstar', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"bblocks-logos","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide bblocks-logos">
		<?php foreach ( $bblocks_logos as $bblocks_index => $bblocks_name ) : ?>
		<!-- wp:image {"width":"132px","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-' . $bblocks_index . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_name ); ?>" style="width:132px"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
