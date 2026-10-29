<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Restaurant: Menu
 * Slug: bblocks/site-restaurant-menu
 * Categories: bblocks, bblocks-site-restaurant, bblocks-pricing, text
 * Keywords: restaurant, menu, food, starters, mains, desserts, prices
 * Description: A three-column food menu for starters, mains and desserts, each dish with a name, short description and price.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_menu = array(
	array(
		__( 'Starters', 'bblocks' ),
		array(
			array( __( 'Burrata & Heirloom Tomato', 'bblocks' ), __( 'Basil oil, sea salt and grilled sourdough.', 'bblocks' ), __( '$14', 'bblocks' ) ),
			array( __( 'Charred Octopus', 'bblocks' ), __( 'Smoked paprika, potato crema and lemon.', 'bblocks' ), __( '$17', 'bblocks' ) ),
			array( __( 'Wild Mushroom Soup', 'bblocks' ), __( 'Thyme, crème fraîche and toasted hazelnuts.', 'bblocks' ), __( '$11', 'bblocks' ) ),
		),
	),
	array(
		__( 'Mains', 'bblocks' ),
		array(
			array( __( 'Slow-Braised Short Rib', 'bblocks' ), __( 'Red wine jus, root vegetables and polenta.', 'bblocks' ), __( '$32', 'bblocks' ) ),
			array( __( 'Hand-Rolled Tagliatelle', 'bblocks' ), __( 'Brown butter, sage and aged parmesan.', 'bblocks' ), __( '$24', 'bblocks' ) ),
			array( __( 'Market Fish of the Day', 'bblocks' ), __( 'Fennel, capers, olives and citrus.', 'bblocks' ), __( '$29', 'bblocks' ) ),
		),
	),
	array(
		__( 'Desserts', 'bblocks' ),
		array(
			array( __( 'Raspberry Panna Cotta', 'bblocks' ), __( 'Fresh berries and almond crumble.', 'bblocks' ), __( '$10', 'bblocks' ) ),
			array( __( 'Dark Chocolate Torte', 'bblocks' ), __( 'Sea salt caramel and vanilla cream.', 'bblocks' ), __( '$11', 'bblocks' ) ),
			array( __( 'Lemon Olive Oil Cake', 'bblocks' ), __( 'Mascarpone and candied peel.', 'bblocks' ), __( '$9', 'bblocks' ) ),
		),
	),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Taste of the Season', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Our Menu', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'A short menu that changes with the market. Please tell us about any allergies when you book.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_menu as $bblocks_course ) : ?>
		<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"textAlign":"center","fontSize":"x-large","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
			<h3 class="wp-block-heading has-text-align-center has-x-large-font-size" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html( $bblocks_course[0] ); ?></h3>
			<!-- /wp:heading -->

			<?php foreach ( $bblocks_course[1] as $bblocks_dish ) : ?>
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
					<p style="font-weight:600"><?php echo esc_html( $bblocks_dish[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="has-primary-color has-text-color" style="font-weight:600"><?php echo esc_html( $bblocks_dish[2] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_dish[1] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/reservations/' ) ); ?>"><?php echo esc_html__( 'Book a Table', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
