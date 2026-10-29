<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Footer: Four Columns and Social Links
 * Slug: bblocks/footer-social
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A four-column footer with the site title, tagline and social links, two navigation menus and contact details, above a copyright line.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"tagName":"footer","align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"1.2rem"}}} /-->

			<!-- wp:paragraph {"textColor":"muted-text","style":{"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-muted-text-color has-text-color" style="font-size:0.95rem"><?php echo esc_html__( 'Building clean, modern websites for businesses, agencies and startups.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"muted-text","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"0.6rem"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

				<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem"}}} -->
			<h2 class="wp-block-heading" style="font-size:1rem"><?php echo esc_html__( 'Company', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem"}}} -->
			<h2 class="wp-block-heading" style="font-size:1rem"><?php echo esc_html__( 'Resources', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem"}}} -->
			<h2 class="wp-block-heading" style="font-size:1rem"><?php echo esc_html__( 'Get in touch', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="mailto:<?php echo esc_attr__( 'hello@example.com', 'bblocks' ); ?>"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="tel:+15550100199">+1 555 010 0199</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"opacity":"css","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|medium"}}}} -->
	<hr class="wp-block-separator has-css-opacity" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--medium)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
		<p class="has-muted-text-color has-text-color has-small-font-size"><?php
			/* translators: 1: current year, 2: site title. */
			echo esc_html( sprintf( __( '© %1$s %2$s. All rights reserved.', 'bblocks' ), wp_date( 'Y' ), get_bloginfo( 'name' ) ) );
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
