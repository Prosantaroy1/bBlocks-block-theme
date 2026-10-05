<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Team: 3-Column Grid
 * Slug: bblocks/team-01
 * Categories: bblocks, team
 * Description: A three-column team grid with a circular avatar placeholder, name, role and small social links for each person.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Meet the team', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"120px","width":"120px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:120px;width:120px">
				<!-- wp:paragraph {"textColor":"muted-text","style":{"typography":{"fontSize":"1.75rem"}}} --><p class="has-muted-text-color has-text-color" style="font-size:1.75rem">JD</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"1rem"}}}} --><h5 class="wp-block-heading" style="margin-top:1rem"><?php echo esc_html__( 'Jamie Diaz', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Founder & Creative Director', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:social-links {"iconColor":"muted-text","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"x"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"120px","width":"120px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:120px;width:120px">
				<!-- wp:paragraph {"textColor":"muted-text","style":{"typography":{"fontSize":"1.75rem"}}} --><p class="has-muted-text-color has-text-color" style="font-size:1.75rem">SK</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"1rem"}}}} --><h5 class="wp-block-heading" style="margin-top:1rem"><?php echo esc_html__( 'Sam Kim', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Lead Developer', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:social-links {"iconColor":"muted-text","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"github"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bblocks-avatar","style":{"border":{"radius":"999px"},"dimensions":{"minHeight":"120px","width":"120px"},"spacing":{"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group bblocks-avatar has-surface-background-color has-background" style="border-radius:999px;min-height:120px;width:120px">
				<!-- wp:paragraph {"textColor":"muted-text","style":{"typography":{"fontSize":"1.75rem"}}} --><p class="has-muted-text-color has-text-color" style="font-size:1.75rem">RL</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"1rem"}}}} --><h5 class="wp-block-heading" style="margin-top:1rem"><?php echo esc_html__( 'Riley Lang', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Client Success', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:social-links {"iconColor":"muted-text","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
