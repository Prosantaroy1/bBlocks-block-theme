<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Help Center
 * Slug: bblocks/site-startup-docs
 * Categories: bblocks, bblocks-site-startup, bblocks-faq, featured
 * Keywords: startup, help center, knowledge base, docs, support, search
 * Description: A dark page header, a search bar with topic shortcuts, six help topic cards with article counts and a support row with a button.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_topics = array(
	array( '◎', __( 'Getting started', 'bblocks' ), __( 'Create your account, verify your business and take your first payment.', 'bblocks' ), 8 ),
	array( '$', __( 'Payments', 'bblocks' ), __( 'Cards, wallets, payment links and everything about checkout.', 'bblocks' ), 12 ),
	array( '⛨', __( 'Security', 'bblocks' ), __( 'How we protect your account and your customers’ data.', 'bblocks' ), 6 ),
	array( '↻', __( 'Subscriptions', 'bblocks' ), __( 'Set up recurring billing, trials and plan changes.', 'bblocks' ), 7 ),
	array( '▤', __( 'Payouts and reports', 'bblocks' ), __( 'When money reaches your bank and how to read your reports.', 'bblocks' ), 9 ),
	array( '⚙', __( 'Integrations', 'bblocks' ), __( 'Connect your website, shop, accounting and email tools.', 'bblocks' ), 11 ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">

	<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":1,"textColor":"background","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Help Center', 'bblocks' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"accent","fontSize":"large"} -->
			<p class="has-accent-color has-text-color has-large-font-size"><?php echo esc_html__( 'Guides and answers for everything you can do with Fluxpay.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search the help center', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'What are you looking for?', 'bblocks' ) ); ?>,"width":420,"widthUnit":"px","buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"fontSize":"small"} /-->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
			<div class="wp-block-buttons">
				<?php foreach ( array( __( 'Payments', 'bblocks' ), __( 'Payouts', 'bblocks' ), __( 'Security', 'bblocks' ), __( 'Subscriptions', 'bblocks' ) ) as $bblocks_tag ) : ?>
				<!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html( $bblocks_tag ); ?></a></div>
				<!-- /wp:button -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
	<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Browse by topic', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<?php foreach ( array_chunk( $bblocks_topics, 3 ) as $bblocks_row ) : ?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns">
			<?php foreach ( $bblocks_row as $bblocks_topic ) : ?>
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"backgroundColor":"background","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0.75rem"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group has-background-background-color has-background" style="border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
					<p class="bblocks-icon is-small"><?php echo esc_html( $bblocks_topic[0] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $bblocks_topic[1] ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
					<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_topic[2] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php
						/* translators: 1: topic name, 2: number of articles. */
						echo esc_html( sprintf( _n( 'Browse %1$s (%2$d article)', 'Browse %1$s (%2$d articles)', $bblocks_topic[3], 'bblocks' ), $bblocks_topic[1], $bblocks_topic[3] ) );
					?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:columns -->
		<?php endforeach; ?>

		<!-- wp:separator {"backgroundColor":"border-color","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|small"}}}} -->
		<hr class="wp-block-separator has-text-color has-border-color-color has-alpha-channel-opacity has-border-color-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--small)"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Support around the clock', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Our team answers by email and chat, every day of the year.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Talk to a real person', 'bblocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html__( 'Most questions are answered within an hour, no bots and no scripts.', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"200px"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:200px">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact support', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
