<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Split with Visual Panel
 * Slug: bblocks/hero-02
 * Categories: bblocks, banner
 * Description: A two-column hero with headline, paragraph and buttons on the left, and a decorative gradient panel on the right in place of a photo.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Launch a site that looks like a bigger team built it', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"large","style":{"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
			<p class="has-muted-text-color has-text-color has-large-font-size" style="margin-top:1rem;margin-bottom:1.5rem"><?php echo esc_html__( 'A flexible pattern library and a coherent design system, ready to assemble into a business, agency or product site without touching a page builder.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Start a Project', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'See Our Work', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"gradient":"primary-to-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
			<div class="wp-block-group has-primary-to-secondary-gradient-background has-background" style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"align":"center","textColor":"background","style":{"typography":{"fontSize":"3rem","lineHeight":"1"}}} -->
				<p class="has-text-align-center has-background-color has-text-color" style="font-size:3rem;line-height:1">◆</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"small"} -->
				<p class="has-text-align-center has-background-color has-text-color has-small-font-size"><?php echo esc_html__( 'Your product, project or brand visual goes here', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
