<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Commercial: Service Cards
 * Slug: bblocks/site-commercial-services
 * Categories: bblocks, bblocks-site-commercial, bblocks-services, services
 * Keywords: commercial, brokerage, property management, services, cards
 * Description: Two side-by-side grey service cards for brokerage and property management, each with a photo, a numbered badge, a serif title, text and a solid button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_services = array(
	array(
		__( '01', 'bblocks' ),
		__( 'Brokerage', 'bblocks' ),
		__( 'Leasing, sales and acquisitions guided by brokers who know every block of the market and negotiate as if it were their own building.', 'bblocks' ),
		__( 'Meet our brokers', 'bblocks' ),
		'/brokerage/',
		'commercial-meeting.jpg',
		__( 'A bright meeting room with a long white table and black chairs', 'bblocks' ),
	),
	array(
		__( '02', 'bblocks' ),
		__( 'Property Management', 'bblocks' ),
		__( 'Day-to-day operations, tenant care, maintenance and transparent reporting that protect your asset and grow its value.', 'bblocks' ),
		__( 'Explore management', 'bblocks' ),
		'/property-management/',
		'commercial-building.jpg',
		__( 'A modern glass office building with a curved facade', 'bblocks' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Two services, one dedicated team', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_services as $bblocks_service ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background">
			<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_service[5] ) ); ?>" alt="<?php echo esc_attr( $bblocks_service[6] ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"letterSpacing":"0.12em","lineHeight":"1"},"border":{"width":"1px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.75rem","right":"0.75rem"}}},"borderColor":"primary","fontFamily":"playfair-display"} -->
				<p class="has-text-align-center has-border-color has-primary-border-color has-primary-color has-text-color has-playfair-display-font-family has-small-font-size" style="border-width:1px;padding-top:0.6rem;padding-right:0.75rem;padding-bottom:0.6rem;padding-left:0.75rem;letter-spacing:0.12em;line-height:1"><?php echo esc_html( $bblocks_service[0] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html( $bblocks_service[1] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
				<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_service[2] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( $bblocks_service[4] ) ); ?>"><?php echo esc_html( $bblocks_service[3] ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
