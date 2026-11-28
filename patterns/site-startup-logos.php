<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Logos and Partners
 * Slug: bblocks/site-startup-logos
 * Categories: bblocks, bblocks-site-startup, bblocks-testimonials
 * Keywords: startup, logos, clients, partners, integrations, trust
 * Description: A light band with six customer logos, a divider and a partner program row with a button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_logos = array(
	'logo-1.svg' => 'Northwind',
	'logo-2.svg' => 'Mixwell',
	'logo-3.svg' => 'Futurestack',
	'logo-4.svg' => 'Fortuna',
	'logo-5.svg' => 'Heartline',
	'logo-6.svg' => 'Brightclick',
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","className":"bblocks-logos","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide bblocks-logos">
		<?php foreach ( $bblocks_logos as $bblocks_file => $bblocks_name ) : ?>
		<!-- wp:image {"width":"132px","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_file ) ); ?>" alt="<?php echo esc_attr( $bblocks_name ); ?>" style="width:132px"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","backgroundColor":"border-color","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-border-color-color has-alpha-channel-opacity has-border-color-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":2,"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Meet our partners', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'We work with trusted banks, card networks and software companies so your payments just work.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":2,"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Join our partner program', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Build an integration or refer clients and earn a share of every payment.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"220px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:220px">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Become a partner', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
