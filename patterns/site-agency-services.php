<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Numbered Services
 * Slug: bblocks/site-agency-services
 * Categories: bblocks, bblocks-site-agency, bblocks-services, featured
 * Keywords: agency, services, numbered list, branding, web design, strategy
 * Description: An intro column with a heading and button next to six numbered service rows separated by thin lines.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_services = array(
	array( __( 'Brand strategy', 'bblocks' ), __( 'Research, positioning and messaging that give your brand a clear reason to be chosen.', 'bblocks' ) ),
	array( __( 'Visual identity', 'bblocks' ), __( 'Logos, color, type and guidelines that make you recognisable everywhere.', 'bblocks' ) ),
	array( __( 'Website design', 'bblocks' ), __( 'Clear, beautiful websites designed around what your customers need.', 'bblocks' ) ),
	array( __( 'Web development', 'bblocks' ), __( 'Fast, accessible WordPress sites your team can update with ease.', 'bblocks' ) ),
	array( __( 'Content and campaigns', 'bblocks' ), __( 'Photography, copy and launch campaigns that tell your story well.', 'bblocks' ) ),
	array( __( 'Ongoing growth', 'bblocks' ), __( 'Monthly design and development support as your business grows.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow","textColor":"primary"} -->
			<p class="bblocks-eyebrow has-primary-color has-text-color"><?php echo esc_html__( 'What we do', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Everything your brand needs to grow', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Hire us for one service or let us take care of everything, from the first idea to launch day and beyond.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book a call', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<?php foreach ( $bblocks_services as $bblocks_index => $bblocks_service ) : ?>
			<!-- wp:columns {"isStackedOnMobile":false,"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
				<!-- wp:column {"width":"3.5rem"} -->
				<div class="wp-block-column" style="flex-basis:3.5rem">
					<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html( sprintf( '%02d', $bblocks_index + 1 ) ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_service[0] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"muted-text"} -->
					<p class="has-muted-text-color has-text-color"><?php echo esc_html( $bblocks_service[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
