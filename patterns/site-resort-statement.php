<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Statement & Amenities
 * Slug: bblocks/site-resort-statement
 * Categories: bblocks, bblocks-site-resort, bblocks-about, about
 * Keywords: resort, statement, amenities, features, quote
 * Description: A large centered statement in the accent color, followed by amenities on either side of a central photo.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_sides = array(
	array(
		array( __( 'Nature\'s Neighborhood', 'bblocks' ), __( 'Explore the trails, lakes and wildlife right outside your door.', 'bblocks' ) ),
		array( __( 'Complimentary Breakfast', 'bblocks' ), __( 'Start each day with fresh, local dishes served until 11 am.', 'bblocks' ) ),
		array( __( 'Gym Access 24/7', 'bblocks' ), __( 'Stay active whenever you like in our fully equipped studio.', 'bblocks' ) ),
	),
	array(
		array( __( 'Refresh & Unwind', 'bblocks' ), __( 'Take a dip in the heated pool surrounded by tall palms.', 'bblocks' ) ),
		array( __( 'Best Food Menu', 'bblocks' ), __( 'Seasonal recipes made with produce from our own garden.', 'bblocks' ) ),
		array( __( 'On-site Parking', 'bblocks' ), __( 'Free, secure parking a short walk from every cottage.', 'bblocks' ) ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","textColor":"accent","fontSize":"xx-large","style":{"typography":{"lineHeight":"1.25"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-xx-large-font-size" style="line-height:1.25"><?php echo esc_html__( 'Escape to Naturexplo, where nature soothes and luxury surrounds. Unwind in eco-elegance, reconnect with serenity, and create moments that linger long after you leave.', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<?php foreach ( $bblocks_sides as $bblocks_index => $bblocks_side ) : ?>
			<?php if ( 1 === $bblocks_index ) : ?>
		<!-- wp:column {"verticalAlignment":"center","width":"36%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:36%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/resort-lounge.svg' ) ); ?>" alt="<?php echo esc_attr__( 'A calm lounge with tall windows', 'bblocks' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
			<?php endif; ?>
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<?php foreach ( $bblocks_side as $bblocks_item ) : ?>
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"600"}}} -->
				<h3 class="wp-block-heading has-medium-font-size" style="font-weight:600"><?php echo esc_html( '✦ ' . $bblocks_item[0] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_item[1] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
