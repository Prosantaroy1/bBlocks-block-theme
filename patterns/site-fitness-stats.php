<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Results and Stats
 * Slug: bblocks/site-fitness-stats
 * Categories: bblocks, bblocks-site-fitness, bblocks-about, about
 * Keywords: fitness, gym, results, stats, numbers, about
 * Description: A gym equipment photo beside a short results story and a two-by-two grid of large accent-colored figures.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_stats = array(
	array( __( '2,500+', 'bblocks' ), __( 'Active members', 'bblocks' ) ),
	array( __( '92%', 'bblocks' ), __( 'Members who hit their 90-day goal', 'bblocks' ) ),
	array( __( '40+', 'bblocks' ), __( 'Classes every week', 'bblocks' ) ),
	array( __( '15', 'bblocks' ), __( 'Certified coaches', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fitness-machines.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A row of strength training machines with blue padded seats in a gym', 'bblocks' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Real results', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"textTransform":"uppercase"}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Built for progress you can measure', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Every member gets a starting assessment, a clear plan and monthly check-ins, so you always see how far you have come.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_stats as $bblocks_stat ) : ?>
				<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"left":"var:preset|spacing|small"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--small)">
					<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}}} -->
					<p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800;line-height:1.1"><?php echo esc_html( $bblocks_stat[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_stat[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
