<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Portfolio: Masonry Projects
 * Slug: bblocks/portfolio-01
 * Categories: bblocks, bblocks-portfolio, gallery
 * Keywords: portfolio, projects, gallery, work, case study, architecture
 * Description: A centered eyebrow and heading above a masonry-style project grid: two tall images, one with a project caption overlay, and two stacked landscape images.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_cover = esc_url( get_theme_file_uri( 'assets/images/architecture-2.svg' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'Portfolio', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Our Recent Projects', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"bblocks-portfolio","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide bblocks-portfolio">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/architecture-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'A tapered glass tower against a blue sky', 'bblocks' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo $bblocks_cover; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped with esc_url() above. ?>","dimRatio":50,"overlayColor":"foreground","isUserOverlayColor":true,"contentPosition":"center center","style":{"dimensions":{"aspectRatio":"3/4"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Stacked yellow cube houses', 'bblocks' ); ?>" src="<?php echo $bblocks_cover; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped with esc_url() above. ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small"} -->
				<p class="has-text-align-center has-accent-color has-text-color has-small-font-size"><?php echo esc_html__( 'Interior Design', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textAlign":"center","level":3,"textColor":"background","fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-x-large-font-size"><?php echo esc_html__( 'Alexis Interior', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/architecture-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'A white office building with long horizontal windows', 'bblocks' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/architecture-4.svg' ) ); ?>" alt="<?php echo esc_attr__( 'A brick skyscraper seen from below', 'bblocks' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
