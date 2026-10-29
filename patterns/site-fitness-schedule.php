<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Class Schedule
 * Slug: bblocks/site-fitness-schedule
 * Categories: bblocks, bblocks-site-fitness, bblocks-features, features
 * Keywords: fitness, gym, schedule, timetable, classes, table
 * Description: A weekly class timetable built with the core Table block, with days as rows and four time slots as columns, plus a note and a Free Trial Class button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_slots = array(
	__( '6 AM', 'bblocks' ),
	__( '9 AM', 'bblocks' ),
	__( '12 PM', 'bblocks' ),
	__( '6 PM', 'bblocks' ),
);

$bblocks_hiit   = __( 'HIIT', 'bblocks' );
$bblocks_yoga   = __( 'Yoga', 'bblocks' );
$bblocks_boxing = __( 'Boxing', 'bblocks' );
$bblocks_lift   = __( 'Lift', 'bblocks' );
$bblocks_spin   = __( 'Spin', 'bblocks' );
$bblocks_core   = __( 'Core', 'bblocks' );
$bblocks_rest   = __( '—', 'bblocks' );

$bblocks_days = array(
	array( __( 'Mon', 'bblocks' ), array( $bblocks_hiit, $bblocks_yoga, $bblocks_lift, $bblocks_boxing ) ),
	array( __( 'Tue', 'bblocks' ), array( $bblocks_spin, $bblocks_lift, $bblocks_core, $bblocks_hiit ) ),
	array( __( 'Wed', 'bblocks' ), array( $bblocks_lift, $bblocks_yoga, $bblocks_hiit, $bblocks_spin ) ),
	array( __( 'Thu', 'bblocks' ), array( $bblocks_hiit, $bblocks_boxing, $bblocks_lift, $bblocks_yoga ) ),
	array( __( 'Fri', 'bblocks' ), array( $bblocks_spin, $bblocks_core, $bblocks_hiit, $bblocks_boxing ) ),
	array( __( 'Sat', 'bblocks' ), array( $bblocks_lift, $bblocks_yoga, $bblocks_spin, $bblocks_rest ) ),
	array( __( 'Sun', 'bblocks' ), array( $bblocks_rest, $bblocks_yoga, $bblocks_rest, $bblocks_rest ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Weekly timetable', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"textTransform":"uppercase"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Class schedule', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Every class lasts 45 minutes. Book your spot in the app or just turn up five minutes early.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:table {"hasFixedLayout":true,"backgroundColor":"background","borderColor":"border-color","fontSize":"small","style":{"border":{"width":"1px"}}} -->
	<figure class="wp-block-table has-small-font-size"><table class="has-border-color has-border-color-border-color has-background-background-color has-background has-fixed-layout" style="border-width:1px"><thead><tr><th><?php echo esc_html__( 'Day', 'bblocks' ); ?></th><?php foreach ( $bblocks_slots as $bblocks_slot ) : ?><th><?php echo esc_html( $bblocks_slot ); ?></th><?php endforeach; ?></tr></thead><tbody><?php foreach ( $bblocks_days as $bblocks_day ) : ?><tr><td><strong><?php echo esc_html( $bblocks_day[0] ); ?></strong></td><?php foreach ( $bblocks_day[1] as $bblocks_class ) : ?><td><?php echo esc_html( $bblocks_class ); ?></td><?php endforeach; ?></tr><?php endforeach; ?></tbody></table></figure>
	<!-- /wp:table -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book a Free Trial Class', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
