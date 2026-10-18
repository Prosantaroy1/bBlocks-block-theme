<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Blog: Minimal Text List
 * Slug: bblocks/blog-03
 * Categories: bblocks, bblocks-blog, query
 * Description: A compact, image-free list of post titles with dates, separated by dividers — suited to a sidebar, footer, or a dense archive-style section.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"align":"wide","level":2} -->
	<h2 class="wp-block-heading alignwide"><?php echo esc_html__( 'More reading', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":true},"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
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
