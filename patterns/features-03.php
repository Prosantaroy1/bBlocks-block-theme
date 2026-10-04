<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Features: Checklist Split
 * Slug: bblocks/features-03
 * Categories: bblocks, features
 * Description: A heading and paragraph on the left paired with a two-column checklist of feature points on the right.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":{"left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Everything included, from day one', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted-text"} -->
		<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'No add-ons to buy separately before your site feels complete.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:list {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><?php echo esc_html__( 'Responsive on every device', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Accessible, semantic markup', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Three ready-made style variations', 'bblocks' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:list {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><?php echo esc_html__( '25+ ready-to-use patterns', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Three header and footer styles', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Translation ready', 'bblocks' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
