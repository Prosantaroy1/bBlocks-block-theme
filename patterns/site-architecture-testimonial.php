<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Architecture: Client Feedback
 * Slug: bblocks/site-architecture-testimonial
 * Categories: bblocks, bblocks-site-architecture, bblocks-testimonials, testimonials
 * Keywords: architecture, testimonial, feedback, review, quote
 * Description: A centered eyebrow and heading above a single testimonial card with an avatar, name, role, quote and a gradient line along the bottom.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
	<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'What our clients have', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Feedback From Clients', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"bblocks-gradient-bottom","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group bblocks-gradient-bottom has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
		<!-- wp:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-6.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Justin Kauffman', 'bblocks' ); ?>" style="border-radius:999px;aspect-ratio:1;object-fit:cover;width:64px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600"><?php echo esc_html__( 'Justin Kauffman', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Founder & CEO', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<p class="has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html__( '"They listened to every idea, turned it into a clear plan and delivered a building that feels even better than the drawings. Our team loves coming to work every day."', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
