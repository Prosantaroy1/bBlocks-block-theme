<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: Free Cash Offer
 * Slug: bblocks/site-homebuyer-offer
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-cta, call-to-action
 * Keywords: home buyer, cash offer, call to action, checklist, red, card
 * Description: A bold red section with a heading, a checklist of seller benefits and a phone link, beside a white card that invites visitors to request their cash offer.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_checks = array(
	__( 'No agent commissions or listing fees', 'bblocks' ),
	__( 'No repairs, cleaning or staging', 'bblocks' ),
	__( 'No open houses or showings', 'bblocks' ),
	__( 'A closing date that fits your plans', 'bblocks' ),
	__( 'Private and confidential, with no pressure', 'bblocks' ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"textColor":"background","fontSize":"xx-large","style":{"typography":{"lineHeight":"1.15"}}} -->
			<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size" style="line-height:1.15"><?php echo esc_html__( 'Get Your Free, No-Obligation Cash Offer', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'We buy houses across the whole metro area and the surrounding towns. Any condition, any situation, any timeline.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_checks as $bblocks_check ) : ?>
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
				<p style="font-weight:500">✓ <?php echo esc_html( $bblocks_check ); ?></p>
				<!-- /wp:paragraph -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-large-font-size" style="font-weight:700"><?php echo esc_html__( 'Or call us:', 'bblocks' ); ?> <a href="tel:+15550100199"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Request Your Cash Offer', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Tell us a little about your house and we will get back to you with a fair, written offer within one business day.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/get-an-offer/' ) ); ?>"><?php echo esc_html__( 'Request My Offer →', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>"><?php echo esc_html__( 'How it works', 'bblocks' ); ?></a> · <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Ask a question', 'bblocks' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
