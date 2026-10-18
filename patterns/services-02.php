<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Services: 4-Column Compact
 * Slug: bblocks/services-02
 * Categories: bblocks, bblocks-services, services
 * Description: A compact four-column row of services, each with a symbol, short title and one-line description. Suits a longer service list.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'How we can help', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary"} --><p class="has-primary-color has-text-color">◆</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Strategy', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Plan the site around your goals.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"secondary"} --><p class="has-secondary-color has-text-color">●</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Design', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Consistent, on-brand page layouts.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"accent"} --><p class="has-accent-color has-text-color">▲</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Build', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Hand-assembled with core blocks.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary"} --><p class="has-primary-color has-text-color">■</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Support', 'bblocks' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted-text"} --><p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Here for questions after launch.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
