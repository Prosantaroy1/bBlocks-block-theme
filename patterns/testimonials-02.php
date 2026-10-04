<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Testimonials: Single Featured Quote
 * Slug: bblocks/testimonials-02
 * Categories: bblocks, testimonials
 * Description: A single large, centered quote for a featured testimonial, with a name, role and company underneath.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"align":"center","fontSize":"large"} --><p class="has-text-align-center has-large-font-size">★★★★★</p><!-- /wp:paragraph -->

		<!-- wp:quote {"align":"center","className":"is-style-plain"} -->
		<blockquote class="wp-block-quote is-style-plain has-text-align-center">
			<!-- wp:paragraph {"fontSize":"xx-large"} --><p class="has-xx-large-font-size"><?php echo esc_html__( '"Switching to bBlocks made our whole site easier to keep up to date — every page finally feels like part of the same brand."', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</blockquote>
		<!-- /wp:quote -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><strong><?php echo esc_html__( 'Noah Kessler', 'bblocks' ); ?></strong> — <?php echo esc_html__( 'Head of Marketing, Aventra', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
