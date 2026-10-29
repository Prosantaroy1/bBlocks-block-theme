<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Footer: Simple
 * Slug: bblocks/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A single-row footer with the site title and a copyright line.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"1.1rem"}}} /-->

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
