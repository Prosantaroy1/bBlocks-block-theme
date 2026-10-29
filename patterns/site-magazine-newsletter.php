<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Magazine: Newsletter Signup Band
 * Slug: bblocks/site-magazine-newsletter
 * Categories: bblocks, bblocks-site-magazine, bblocks-cta, call-to-action
 * Keywords: magazine, newsletter, subscribe, email, briefing, cta
 * Description: A bold red full-width band inviting readers to the morning newsletter, with a heading, short text, subscribe button and a small reassurance note.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
	<p class="has-text-align-center has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'The morning briefing', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Get Daily Ink in your inbox', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'One short email every weekday morning with the stories that matter, hand-picked by our editors and ready to read in five minutes.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Subscribe for free', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem"}}} -->
	<p class="has-text-align-center" style="font-size:0.8rem"><?php echo esc_html__( 'Free, every weekday. Unsubscribe anytime.', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
