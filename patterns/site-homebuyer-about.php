<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: About Us
 * Slug: bblocks/site-homebuyer-about
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-about, about
 * Keywords: home buyer, about, local, family owned, stats, photo
 * Description: A rounded house photo beside a short company story, three key figures and a button to request an offer.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '600+', 'bblocks' ), __( 'Homes purchased', 'bblocks' ) ),
	array( __( '14 days', 'bblocks' ), __( 'Typical closing', 'bblocks' ) ),
	array( __( '$0', 'bblocks' ), __( 'Fees to sellers', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/homebuyer-porch.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A white two-story house with a wide front porch on a green lawn', 'bblocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'About QuickKey', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Neighbors Buying Homes, Not a Faraway Fund', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'QuickKey Home Buyers is a small, locally owned team. We buy houses with our own funds, renovate them with local trades and give them a second life in the community.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Every offer is explained line by line, so you can see how we reached the number and decide with confidence, whether you sell to us or not.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"8rem"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|small"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:3px;padding-top:var(--wp--preset--spacing--small)">
					<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}},"fontFamily":"playfair-display"} -->
					<p class="has-playfair-display-font-family has-x-large-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/get-an-offer/' ) ); ?>"><?php echo esc_html__( 'Get My Cash Offer', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
