<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Consulting: Services Card with Stats
 * Slug: bblocks/site-consulting-services
 * Categories: bblocks, bblocks-site-consulting, bblocks-services, services
 * Keywords: consulting, services, numbered, stats, results
 * Description: A dark rounded card with a heading, four numbered service rows, three result boxes, a discovery-call box and a rating box.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_services = array(
	array( '01', __( 'Growth Consulting', 'bblocks' ), __( 'Whether you are looking for career clarity, personal growth or strategic guidance, you get focused, practical support.', 'bblocks' ) ),
	array( '02', __( 'Marketing Consulting', 'bblocks' ), __( 'Data-driven marketing campaigns that boost your brand, attract ideal customers and grow engagement.', 'bblocks' ) ),
	array( '03', __( 'Strategy Consulting', 'bblocks' ), __( 'Actionable, visionary strategies that align with your goals, outpace competitors and secure lasting growth.', 'bblocks' ) ),
	array( '04', __( 'Finance Consulting', 'bblocks' ), __( 'Streamline your operations, optimize cash flow and make smarter decisions for long-term profit.', 'bblocks' ) ),
);
$bblocks_results = array(
	array( __( '120%', 'bblocks' ), __( 'Revenue growth for clients within six months', 'bblocks' ) ),
	array( __( '40%', 'bblocks' ), __( 'Average cost savings through smarter processes', 'bblocks' ) ),
	array( __( '10+ Years', 'bblocks' ), __( 'Helping businesses across industries grow with clarity', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"align":"wide","backgroundColor":"secondary","textColor":"background","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"960px"}} -->
	<div class="wp-block-group alignwide has-background-color has-secondary-background-color has-text-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'How I Drive Business Growth Forward', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<?php foreach ( $bblocks_services as $bblocks_service ) : ?>
		<!-- wp:columns {"verticalAlignment":"center","style":{"border":{"bottom":{"color":"#ffffff1f","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#ffffff1f;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"x-large"} -->
				<p class="has-muted-text-color has-text-color has-x-large-font-size"><?php echo esc_html( $bblocks_service[0] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
				<!-- wp:heading {"level":3,"textColor":"background","fontSize":"large"} -->
				<h3 class="wp-block-heading has-background-color has-text-color has-large-font-size"><?php echo esc_html( $bblocks_service[1] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#a3a3a3"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#a3a3a3"><?php echo esc_html( $bblocks_service[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%">
				<!-- wp:paragraph {"align":"right","textColor":"muted-text","fontSize":"large"} -->
				<p class="has-text-align-right has-muted-text-color has-text-color has-large-font-size">→</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<?php endforeach; ?>

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"12rem"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
			<?php foreach ( $bblocks_results as $bblocks_result ) : ?>
			<!-- wp:group {"style":{"border":{"radius":"0.75rem","color":"#ffffff26","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color" style="border-color:#ffffff26;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-x-large-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_result[0] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"color":{"text":"#a3a3a3"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#a3a3a3"><?php echo esc_html( $bblocks_result[1] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"border":{"radius":"0.75rem","color":"#ffffff26","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#ffffff26;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:70%">
				<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'Book a free discovery call', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Book a Session', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"border":{"radius":"0.75rem","color":"#ffffff26","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#ffffff26;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:30%">
				<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-xx-large-font-size" style="font-weight:600"><?php echo esc_html__( '4.9/5', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"color":{"text":"#a3a3a3"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#a3a3a3"><?php echo esc_html__( 'Clients consistently rate my consulting services highly.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
