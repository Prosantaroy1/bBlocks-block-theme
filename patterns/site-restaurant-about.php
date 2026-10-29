<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Our Story
 * Slug: bblocks/site-restaurant-about
 * Categories: bblocks, bblocks-site-restaurant, bblocks-about, about
 * Keywords: restaurant, story, about, chef, kitchen, stats
 * Description: A dining room photo beside the restaurant's story, with three small stats for years open, dishes and guest rating.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '18', 'bblocks' ), __( 'Years of cooking', 'bblocks' ) ),
	array( __( '120+', 'bblocks' ), __( 'Seasonal dishes', 'bblocks' ) ),
	array( __( '4.9', 'bblocks' ), __( 'Guest rating', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/restaurant-bistro.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright bistro dining room with set tables and fresh flowers', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Our Story', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'A Family Kitchen With a Love for the Season', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Savora began as a twelve-seat counter where our family cooked whatever the morning market offered. Today the room is bigger, but the idea is the same: honest ingredients, cooked with care and shared generously.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'We bake our bread every morning, roll pasta by hand and work with local growers, fishers and winemakers we know by name.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"7rem"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
				<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem","padding":{"top":"var:preset|spacing|small"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--small)">
					<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}},"fontFamily":"playfair-display"} -->
					<p class="has-primary-color has-text-color has-playfair-display-font-family has-xx-large-font-size" style="font-weight:600;line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
