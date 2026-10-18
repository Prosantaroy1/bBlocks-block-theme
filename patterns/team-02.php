<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Team: 4-Column Compact
 * Slug: bblocks/team-02
 * Categories: bblocks, bblocks-team, team
 * Description: A compact four-column team grid with a smaller avatar placeholder, name and role only, suited to larger teams.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Our people', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"84px","width":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:84px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php /* translators: Initials of a team member. */ echo esc_html__( 'AN', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Ana Novak', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Designer', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"84px","width":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:84px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php /* translators: Initials of a team member. */ echo esc_html__( 'TB', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Theo Brandt', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Developer', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"84px","width":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:84px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php /* translators: Initials of a team member. */ echo esc_html__( 'MP', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h6 class="wp-block-heading" style="margin-top:0.75rem"><?php echo esc_html__( 'Mira Patel', 'bblocks' ); ?></h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Project Manager', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"84px","width":"84px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:84px;width:84px">
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php /* translators: Initials of a team member. */ echo esc_html__( 'DW', 'bblocks' ); ?></p><!-- /wp:paragraph -->
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
