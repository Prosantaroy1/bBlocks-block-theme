<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Chef's Specials
 * Slug: bblocks/site-restaurant-specials
 * Categories: bblocks, bblocks-site-restaurant, bblocks-features, featured
 * Keywords: restaurant, chef, specials, dishes, food, cards
 * Description: A heading over three photo cards, each showing a signature dish with its name, a short description and a price.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_specials = array(
	array( 'restaurant-main.jpg', __( 'Chef’s Tasting Plate', 'bblocks' ), __( 'Slow-cooked beef, crisp potato and a glossy red wine reduction.', 'bblocks' ), __( '$34', 'bblocks' ), __( 'A plated main course with beef, vegetables and sauce', 'bblocks' ) ),
	array( 'restaurant-pizza.jpg', __( 'Wood-Fired Flatbread', 'bblocks' ), __( 'Blistered dough, cured ham, rocket and shaved parmesan.', 'bblocks' ), __( '$21', 'bblocks' ), __( 'A wood-fired flatbread topped with rocket on a wooden board', 'bblocks' ) ),
	array( 'restaurant-dessert.jpg', __( 'Raspberry Panna Cotta', 'bblocks' ), __( 'Silky vanilla cream, fresh raspberries and almond crumble.', 'bblocks' ), __( '$10', 'bblocks' ), __( 'A pink panna cotta dessert with fresh raspberries', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'From the Kitchen', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Chef’s Specials', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_specials as $bblocks_special ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_special[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_special[4] ); ?>" style="border-radius:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"0.5rem","left":"0.5rem","right":"0.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="padding-top:0.5rem;padding-right:0.5rem;padding-left:0.5rem">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_special[1] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"primary","fontSize":"large","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-primary-color has-text-color has-large-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_special[3] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"spacing":{"padding":{"left":"0.5rem","right":"0.5rem"}}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="padding-right:0.5rem;padding-left:0.5rem"><?php echo esc_html( $bblocks_special[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
