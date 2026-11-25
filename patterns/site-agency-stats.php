<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Stats
 * Slug: bblocks/site-agency-stats
 * Categories: bblocks, bblocks-site-agency, bblocks-about, about
 * Keywords: agency, stats, numbers, results, awards, experience
 * Description: Four large numbers with short labels, each under a thin top border.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '150+', 'bblocks' ), __( 'Projects launched for brands of every size', 'bblocks' ) ),
	array( __( '12', 'bblocks' ), __( 'Design awards won by our team', 'bblocks' ) ),
	array( __( '10 yrs', 'bblocks' ), __( 'Helping businesses stand out', 'bblocks' ) ),
	array( __( '94%', 'bblocks' ), __( 'Of clients come back for more', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|foreground","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|small"},"blockGap":"0.4rem"}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:2px;padding-top:var(--wp--preset--spacing--small)">
			<!-- wp:paragraph {"fontSize":"huge","style":{"typography":{"fontWeight":"600","lineHeight":"1.05"}}} -->
			<p class="has-huge-font-size" style="font-weight:600;line-height:1.05"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
