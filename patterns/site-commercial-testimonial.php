<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Commercial: Client Testimonial
 * Slug: bblocks/site-commercial-testimonial
 * Categories: bblocks, bblocks-site-commercial, bblocks-testimonials, testimonials
 * Keywords: commercial, real estate, testimonial, client, review, quote
 * Description: A centered long client letter on a light grey band with the client's name, role and company and an outline button.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:heading {"textAlign":"center","textColor":"primary","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-x-large-font-size"><?php echo esc_html__( 'What our clients say', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted-text","style":{"typography":{"lineHeight":"1.8"}}} -->
	<p class="has-text-align-center has-muted-text-color has-text-color" style="line-height:1.8"><?php echo esc_html__( '“When we bought our first medical office building, we had tenants with expiring leases, a roof that needed attention and no idea where to start. The Summit Ridge team walked the property with us the same week, built a clear plan and handled every vendor, inspection and tenant conversation. Two years later the building is fully leased, our operating costs are down and the monthly reports are the easiest thing I read all month. Having people we trust on the ground has made all the difference.”', 'bblocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","fontSize":"large","fontFamily":"playfair-display"} -->
		<p class="has-text-align-center has-playfair-display-font-family has-large-font-size"><?php echo esc_html__( 'Elena Marquez', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Managing Partner', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Lakeview Medical Partners', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"textColor":"foreground","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html__( 'Why clients stay with us', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
