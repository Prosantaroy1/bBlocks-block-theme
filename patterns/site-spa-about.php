<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Spa: About & Experts
 * Slug: bblocks/site-spa-about
 * Categories: bblocks, bblocks-site-spa, bblocks-about, about
 * Keywords: spa, about, team, experts, therapists
 * Description: A deep purple band with a framed photo and introduction, followed by a heading and three tall portraits of the spa's experts, each with a faded background word.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_experts = array(
	array( 1, __( 'Portrait of therapist Laura', 'bblocks' ) ),
	array( 2, __( 'Portrait of therapist Marcus', 'bblocks' ) ),
	array( 5, __( 'Portrait of therapist Amy', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"align":"wide","className":"bblocks-has-watermark","style":{"spacing":{"padding":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide bblocks-has-watermark" style="padding-top:var(--wp--preset--spacing--large)">
		<!-- wp:paragraph {"className":"bblocks-watermark"} -->
		<p class="bblocks-watermark"><?php echo esc_html__( 'About', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"bottomRight":"2rem"}}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/spa-oil.svg' ) ); ?>" alt="<?php echo esc_attr__( 'A mortar of fresh herbs beside bottles of essential oil', 'bblocks' ); ?>" style="border-bottom-right-radius:2rem;aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:heading {"textColor":"accent","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-accent-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Sweet Pixie Is Sweet & Soft For Everyone', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php echo esc_html__( 'We offer the most effective, soothing and enjoyable treatments in town. Each therapy is designed to restore balance, ease tension and leave you glowing — because no two bodies are the same.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"accent","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-color has-text-color wp-element-button"><?php echo esc_html__( 'Find Out More', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"bblocks-has-watermark","style":{"spacing":{"padding":{"top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide bblocks-has-watermark" style="padding-top:var(--wp--preset--spacing--large)">
		<!-- wp:paragraph {"className":"bblocks-watermark"} -->
		<p class="bblocks-watermark"><?php echo esc_html__( 'Team', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","textColor":"accent","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Meet Our Experts', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns">
			<?php foreach ( $bblocks_experts as $bblocks_expert ) : ?>
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_expert[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_expert[1] ); ?>" style="border-radius:0.75rem;aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
