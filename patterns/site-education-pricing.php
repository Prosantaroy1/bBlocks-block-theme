<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Membership Pricing
 * Slug: bblocks/site-education-pricing
 * Categories: bblocks, bblocks-site-education, bblocks-pricing, pricing
 * Keywords: education, membership, pricing, plans, subscription
 * Description: Three membership plans side by side with a highlighted dark middle plan, each with a price, a short list of benefits and a button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_plans = array(
	array(
		'name'     => __( 'Starter', 'bblocks' ),
		'tagline'  => __( 'Try Edunova and learn the basics.', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$0', 'bblocks' ),
		'period'   => __( '/month', 'bblocks' ),
		'features' => array( __( '10 free intro courses', 'bblocks' ), __( 'Community forum access', 'bblocks' ), __( 'Learn on any device', 'bblocks' ) ),
		'button'   => __( 'Start Free Trial', 'bblocks' ),
		'featured' => false,
	),
	array(
		'name'     => __( 'Pro', 'bblocks' ),
		'tagline'  => __( 'Unlimited learning for serious students.', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$29', 'bblocks' ),
		'period'   => __( '/month', 'bblocks' ),
		'features' => array( __( 'All 120+ courses', 'bblocks' ), __( 'Graded projects and feedback', 'bblocks' ), __( 'Shareable certificates', 'bblocks' ), __( 'Offline downloads', 'bblocks' ) ),
		'button'   => __( 'Get Pro', 'bblocks' ),
		'featured' => true,
	),
	array(
		'name'     => __( 'Teams', 'bblocks' ),
		'tagline'  => __( 'Train your whole team in one place.', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$79', 'bblocks' ),
		'period'   => __( '/month', 'bblocks' ),
		'features' => array( __( 'Everything in Pro', 'bblocks' ), __( 'Up to 10 seats', 'bblocks' ), __( 'Progress reports', 'bblocks' ), __( 'Dedicated success manager', 'bblocks' ) ),
		'button'   => __( 'Contact Sales', 'bblocks' ),
		'featured' => false,
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Membership', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Simple plans for every learner', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Start free, upgrade when you are ready and cancel at any time. Every paid plan includes a 14-day money-back guarantee.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_plans as $bblocks_plan ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<?php if ( $bblocks_plan['featured'] ) : ?>
			<!-- wp:group {"className":"bblocks-plan","backgroundColor":"foreground","textColor":"background","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group bblocks-plan has-background-color has-foreground-background-color has-text-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
					<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"bblocks-badge","backgroundColor":"accent","textColor":"foreground"} -->
					<p class="bblocks-badge has-foreground-color has-accent-background-color has-text-color has-background"><?php echo esc_html__( 'Most popular', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			<?php else : ?>
			<!-- wp:group {"className":"is-style-card bblocks-plan","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group is-style-card bblocks-plan" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
				<!-- /wp:heading -->
			<?php endif; ?>

				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
				<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html( $bblocks_plan['tagline'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}}} -->
				<p class="has-xx-large-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html( $bblocks_plan['price'] ); ?><span style="font-size:1rem;font-weight:400"><?php echo esc_html( $bblocks_plan['period'] ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"bblocks-list-chevron"} -->
				<ul class="wp-block-list bblocks-list-chevron">
					<?php foreach ( $bblocks_plan['features'] as $bblocks_item ) : ?>
					<!-- wp:list-item -->
					<li><?php echo esc_html( $bblocks_item ); ?></li>
					<!-- /wp:list-item -->
					<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<?php if ( $bblocks_plan['featured'] ) : ?>
					<!-- wp:button {"backgroundColor":"accent","textColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $bblocks_plan['button'] ); ?></a></div>
					<!-- /wp:button -->
					<?php else : ?>
					<!-- wp:button {"width":100,"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $bblocks_plan['button'] ); ?></a></div>
					<!-- /wp:button -->
					<?php endif; ?>
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
