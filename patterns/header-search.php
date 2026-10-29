<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Header: Navigation and Search
 * Slug: bblocks/header-search
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site logo and title, navigation and an expanding search button — a good fit for blogs, magazines and documentation sites.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"tagName":"header","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->

			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"openSubmenusOnClick":false,"showSubmenuIcon":true,"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.75rem"}},"fontSize":"small"} /-->

			<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
