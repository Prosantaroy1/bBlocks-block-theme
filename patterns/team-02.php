<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Team: 4-Column Compact
 * Slug: bblocks/team-02
 * Categories: bblocks, team
 * Description: A compact four-column team grid with a smaller avatar placeholder, name and role only, suited to larger teams.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Our people', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"dimensions":{"minHeight":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="min-height:84px;border-radius:999px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color">AN</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Ana Novak', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Designer', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"dimensions":{"minHeight":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="min-height:84px;border-radius:999px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color">TB</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Theo Brandt', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Developer', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"dimensions":{"minHeight":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="min-height:84px;border-radius:999px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color">MP</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Mira Patel', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Project Manager', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"dimensions":{"minHeight":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="min-height:84px;border-radius:999px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color">DW</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Dana Wells', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Support Lead', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
