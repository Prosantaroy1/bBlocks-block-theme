<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Header: Top Bar with Contact Details
 * Slug: bblocks/header-topbar
 * Categories: header
 * Block Types: core/template-part/header
 * Description: A slim top bar with phone, email and social links above the logo, navigation and a call-to-action button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {"align":"full","backgroundColor":"foreground","textColor":"background","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"small","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:0.5rem;padding-right:var(--wp--preset--spacing--small);padding-bottom:0.5rem;padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><a href="tel:+15550100199"><?php echo esc_html__( 'Call +1 555 010 0199', 'bblocks' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="mailto:<?php echo esc_attr__( 'hello@example.com', 'bblocks' ); ?>"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"0.75rem"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

				<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->

				<!-- wp:site-title {"level":0} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"1.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"openSubmenusOnClick":false,"showSubmenuIcon":true,"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.75rem"}},"fontSize":"small"} /-->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"fontSize":"small"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get a Quote', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
