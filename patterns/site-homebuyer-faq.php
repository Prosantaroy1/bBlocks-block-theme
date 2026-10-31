<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: FAQ
 * Slug: bblocks/site-homebuyer-faq
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-faq, text
 * Keywords: home buyer, faq, questions, cash offer, selling, details
 * Description: A heading, intro, contact button and photo of an older house beside five expandable seller questions built from the core Details block.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_questions = array(
	array( __( 'How do you decide on my offer?', 'bblocks' ), __( 'We look at recent sales of similar homes nearby, the repairs the house needs and current market conditions. We share that math with you so the offer is never a mystery.', 'bblocks' ) ),
	array( __( 'Are there any fees or commissions?', 'bblocks' ), __( 'No. There are no agent commissions and no service fees. In most sales we also pay the standard closing costs, so the offer you accept is the amount you receive.', 'bblocks' ) ),
	array( __( 'Do I need to clean or fix anything first?', 'bblocks' ), __( 'Not at all. Leave the repairs, the clutter and any items you do not want. We buy the house exactly as it stands today.', 'bblocks' ) ),
	array( __( 'How fast can we close?', 'bblocks' ), __( 'Many sales close in about two weeks once the title is clear. If you need more time to plan a move, we can set a later date that works for you.', 'bblocks' ) ),
	array( __( 'Am I obligated to accept the offer?', 'bblocks' ), __( 'Never. Our offer is free and comes with no strings attached. Take your time, ask questions and compare it with other options before you decide.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Seller questions', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Answers Before You Decide', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Selling a home is a big step. Here is what owners ask us most. Still unsure? A real person will happily walk you through it.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Ask Us Anything', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/homebuyer-fixer.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'An old weathered farmhouse that needs repairs', 'bblocks' ); ?>" style="border-radius:1rem;aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<?php foreach ( $bblocks_questions as $bblocks_i => $bblocks_q ) : ?>
				<?php if ( 0 === $bblocks_i ) : ?>
			<!-- wp:details {"showContent":true,"className":"is-style-faq","backgroundColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.5rem","right":"1.5rem"}}}} -->
			<details class="wp-block-details is-style-faq has-background-background-color has-background" style="border-radius:0.75rem;padding-top:1.25rem;padding-right:1.5rem;padding-bottom:1.25rem;padding-left:1.5rem" open><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<?php else : ?>
			<!-- wp:details {"className":"is-style-faq","backgroundColor":"background","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.5rem","right":"1.5rem"}}}} -->
			<details class="wp-block-details is-style-faq has-background-background-color has-background" style="border-radius:0.75rem;padding-top:1.25rem;padding-right:1.5rem;padding-bottom:1.25rem;padding-left:1.5rem"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<?php endif; ?>
				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html( $bblocks_q[1] ); ?></p>
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
