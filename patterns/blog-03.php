<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Blog: Minimal Text List
 * Slug: bblocks/blog-03
 * Categories: bblocks, query
 * Description: A compact, image-free list of post titles with dates, separated by dividers — suited to a sidebar, footer, or a dense archive-style section.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'More reading', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":true},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->

			<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:0.85rem;padding-bottom:0.85rem">
				<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->
				<!-- wp:post-date {"fontSize":"small","textColor":"muted-text"} /-->
			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
