<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Two-Column FAQ
 * Slug: bblocks/site-marketplace-faq
 * Categories: bblocks, bblocks-site-marketplace, bblocks-faq, text
 * Keywords: marketplace, faq, questions, accordion, support
 * Description: A centered heading above two columns of bordered, expandable questions built with the core Details block.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_columns = array(
	array(
		array( __( 'How do I install a theme from the marketplace?', 'bblocks' ), __( 'Download the theme zip, then go to Appearance → Themes → Add New → Upload Theme in your dashboard and activate it.', 'bblocks' ) ),
		array( __( 'Can I customize a theme to match my brand?', 'bblocks' ), __( 'Yes. Every theme uses Global Styles, so colors, fonts and spacing can be changed for the whole site in a few clicks.', 'bblocks' ) ),
		array( __( 'What kind of support do you provide?', 'bblocks' ), __( 'Every purchase includes help with installation, setup questions and bug fixes for the life of the product.', 'bblocks' ) ),
	),
	array(
		array( __( 'Are the themes compatible with popular page builders?', 'bblocks' ), __( 'They are built for the block editor and work with the core blocks — no page builder is required.', 'bblocks' ) ),
		array( __( 'Do the themes support online stores?', 'bblocks' ), __( 'Yes, they include WooCommerce compatibility so shop, cart and checkout pages display correctly.', 'bblocks' ) ),
		array( __( 'Is there a refund policy?', 'bblocks' ), __( 'If a theme does not work as described, contact us within 30 days for a full refund.', 'bblocks' ) ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Frequently Asked Questions', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_columns as $bblocks_column ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column">
			<?php foreach ( $bblocks_column as $bblocks_q ) : ?>
			<!-- wp:details {"borderColor":"border-color","style":{"border":{"radius":"0.6rem","width":"1px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.25rem","right":"1.25rem"}}},"fontSize":"small"} -->
			<details class="wp-block-details has-border-color has-border-color-border-color has-small-font-size" style="border-width:1px;border-radius:0.6rem;padding-top:1rem;padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html( $bblocks_q[1] ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
