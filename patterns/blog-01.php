<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Blog: 3-Column Post Grid
 * Slug: bblocks/blog-01
 * Categories: bblocks, bblocks-blog, query
 * Description: A three-column grid of the latest posts, each with a featured image, category, title, excerpt and date, driven by a live query loop.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"align":"wide","level":2} -->
	<h2 class="wp-block-heading alignwide"><?php echo esc_html__('From the blog', 'bblocks'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0.75rem"}}} /-->

		<!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase"}}} /-->

		<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

		<!-- wp:post-excerpt {"excerptLength":18,"textColor":"muted-text"} /-->

		<!-- wp:post-date {"fontSize":"small","textColor":"muted-text"} /-->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->