<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Related posts
 * Slug: bblocks/template-related-posts
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Keep reading', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":true},"className":"bblocks-related-posts","layout":{"type":"default"}} -->
	<div class="wp-block-query bblocks-related-posts">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0.75rem"}}} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

			<!-- wp:post-date {"fontSize":"small","textColor":"muted-text"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
