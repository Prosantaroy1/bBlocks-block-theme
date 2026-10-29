<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Client Testimonials
 * Slug: bblocks/site-realestate-testimonials
 * Categories: bblocks, bblocks-site-realestate, bblocks-testimonials, testimonials
 * Keywords: real estate, reviews, testimonials, buyers, sellers, quotes
 * Description: A heading above three testimonial cards from a buyer, a seller and a landlord, each with a star rating, quote, name and transaction.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_quotes = array(
	array( __( '"Olivia found us a house that was never even advertised online. We moved in six weeks after our first call."', 'bblocks' ), __( 'Hannah & Tom Price', 'bblocks' ), __( 'Bought a family home in Northgate', 'bblocks' ) ),
	array( __( '"The valuation was spot on and we had three offers in the first weekend. Calm, clear and always one step ahead."', 'bblocks' ), __( 'Robert Hale', 'bblocks' ), __( 'Sold a townhouse in Westfield', 'bblocks' ) ),
	array( __( '"I own two rentals and have not had to think about them since Homely took over. The monthly reports are excellent."', 'bblocks' ), __( 'Amira Haddad', 'bblocks' ), __( 'Property management client', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Happy clients', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Our clients say it best', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_quotes as $bblocks_quote ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card">
			<!-- wp:paragraph {"className":"bblocks-stars","textColor":"accent","fontSize":"small"} -->
			<p class="bblocks-stars has-accent-color has-text-color has-small-font-size">★★★★★</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $bblocks_quote[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--small);font-weight:700"><?php echo esc_html( $bblocks_quote[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_quote[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
