<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Team: Split with Hiring Note
 * Slug: bblocks/team-03
 * Categories: bblocks, bblocks-team, team
 * Keywords: team, people, staff, members, hiring, careers
 * Description: A team introduction with a heading, short text and a hiring note on the left and a two-column grid of six team members with photos, names and roles on the right.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_members = array(
	array( 1, __( 'Laura Taylor', 'bblocks' ), __( 'Legal Counsel', 'bblocks' ) ),
	array( 2, __( 'Marcus Mercury', 'bblocks' ), __( 'Operations', 'bblocks' ) ),
	array( 6, __( 'Andy Astra', 'bblocks' ), __( 'Engineering Director', 'bblocks' ) ),
	array( 4, __( 'Meena Johnson', 'bblocks' ), __( 'Marketing Director', 'bblocks' ) ),
	array( 5, __( 'Amy Glacier', 'bblocks' ), __( 'Media Relations', 'bblocks' ) ),
	array( 3, __( 'Jon Gemini', 'bblocks' ), __( 'Customer Success', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:heading {"fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:600"><?php echo esc_html__( 'Meet our customer success team', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Our growing team brings together designers, engineers and strategists from leading tech companies and creative agencies.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|large"} -->
			<div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
				<p class="bblocks-icon is-small">✦</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><strong><?php echo esc_html__( 'We\'re hiring!', 'bblocks' ); ?></strong> <?php echo esc_html__( 'Join our growing team and start building your future with us.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"15rem"}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_members as $bblocks_member ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"96px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-' . $bblocks_member[0] . '.svg' ) ); ?>" alt="<?php /* translators: %s: Team member name. */ echo esc_attr( sprintf( __( 'Portrait of %s', 'bblocks' ), $bblocks_member[1] ) ); ?>" style="border-radius:0.75rem;aspect-ratio:1;object-fit:cover;width:96px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
						<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html( $bblocks_member[1] ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
						<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_member[2] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
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
