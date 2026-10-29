<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Services
 * Slug: bblocks/site-realestate-services
 * Categories: bblocks, bblocks-site-realestate, bblocks-services, services
 * Keywords: real estate, buy, sell, rent, property management, services
 * Description: A centered heading above four service cards for buying, selling, renting and property management, each with a number, title, text and link button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_services = array(
	array( __( '01', 'bblocks' ), __( 'Buy a Home', 'bblocks' ), __( 'Tell us what matters and we shortlist homes that fit, book viewings and negotiate the best price for you.', 'bblocks' ), __( 'Start your search', 'bblocks' ), '/properties/' ),
	array( __( '02', 'bblocks' ), __( 'Sell Your Property', 'bblocks' ), __( 'An accurate valuation, professional photos and a marketing plan that brings serious buyers to your door.', 'bblocks' ), __( 'Get a valuation', 'bblocks' ), '/contact/' ),
	array( __( '03', 'bblocks' ), __( 'Rent with Ease', 'bblocks' ), __( 'Verified rentals, quick applications and clear lease terms, whether you are moving across town or across the country.', 'bblocks' ), __( 'See rentals', 'bblocks' ), '/properties/' ),
	array( __( '04', 'bblocks' ), __( 'Property Management', 'bblocks' ), __( 'Tenant screening, rent collection and maintenance handled for you, with a monthly report you can read in minutes.', 'bblocks' ), __( 'Talk to us', 'bblocks' ), '/contact/' ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'What we do', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Every move, handled', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'From the first viewing to the final signature, one local team looks after you.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"15rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_services as $bblocks_service ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
		<div class="wp-block-group is-style-card">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"x-large","style":{"typography":{"fontWeight":"800"}}} -->
			<p class="has-accent-color has-text-color has-x-large-font-size" style="font-weight:800"><?php echo esc_html( $bblocks_service[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_service[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_service[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( $bblocks_service[4] ) ); ?>"><?php echo esc_html( $bblocks_service[3] ); ?></a></div>
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
