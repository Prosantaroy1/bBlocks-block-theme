<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Contact
 * Slug: bblocks/site-fitness-contact
 * Categories: bblocks, bblocks-site-fitness, bblocks-contact, contact
 * Keywords: fitness, gym, contact, opening hours, address
 * Description: A contact section with a heading, phone, email and address beside a cardio-area photo and an opening-hours panel.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_hours = array(
	array( __( 'Monday – Friday', 'bblocks' ), __( '5am – 11pm', 'bblocks' ) ),
	array( __( 'Saturday', 'bblocks' ), __( '7am – 9pm', 'bblocks' ) ),
	array( __( 'Sunday', 'bblocks' ), __( '8am – 6pm', 'bblocks' ) ),
	array( __( 'Members', 'bblocks' ), __( '24/7 key-card access', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Visit us', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"textTransform":"uppercase"}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Book your free trial', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Call, email or drop by the front desk. We will set up your trial class and a quick tour of the gym.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"1.25rem"}}}} -->
			<ul style="padding-left:1.25rem" class="wp-block-list">
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Phone:', 'bblocks' ); ?> <a href="<?php echo esc_url( 'tel:' . __( '+15550100199', 'bblocks' ) ); ?>"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Email:', 'bblocks' ); ?> <a href="<?php echo esc_url( 'mailto:' . __( 'hello@example.com', 'bblocks' ) ); ?>"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Address: 88 Iron Street, Riverside', 'bblocks' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"left":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textTransform":"uppercase"}}} -->
				<h3 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Opening hours', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<?php foreach ( $bblocks_hours as $bblocks_row ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_row[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_row[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fitness-cardio.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Exercise bikes and a stair climber lined up by large gym windows', 'bblocks' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
