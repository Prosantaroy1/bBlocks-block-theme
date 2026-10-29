<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Real Estate: Why Choose Us with Stats
 * Slug: bblocks/site-realestate-about
 * Categories: bblocks, bblocks-site-realestate, bblocks-about, about
 * Keywords: real estate, about, why choose us, stats, numbers, agency
 * Description: A living room photo beside a heading, intro, checklist of reasons and a contact button, followed by a row of four key numbers.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '18+', 'bblocks' ), __( 'Years in the local market', 'bblocks' ) ),
	array( __( '2,400', 'bblocks' ), __( 'Homes sold and rented', 'bblocks' ) ),
	array( __( '27 days', 'bblocks' ), __( 'Average time to sell', 'bblocks' ) ),
	array( __( '4.9/5', 'bblocks' ), __( 'Average client rating', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/realestate-living.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A bright living room with a blue sofa, plants and a herringbone floor', 'bblocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Why Homely Realty', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Local experts who treat your move like their own', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'We are a small, independent agency. That means fewer clients per agent, straight answers and someone who picks up the phone when you call.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"typography":{"fontWeight":"500"},"spacing":{"blockGap":"0.5rem"}}} -->
			<ul style="font-weight:500" class="wp-block-list">
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Free, no-obligation home valuations', 'bblocks' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Neighborhood specialists in every area we cover', 'bblocks' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Transparent fees agreed before we start', 'bblocks' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Weekly updates until the keys are in your hand', 'bblocks' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Meet with an Agent', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","backgroundColor":"primary","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"8rem"}} -->
	<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
		<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"xx-large","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}}} -->
			<p class="has-text-align-center has-background-color has-text-color has-xx-large-font-size" style="font-weight:800;line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"small"} -->
			<p class="has-text-align-center has-background-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
