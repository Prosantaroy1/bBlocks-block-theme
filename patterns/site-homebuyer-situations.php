<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Home Buyer: Situations We Help With
 * Slug: bblocks/site-homebuyer-situations
 * Categories: bblocks, bblocks-site-homebuyer, bblocks-services, services
 * Keywords: home buyer, sell house, situations, inherited, divorce, repairs, landlord, cards
 * Description: A centered intro about buying houses in any condition, followed by a responsive grid of six situation cards with icons and a red top accent.
 * Inserter: true
 *
 * @package bBlocks
 */

$bblocks_situations = array(
	array( '$', __( 'Money Is Tight', 'bblocks' ), __( 'Behind on payments or worried about foreclosure? Talk to us early. A quick, as-is sale can give you breathing room and more choices.', 'bblocks' ) ),
	array( '→', __( 'Moving Away', 'bblocks' ), __( 'A new job, a transfer or a fresh start somewhere else? We work around your moving date so an empty house never holds you back.', 'bblocks' ) ),
	array( '⌂', __( 'Inherited a House', 'bblocks' ), __( 'Settling an estate is hard enough. We can buy an inherited home with its contents and work patiently with the estate timeline.', 'bblocks' ) ),
	array( '⇄', __( 'Divorce or Separation', 'bblocks' ), __( 'Dividing property is stressful. A fast, private cash sale removes one of the biggest decisions from an already difficult time.', 'bblocks' ) ),
	array( '✎', __( 'Needs Major Repairs', 'bblocks' ), __( 'Leaky roof, old wiring or a dated kitchen? We buy houses exactly as they are, with no repairs, cleaning or staging required.', 'bblocks' ) ),
	array( '✦', __( 'Tired Landlord', 'bblocks' ), __( 'Done with late rent and midnight repair calls? We buy rental homes, including ones that still have tenants living in them.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.16em;text-transform:uppercase"><?php echo esc_html__( 'Whatever you are facing', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'We Buy Houses in Any Condition, in Any Situation', 'bblocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted-text"} -->
		<p class="has-text-align-center has-muted-text-color has-text-color"><?php echo esc_html__( 'Homeowners come to us for many different reasons. Whatever brought you here, you will get a straight answer, a fair number and zero pressure to accept it.', 'bblocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_situations as $bblocks_item ) : ?>
		<!-- wp:group {"backgroundColor":"background","style":{"border":{"radius":"0.75rem","top":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="border-radius:0.75rem;border-top-color:var(--wp--preset--color--primary);border-top-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_item[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $bblocks_item[1] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
			<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_item[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/get-an-offer/' ) ); ?>"><?php echo esc_html__( 'Get My Free Cash Offer', 'bblocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
