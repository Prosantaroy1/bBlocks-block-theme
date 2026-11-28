<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Footer: Default
 * Slug: bblocks/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: The default footer: site title, short intro and social icons, three columns of links, and a bottom bar with the copyright line and legal links.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_footer_columns = array(
	__( 'Company', 'bblocks' )   => array( __( 'About', 'bblocks' ), __( 'Careers', 'bblocks' ), __( 'Our Team', 'bblocks' ), __( 'Contact', 'bblocks' ) ),
	__( 'Resources', 'bblocks' ) => array( __( 'Blog', 'bblocks' ), __( 'Help Center', 'bblocks' ), __( 'Guides', 'bblocks' ), __( 'FAQ', 'bblocks' ) ),
	__( 'Services', 'bblocks' )  => array( __( 'Features', 'bblocks' ), __( 'Pricing', 'bblocks' ), __( 'Case Studies', 'bblocks' ), __( 'Get a Quote', 'bblocks' ) ),
);

$bblocks_footer_legal = array( __( 'Privacy Policy', 'bblocks' ), __( 'Terms of Service', 'bblocks' ), __( 'Contact', 'bblocks' ) );
?>
<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600"}}} /-->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
			<p style="line-height:1.7"><?php echo esc_html__( 'We help small businesses grow with friendly service, honest advice and work we are proud of. Get in touch and tell us what you are planning.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--foreground)","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"0.75rem"}}}} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color">
				<!-- wp:social-link {"url":"#","service":"x"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"9rem"},"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
			<div class="wp-block-group">
				<?php foreach ( $bblocks_footer_columns as $bblocks_heading => $bblocks_links ) : ?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.0625rem","fontWeight":"600","letterSpacing":"0"}}} -->
					<h2 class="wp-block-heading" style="font-size:1.0625rem;font-weight:600;letter-spacing:0"><?php echo esc_html( $bblocks_heading ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"spacing":{"blockGap":"0.85rem"}}} -->
					<?php foreach ( $bblocks_links as $bblocks_link ) : ?>
					<!-- wp:navigation-link {"label":"<?php echo esc_attr( $bblocks_link ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<?php endforeach; ?>
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--x-large)">
		<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
		<p class="has-muted-text-color has-text-color has-small-font-size"><?php
			echo wp_kses_post(
				sprintf(
					/* translators: 1: current year, 2: link to WordPress.org, 3: link to the bBlocks theme. */
					__( '© %1$s · Powered by %2$s and %3$s', 'bblocks' ),
					esc_html( wp_date( 'Y' ) ),
					'<a href="' . esc_url( __( 'https://wordpress.org', 'bblocks' ) ) . '">WordPress</a>',
					'<a href="' . esc_url( 'https://bblocks-theme.netlify.app/' ) . '">bBlocks</a>'
				)
			);
		?></p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"overlayMenu":"never","textColor":"muted-text","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"fontSize":"small"} -->
		<?php foreach ( $bblocks_footer_legal as $bblocks_link ) : ?>
		<!-- wp:navigation-link {"label":"<?php echo esc_attr( $bblocks_link ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
		<?php endforeach; ?>
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
