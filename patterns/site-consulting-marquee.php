<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Topic Strip
 * Slug: bblocks/site-consulting-marquee
 * Categories: bblocks, bblocks-site-consulting, text
 * Keywords: consulting, topics, marquee, keywords, strip
 * Description: A full-width strip of large outlined topic words separated by stars.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_topics = array( __( 'Personal Growth', 'bblocks' ), __( 'Business', 'bblocks' ), __( 'Marketing', 'bblocks' ), __( 'Strategy', 'bblocks' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"align":"full","className":"bblocks-marquee","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignfull bblocks-marquee">
		<?php foreach ( $bblocks_topics as $bblocks_topic ) : ?>
		<!-- wp:paragraph {"className":"bblocks-outline-text"} -->
		<p class="bblocks-outline-text"><?php echo esc_html( '✳ ' . $bblocks_topic ); ?></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
