<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Photography: Client Words
 * Slug: bblocks/site-photography-testimonials
 * Categories: bblocks, bblocks-site-photography, bblocks-testimonials, testimonials
 * Keywords: photography, testimonials, reviews, clients, quotes
 * Description: A centered heading above three minimal client quotes, each topped with a thin accent rule.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_quotes = array(
	array( __( '“Elena made us forget the camera was there. The photos from our anniversary feel like the day itself: warm, calm and completely us.”', 'bblocks' ), __( 'Maya & Tom', 'bblocks' ), __( 'Portrait session', 'bblocks' ) ),
	array( __( '“Our new office photos have been used everywhere, from the website to the annual report. Precise, patient and a pleasure to work with.”', 'bblocks' ), __( 'Northfield Architects', 'bblocks' ), __( 'Commercial shoot', 'bblocks' ) ),
	array( __( '“She covered our launch evening without ever getting in the way, and the sneak peek arrived the very next morning.”', 'bblocks' ), __( 'Priya K.', 'bblocks' ), __( 'Event coverage', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.25em;text-transform:uppercase"><?php echo esc_html__( 'Kind Words', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'What Clients Say', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_quotes as $bblocks_quote ) : ?>
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"top":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;padding-top:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"fontSize":"medium","style":{"typography":{"lineHeight":"1.7"}}} -->
			<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html( $bblocks_quote[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
			<p class="has-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_quote[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"spacing":{"margin":{"top":"0.25rem"}}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="margin-top:0.25rem"><?php echo esc_html( $bblocks_quote[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
