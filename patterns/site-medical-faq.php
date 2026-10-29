<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Medical: FAQ
 * Slug: bblocks/site-medical-faq
 * Categories: bblocks, bblocks-site-medical, bblocks-faq, text
 * Keywords: medical, clinic, faq, questions, insurance, appointments
 * Description: A heading, intro and contact button beside a stack of expandable patient questions built from the core Details block.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_questions = array(
	array( __( 'Do I need a referral to see a specialist?', 'bblocks' ), __( 'No. You can book most specialists directly. If your insurance plan requires a referral, our front desk will arrange it with your family doctor.', 'bblocks' ) ),
	array( __( 'Which insurance plans do you accept?', 'bblocks' ), __( 'We work with most major health and dental insurers. Call us or send a message with your plan details and we will confirm your cover before your visit.', 'bblocks' ) ),
	array( __( 'How quickly can I get an appointment?', 'bblocks' ), __( 'Most patients are seen within the same week, and we keep slots free every day for urgent visits.', 'bblocks' ) ),
	array( __( 'What should I bring to my first visit?', 'bblocks' ), __( 'Please bring a photo ID, your insurance card, a list of current medicines and any recent test results or reports.', 'bblocks' ) ),
	array( __( 'Can I get my lab results online?', 'bblocks' ), __( 'Yes. Results are shared securely through our patient portal, and your doctor will call you if anything needs a follow-up.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'FAQ', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Questions patients often ask', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Can’t find what you are looking for? Our front desk team is happy to help by phone or message.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact Us', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<?php foreach ( $bblocks_questions as $bblocks_i => $bblocks_q ) : ?>
				<?php if ( 0 === $bblocks_i ) : ?>
			<!-- wp:details {"showContent":true,"className":"is-style-faq","backgroundColor":"background","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.5rem","right":"1.5rem"}}}} -->
			<details class="wp-block-details is-style-faq has-background-background-color has-background" style="border-radius:1rem;padding-top:1.25rem;padding-right:1.5rem;padding-bottom:1.25rem;padding-left:1.5rem" open><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<?php else : ?>
			<!-- wp:details {"className":"is-style-faq","backgroundColor":"background","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.5rem","right":"1.5rem"}}}} -->
			<details class="wp-block-details is-style-faq has-background-background-color has-background" style="border-radius:1rem;padding-top:1.25rem;padding-right:1.5rem;padding-bottom:1.25rem;padding-left:1.5rem"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<?php endif; ?>
				<!-- wp:paragraph -->
				<p><?php echo esc_html( $bblocks_q[1] ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
