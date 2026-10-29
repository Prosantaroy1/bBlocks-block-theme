<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Trainers
 * Slug: bblocks/site-fitness-trainers
 * Categories: bblocks, bblocks-site-fitness, bblocks-team, team
 * Keywords: fitness, gym, trainers, coaches, team
 * Description: A heading above four trainer cards, each with a portrait, name, specialty and years of experience.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_trainers = array(
	array( '2', __( 'Marcus Reid', 'bblocks' ), __( 'Strength Coach', 'bblocks' ), __( '12 years coaching', 'bblocks' ) ),
	array( '1', __( 'Elena Cruz', 'bblocks' ), __( 'HIIT & Spin', 'bblocks' ), __( '8 years coaching', 'bblocks' ) ),
	array( '4', __( 'Jordan Blake', 'bblocks' ), __( 'Boxing Coach', 'bblocks' ), __( '10 years coaching', 'bblocks' ) ),
	array( '5', __( 'Aisha Karim', 'bblocks' ), __( 'Yoga & Mobility', 'bblocks' ), __( '9 years coaching', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Meet the coaches', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"textTransform":"uppercase"}}} -->
		<h2 class="wp-block-heading has-xx-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Trainers who get results', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_trainers as $bblocks_trainer ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium"},"blockGap":"0.35rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_trainer[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_trainer[1] ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);text-transform:uppercase"><?php echo esc_html( $bblocks_trainer[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
			<p class="has-primary-color has-text-color" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);font-weight:700"><?php echo esc_html( $bblocks_trainer[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
			<p class="has-muted-text-color has-text-color has-small-font-size" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html( $bblocks_trainer[3] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
