<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Header: Mega Menu (Solutions)
 * Slug: bblocks/header-mega-solutions
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Logo, navigation with a Solutions mega menu of six link cards with descriptions, a regular Company dropdown and a call-to-action button.
 * Inserter: true
 *
 * The mega menu is the core Navigation block with the "Mega Menu" style
 * on the Solutions submenu: plain links are laid out as a grid of cards.
 *
 * @package bBlocks
 */

$bblocks_link = static function ( $label, $path, $description = '', $top_level = false ) {
	$attrs = array(
		'label' => $label,
		'url'   => home_url( $path ),
		'kind'  => 'custom',
	);
	if ( '' !== $description ) {
		$attrs['description'] = $description;
	}
	if ( $top_level ) {
		$attrs['isTopLevelLink'] = true;
	}
	return array(
		'blockName'    => 'core/navigation-link',
		'attrs'        => $attrs,
		'innerBlocks'  => array(),
		'innerHTML'    => '',
		'innerContent' => array(),
	);
};

$bblocks_submenu = static function ( $label, $path, $children, $extra = array() ) {
	return array(
		'blockName'    => 'core/navigation-submenu',
		'attrs'        => array_merge(
			array(
				'label' => $label,
				'url'   => home_url( $path ),
				'kind'  => 'custom',
			),
			$extra
		),
		'innerBlocks'  => $children,
		'innerHTML'    => '',
		'innerContent' => array_fill( 0, count( $children ), null ),
	);
};

$bblocks_items = array(
	$bblocks_link( __( 'Home', 'bblocks' ), '/', '', true ),
	$bblocks_submenu(
		__( 'Solutions', 'bblocks' ),
		'/services/',
		array(
			$bblocks_link( __( 'Restaurants & Cafés', 'bblocks' ), '/services/', __( 'Menus, table bookings and opening hours.', 'bblocks' ) ),
			$bblocks_link( __( 'Clinics & Doctors', 'bblocks' ), '/services/', __( 'Services, doctors and appointment requests.', 'bblocks' ) ),
			$bblocks_link( __( 'Law Firms', 'bblocks' ), '/services/', __( 'Practice areas, attorneys and free consultations.', 'bblocks' ) ),
			$bblocks_link( __( 'Gyms & Fitness', 'bblocks' ), '/services/', __( 'Classes, trainers and membership plans.', 'bblocks' ) ),
			$bblocks_link( __( 'Real Estate', 'bblocks' ), '/services/', __( 'Property listings, agents and valuations.', 'bblocks' ) ),
			$bblocks_link( __( 'Online Stores', 'bblocks' ), '/services/', __( 'Products, collections and secure checkout.', 'bblocks' ) ),
		),
		array(
			'className'      => 'is-style-mega',
			'isTopLevelItem' => true,
		)
	),
	$bblocks_submenu(
		__( 'Company', 'bblocks' ),
		'/about/',
		array(
			$bblocks_link( __( 'About Us', 'bblocks' ), '/about/' ),
			$bblocks_link( __( 'Our Team', 'bblocks' ), '/about/' ),
			$bblocks_link( __( 'Careers', 'bblocks' ), '/about/' ),
		),
		array( 'isTopLevelItem' => true )
	),
	$bblocks_link( __( 'Pricing', 'bblocks' ), '/pricing/', '', true ),
	$bblocks_link( __( 'Contact', 'bblocks' ), '/contact/', '', true ),
);

$bblocks_navigation = array(
	'blockName'    => 'core/navigation',
	'attrs'        => array(
		'openSubmenusOnClick' => false,
		'showSubmenuIcon'     => true,
		'overlayMenu'         => 'mobile',
		'layout'              => array(
			'type'           => 'flex',
			'justifyContent' => 'right',
			'flexWrap'       => 'wrap',
		),
		'style'               => array( 'spacing' => array( 'blockGap' => '1.75rem' ) ),
		'fontSize'            => 'small',
	),
	'innerBlocks'  => $bblocks_items,
	'innerHTML'    => '',
	'innerContent' => array_fill( 0, count( $bblocks_items ), null ),
);
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->

			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<?php echo serialize_block( $bblocks_navigation ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Block markup; attributes are JSON-encoded by serialize_block(). ?>

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"fontSize":"small"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Free Consultation', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
