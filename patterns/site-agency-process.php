<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Process
 * Slug: bblocks/site-agency-process
 * Categories: bblocks, bblocks-site-agency, bblocks-features, featured
 * Keywords: agency, process, steps, how we work, method, dark
 * Description: A dark band with a heading and four numbered process steps in columns.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_steps = array(
	array( __( 'Discover', 'bblocks' ), __( 'We learn about your business, your customers and what success looks like for you.', 'bblocks' ) ),
	array( __( 'Define', 'bblocks' ), __( 'Together we agree on a clear plan, scope, timeline and budget before any design starts.', 'bblocks' ) ),
	array( __( 'Design', 'bblocks' ), __( 'We explore ideas, share progress every week and refine the work with your feedback.', 'bblocks' ) ),
	array( __( 'Deliver', 'bblocks' ), __( 'We launch, train your team and stay on hand to measure results and improve.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"foreground","textColor":"background","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"accent","className":"bblocks-eyebrow"} -->
		<p class="bblocks-eyebrow has-accent-color has-text-color"><?php echo esc_html__( 'How we work', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'A simple process with no surprises', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_steps as $bblocks_index => $bblocks_step ) : ?>
		<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|muted-text","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small"},"blockGap":"0.5rem"}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--muted-text);border-top-width:1px;padding-top:var(--wp--preset--spacing--small)">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-accent-color has-text-color has-x-large-font-size" style="font-weight:600"><?php echo esc_html( sprintf( '%02d', $bblocks_index + 1 ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_step[0] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"surface","fontSize":"small"} -->
			<p class="has-surface-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_step[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
