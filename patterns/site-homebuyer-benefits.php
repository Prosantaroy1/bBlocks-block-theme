<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: Direct Sale Benefits
 * Slug: bblocks/site-homebuyer-benefits
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-features, featured
 * Keywords: home buyer, benefits, direct sale, cash, dark band, columns
 * Description: A dark charcoal band with a centered heading and intro, then four divided columns that explain what a direct cash sale makes simpler.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_benefits = array(
	array( __( 'Condition', 'bblocks' ), __( 'We buy as-is. No repairs, deep cleaning, painting or staging before you sell.', 'bblocks' ) ),
	array( __( 'Privacy', 'bblocks' ), __( 'No open houses, no yard sign and no strangers walking through your rooms.', 'bblocks' ) ),
	array( __( 'Costs', 'bblocks' ), __( 'No agent commissions and no hidden fees. We usually cover standard closing costs too.', 'bblocks' ) ),
	array( __( 'Timeline', 'bblocks' ), __( 'A cash purchase does not wait on a buyer’s loan approval. Close in two weeks or two months.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Know your options', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'What a Direct Sale Makes Simpler', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Listing with an agent is right for some homes. For others, selling straight to a local buyer removes most of the work, the waiting and the worry.', 'bblocks' ); ?> <a href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>"><?php echo esc_html__( 'Compare both ways to sell →', 'bblocks' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_benefits as $bblocks_benefit ) : ?>
		<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"left":"var:preset|spacing|medium"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_benefit[0] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html( $bblocks_benefit[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
