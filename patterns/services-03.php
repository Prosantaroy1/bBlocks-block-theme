<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Services: Numbered List
 * Slug: bblocks/services-03
 * Categories: bblocks, bblocks-services, services
 * Description: A vertical list of services presented as numbered rows separated by dividers, each with a title and short description.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"align":"wide","level":2} -->
	<h2 class="wp-block-heading alignwide"><?php echo esc_html__( 'Our services', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} --><p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html__( '01', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Consulting', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'A short discovery call to map out the right approach.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"opacity":"css"} --><hr class="wp-block-separator has-css-opacity"/><!-- /wp:separator -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} --><p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html__( '02', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Design', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Page-by-page layout using your existing brand assets.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"opacity":"css"} --><hr class="wp-block-separator has-css-opacity"/><!-- /wp:separator -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} --><p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html__( '03', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Launch', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Final review, testing, and a smooth go-live.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
