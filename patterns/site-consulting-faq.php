<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Numbered FAQ
 * Slug: bblocks/site-consulting-faq
 * Categories: bblocks, bblocks-site-consulting, bblocks-faq, text
 * Keywords: consulting, faq, questions, accordion
 * Description: A centered heading above five numbered, expandable questions separated by thin dividers.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_questions = array(
	array( __( '1. What types of businesses do you consult for?', 'bblocks' ), __( 'I work with startups, small businesses and growing companies across services, retail and technology.', 'bblocks' ) ),
	array( __( '2. How long is a typical consulting session?', 'bblocks' ), __( 'Sessions usually last 60 to 90 minutes, depending on your business needs and the complexity of the discussion.', 'bblocks' ) ),
	array( __( '3. Can you help if I\'m just starting my business?', 'bblocks' ), __( 'Absolutely. Many clients come to me at the idea stage to build a clear plan before they launch.', 'bblocks' ) ),
	array( __( '4. How do we measure the success of our consulting?', 'bblocks' ), __( 'We agree on clear goals and metrics at the start and review progress together every month.', 'bblocks' ) ),
	array( __( '5. How can I get started with your consulting services?', 'bblocks' ), __( 'Book a free discovery call. We will talk through your goals and pick the plan that fits.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Frequently Asked Questions', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<?php foreach ( $bblocks_questions as $bblocks_q ) : ?>
	<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"fontSize":"small"} -->
	<details class="wp-block-details has-small-font-size" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
		<!-- wp:paragraph {"textColor":"muted-text"} -->
		<p class="has-muted-text-color has-text-color"><?php echo esc_html( $bblocks_q[1] ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
