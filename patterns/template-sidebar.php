<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Sidebar
 * Slug: bblocks/template-sidebar
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:heading {"level":2,"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'About the author', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:avatar {"size":48,"style":{"border":{"radius":"999px"}}} /-->

		<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-author-biography {"textColor":"muted-text","fontSize":"small"} /-->
</div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<hr class="wp-block-separator has-css-opacity" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:heading {"level":2,"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Recent posts', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:latest-posts {"postsToShow":4,"fontSize":"small"} /-->
</div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<hr class="wp-block-separator has-css-opacity" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:heading {"level":2,"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Categories', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:categories {"fontSize":"small"} /-->
</div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<hr class="wp-block-separator has-css-opacity" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"level":2,"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Search the website', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"buttonPosition":"button-inside"} /-->
</div>
<!-- /wp:group -->
