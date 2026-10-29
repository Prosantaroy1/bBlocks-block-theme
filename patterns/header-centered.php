<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Header: Centered
 * Slug: bblocks/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Centered site logo and title with the navigation underneath.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"tagName":"header","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->

		<!-- wp:site-title {"level":0,"textAlign":"center"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:navigation {"openSubmenusOnClick":false,"showSubmenuIcon":true,"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.75rem"}},"fontSize":"small"} /-->

</header>
<!-- /wp:group -->
