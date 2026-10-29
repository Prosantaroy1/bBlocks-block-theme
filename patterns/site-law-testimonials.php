<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Law: Client Testimonials
 * Slug: bblocks/site-law-testimonials
 * Categories: bblocks, bblocks-site-law, bblocks-testimonials, testimonials
 * Keywords: law, clients, reviews, testimonials, quotes
 * Description: A centered heading above three bordered client quote cards, each with a large gold quotation mark, the quote and the client's name and matter type.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_quotes = array(
	array( __( 'From our first meeting I felt heard. Eleanor explained every option in plain language and guided our company through a difficult acquisition without a single surprise.', 'bblocks' ), __( 'Laura Chen', 'bblocks' ), __( 'Corporate client', 'bblocks' ) ),
	array( __( 'Marcus never stopped fighting for me. When the verdict came back, I knew I had the best defense team I could have asked for.', 'bblocks' ), __( 'James O.', 'bblocks' ), __( 'Criminal defense client', 'bblocks' ) ),
	array( __( 'Isabel made a stressful immigration process feel manageable. Our whole family is now together, and we are so grateful.', 'bblocks' ), __( 'The Alvarez family', 'bblocks' ), __( 'Immigration clients', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"bblocks-eyebrow"} -->
		<p class="has-text-align-center bblocks-eyebrow"><?php echo esc_html__( 'Client Testimonials', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'In our clients’ words', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_quotes as $bblocks_quote ) : ?>
		<!-- wp:group {"borderColor":"border-color","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"4rem","lineHeight":"0.8"}},"fontFamily":"playfair-display"} -->
			<p class="has-accent-color has-text-color has-playfair-display-font-family" style="font-size:4rem;line-height:0.8">“</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"large","fontFamily":"playfair-display"} -->
			<p class="has-playfair-display-font-family has-large-font-size"><?php echo esc_html( $bblocks_quote[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
				<p style="font-weight:700"><?php echo esc_html( $bblocks_quote[1] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_quote[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
