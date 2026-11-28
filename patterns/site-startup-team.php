<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Leadership Team
 * Slug: bblocks/site-startup-team
 * Categories: bblocks, bblocks-site-startup, bblocks-team, team
 * Keywords: startup, team, leadership, founders, people, about
 * Description: A heading row with a careers button above a two-column grid of six leaders, each with a portrait, name, role and short bio.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_people = array(
	array( 'portrait-1.svg', __( 'Amara Lewis', 'bblocks' ), __( 'Chief Executive Officer', 'bblocks' ), __( 'Former shop owner who leads our mission to make payments fair for small businesses.', 'bblocks' ) ),
	array( 'portrait-2.svg', __( 'Daniel Reyes', 'bblocks' ), __( 'Chief Technology Officer', 'bblocks' ), __( 'Builds the secure, always-on platform behind every Fluxpay payment.', 'bblocks' ) ),
	array( 'portrait-3.svg', __( 'Priya Shah', 'bblocks' ), __( 'VP of Product', 'bblocks' ), __( 'Turns customer feedback into simple tools people enjoy using.', 'bblocks' ) ),
	array( 'portrait-4.svg', __( 'Tom Becker', 'bblocks' ), __( 'VP of Engineering', 'bblocks' ), __( 'Keeps our systems fast and reliable, even on the busiest shopping days.', 'bblocks' ) ),
	array( 'portrait-5.svg', __( 'Sofia Marin', 'bblocks' ), __( 'Head of Design', 'bblocks' ), __( 'Shapes a clear, friendly experience from checkout to dashboard.', 'bblocks' ) ),
	array( 'portrait-6.svg', __( 'Kwame Mensah', 'bblocks' ), __( 'Head of Customer Success', 'bblocks' ), __( 'Leads the team that answers every support message within the hour.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Meet our leadership team', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'The people steering Fluxpay and looking after our customers.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'View open roles', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<?php foreach ( array_chunk( $bblocks_people, 2 ) as $bblocks_pair ) : ?>
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"padding":{"top":"var:preset|spacing|medium"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
	<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--medium)">
		<?php foreach ( $bblocks_pair as $bblocks_person ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_person[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_person[1] ); ?>" style="border-radius:8px;aspect-ratio:4/5;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"0.4rem"}}} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:heading {"level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_person[1] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html( $bblocks_person[2] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_person[3] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
