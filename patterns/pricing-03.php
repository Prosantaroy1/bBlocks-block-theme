<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Pricing: Highlighted Plan
 * Slug: bblocks/pricing-03
 * Categories: bblocks, bblocks-pricing, pricing
 * Keywords: pricing, plans, tiers, subscription, comparison
 * Description: A split header followed by three pricing plans in a single white panel, with the top plan highlighted on a dark card. Each plan lists its highlights, a full-width button and a money-back note.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_plans = array(
	array(
		'name'     => __( 'Beginner', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$29', 'bblocks' ),
		'desc'     => __( 'Perfect for anyone just starting their first website project.', 'bblocks' ),
		'features' => array( __( '3 website projects', 'bblocks' ), __( 'Basic section library', 'bblocks' ), __( 'Email support', 'bblocks' ) ),
		'dark'     => false,
	),
	array(
		'name'     => __( 'Freelancer', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$49', 'bblocks' ),
		'desc'     => __( 'Ideal for independent designers who need more power and flexibility.', 'bblocks' ),
		'features' => array( __( 'Unlimited projects', 'bblocks' ), __( 'Custom components', 'bblocks' ), __( 'Client sharing portal', 'bblocks' ) ),
		'dark'     => false,
	),
	array(
		'name'     => __( 'Professional', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$89', 'bblocks' ),
		'desc'     => __( 'The complete toolkit for design teams and agencies working at scale.', 'bblocks' ),
		'features' => array( __( 'Unlimited projects', 'bblocks' ), __( 'Advanced analytics', 'bblocks' ), __( 'Team permissions', 'bblocks' ), __( 'Priority support', 'bblocks' ), __( 'White-label options', 'bblocks' ) ),
		'dark'     => true,
	),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Start launching your sites without code', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Choose the plan that fits your workflow — whether you are just starting out or running a busy agency. Every plan includes free updates.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","backgroundColor":"background","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide has-background-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns">
			<?php foreach ( $bblocks_plans as $bblocks_plan ) : ?>
			<!-- wp:column -->
			<div class="wp-block-column">
				<?php if ( $bblocks_plan['dark'] ) : ?>
				<!-- wp:group {"className":"bblocks-plan","backgroundColor":"foreground","textColor":"background","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group bblocks-plan has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<?php else : ?>
				<!-- wp:group {"className":"bblocks-plan","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group bblocks-plan" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<?php endif; ?>
					<?php if ( $bblocks_plan['dark'] ) : ?>
					<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
					<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
					<!-- /wp:heading -->
					<?php else : ?>
					<!-- wp:heading {"level":3,"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
					<h3 class="wp-block-heading has-x-large-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
					<!-- /wp:heading -->
					<?php endif; ?>

					<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}}} -->
					<p class="has-xx-large-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html( $bblocks_plan['price'] ); ?> <span style="font-size:0.875rem;font-weight:400"><?php echo esc_html__( 'Per Year', 'bblocks' ); ?></span></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html( $bblocks_plan['desc'] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator has-alpha-channel-opacity"/>
					<!-- /wp:separator -->

					<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Highlights', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:list {"className":"bblocks-list-chevron","fontSize":"small"} -->
					<ul class="wp-block-list bblocks-list-chevron has-small-font-size">
						<?php foreach ( $bblocks_plan['features'] as $bblocks_feature ) : ?>
						<!-- wp:list-item -->
						<li><?php echo esc_html( $bblocks_feature ); ?></li>
						<!-- /wp:list-item -->
						<?php endforeach; ?>
					</ul>
					<!-- /wp:list -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'bblocks' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( '✓ 100% money-back guarantee', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
