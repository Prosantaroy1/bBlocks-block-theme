<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: FAQ: Accordion Card
 * Slug: bblocks/faq-01
 * Categories: bblocks, bblocks-faq, text
 * Keywords: faq, questions, answers, accordion, details
 * Description: A bordered card with a heading, three expandable questions built from the core Details block and a footer note with an icon.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_questions = array(
	array( __( 'Built by creators for creators', 'bblocks' ), __( 'Our team brings together designers, engineers and strategists from leading tech companies and creative agencies. With experience across large brands and young startups, we pair technical depth with creative craft to deliver exceptional results.', 'bblocks' ), true ),
	array( __( 'A team of global talent', 'bblocks' ), __( 'We work remotely across several time zones, so there is always someone available to keep your project moving — and you get perspectives from many markets.', 'bblocks' ), false ),
	array( __( 'No code, no boundaries', 'bblocks' ), __( 'Every page is built from editable blocks, so you can change text, images and layouts yourself at any time without waiting on a developer.', 'bblocks' ), false ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"borderColor":"border-color","backgroundColor":"background","style":{"border":{"radius":"1rem","width":"1px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:1rem">

		<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Futuristic solutions today', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
			<?php foreach ( $bblocks_questions as $bblocks_i => $bblocks_q ) : ?>
				<?php if ( $bblocks_i > 0 ) : ?>
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->
				<?php endif; ?>

				<?php if ( $bblocks_q[2] ) : ?>
			<!-- wp:details {"showContent":true,"style":{"typography":{"fontWeight":"600"}}} -->
			<details class="wp-block-details" style="font-weight:600" open><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<?php else : ?>
			<!-- wp:details {"style":{"typography":{"fontWeight":"600"}}} -->
			<details class="wp-block-details" style="font-weight:600"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<?php endif; ?>
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--small);font-weight:400"><?php echo esc_html( $bblocks_q[1] ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
			<p class="bblocks-icon is-small">✦</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Read how we helped one growing startup scale its website to millions of visitors.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
