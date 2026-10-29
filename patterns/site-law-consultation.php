<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Consultation & FAQ
 * Slug: bblocks/site-law-consultation
 * Categories: bblocks, bblocks-site-law, bblocks-cta, bblocks-faq, call-to-action
 * Keywords: law, consultation, contact, call to action, faq, questions
 * Description: A navy free consultation card with phone and email links and a button, beside a list of expandable client questions built from the core Details block.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_questions = array(
	array( __( 'Is the first consultation really free?', 'bblocks' ), __( 'Yes. Your first 30-minute meeting is free and confidential, with no obligation to hire us afterwards.', 'bblocks' ) ),
	array( __( 'How much will my case cost?', 'bblocks' ), __( 'It depends on the matter. We offer flat fees, hourly rates and contingency arrangements, and always explain costs in writing before any work begins.', 'bblocks' ) ),
	array( __( 'What should I bring to our first meeting?', 'bblocks' ), __( 'Bring any letters, contracts, court papers or notes related to your situation, plus a photo ID. If you are unsure, bring it anyway.', 'bblocks' ) ),
	array( __( 'How long will my case take?', 'bblocks' ), __( 'Some matters resolve in weeks while others take longer. We give you a realistic timeline at the start and keep you updated at every stage.', 'bblocks' ) ),
	array( __( 'Do you offer virtual meetings?', 'bblocks' ), __( 'Yes. You can meet your attorney in our office, by phone or by secure video call, whichever suits you best.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:group {"backgroundColor":"primary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
				<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php echo esc_html__( 'Free Consultation', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Tell us about your case', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Speak with an experienced attorney in confidence. We respond to every request within one business day.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
					<p style="font-weight:600"><a href="tel:+15550100199"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
					<p style="font-weight:600"><a href="mailto:hello@example.com"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"accent","textColor":"primary"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book a Free Consultation', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"58%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Frequently asked questions', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_questions as $bblocks_i => $bblocks_q ) : ?>
					<?php if ( 0 === $bblocks_i ) : ?>
				<!-- wp:details {"showContent":true,"className":"is-style-faq","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem"}}}} -->
				<details class="wp-block-details is-style-faq" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:1.25rem;padding-bottom:1.25rem" open><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
					<?php else : ?>
				<!-- wp:details {"className":"is-style-faq","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem"}}}} -->
				<details class="wp-block-details is-style-faq" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:1.25rem;padding-bottom:1.25rem"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
					<?php endif; ?>
					<!-- wp:paragraph -->
					<p><?php echo esc_html( $bblocks_q[1] ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
