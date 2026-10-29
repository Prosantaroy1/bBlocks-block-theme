<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Fitness: Hero
 * Slug: bblocks/site-fitness-hero
 * Categories: bblocks, bblocks-site-fitness, bblocks-hero, banner
 * Keywords: fitness, gym, training, workout, hero, cover
 * Description: A full-width gym photo cover with a strong overlay, an eyebrow, a bold uppercase title, a short intro, Join Now and Free Trial Class buttons and three quick facts.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_facts = array(
	__( 'Open 24/7', 'bblocks' ),
	__( '40+ weekly classes', 'bblocks' ),
	__( 'Certified coaches', 'bblocks' ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/fitness-dumbbells.jpg' ) ); ?>","dimRatio":70,"overlayColor":"background","isUserOverlayColor":true,"minHeight":720,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-foreground-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small);min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fitness-dumbbells.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:800;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Pulsefit Gym · Strength & Conditioning', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textColor":"foreground","fontSize":"huge","style":{"typography":{"textTransform":"uppercase","fontWeight":"800","lineHeight":"1"}}} -->
		<h1 class="wp-block-heading has-foreground-color has-text-color has-huge-font-size" style="font-weight:800;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Train hard. Get strong. Feel unstoppable.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"foreground","fontSize":"large"} -->
		<p class="has-foreground-color has-text-color has-large-font-size"><?php echo esc_html__( 'Modern equipment, high-energy group classes and coaches who push you further. Your first class is on us.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/membership/' ) ); ?>"><?php echo esc_html__( 'Join Now', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"foreground","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Free Trial Class', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
			<?php foreach ( $bblocks_facts as $bblocks_fact ) : ?>
			<!-- wp:paragraph {"textColor":"foreground","fontSize":"small","style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"left":"0.75rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
			<p class="has-foreground-color has-text-color has-small-font-size" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:0.75rem;font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html( $bblocks_fact ); ?></p>
			<!-- /wp:paragraph -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
