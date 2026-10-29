<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Featured Listings
 * Slug: bblocks/site-realestate-listings
 * Categories: bblocks, bblocks-site-realestate, bblocks-portfolio, featured
 * Keywords: real estate, listings, properties, homes, for sale, for rent, cards
 * Description: A heading row and a responsive grid of six property cards, each with a photo, status badge, price, title, address, beds, baths and size, and a details button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_listings = array(
	array( 'realestate-house.jpg', __( 'A modern white family house with large windows', 'bblocks' ), __( 'For Sale', 'bblocks' ), __( '$685,000', 'bblocks' ), __( 'Bright Modern Family Home', 'bblocks' ), __( '42 Winfield Avenue, Northgate', 'bblocks' ), __( '4 beds · 3 baths · 2,450 sq ft', 'bblocks' ) ),
	array( 'realestate-apartment.jpg', __( 'A contemporary apartment building at dusk', 'bblocks' ), __( 'For Rent', 'bblocks' ), __( '$2,150 / month', 'bblocks' ), __( 'Corner Apartment with Balcony', 'bblocks' ), __( '18 Harbor Street, Riverside', 'bblocks' ), __( '2 beds · 2 baths · 1,050 sq ft', 'bblocks' ) ),
	array( 'realestate-suburb.jpg', __( 'A white single-storey house with a green lawn', 'bblocks' ), __( 'For Sale', 'bblocks' ), __( '$429,000', 'bblocks' ), __( 'Cozy Bungalow with Garden', 'bblocks' ), __( '7 Maple Lane, Oak Park', 'bblocks' ), __( '3 beds · 2 baths · 1,620 sq ft', 'bblocks' ) ),
	array( 'realestate-living.jpg', __( 'A bright living room with a blue sofa and herringbone floor', 'bblocks' ), __( 'For Rent', 'bblocks' ), __( '$1,780 / month', 'bblocks' ), __( 'Sunny Loft near the Park', 'bblocks' ), __( '210 Elm Road, Old Town', 'bblocks' ), __( '1 bed · 1 bath · 820 sq ft', 'bblocks' ) ),
	array( 'realestate-kitchen.jpg', __( 'A white kitchen with an island and pendant lights', 'bblocks' ), __( 'For Sale', 'bblocks' ), __( '$549,000', 'bblocks' ), __( 'Renovated Townhouse', 'bblocks' ), __( '96 Cedar Court, Westfield', 'bblocks' ), __( '3 beds · 2.5 baths · 1,940 sq ft', 'bblocks' ) ),
	array( 'realestate-apartment.jpg', __( 'Balconies on a modern residential building', 'bblocks' ), __( 'New', 'bblocks' ), __( '$375,000', 'bblocks' ), __( 'City View Condo', 'bblocks' ), __( '5 Station Square, Midtown', 'bblocks' ), __( '2 beds · 1 bath · 960 sq ft', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Featured listings', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Homes we love this week', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Fresh on the market and personally viewed by our agents.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'View all properties', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_listings as $bblocks_listing ) : ?>
		<!-- wp:group {"backgroundColor":"background","borderColor":"border-color","style":{"border":{"radius":"0.75rem","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_listing[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_listing[1] ); ?>" style="border-radius:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<p class="has-primary-color has-text-color has-large-font-size" style="font-weight:800"><?php echo esc_html( $bblocks_listing[3] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"bblocks-badge"} -->
				<p class="bblocks-badge"><?php echo esc_html( $bblocks_listing[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $bblocks_listing[4] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_listing[5] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_listing[6] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'View details', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
