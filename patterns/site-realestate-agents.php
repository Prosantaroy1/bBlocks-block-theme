<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Our Agents
 * Slug: bblocks/site-realestate-agents
 * Categories: bblocks, bblocks-site-realestate, bblocks-team, team
 * Keywords: real estate, agents, realtors, team, brokers, contact
 * Description: A heading and four agent cards with a portrait, name, role, area specialty and phone and email links.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_agents = array(
	array( '1', __( 'Portrait illustration of Olivia Bennett', 'bblocks' ), __( 'Olivia Bennett', 'bblocks' ), __( 'Founder & Broker', 'bblocks' ), __( 'Northgate and Oak Park', 'bblocks' ) ),
	array( '2', __( 'Portrait illustration of Daniel Ortiz', 'bblocks' ), __( 'Daniel Ortiz', 'bblocks' ), __( 'Senior Sales Agent', 'bblocks' ), __( 'Riverside and Midtown', 'bblocks' ) ),
	array( '3', __( 'Portrait illustration of Grace Lin', 'bblocks' ), __( 'Grace Lin', 'bblocks' ), __( 'Rentals Specialist', 'bblocks' ), __( 'Old Town and Westfield', 'bblocks' ) ),
	array( '4', __( 'Portrait illustration of Marcus Reed', 'bblocks' ), __( 'Marcus Reed', 'bblocks' ), __( 'Property Manager', 'bblocks' ), __( 'All neighborhoods', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Our agents', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Meet the people behind your move', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_agents as $bblocks_agent ) : ?>
		<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<figure class="wp-block-image size-full has-custom-border" style="margin-bottom:var(--wp--preset--spacing--small)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_agent[0] . '.svg' ) ); ?>" alt="<?php echo esc_attr( $bblocks_agent[1] ); ?>" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_agent[2] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_agent[3] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_agent[4] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="tel:+15550100199"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a><br><a href="mailto:hello@example.com"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
