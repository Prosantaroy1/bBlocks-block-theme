<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Hero
 * Slug: bblocks/site-rentals-hero
 * Categories: bblocks, bblocks-site-rentals, bblocks-hero, banner
 * Keywords: rentals, apartments, commercial, property, hero, cover, town
 * Description: An aerial town photo cover with an eyebrow, a large serif headline, a short intro and two buttons, above a dark strip of four quick links.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_links = array(
	array( __( 'Apartments', 'bblocks' ), __( 'Studios to three bedrooms', 'bblocks' ), '/apartments/' ),
	array( __( 'Commercial', 'bblocks' ), __( 'Downtown shops & offices', 'bblocks' ), '/commercial/' ),
	array( __( 'Our Story', 'bblocks' ), __( 'Family-owned since 1998', 'bblocks' ), '/about/' ),
	array( __( 'Get in Touch', 'bblocks' ), __( 'Book a viewing today', 'bblocks' ), '/contact/' ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/rentals-hero.jpg' ) ); ?>","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":620,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rentals-hero.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"700px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-background-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Millbrook · Riverside · Old Mill District', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textColor":"background","fontSize":"huge"} -->
		<h1 class="wp-block-heading has-background-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Rental Homes & Workspaces in Millbrook', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"background"} -->
		<p class="has-background-color has-text-color"><?php echo esc_html__( 'Family-owned since 1998, Harbor Lane Rentals offers studio to three-bedroom apartments along the river and flexible shop and office space in the historic downtown, all looked after by a local team.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/apartments/' ) ); ?>"><?php echo esc_html__( 'Browse Apartments', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Send an Inquiry', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"9rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_links as $bblocks_link ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","fontSize":"large","fontFamily":"playfair-display","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-text-align-center has-playfair-display-font-family has-large-font-size" style="font-weight:700"><a href="<?php echo esc_url( home_url( $bblocks_link[2] ) ); ?>"><?php echo esc_html( $bblocks_link[0] ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"border-color","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
			<p class="has-text-align-center has-border-color-color has-text-color" style="font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html( $bblocks_link[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
