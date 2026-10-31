<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Commercial: Stats Band
 * Slug: bblocks/site-commercial-stats
 * Categories: bblocks, bblocks-site-commercial, bblocks-about, about
 * Keywords: commercial, real estate, stats, numbers, portfolio, assets
 * Description: A light grey band with three large serif figures and short labels describing the managed portfolio.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '$1.8B', 'bblocks' ), __( 'In client assets under management', 'bblocks' ) ),
	array( __( '2,400+', 'bblocks' ), __( 'Tenants who call our buildings home', 'bblocks' ) ),
	array( __( '11M sq ft', 'bblocks' ), __( 'Of office, retail and industrial space', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"xx-large","style":{"typography":{"lineHeight":"1.1"}},"fontFamily":"playfair-display"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-playfair-display-font-family has-xx-large-font-size" style="line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"large","fontFamily":"playfair-display"} -->
			<p class="has-text-align-center has-playfair-display-font-family has-large-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
