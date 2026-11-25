<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Startup: Hero
 * Slug: bblocks/site-startup-hero
 * Categories: bblocks, bblocks-site-startup, bblocks-hero, banner
 * Keywords: startup, saas, fintech, payments, hero, dark, product cards
 * Description: A dark hero with a large headline, intro, two buttons and four product cards with photos, labels and short descriptions.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_cards = array(
	array(
		'label' => __( 'In-store payments', 'bblocks' ),
		'url'   => '/pricing/',
		'image' => 'scene-shop.jpg',
		'alt'   => __( 'Shop counter with clothing racks, ready to take card payments', 'bblocks' ),
		'lead'  => __( 'Sell in person.', 'bblocks' ),
		'text'  => __( 'Take cards, wallets and tap-to-pay at the counter in seconds.', 'bblocks' ),
	),
	array(
		'label' => __( 'Mobile payments', 'bblocks' ),
		'url'   => '/pricing/',
		'image' => 'gadget-phone.jpg',
		'alt'   => __( 'Smartphone on a desk showing a payment app', 'bblocks' ),
		'lead'  => __( 'Get paid anywhere.', 'bblocks' ),
		'text'  => __( 'Send payment links and invoices your customers pay from their phone.', 'bblocks' ),
	),
	array(
		'label' => __( 'Grow your audience', 'bblocks' ),
		'url'   => '/about/',
		'image' => 'scene-cafe.jpg',
		'alt'   => __( 'Café owner serving coffee to a customer', 'bblocks' ),
		'lead'  => __( 'Keep them coming back.', 'bblocks' ),
		'text'  => __( 'Loyalty, receipts and offers that turn first visits into regulars.', 'bblocks' ),
	),
	array(
		'label' => __( 'Built by experts', 'bblocks' ),
		'url'   => '/help-center/',
		'image' => 'gadget-desk.jpg',
		'alt'   => __( 'Tidy workspace with a laptop and keyboard', 'bblocks' ),
		'lead'  => __( 'Secure by design.', 'bblocks' ),
		'text'  => __( 'Bank-level encryption and fraud checks on every single transaction.', 'bblocks' ),
	),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","textColor":"background","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-large"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":1,"textColor":"background","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-background-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Fluxpay is the payments platform that grows with your business.', 'bblocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"accent","fontSize":"large"} -->
		<p class="has-accent-color has-text-color has-large-font-size"><?php echo esc_html__( 'Accept payments online, in store and on the go, then see every sale in one simple dashboard.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php echo esc_html__( 'Get started for free', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php echo esc_html__( 'View pricing', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $bblocks_cards as $bblocks_card ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( home_url( $bblocks_card['url'] ) ); ?>"><?php echo esc_html( $bblocks_card['label'] ); ?> →</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $bblocks_card['image'] ) ); ?>" alt="<?php echo esc_attr( $bblocks_card['alt'] ); ?>" style="border-radius:8px;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
			<p class="has-accent-color has-text-color has-small-font-size"><strong><?php echo esc_html( $bblocks_card['lead'] ); ?></strong> <?php echo esc_html( $bblocks_card['text'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
