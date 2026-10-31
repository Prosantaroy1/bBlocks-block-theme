<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Listings Grid
 * Slug: bblocks/site-rentals-listings
 * Categories: bblocks, bblocks-site-rentals, bblocks-portfolio, featured
 * Keywords: rentals, listings, apartments, commercial, for rent, units, cards
 * Description: A centered heading with an Apartments / Commercial button row, a grid of six listing cards with a photo, status badge, title, text, beds and baths line and a viewing button, and a closing note.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_listings = array(
	array( 'rentals-exterior.jpg', __( 'Brick garden apartments set around a shared lawn', 'bblocks' ), __( 'Available now', 'bblocks' ), 'primary', __( 'Two-Bedroom Garden Apartment, Riverside', 'bblocks' ), __( 'Ground-floor home with its own entrance, on-site laundry and parking a few steps away.', 'bblocks' ), __( '2 beds · 1 bath · $1,450 / month', 'bblocks' ) ),
	array( 'rentals-living.jpg', __( 'A furnished living room with a white sofa and colorful cushions', 'bblocks' ), __( 'Furnished', 'bblocks' ), 'secondary', __( 'Furnished One-Bedroom, Old Mill District', 'bblocks' ), __( 'Move in with just a suitcase. Ideal for visiting nurses, teachers and seasonal work.', 'bblocks' ), __( '1 bed · 1 bath · $1,290 / month', 'bblocks' ) ),
	array( 'rentals-kitchen.jpg', __( 'A white kitchen with a blue island and pendant lights', 'bblocks' ), __( 'Available now', 'bblocks' ), 'primary', __( 'Renovated Three-Bedroom, North Hill', 'bblocks' ), __( 'New kitchen, two full baths and a small yard close to the elementary school.', 'bblocks' ), __( '3 beds · 2 baths · $1,980 / month', 'bblocks' ) ),
	array( 'rentals-commercial.jpg', __( 'A corner commercial building with shops on the ground floor', 'bblocks' ), __( 'Commercial', 'bblocks' ), 'secondary', __( 'Corner Retail Unit, Main Street', 'bblocks' ), __( 'Large display windows, high ceilings and steady foot traffic from the Saturday market.', 'bblocks' ), __( '1,100 sq ft · 1 restroom · $1,850 / month', 'bblocks' ) ),
	array( 'rentals-town.jpg', __( 'Old stone houses along a river at dusk', 'bblocks' ), __( 'Coming soon', 'bblocks' ), 'secondary', __( 'Waterfront Studio, Riverside', 'bblocks' ), __( 'Cozy top-floor studio with river views, a new bathroom and heat included in the rent.', 'bblocks' ), __( 'Studio · 1 bath · $980 / month', 'bblocks' ) ),
	array( 'rentals-commercial.jpg', __( 'A row of downtown buildings with offices on the upper floors', 'bblocks' ), __( 'Commercial', 'bblocks' ), 'secondary', __( 'Upstairs Office Suite, Downtown', 'bblocks' ), __( 'Three private offices and a meeting room above the shops, with flexible lease terms.', 'bblocks' ), __( '850 sq ft · 1 restroom · $1,200 / month', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Available rentals', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Apartments and Commercial Space for Rent in Millbrook', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'From riverside studios to family-size homes and Main Street storefronts, here is a look at what is open now and what is coming up next.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":{"left":"0.5rem"},"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:button {"backgroundColor":"secondary","textColor":"background","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-background-color has-secondary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/apartments/' ) ); ?>"><?php echo esc_html__( 'Apartments', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"secondary","className":"is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-secondary-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>"><?php echo esc_html__( 'Commercial', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_listings as $bblocks_listing ) : ?>
		<!-- wp:group {"backgroundColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.75rem"},"shadow":"var:preset|shadow|natural"},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small);box-shadow:var(--wp--preset--shadow--natural)">
			<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_listing[0] ) ); ?>","alt":<?php echo wp_json_encode( $bblocks_listing[1] ); ?>,"dimRatio":10,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":220,"contentPosition":"top left","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:220px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( $bblocks_listing[1] ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_listing[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"backgroundColor":"<?php echo esc_attr( $bblocks_listing[3] ); ?>","textColor":"background","className":"bblocks-badge","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontSize":"0.7rem"}}} -->
				<p class="bblocks-badge has-background-color has-<?php echo esc_attr( $bblocks_listing[3] ); ?>-background-color has-text-color has-background" style="font-size:0.7rem;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_listing[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->

			<!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html( $bblocks_listing[4] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_listing[5] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_listing[6] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"width":100,"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Request a Viewing', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","backgroundColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide has-background-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}}} -->
		<p class="has-text-align-center" style="font-weight:500"><?php echo esc_html__( 'Not seeing the right fit? New units open up every month.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Join the Waiting List', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
