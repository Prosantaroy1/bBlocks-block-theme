<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Maintenance Message
 * Slug: bblocks/utility-maintenance
 * Categories: bblocks, bblocks-utility
 * Keywords: maintenance, down, offline, upgrade, back soon
 * Description: A calm, centered maintenance notice in a soft card with a short explanation, an estimated return time and a contact link.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:cover {"dimRatio":100,"overlayColor":"surface","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-card has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Scheduled maintenance', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'We will be back shortly', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Our website is getting a few improvements behind the scenes. Thank you for your patience while we make things faster and better for you.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"border-color"} -->
		<hr class="wp-block-separator has-text-color has-border-color-color has-alpha-channel-opacity has-border-color-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600"><?php echo esc_html__( 'Estimated return: within the next two hours.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Need something urgently?', 'bblocks' ); ?> <a href="mailto:hello@example.com"><?php echo esc_html__( 'Email hello@example.com', 'bblocks' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
