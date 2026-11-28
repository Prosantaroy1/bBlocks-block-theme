<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Call to Action
 * Slug: bblocks/site-agency-cta
 * Categories: bblocks, bblocks-site-agency, bblocks-cta, call-to-action
 * Keywords: agency, call to action, contact, project, cta, dark
 * Description: A dark closing band with a very large question, a short line, an accent button and an email link.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"foreground","textColor":"background","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%">
			<!-- wp:heading {"textColor":"background","fontSize":"huge"} -->
			<h2 class="wp-block-heading has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Have a project in mind? Let’s talk.', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%">
			<!-- wp:paragraph {"textColor":"surface"} -->
			<p class="has-surface-color has-text-color"><?php echo esc_html__( 'Tell us a little about your goals and we will reply within one working day with next steps.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"foreground"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Start a project', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Or email us at', 'bblocks' ); ?> <a href="<?php echo esc_url( 'mailto:' . __( 'hello@example.com', 'bblocks' ) ); ?>"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
