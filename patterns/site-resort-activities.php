<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Resort: Activities & Experiences
 * Slug: bblocks/site-resort-activities
 * Categories: bblocks, bblocks-site-resort, bblocks-features, featured
 * Keywords: resort, activities, experiences, adventure, cards
 * Description: A large heading above four tall image cards, each labelled with an activity name in the top corner.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_acts = array(
	array( 'climb', __( 'Hiking', 'bblocks' ) ),
	array( 'zip', __( 'Zip Line', 'bblocks' ) ),
	array( 'rock', __( 'Rock Climbing', 'bblocks' ) ),
	array( 'kayak', __( 'Kayaking', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"align":"wide","fontSize":"huge"} -->
	<h2 class="wp-block-heading alignwide has-huge-font-size"><?php echo esc_html__( 'Activities & Experiences', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_acts as $bblocks_act ) : ?>
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/activity-' . $bblocks_act[0] . '.svg' ) ); ?>","dimRatio":10,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":420,"contentPosition":"top left","layout":{"type":"default"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-top-left" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/activity-' . $bblocks_act[0] . '.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
			<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_act[1] ); ?></h3>
			<!-- /wp:heading -->
		</div></div>
		<!-- /wp:cover -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
