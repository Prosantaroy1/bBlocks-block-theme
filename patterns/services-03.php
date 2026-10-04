<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Services: Numbered List
 * Slug: bblocks/services-03
 * Categories: bblocks, services
 * Description: A vertical list of services presented as numbered rows separated by dividers, each with a title and short description.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Our services', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} --><p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700">01</p><!-- /wp:paragraph -->
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
			<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} --><p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700">02</p><!-- /wp:paragraph -->
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
			<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} --><p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700">03</p><!-- /wp:paragraph -->
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
