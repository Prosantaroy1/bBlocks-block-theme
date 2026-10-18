<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Marketplace: Customer Reviews Hub
 * Slug: bblocks/site-marketplace-reviews
 * Categories: bblocks, bblocks-site-marketplace, bblocks-testimonials, testimonials
 * Keywords: marketplace, reviews, testimonials, customers, ratings
 * Description: A large bordered card with a review badge and heading spanning two columns, followed by six short customer reviews with names and star ratings.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reviews = array(
	array( 1, __( 'Clean code, fast support', 'bblocks' ), __( 'Setting up took minutes and every page looked right on mobile straight away.', 'bblocks' ), __( 'Laura T.', 'bblocks' ) ),
	array( 2, __( 'Great product and support!', 'bblocks' ), __( 'The demos were easy to adapt to our brand, and questions were answered the same day.', 'bblocks' ), __( 'Marcus M.', 'bblocks' ) ),
	array( 3, __( 'Worth every penny', 'bblocks' ), __( 'Our new shop launched a week early thanks to the ready-made templates.', 'bblocks' ), __( 'Jon G.', 'bblocks' ) ),
	array( 4, __( 'Beautiful and flexible', 'bblocks' ), __( 'Every section is a block I can edit, so I never need a developer for small changes.', 'bblocks' ), __( 'Meena J.', 'bblocks' ) ),
	array( 5, __( 'A joy to work with', 'bblocks' ), __( 'The typography and spacing feel premium — clients notice the difference.', 'bblocks' ), __( 'Amy G.', 'bblocks' ) ),
	array( 6, __( 'Simply the best', 'bblocks' ), __( 'We tried several marketplaces; this is the one our whole team sticks with.', 'bblocks' ), __( 'Andy A.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"align":"wide","borderColor":"border-color","style":{"border":{"radius":"1rem","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide has-border-color has-border-color-border-color" style="border-width:1px;border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:group {"style":{"layout":{"columnSpan":2,"rowSpan":1},"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"backgroundColor":"surface","fontSize":"small","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}}}} -->
			<p class="has-surface-background-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem"><?php echo esc_html__( '★ 10K+ Five Star Reviews', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'A Happy Customer\'s Hub For Success', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<?php foreach ( $bblocks_reviews as $bblocks_review ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_review[1] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_review[2] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"32px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_review[0] . '.svg' ) ); ?>" alt="<?php /* translators: %s: Reviewer name. */ echo esc_attr( sprintf( __( 'Portrait of %s', 'bblocks' ), $bblocks_review[3] ) ); ?>" style="border-radius:999px;aspect-ratio:1;object-fit:cover;width:32px"/></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php echo esc_html( $bblocks_review[3] ); ?> <span class="bblocks-stars">★★★★★</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
