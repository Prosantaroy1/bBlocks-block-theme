<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Newsletter Panel
 * Slug: bblocks/site-marketplace-newsletter
 * Categories: bblocks, bblocks-site-marketplace, bblocks-cta, call-to-action
 * Keywords: marketplace, newsletter, subscribe, cta, dark
 * Description: A rounded dark panel with a heading, short text and a subscribe button. Link the button to your newsletter or form plugin page.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"align":"wide","backgroundColor":"secondary","textColor":"background","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
	<div class="wp-block-group alignwide has-background-color has-secondary-background-color has-text-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Stay In The Loop!', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Subscribe to our newsletter for exclusive updates, product releases and insider tips on digital trends and themes.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'Subscribe now', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
