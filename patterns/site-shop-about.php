<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Shop: Our Story
 * Slug: bblocks/site-shop-about
 * Categories: bblocks, bblocks-site-shop, bblocks-about, about
 * Keywords: shop, about, story, brand, values, small business
 * Description: A product photo beside the store story with a heading, two paragraphs, three key numbers and a contact button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_numbers = array(
	array( __( '2019', 'bblocks' ), __( 'Founded', 'bblocks' ) ),
	array( __( '20K+', 'bblocks' ), __( 'Happy customers', 'bblocks' ) ),
	array( __( '120', 'bblocks' ), __( 'Products in stock', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-mug.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A white ceramic mug of coffee on a wooden table', 'bblocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Our story', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Fewer, better things', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Shoplane started at a kitchen table with one idea: everyday things should be simple, well made and fairly priced. We still test every product ourselves before it goes on sale.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'We work with small workshops, ship in recycled packaging and keep our range small so you never have to scroll through filler.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)">
				<?php foreach ( $bblocks_numbers as $bblocks_number ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="has-x-large-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_number[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_number[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get in touch', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
