<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Pricing Page Header and Plans
 * Slug: bblocks/site-startup-pricing
 * Categories: bblocks, bblocks-site-startup, bblocks-pricing, call-to-action
 * Keywords: startup, saas, pricing, plans, page header, enterprise
 * Description: A dark page header with the page title, then three pricing plans with feature lists; the top plan is a dark card.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_plans = array(
	array(
		'name'     => __( 'Starter', 'bblocks' ),
		'price'    => __( '$0', 'bblocks' ),
		'text'     => __( 'For new businesses taking their first payments.', 'bblocks' ),
		'features' => array( __( 'Online and in-person payments', 'bblocks' ), __( 'Payment links and invoices', 'bblocks' ), __( 'Next-day payouts', 'bblocks' ), __( 'Email support', 'bblocks' ) ),
		'dark'     => false,
	),
	array(
		'name'     => __( 'Growth', 'bblocks' ),
		'price'    => __( '$29', 'bblocks' ),
		'text'     => __( 'For growing teams that want more insight and control.', 'bblocks' ),
		'features' => array( __( 'Everything in Starter', 'bblocks' ), __( 'Subscriptions and discount codes', 'bblocks' ), __( 'Advanced reports', 'bblocks' ), __( 'Team accounts', 'bblocks' ), __( 'Priority chat support', 'bblocks' ) ),
		'dark'     => false,
	),
	array(
		'name'     => __( 'Scale', 'bblocks' ),
		'price'    => __( '$99', 'bblocks' ),
		'text'     => __( 'For established businesses with high volumes.', 'bblocks' ),
		'features' => array( __( 'Everything in Growth', 'bblocks' ), __( 'Lower card rates', 'bblocks' ), __( 'Multi-location reporting', 'bblocks' ), __( 'Custom integrations', 'bblocks' ), __( 'Dedicated account manager', 'bblocks' ) ),
		'dark'     => true,
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">

	<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"level":1,"textColor":"background","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Simple, honest pricing', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"accent","fontSize":"large"} -->
			<p class="has-accent-color has-text-color has-large-font-size"><?php echo esc_html__( 'Start free and only pay more when your business grows. No setup fees, no surprises.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Choose the plan that fits', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Prices are per month. Save 20% when you pay yearly.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns">
			<?php foreach ( $bblocks_plans as $bblocks_plan ) : ?>
			<!-- wp:column -->
			<div class="wp-block-column">
				<?php if ( $bblocks_plan['dark'] ) : ?>
				<!-- wp:group {"className":"bblocks-plan","backgroundColor":"secondary","textColor":"background","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group bblocks-plan has-background-color has-secondary-background-color has-text-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<?php else : ?>
				<!-- wp:group {"className":"bblocks-plan","backgroundColor":"surface","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group bblocks-plan has-surface-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<?php endif; ?>
					<?php if ( $bblocks_plan['dark'] ) : ?>
					<!-- wp:heading {"level":3,"textColor":"background","fontSize":"small","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
					<h3 class="wp-block-heading has-background-color has-text-color has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
					<!-- /wp:heading -->
					<?php else : ?>
					<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
					<h3 class="wp-block-heading has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
					<!-- /wp:heading -->
					<?php endif; ?>

					<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}}} -->
					<p class="has-xx-large-font-size" style="font-weight:600;line-height:1.1"><?php echo esc_html( $bblocks_plan['price'] ); ?><sub style="font-size:1rem;font-weight:400"> <?php echo esc_html__( '/month', 'bblocks' ); ?></sub></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html( $bblocks_plan['text'] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
					<!-- /wp:separator -->

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
						<?php if ( $bblocks_plan['dark'] ) : ?>
						<!-- wp:button {"backgroundColor":"background","textColor":"secondary","width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-secondary-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Talk to sales', 'bblocks' ); ?></a></div>
						<!-- /wp:button -->
						<?php else : ?>
						<!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php
							/* translators: %s: plan name. */
							echo esc_html( sprintf( __( 'Choose %s', 'bblocks' ), $bblocks_plan['name'] ) );
						?></a></div>
						<!-- /wp:button -->
						<?php endif; ?>
					</div>
					<!-- /wp:buttons -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( '30-day money-back guarantee', 'bblocks' ); ?></p>
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
