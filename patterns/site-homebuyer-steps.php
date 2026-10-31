<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: How It Works Steps
 * Slug: bblocks/site-homebuyer-steps
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-features, featured
 * Keywords: home buyer, how it works, steps, process, cash offer, numbered
 * Description: A centered heading and three numbered steps with solid red circles explaining how a direct cash sale works, with a button below.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_steps = array(
	array( '1', __( 'Tell Us About Your House', 'bblocks' ), __( 'Share the address, its condition and your ideal timeline by phone or online. It takes about five minutes and costs nothing.', 'bblocks' ) ),
	array( '2', __( 'Get Your Cash Offer', 'bblocks' ), __( 'We look over the details, walk through the home with you and present a written, no-obligation offer within 24 hours.', 'bblocks' ) ),
	array( '3', __( 'Close When You Are Ready', 'bblocks' ), __( 'Accept, and a local title company handles the paperwork. You choose the closing day and walk away with cash.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Simple and transparent', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'How It Works in 3 Easy Steps', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_steps as $bblocks_step ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"bblocks-icon","backgroundColor":"primary","textColor":"background","fontSize":"large","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontWeight":"700"}}} -->
				<p class="bblocks-icon has-background-color has-primary-background-color has-text-color has-background has-large-font-size" style="border-radius:999px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-weight:700"><?php echo esc_html( $bblocks_step[0] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html( $bblocks_step[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_step[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/get-an-offer/' ) ); ?>"><?php echo esc_html__( 'Start Step One', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>"><?php echo esc_html__( 'See the Full Process', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
