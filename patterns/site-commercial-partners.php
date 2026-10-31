<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Commercial: Partners and Associations
 * Slug: bblocks/site-commercial-partners
 * Categories: bblocks, bblocks-site-commercial, bblocks-about, about
 * Keywords: commercial, real estate, partners, associations, logos, clients
 * Description: A short title above a wrapping row of six partner and association logos.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_logos = array(
	1 => __( 'Northwind', 'bblocks' ),
	2 => __( 'Mixwell', 'bblocks' ),
	3 => __( 'Futurestack', 'bblocks' ),
	4 => __( 'Fortuna', 'bblocks' ),
	5 => __( 'Heartline', 'bblocks' ),
	6 => __( 'Brightclick', 'bblocks' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:heading {"textAlign":"center","textColor":"muted-text","fontSize":"small","style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
	<h2 class="wp-block-heading has-text-align-center has-muted-text-color has-text-color has-inter-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Proud members and partners', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_logos as $bblocks_index => $bblocks_name ) : ?>
		<!-- wp:image {"width":"132px","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-' . $bblocks_index . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_name ); ?>" style="width:132px"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
