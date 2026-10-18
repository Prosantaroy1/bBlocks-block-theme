<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Stats Row
 * Slug: bblocks/site-marketplace-stats
 * Categories: bblocks, bblocks-site-marketplace, bblocks-about, about
 * Keywords: marketplace, stats, numbers, counters
 * Description: Four key numbers in a row, each with an icon tile, a large figure and a label.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( '▦', __( '848+', 'bblocks' ), __( 'Templates', 'bblocks' ) ),
	array( '☺', __( '10M+', 'bblocks' ), __( 'Active users', 'bblocks' ) ),
	array( '↗', __( '19%', 'bblocks' ), __( 'Company growth', 'bblocks' ) ),
	array( '✦', __( '2K+', 'bblocks' ), __( 'Five-star reviews', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}}} -->
				<p class="has-large-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
