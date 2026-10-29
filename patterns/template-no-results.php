<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: No results message
 * Slug: bblocks/template-no-results
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Sorry, nothing was found here. Try a different search, or browse the latest posts.', 'bblocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>} /-->
