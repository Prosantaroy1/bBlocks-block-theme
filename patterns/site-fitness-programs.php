<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Programs
 * Slug: bblocks/site-fitness-programs
 * Categories: bblocks, bblocks-site-fitness, bblocks-services, services
 * Keywords: fitness, gym, programs, classes, strength, hiit, yoga, boxing
 * Description: A heading and intro above six numbered program cards with an accent top border: Strength, HIIT, Yoga, Boxing, Cardio and Personal Training.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_programs = array(
	array( __( '01', 'bblocks' ), __( 'Strength', 'bblocks' ), __( 'Barbell, dumbbell and machine work in a coached, progressive plan that builds real muscle and power.', 'bblocks' ) ),
	array( __( '02', 'bblocks' ), __( 'HIIT', 'bblocks' ), __( 'Fast, intense intervals that torch calories and lift your fitness in just 30 minutes.', 'bblocks' ) ),
	array( __( '03', 'bblocks' ), __( 'Yoga', 'bblocks' ), __( 'Build mobility, balance and focus with flowing sessions that help your body recover.', 'bblocks' ) ),
	array( __( '04', 'bblocks' ), __( 'Boxing', 'bblocks' ), __( 'Pad work, bag drills and footwork for a full-body workout that sharpens speed and coordination.', 'bblocks' ) ),
	array( __( '05', 'bblocks' ), __( 'Cardio', 'bblocks' ), __( 'Rowers, bikes, treadmills and spin classes to raise your endurance at your own pace.', 'bblocks' ) ),
	array( __( '06', 'bblocks' ), __( 'Personal Training', 'bblocks' ), __( 'One-to-one sessions with a plan, nutrition tips and check-ins built around your goals.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"55%","style":{"spacing":{"blockGap":"0.5rem"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Our programs', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"textTransform":"uppercase"}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Find the training that fits you', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%">
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'From heavy lifting to calm recovery, every program is coached and every level is welcome. Mix and match as many as you like with any membership.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_programs as $bblocks_program ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"top":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-top-color:var(--wp--preset--color--primary);border-top-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"x-large","style":{"typography":{"fontWeight":"800","lineHeight":"1"}}} -->
			<p class="has-primary-color has-text-color has-x-large-font-size" style="font-weight:800;line-height:1"><?php echo esc_html( $bblocks_program[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"textTransform":"uppercase"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="text-transform:uppercase"><?php echo esc_html( $bblocks_program[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_program[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
