<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Rentals: Family-Owned About
 * Slug: bblocks/site-rentals-about
 * Categories: bblocks, bblocks-site-rentals, bblocks-about, about
 * Keywords: rentals, about, family-owned, landlord, property management, story
 * Description: A photo collage with a years-in-business badge beside an eyebrow, heading, two paragraphs, a four-item icon checklist and a contact button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_points = array(
	array( '✓', __( 'Online resident portal', 'bblocks' ), __( 'Pay rent and log repairs any time', 'bblocks' ) ),
	array( '☎', __( '24/7 maintenance line', 'bblocks' ), __( 'A real person answers, day or night', 'bblocks' ) ),
	array( '⌂', __( 'Fair, simple screening', 'bblocks' ), __( 'Clear criteria shared up front', 'bblocks' ) ),
	array( '✦', __( 'Seasonal inspections', 'bblocks' ), __( 'Small fixes before they grow', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column {"width":"58%"} -->
				<div class="wp-block-column" style="flex-basis:58%">
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rentals-exterior.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Two-storey brick apartment buildings with a path through a green lawn', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:3/4;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"bottom","width":"42%"} -->
				<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:42%">
					<!-- wp:group {"backgroundColor":"primary","textColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
						<!-- wp:paragraph {"align":"center","fontSize":"xx-large","fontFamily":"playfair-display","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}}} -->
						<p class="has-text-align-center has-playfair-display-font-family has-xx-large-font-size" style="font-weight:700;line-height:1.1"><?php echo esc_html__( '25+', 'bblocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
						<p class="has-text-align-center" style="font-size:0.75rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'Years in Millbrook', 'bblocks' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rentals-living.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright apartment living room with a white sofa and colorful cushions', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'About us', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'A Family-Owned Rental Company Rooted in Millbrook', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Harbor Lane Rentals began with one riverside duplex and a toolbox. Today our family owns and cares for apartments across Millbrook, a few rental houses near the park and a row of shop and office units downtown.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Because we live here too, we keep things personal: clear leases, quick repairs and people you can actually reach. Whether you need a furnished place for a season or a storefront for your new business, we will help you find the right fit.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"13rem"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
				<?php foreach ( $bblocks_points as $bblocks_point ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
					<p class="bblocks-icon is-small"><?php echo esc_html( $bblocks_point[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
						<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_point[1] ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"muted-text","style":{"typography":{"fontSize":"0.8rem"}}} -->
						<p class="has-muted-text-color has-text-color" style="font-size:0.8rem"><?php echo esc_html( $bblocks_point[2] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get in Touch', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
