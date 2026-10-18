<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Client Words of Trust
 * Slug: bblocks/site-consulting-testimonial
 * Categories: bblocks, bblocks-site-consulting, bblocks-testimonials, testimonials
 * Keywords: consulting, testimonial, client, review, results
 * Description: A centered heading above a stacked testimonial card with the client's photo, name, role, quote and a key result.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"520px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'My Client\'s Words of Trust', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"bblocks-stack-card","backgroundColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group bblocks-stack-card has-background-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"40px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
			<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Emily Carter', 'bblocks' ); ?>" style="border-radius:999px;aspect-ratio:1;object-fit:cover;width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Emily Carter', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Founder, Horizon Studios', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo esc_html__( 'As a small business owner, I was overwhelmed with decisions. Working together simplified everything — from strategy to implementation — and helped me make confident choices that truly moved the needle.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-x-large-font-size" style="font-weight:700"><?php echo esc_html__( '3x', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Boost in lead generation through campaigns', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
