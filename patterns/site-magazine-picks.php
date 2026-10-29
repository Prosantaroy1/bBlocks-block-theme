<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Magazine: Editor's Picks Band
 * Slug: bblocks/site-magazine-picks
 * Categories: bblocks, bblocks-site-magazine, bblocks-blog, query
 * Keywords: magazine, news, editor's picks, featured, dark, posts
 * Description: A dark band with an intro column and a button beside two hand-picked stories shown with image, category, title and excerpt.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"accent","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">
			<!-- wp:paragraph {"textColor":"border-color","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-border-color-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Editor\'s picks', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textColor":"background","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0.5rem"}}}} -->
			<h2 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size" style="margin-top:0.5rem"><?php echo esc_html__( 'Worth your weekend', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"border-color"} -->
			<p class="has-border-color-color has-text-color"><?php echo esc_html__( 'Longer reads our editors loved this week. Pour a coffee, find a quiet corner and settle in.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html__( 'Browse all stories', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"68%"} -->
		<div class="wp-block-column" style="flex-basis:68%">
			<!-- wp:query {"queryId":131,"query":{"perPage":2,"pages":0,"offset":15,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":2}} -->
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

					<!-- wp:post-terms {"term":"category","textColor":"border-color","fontSize":"small","style":{"spacing":{"margin":{"top":"1rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"elements":{"link":{"color":{"text":"var:preset|color|border-color"}}}}} /-->

					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large","style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.5rem"}},"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|border-color"}}}}}} /-->

					<!-- wp:post-excerpt {"excerptLength":22,"textColor":"border-color","fontSize":"small"} /-->
				<!-- /wp:post-template -->

				<!-- wp:query-no-results -->
					<!-- wp:paragraph {"textColor":"border-color"} -->
					<p class="has-border-color-color has-text-color"><?php echo esc_html__( 'Our editors are choosing their next picks. Check back soon.', 'bblocks' ); ?></p>
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
