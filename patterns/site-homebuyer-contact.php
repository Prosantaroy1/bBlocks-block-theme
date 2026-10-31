<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: Contact
 * Slug: bblocks/site-homebuyer-contact
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-contact, call-to-action
 * Keywords: home buyer, contact, phone, email, address, hours, message
 * Description: A split contact section with a heading, intro and a list of contact details with icons, beside a surface card with a house photo, a short checklist and a send-a-message button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_details = array(
	array( '☏', __( 'Phone', 'bblocks' ), '<a href="tel:+15550100199">' . esc_html__( '+1 555 010 0199', 'bblocks' ) . '</a>' ),
	array( '✉', __( 'Email', 'bblocks' ), '<a href="mailto:hello@example.com">' . esc_html__( 'hello@example.com', 'bblocks' ) . '</a>' ),
	array( '⌂', __( 'Office', 'bblocks' ), esc_html__( '128 Maple Avenue, Suite 4, Springfield', 'bblocks' ) ),
	array( '◷', __( 'Hours', 'bblocks' ), esc_html__( 'Mon–Sat, 8am–7pm', 'bblocks' ) ),
);
$bblocks_reasons = array(
	__( 'Questions about a specific property', 'bblocks' ),
	__( 'Help comparing your selling options', 'bblocks' ),
	__( 'A visit at a time that suits you', 'bblocks' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Get in touch', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Let’s Talk About Your House', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Whether you are ready to sell this week or just exploring, we are glad to help. Call, email or stop by the office.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small)">
				<?php foreach ( $bblocks_details as $bblocks_detail ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"bblocks-icon","style":{"border":{"radius":"999px"}}} -->
					<p class="bblocks-icon" style="border-radius:999px"><?php echo esc_html( $bblocks_detail[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
						<p class="has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $bblocks_detail[1] ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"muted-text"} -->
						<p class="has-muted-text-color has-text-color"><?php echo $bblocks_detail[2]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped when the array is built. ?></p>
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

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1rem","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"borderColor":"border-color","layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-border-color-border-color has-surface-background-color has-background" style="border-width:1px;border-radius:1rem;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/homebuyer-house.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'A white single-story house with a green lawn and tall trees', 'bblocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Send Us a Message', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text"} -->
				<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Prefer to write? Drop us a note and a local team member will reply within one business day.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<?php foreach ( $bblocks_reasons as $bblocks_reason ) : ?>
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><span class="has-inline-color has-primary-color">✓</span> <?php echo esc_html( $bblocks_reason ); ?></p>
					<!-- /wp:paragraph -->
					<?php endforeach; ?>
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php echo esc_html__( 'Email Us Now', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
