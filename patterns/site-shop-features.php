<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Store Features
 * Slug: bblocks/site-shop-features
 * Categories: bblocks, bblocks-site-shop, bblocks-features, features
 * Keywords: shop, shipping, returns, secure checkout, support, perks
 * Description: A row of four store perks (free shipping, easy returns, secure checkout and support), each with a symbol, title and short text.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_features = array(
	array( '→', __( 'Free shipping', 'bblocks' ), __( 'On every order over $50, delivered in two to four business days.', 'bblocks' ) ),
	array( '↺', __( 'Easy returns', 'bblocks' ), __( 'Changed your mind? Send it back within 30 days, no questions asked.', 'bblocks' ) ),
	array( '✓', __( 'Secure checkout', 'bblocks' ), __( 'Encrypted payments with all major cards and digital wallets.', 'bblocks' ) ),
	array( '?', __( 'Friendly support', 'bblocks' ), __( 'Real people answer within a few hours, seven days a week.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_features as $bblocks_feature ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"backgroundColor":"accent","textColor":"foreground","className":"bblocks-badge","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="bblocks-badge has-foreground-color has-accent-background-color has-text-color has-background" style="font-weight:700"><?php echo esc_html( $bblocks_feature[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html( $bblocks_feature[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_feature[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
