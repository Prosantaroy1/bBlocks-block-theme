<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Education: Contact
 * Slug: bblocks/site-education-contact
 * Categories: bblocks, bblocks-site-education, bblocks-contact, contact
 * Keywords: education, contact, support, campus, address
 * Description: A contact section with a heading, email, phone and campus address beside a campus photo and a support-hours card.
 * Inserter: true
 *
 * @package bBlocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'Contact us', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'We are here to help you learn', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Questions about a course, your account or team plans? Send us a message and a learning advisor will get back to you.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"bblocks-list-chevron"} -->
			<ul class="wp-block-list bblocks-list-chevron">
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Email:', 'bblocks' ); ?> <a href="<?php echo esc_url( 'mailto:' . __( 'hello@example.com', 'bblocks' ) ); ?>"><?php echo esc_html__( 'hello@example.com', 'bblocks' ); ?></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Phone:', 'bblocks' ); ?> <a href="<?php echo esc_url( 'tel:' . __( '+15550100199', 'bblocks' ) ); ?>"><?php echo esc_html__( '+1 555 010 0199', 'bblocks' ); ?></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Campus: 240 College Avenue, Springfield', 'bblocks' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Learner support hours', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Monday – Friday: 8am – 8pm', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Saturday: 10am – 4pm', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.5rem"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/education-campus.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Stone college buildings around a green lawn on a sunny day', 'bblocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
