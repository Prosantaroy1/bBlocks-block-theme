<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Newsletter Signup
 * Slug: bblocks/utility-newsletter
 * Categories: bblocks, bblocks-utility
 * Keywords: newsletter, subscribe, email, signup, updates, cta
 * Description: A split newsletter section with a heading and short text on one side and a subscribe button with a privacy note on the other.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","className":"is-style-card","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide is-style-card has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Get our newsletter', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Fresh ideas, product news and the occasional behind-the-scenes story, delivered to your inbox about once a month.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php echo esc_html__( 'Subscribe by email', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"align":"right","textColor":"muted-text","fontSize":"small"} -->
				<p class="has-text-align-right has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'No spam. Unsubscribe at any time.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
