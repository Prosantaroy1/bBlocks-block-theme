<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Blog page heading
 * Slug: bblocks/template-blog-heading
 * Inserter: no
 *
 * @package bBlocks
 */

?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Latest Articles', 'bblocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'News, updates and ideas from our team.', 'bblocks' ); ?></p>
<!-- /wp:paragraph -->
