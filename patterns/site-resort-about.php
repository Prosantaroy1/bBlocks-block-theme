<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: About with Facts
 * Slug: bblocks/site-resort-about
 * Categories: bblocks, bblocks-site-resort, bblocks-about, about
 * Keywords: resort, hotel, about, facts, location
 * Description: A large heading, short introduction and lounge photo on the left, with a two-by-two grid of facts and a room photo on the right.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_facts = array(
	array( __( 'Area', 'bblocks' ), __( 'California', 'bblocks' ) ),
	array( __( 'Established', 'bblocks' ), __( '2010 – 2025', 'bblocks' ) ),
	array( __( 'Altitude', 'bblocks' ), __( '1,200 m above sea level', 'bblocks' ) ),
	array( __( 'Reception', 'bblocks' ), __( 'Open 24 hours', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:heading {"fontSize":"huge"} -->
			<h2 class="wp-block-heading has-huge-font-size"><?php echo esc_html__( 'About Us', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html__( 'At Naturexplo, we offer a peaceful escape where nature meets eco-luxury.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-lounge.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A wood-panelled lounge with tall windows overlooking the lake', 'bblocks' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_facts as $bblocks_fact ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_fact[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html( $bblocks_fact[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--large)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-room.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright bedroom with tall windows and soft linen', 'bblocks' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
