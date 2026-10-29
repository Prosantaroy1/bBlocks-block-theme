<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Magazine: Latest Stories Grid
 * Slug: bblocks/site-magazine-latest
 * Categories: bblocks, bblocks-site-magazine, bblocks-blog, query
 * Keywords: magazine, news, blog, latest, posts, grid
 * Description: A ruled section header with an all-stories link above a three-column grid of six posts with image, category, title, excerpt and date.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|foreground","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:3px;padding-top:var(--wp--preset--spacing--small)">
		<!-- wp:heading {"fontSize":"x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h2 class="wp-block-heading has-x-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Latest stories', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
		<p class="has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html__( 'All stories', 'bblocks' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":111,"query":{"perPage":6,"pages":0,"offset":4,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

			<!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small","style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.5rem"}},"typography":{"lineHeight":"1.25"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

			<!-- wp:post-excerpt {"excerptLength":20,"textColor":"muted-text","fontSize":"small"} /-->

			<!-- wp:post-date {"textColor":"muted-text","style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"0.06em"}}} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'New stories are on their way. Check back soon.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
