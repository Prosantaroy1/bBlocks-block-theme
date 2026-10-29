<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Membership Pricing
 * Slug: bblocks/site-fitness-pricing
 * Categories: bblocks, bblocks-site-fitness, bblocks-pricing, pricing
 * Keywords: fitness, gym, membership, pricing, plans
 * Description: Three gym membership plans with a bold, accent-colored featured middle plan, each with a price, included perks and a Join button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_plans = array(
	array(
		'name'     => __( 'Basic', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$29', 'bblocks' ),
		'features' => array( __( 'Gym floor access', 'bblocks' ), __( 'Off-peak hours', 'bblocks' ), __( 'Locker rooms', 'bblocks' ), __( 'Fitness app', 'bblocks' ) ),
		'button'   => __( 'Join Basic', 'bblocks' ),
		'featured' => false,
	),
	array(
		'name'     => __( 'Pro', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$59', 'bblocks' ),
		'features' => array( __( '24/7 gym access', 'bblocks' ), __( 'Unlimited group classes', 'bblocks' ), __( 'Body scan every month', 'bblocks' ), __( 'One guest pass a month', 'bblocks' ) ),
		'button'   => __( 'Join Pro', 'bblocks' ),
		'featured' => true,
	),
	array(
		'name'     => __( 'Elite', 'bblocks' ),
		/* translators: Plan price, including the currency symbol. */
		'price'    => __( '$119', 'bblocks' ),
		'features' => array( __( 'Everything in Pro', 'bblocks' ), __( '4 personal training sessions', 'bblocks' ), __( 'Custom nutrition plan', 'bblocks' ), __( 'Recovery zone access', 'bblocks' ) ),
		'button'   => __( 'Join Elite', 'bblocks' ),
		'featured' => false,
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Membership', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"textTransform":"uppercase"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Pick your plan', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'No joining fee, no long contracts. Freeze or cancel any time with 30 days notice.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<?php foreach ( $bblocks_plans as $bblocks_plan ) : ?>
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<?php if ( $bblocks_plan['featured'] ) : ?>
			<!-- wp:group {"backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
				<p class="has-small-font-size" style="font-weight:800;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Most popular', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"textColor":"background","fontSize":"x-large","style":{"typography":{"textTransform":"uppercase"}}} -->
				<h3 class="wp-block-heading has-background-color has-text-color has-x-large-font-size" style="text-transform:uppercase"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
				<!-- /wp:heading -->
			<?php else : ?>
			<!-- wp:group {"backgroundColor":"surface","borderColor":"border-color","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-border-color-border-color has-surface-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":3,"fontSize":"x-large","style":{"typography":{"textTransform":"uppercase"}}} -->
				<h3 class="wp-block-heading has-x-large-font-size" style="text-transform:uppercase"><?php echo esc_html( $bblocks_plan['name'] ); ?></h3>
				<!-- /wp:heading -->
			<?php endif; ?>

				<!-- wp:paragraph {"fontSize":"huge","style":{"typography":{"fontWeight":"800","lineHeight":"1"}}} -->
				<p class="has-huge-font-size" style="font-weight:800;line-height:1"><?php echo esc_html( $bblocks_plan['price'] ); ?><span style="font-size:1rem;font-weight:600"><?php echo esc_html__( '/month', 'bblocks' ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"style":{"spacing":{"padding":{"left":"1.25rem"}}}} -->
				<ul style="padding-left:1.25rem" class="wp-block-list">
					<?php foreach ( $bblocks_plan['features'] as $bblocks_item ) : ?>
					<!-- wp:list-item -->
					<li><?php echo esc_html( $bblocks_item ); ?></li>
					<!-- /wp:list-item -->
					<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
					<?php if ( $bblocks_plan['featured'] ) : ?>
					<!-- wp:button {"backgroundColor":"background","textColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $bblocks_plan['button'] ); ?></a></div>
					<!-- /wp:button -->
					<?php else : ?>
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $bblocks_plan['button'] ); ?></a></div>
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
