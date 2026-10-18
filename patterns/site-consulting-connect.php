<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Let's Connect
 * Slug: bblocks/site-consulting-connect
 * Categories: bblocks, bblocks-site-consulting, bblocks-cta, call-to-action
 * Keywords: consulting, contact, social, connect, cta
 * Description: A dark full-width band with a large Let's Connect heading and social media links.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"huge"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Let\'s Connect ↗', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only">
		<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

		<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

		<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->

		<!-- wp:social-link {"url":"https://www.pinterest.com/","service":"pinterest"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
