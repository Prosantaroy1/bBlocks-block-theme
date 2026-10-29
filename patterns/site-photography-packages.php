<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Photography: Packages
 * Slug: bblocks/site-photography-packages
 * Categories: bblocks, bblocks-site-photography, bblocks-pricing, pricing
 * Keywords: photography, packages, pricing, portrait, event, commercial, session
 * Description: Three photography packages for portrait sessions, events and commercial work, each with a price, a feature list and a booking button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_packages = array(
	array(
		'name'     => __( 'Portrait Session', 'bblocks' ),
		'price'    => __( '$350', 'bblocks' ),
		'unit'     => __( 'per session', 'bblocks' ),
		'text'     => __( 'Relaxed outdoor or studio portraits for individuals, couples and families.', 'bblocks' ),
		'features' => array( __( '90-minute session', 'bblocks' ), __( 'One location of your choice', 'bblocks' ), __( '25 hand-edited images', 'bblocks' ), __( 'Private online gallery', 'bblocks' ) ),
		'featured' => false,
	),
	array(
		'name'     => __( 'Event Coverage', 'bblocks' ),
		'price'    => __( '$1,200', 'bblocks' ),
		'unit'     => __( 'up to 6 hours', 'bblocks' ),
		'text'     => __( 'Unobtrusive storytelling coverage for celebrations, launches and gatherings.', 'bblocks' ),
		'features' => array( __( 'Up to six hours on site', 'bblocks' ), __( '300+ edited images', 'bblocks' ), __( 'Sneak peek within 48 hours', 'bblocks' ), __( 'Print-ready high-resolution files', 'bblocks' ) ),
		'featured' => true,
	),
	array(
		'name'     => __( 'Commercial', 'bblocks' ),
		'price'    => __( '$2,400', 'bblocks' ),
		'unit'     => __( 'per day', 'bblocks' ),
		'text'     => __( 'Architecture, interiors and product imagery for brands and studios.', 'bblocks' ),
		'features' => array( __( 'Full-day shoot with lighting', 'bblocks' ), __( 'Shot list and pre-production call', 'bblocks' ), __( 'Advanced retouching', 'bblocks' ), __( 'Commercial usage licence', 'bblocks' ) ),
		'featured' => false,
	),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.25em;text-transform:uppercase"><?php echo esc_html__( 'Packages', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Sessions & Pricing', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Clear starting prices for the most requested work. Every package can be tailored to your plans.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_packages as $bblocks_package ) : ?>
			<?php if ( $bblocks_package['featured'] ) : ?>
		<!-- wp:group {"backgroundColor":"background","borderColor":"primary","style":{"border":{"width":"1px","radius":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-primary-border-color has-background-background-color has-background" style="border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<?php else : ?>
		<!-- wp:group {"backgroundColor":"background","borderColor":"border-color","style":{"border":{"width":"1px","radius":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<?php endif; ?>
			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_package['name'] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}}} -->
			<p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:600;line-height:1.1"><?php echo esc_html( $bblocks_package['price'] ); ?> <span class="has-small-font-size has-muted-text-color has-text-color" style="font-weight:400"><?php echo esc_html( $bblocks_package['unit'] ); ?></span></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_package['text'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
			<ul style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)" class="wp-block-list">
				<?php foreach ( $bblocks_package['features'] as $bblocks_feature ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $bblocks_feature ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<?php if ( $bblocks_package['featured'] ) : ?>
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book This Package', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
				<?php else : ?>
				<!-- wp:button {"width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book This Package', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
				<?php endif; ?>
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
