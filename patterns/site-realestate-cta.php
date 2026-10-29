<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Free Valuation Call to Action
 * Slug: bblocks/site-realestate-cta
 * Categories: bblocks, bblocks-site-realestate, bblocks-cta, call-to-action
 * Keywords: real estate, valuation, appraisal, sell, call to action, contact
 * Description: A dark green rounded band with a kitchen photo, a valuation headline, short text, contact buttons and a phone line.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","backgroundColor":"primary","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
				<!-- wp:paragraph {"textColor":"background","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
				<p class="has-background-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Thinking of selling?', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textColor":"background","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Get a free valuation', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"background"} -->
				<p class="has-background-color has-text-color"><?php echo esc_html__( 'Find out what your home is worth in today\'s market. An agent will visit, walk you through recent sales nearby and send a written estimate within 48 hours.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Book my valuation', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="tel:+15550100199"><?php echo esc_html__( 'Call +1 555 010 0199', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/realestate-kitchen.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A white kitchen with a large island and pendant lights', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
