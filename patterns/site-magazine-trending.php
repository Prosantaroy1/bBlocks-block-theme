<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Magazine: Trending Numbered List
 * Slug: bblocks/site-magazine-trending
 * Categories: bblocks, bblocks-site-magazine, bblocks-blog, query
 * Keywords: magazine, news, trending, popular, most read, numbered list, posts
 * Description: A warm grey band with a section intro beside a compact numbered list of five stories, each with category, linked title and date.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Most read', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0.5rem"}}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0.5rem"><?php echo esc_html__( 'Trending now', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'The five stories our readers keep coming back to this week, from long reads to quick explainers.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<?php for ( $bblocks_n = 1; $bblocks_n <= 5; $bblocks_n++ ) : ?>
			<!-- wp:columns {"isStackedOnMobile":false,"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
				<!-- wp:column {"width":"3.5rem"} -->
				<div class="wp-block-column" style="flex-basis:3.5rem">
				<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"2.5rem","fontWeight":"800","lineHeight":"1"}},"fontFamily":"playfair-display"} -->
				<p class="has-primary-color has-text-color has-playfair-display-font-family" style="font-size:2.5rem;font-weight:800;line-height:1"><?php echo esc_html( zeroise( $bblocks_n, 2 ) ); ?></p>
				<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
				<!-- wp:query {"queryId":<?php echo (int) ( 120 + $bblocks_n ); ?>,"query":{"perPage":1,"pages":0,"offset":<?php echo (int) ( 9 + $bblocks_n ); ?>,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:post-terms {"term":"category","textColor":"primary","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em","fontSize":"0.75rem"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

						<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"top":"0.25rem","bottom":"0.25rem"}},"typography":{"lineHeight":"1.25"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

						<!-- wp:post-date {"textColor":"muted-text","style":{"typography":{"fontSize":"0.8rem"}}} /-->
					<!-- /wp:post-template -->

					<!-- wp:query-no-results -->
						<!-- wp:paragraph {"textColor":"muted-text"} -->
						<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'More stories are on the way.', 'bblocks' ); ?></p>
						<!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<?php endfor; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
