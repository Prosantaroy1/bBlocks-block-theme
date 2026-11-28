<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Reviews Grid
 * Slug: bblocks/site-startup-reviews
 * Categories: bblocks, bblocks-site-startup, bblocks-testimonials, testimonials
 * Keywords: startup, reviews, testimonials, customers, quotes, social proof
 * Description: A light band with an intro block and three customer review cards, each with a portrait, quote, name and company.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_reviews = array(
	array( 'portrait-3.svg', __( '“Setup took one afternoon and our first payout arrived the next morning. I wish we had switched years ago.”', 'bblocks' ), __( 'Lena Brooks', 'bblocks' ), __( 'Owner, Fern & Flower', 'bblocks' ) ),
	array( 'portrait-2.svg', __( '“The reports finally show us which products make money. Our accountant loves the exports too.”', 'bblocks' ), __( 'Omar Haddad', 'bblocks' ), __( 'Co-founder, Trailhead Gear', 'bblocks' ) ),
	array( 'portrait-6.svg', __( '“Whenever we had a question, a real person answered within minutes. That matters when you run a shop.”', 'bblocks' ), __( 'Grace Kim', 'bblocks' ), __( 'Manager, Little Loaf Bakery', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Loved by businesses big and small', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Thousands of shops, studios and online stores trust Fluxpay with their payments every day.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<?php foreach ( $bblocks_reviews as $bblocks_index => $bblocks_review ) : ?>
			<?php if ( 1 === $bblocks_index ) : ?>
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">
			<?php endif; ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"backgroundColor":"background","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:image {"width":"56px","height":"56px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"bblocks-avatar"} -->
				<figure class="wp-block-image size-full is-resized bblocks-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_review[0] ) ); ?>" alt="<?php echo esc_attr( $bblocks_review[2] ); ?>" style="object-fit:cover;width:56px;height:56px"/></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php echo esc_html( $bblocks_review[1] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","textColor":"muted-text","fontSize":"small"} -->
				<p class="has-text-align-center has-muted-text-color has-text-color has-small-font-size"><strong><?php echo esc_html( $bblocks_review[2] ); ?></strong> · <?php echo esc_html( $bblocks_review[3] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
