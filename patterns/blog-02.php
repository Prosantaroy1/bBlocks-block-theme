<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Blog: List with Meta
 * Slug: bblocks/blog-02
 * Categories: bblocks, query
 * Description: A stacked list of posts, each row combining a small featured image thumbnail with title, author, date and excerpt.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Recent articles', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":true},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"1.25rem"},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
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
