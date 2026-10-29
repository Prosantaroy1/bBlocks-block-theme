<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Pricing: 2-Tier Simple
 * Slug: bblocks/pricing-02
 * Categories: bblocks, bblocks-pricing, pricing
 * Description: A simple two-column comparison between a monthly and an annual plan, each with a price, short feature list and button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);margin-top:0;margin-bottom:0">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Choose your plan', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Monthly', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-xx-large-font-size" style="font-weight:800"><?php /* translators: Plan price, including the currency symbol. */ echo esc_html__( '$39', 'bblocks' ); ?><span style="font-size:1rem;font-weight:400"><?php echo esc_html__( '/mo', 'bblocks' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Billed monthly, cancel any time.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Start Monthly', 'bblocks' ); ?></a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","borderColor":"primary","style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card has-border-color has-primary-border-color" style="border-width:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":4} --><h4 class="wp-block-heading"><?php echo esc_html__( 'Annual', 'bblocks' ); ?></h4><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-xx-large-font-size" style="font-weight:800"><?php /* translators: Plan price, including the currency symbol. */ echo esc_html__( '$29', 'bblocks' ); ?><span style="font-size:1rem;font-weight:400"><?php echo esc_html__( '/mo', 'bblocks' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted-text"} --><p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Billed yearly — save 25% versus monthly.', 'bblocks' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Start Annual', 'bblocks' ); ?></a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
