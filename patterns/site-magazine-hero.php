<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Magazine: Featured Stories Hero
 * Slug: bblocks/site-magazine-hero
 * Categories: bblocks, bblocks-site-magazine, bblocks-hero, query
 * Keywords: magazine, news, blog, hero, featured, lead story, posts
 * Description: A newspaper-style masthead above the latest post as a large lead story, with the next three posts as compact side stories.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|foreground","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--foreground);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--small)">
		<!-- wp:heading {"level":1,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h1 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Today\'s top stories', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'The Daily Ink edition', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:query {"queryId":101,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

					<!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small","style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

					<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.75rem"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

					<!-- wp:post-excerpt {"excerptLength":32,"textColor":"muted-text","fontSize":"medium"} /-->

					<!-- wp:post-date {"textColor":"muted-text","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}}} /-->
				<!-- /wp:post-template -->

				<!-- wp:query-no-results -->
					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Your lead story will appear here as soon as you publish your first post.', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"0"}}}} -->
			<p class="has-small-font-size" style="margin-bottom:0;font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Also making news', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:query {"queryId":102,"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-query" style="margin-top:0">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
					<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"96px","style":{"layout":{"selfStretch":"fixed","flexSize":"96px"}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-terms {"term":"category","textColor":"primary","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em","fontSize":"0.75rem"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

							<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium","style":{"spacing":{"margin":{"top":"0.25rem","bottom":"0.25rem"}},"typography":{"lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

							<!-- wp:post-date {"textColor":"muted-text","style":{"typography":{"fontSize":"0.8rem"}}} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:query-no-results -->
					<!-- wp:paragraph {"textColor":"muted-text"} -->
					<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'More stories will line up here as you publish.', 'bblocks' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
