<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Product meta (WooCommerce)
 * Slug: bblocks/template-product-meta
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group has-small-font-size">
		<!-- wp:woocommerce/product-sku /-->

		<!-- wp:post-terms {"term":"product_cat","prefix":<?php echo wp_json_encode( __( 'Category: ', 'bblocks' ) ); ?>} /-->

		<!-- wp:post-terms {"term":"product_tag","prefix":<?php echo wp_json_encode( __( 'Tags: ', 'bblocks' ) ); ?>} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:woocommerce/product-meta -->
