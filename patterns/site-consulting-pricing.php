<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Dark Pricing Table
 * Slug: bblocks/site-consulting-pricing
 * Categories: bblocks, bblocks-site-consulting, bblocks-pricing, pricing
 * Keywords: consulting, pricing, plans, packages
 * Description: A centered heading above a dark panel with three plans, each with a price, an outline button and a feature list, plus a custom-pricing bar underneath.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_plans = array(
	array(
		__( 'Basic Plan', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		__( '$249.00', 'bblocks' ),
		array( __( '1 session per month', 'bblocks' ), __( 'Basic marketing audit', 'bblocks' ), __( 'Finance overview and quick wins', 'bblocks' ), __( 'Email support (48h response)', 'bblocks' ), __( 'Personalized growth consulting', 'bblocks' ) ),
	),
	array(
		__( 'Advanced Plan', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		__( '$549.00', 'bblocks' ),
		array( __( '2 sessions per month', 'bblocks' ), __( 'Full marketing audit', 'bblocks' ), __( 'Finance overview and forecasting', 'bblocks' ), __( 'Email support (24h response)', 'bblocks' ), __( 'Quarterly strategy review', 'bblocks' ), __( 'Dedicated support and review calls', 'bblocks' ) ),
	),
	array(
		__( 'Enterprise Plan', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		__( '$999.00', 'bblocks' ),
		array( __( 'Weekly 1:1 strategy sessions', 'bblocks' ), __( 'Weekly strategy sessions', 'bblocks' ), __( 'Detailed market analysis', 'bblocks' ), __( 'Competitor research', 'bblocks' ), __( 'Business process assessment', 'bblocks' ), __( 'Personalized growth consulting', 'bblocks' ), __( 'Dedicated support & review calls', 'bblocks' ) ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Choose How I Can Help You Grow', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"backgroundColor":"secondary","textColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group has-background-color has-secondary-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns">
			<?php foreach ( $bblocks_plans as $bblocks_plan ) : ?>
			<!-- wp:column {"style":{"border":{"radius":"0.5rem","color":"#ffffff26","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-column has-border-color" style="border-color:#ffffff26;border-width:1px;border-radius:0.5rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_plan[0] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-x-large-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_plan[1] ); ?> <span style="font-size:0.8rem;font-weight:400"><?php echo esc_html__( '/mo', 'bblocks' ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"background","width":100,"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get Started Today', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:list {"fontSize":"small","style":{"spacing":{"padding":{"left":"1rem"}}}} -->
				<ul class="wp-block-list has-small-font-size" style="padding-left:1rem">
					<?php foreach ( $bblocks_plan[2] as $bblocks_feature ) : ?>
					<!-- wp:list-item -->
					<li><?php echo esc_html( $bblocks_feature ); ?></li>
					<!-- /wp:list-item -->
					<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><?php echo esc_html__( 'Need custom pricing? Book a free consultation.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book a Call', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
