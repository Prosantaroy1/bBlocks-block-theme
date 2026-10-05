<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Pricing: 3-Tier Comparison
 * Slug: bblocks/pricing-01
 * Categories: bblocks, pricing
 * Description: Three pricing tiers side by side with a highlighted middle plan, each listing a price, short feature list and a button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Simple, transparent pricing', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Starter', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-xx-large-font-size" style="font-weight:800">$19<span style="font-size:1rem;font-weight:400"><?php echo esc_html__( '/mo', 'bblocks' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><?php echo esc_html__( '1 website', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Basic support', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Monthly updates', 'bblocks' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Choose Starter', 'bblocks' ); ?></a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","borderColor":"primary","style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card has-border-color has-primary-border-color" style="border-width:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase"}}} --><p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php echo esc_html__( 'Most popular', 'bblocks' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Growth', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-xx-large-font-size" style="font-weight:800">$49<span style="font-size:1rem;font-weight:400"><?php echo esc_html__( '/mo', 'bblocks' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><?php echo esc_html__( '3 websites', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Priority support', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Weekly updates', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Basic WooCommerce support', 'bblocks' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Choose Growth', 'bblocks' ); ?></a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Scale', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-xx-large-font-size" style="font-weight:800">$99<span style="font-size:1rem;font-weight:400"><?php echo esc_html__( '/mo', 'bblocks' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><?php echo esc_html__( 'Unlimited websites', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Dedicated support', 'bblocks' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Custom onboarding', 'bblocks' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Choose Scale', 'bblocks' ); ?></a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
