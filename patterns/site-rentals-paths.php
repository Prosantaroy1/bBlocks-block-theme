<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Three Paths
 * Slug: bblocks/site-rentals-paths
 * Categories: bblocks, bblocks-site-rentals, bblocks-services, services
 * Keywords: rentals, apartments, commercial, residents, paths, options, dark cards
 * Description: A centered heading above three dark cards for renting a home, leasing a workspace and current residents, each with a title, text and a link button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_paths = array(
	array( __( 'Rent a Home', 'bblocks' ), __( 'Browse furnished and unfurnished apartments across Millbrook, then send an inquiry to check dates and book a viewing.', 'bblocks' ), __( 'See Apartments', 'bblocks' ), '/apartments/' ),
	array( __( 'Lease a Workspace', 'bblocks' ), __( 'Share your square footage and budget and we will show you shop fronts, studios and office suites downtown.', 'bblocks' ), __( 'See Commercial', 'bblocks' ), '/commercial/' ),
	array( __( 'Already a Resident', 'bblocks' ), __( 'Pay rent, ask a question or request a repair. Our office team and maintenance crew are a message away.', 'bblocks' ), __( 'Contact the Office', 'bblocks' ), '/contact/' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'How can we help?', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Pick the Path That Fits You', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_paths as $bblocks_path ) : ?>
		<!-- wp:group {"backgroundColor":"secondary","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
		<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_path[0] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"border-color","fontSize":"small"} -->
			<p class="has-border-color-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_path[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"textColor":"background","className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( $bblocks_path[3] ) ); ?>"><?php echo esc_html( $bblocks_path[2] ); ?></a></div>
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
