<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Blog Cards
 * Slug: bblocks/site-startup-blog
 * Categories: bblocks, bblocks-site-startup, bblocks-blog
 * Keywords: startup, blog, articles, news, cards, resources
 * Description: A heading row with a "View all posts" button above three article cards with a photo, category, title, excerpt and date.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_posts = array(
	array(
		'image' => 'shop-mug.jpg',
		'alt'   => __( 'Coffee mug and biscuit on a café table', 'bblocks' ),
		'cat'   => __( 'Growth', 'bblocks' ),
		'title' => __( 'How a local café doubled repeat visits with loyalty rewards', 'bblocks' ),
		'text'  => __( 'Small perks, sent at the right moment, turned first-time guests into regulars.', 'bblocks' ),
		'date'  => __( 'March 12, 2026', 'bblocks' ),
	),
	array(
		'image' => 'gadget-headphones.jpg',
		'alt'   => __( 'Headphones and a smartphone on a desk', 'bblocks' ),
		'cat'   => __( 'Product', 'bblocks' ),
		'title' => __( 'Five checkout tweaks that cut abandoned carts', 'bblocks' ),
		'text'  => __( 'Simple changes to your payment page that help more shoppers finish buying.', 'bblocks' ),
		'date'  => __( 'February 26, 2026', 'bblocks' ),
	),
	array(
		'image' => 'education-desk.jpg',
		'alt'   => __( 'Laptop and a cup of coffee on a wooden desk', 'bblocks' ),
		'cat'   => __( 'Guides', 'bblocks' ),
		'title' => __( 'A plain-English guide to payment fees', 'bblocks' ),
		'text'  => __( 'What you really pay for each card payment, and how to keep costs low.', 'bblocks' ),
		'date'  => __( 'February 9, 2026', 'bblocks' ),
	),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'From our blog', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Product news, customer stories and tips for growing your business.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'View all posts', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_posts as $bblocks_post ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_post['image'] ) ); ?>" alt="<?php echo esc_attr( $bblocks_post['alt'] ); ?>" style="border-radius:8px;aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html( $bblocks_post['cat'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html( $bblocks_post['title'] ); ?></a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_post['text'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_post['date'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
