<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: FAQ and Call to Action
 * Slug: bblocks/site-education-faq
 * Categories: bblocks, bblocks-site-education, bblocks-faq, text
 * Keywords: education, faq, questions, call to action, enroll
 * Description: A heading beside five expandable questions, followed by a rounded gradient call-to-action banner with two buttons.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_questions = array(
	array( __( 'How long do I have access to a course?', 'bblocks' ), __( 'Courses you buy are yours for life, including future updates. With a membership you can access every course for as long as your plan is active.', 'bblocks' ) ),
	array( __( 'Do I need any experience to start?', 'bblocks' ), __( 'No. Beginner courses start from the very basics, and every course page lists what you should know before you begin.', 'bblocks' ) ),
	array( __( 'Will I get a certificate?', 'bblocks' ), __( 'Yes. When you complete all lessons and the final project you receive a shareable certificate of completion.', 'bblocks' ) ),
	array( __( 'Can I learn on my phone?', 'bblocks' ), __( 'Absolutely. Lessons work on any phone, tablet or computer, and Pro members can download videos to watch offline.', 'bblocks' ) ),
	array( __( 'What if a course is not right for me?', 'bblocks' ), __( 'Every paid plan comes with a 14-day money-back guarantee. Just contact us and we will refund you, no questions asked.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'FAQ', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Questions, answered', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Cannot find what you are looking for? Our learner support team replies within one business day.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact support →', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<?php foreach ( $bblocks_questions as $bblocks_q ) : ?>
			<!-- wp:details {"className":"is-style-faq","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
			<details class="wp-block-details is-style-faq" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
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

	<!-- wp:group {"align":"wide","gradient":"primary-to-secondary","textColor":"background","style":{"border":{"radius":"1.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group alignwide has-background-color has-primary-to-secondary-gradient-background has-text-color has-background" style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Start learning something new today', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Join 48,000 students and get your first two weeks of Pro free. No credit card required.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"accent","textColor":"foreground"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php echo esc_html__( 'Start Free Trial', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html__( 'Browse Courses', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
