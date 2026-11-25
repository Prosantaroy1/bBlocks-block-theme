<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Stats
 * Slug: bblocks/site-startup-stats
 * Categories: bblocks, bblocks-site-startup, bblocks-about, about
 * Keywords: startup, stats, numbers, metrics, results
 * Description: A light band with three large numbers, each with a small label and a short explanation.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( 'Businesses', 'bblocks' ), __( '12,000+', 'bblocks' ), __( 'Shops, studios and online stores take payments with Fluxpay every day.', 'bblocks' ) ),
	array( __( 'Processed yearly', 'bblocks' ), __( '$480M', 'bblocks' ), __( 'Payments handled securely across cards, wallets and bank transfers.', 'bblocks' ) ),
	array( __( 'Integrations', 'bblocks' ), __( '120+', 'bblocks' ), __( 'Connect the accounting, shop and email tools you already use.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}}} -->
			<p class="has-xx-large-font-size" style="font-weight:600;line-height:1.1"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
