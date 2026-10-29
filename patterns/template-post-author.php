<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Post author card
 * Slug: bblocks/template-post-author
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide is-style-card" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:avatar {"size":64,"style":{"border":{"radius":"999px"}}} /-->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} -->
		<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Written by', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true,"fontSize":"large"} /-->

		<!-- wp:post-author-biography {"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
