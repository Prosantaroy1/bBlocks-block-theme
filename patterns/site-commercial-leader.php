<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Commercial: Recognized Leader
 * Slug: bblocks/site-commercial-leader
 * Categories: bblocks, bblocks-site-commercial, bblocks-about, about
 * Keywords: commercial, real estate, about, leader, awards, story
 * Description: A split section with a large green serif statement on the left and an office photo, a short paragraph and a button on the right.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:heading {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"lineHeight":"1.15"}}} -->
			<h2 class="wp-block-heading has-primary-color has-text-color has-xx-large-font-size" style="line-height:1.15"><?php echo esc_html__( 'A recognized leader in integrity, insight and lasting results', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"58%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commercial-office.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright open office lounge with sofas and a long meeting table by tall windows', 'bblocks' ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'For three decades, owners, investors and tenants have relied on Summit Ridge to put their interests first. That steady focus on service has earned industry honors, community awards and, most importantly, clients who stay with us for years.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html__( 'Our story', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
