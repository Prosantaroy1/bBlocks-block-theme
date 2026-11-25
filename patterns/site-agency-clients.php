<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Agency: Client Logos
 * Slug: bblocks/site-agency-clients
 * Categories: bblocks, bblocks-site-agency, bblocks-testimonials
 * Keywords: agency, clients, logos, trusted by, brands
 * Description: A short "trusted by" line above a row of six client logos, framed by thin top and bottom borders.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_logos = array(
	'logo-1.svg' => 'Northwind',
	'logo-2.svg' => 'Mixwell',
	'logo-3.svg' => 'Futurestack',
	'logo-4.svg' => 'Fortuna',
	'logo-5.svg' => 'Heartline',
	'logo-6.svg' => 'Brightclick',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
		<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-muted-text-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Trusted by teams at', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"bblocks-logos","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group bblocks-logos">
			<?php foreach ( $bblocks_logos as $bblocks_file => $bblocks_name ) : ?>
			<!-- wp:image {"width":"112px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_file ) ); ?>" alt="<?php echo esc_attr( $bblocks_name ); ?>" style="width:112px"/></figure>
			<!-- /wp:image -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
