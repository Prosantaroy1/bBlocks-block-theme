<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Blog: List with Meta
 * Slug: bblocks/blog-02
 * Categories: bblocks, bblocks-blog, query
 * Description: A stacked list of posts, each row combining a small featured image thumbnail with title, author, date and excerpt.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"align":"wide","level":2} -->
	<h2 class="wp-block-heading alignwide"><?php echo esc_html__( 'Recent articles', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":true},"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->

			<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

				<!-- wp:post-featured-image {"width":"120px","height":"90px","isLink":true,"style":{"border":{"radius":"0.6rem"}}} /-->

				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.3rem"}}}} /-->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-author-name {"fontSize":"small","textColor":"muted-text"} /-->
						<!-- wp:post-date {"fontSize":"small","textColor":"muted-text"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"excerptLength":20,"textColor":"muted-text","style":{"spacing":{"margin":{"top":"0.3rem"}}}} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
