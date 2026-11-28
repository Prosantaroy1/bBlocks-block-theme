<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Testimonial
 * Slug: bblocks/site-agency-testimonial
 * Categories: bblocks, bblocks-site-agency, bblocks-testimonials, testimonials
 * Keywords: agency, testimonial, quote, client, review, highlight
 * Description: A bright accent-colored band with a large client quote, a portrait, the client's name and company.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"accent","textColor":"foreground","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"920px"}} -->
<div class="wp-block-group alignfull has-foreground-color has-accent-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.25","letterSpacing":"-0.01em"}}} -->
	<p class="has-xx-large-font-size" style="font-weight:600;letter-spacing:-0.01em;line-height:1.25"><?php echo esc_html__( '“Kindred understood our business better than we did. The new brand and website doubled our enquiries in three months.”', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"width":"56px","height":"56px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-avatar"} -->
		<figure class="wp-block-image size-full is-resized bblocks-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-5.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Hannah Cole', 'bblocks' ); ?>" style="object-fit:cover;width:56px;height:56px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><strong><?php echo esc_html__( 'Hannah Cole', 'bblocks' ); ?></strong><br><?php echo esc_html__( 'Founder, Northstar Coffee', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
