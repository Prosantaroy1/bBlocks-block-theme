<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Header: Mega Menu (Shop)
 * Slug: bblocks/header-mega-shop
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Logo, navigation with a four-column Shop mega menu for product categories, and a search button.
 * Inserter: true
 *
 * The mega menu is the core Navigation block with the "Mega Menu" style
 * on the Shop submenu: each nested submenu becomes a column.
 *
 * @package bBlocks
 */

$bblocks_link = static function ( $label, $path, $top_level = false ) {
	$attrs = array(
		'label' => $label,
		'url'   => home_url( $path ),
		'kind'  => 'custom',
	);
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
	$bblocks_link( __( 'Home', 'bblocks' ), '/', true ),
	$bblocks_submenu(
		__( 'Shop', 'bblocks' ),
		'/shop/',
		array(
			$bblocks_submenu(
				__( 'Women', 'bblocks' ),
				'/shop/',
				array(
					$bblocks_link( __( 'Dresses', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Tops & Shirts', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Shoes', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Bags', 'bblocks' ), '/shop/' ),
				)
			),
			$bblocks_submenu(
				__( 'Men', 'bblocks' ),
				'/shop/',
				array(
					$bblocks_link( __( 'Shirts', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Trousers', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Shoes', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Watches', 'bblocks' ), '/shop/' ),
				)
			),
			$bblocks_submenu(
				__( 'Accessories', 'bblocks' ),
				'/shop/',
				array(
					$bblocks_link( __( 'Sunglasses', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Jewelry', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Belts', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Hats', 'bblocks' ), '/shop/' ),
				)
			),
			$bblocks_submenu(
				__( 'Collections', 'bblocks' ),
				'/shop/',
				array(
					$bblocks_link( __( 'New Arrivals', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Best Sellers', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Sale', 'bblocks' ), '/shop/' ),
					$bblocks_link( __( 'Gift Cards', 'bblocks' ), '/shop/' ),
				)
			),
		),
		array(
			'className'      => 'is-style-mega',
			'isTopLevelItem' => true,
		)
	),
	$bblocks_link( __( 'About', 'bblocks' ), '/about/', true ),
	$bblocks_link( __( 'Contact', 'bblocks' ), '/contact/', true ),
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

		<!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<?php echo serialize_block( $bblocks_navigation ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Block markup; attributes are JSON-encoded by serialize_block(). ?>

			<!-- wp:search {"label":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( __( 'Search…', 'bblocks' ) ); ?>,"buttonText":<?php echo wp_json_encode( __( 'Search', 'bblocks' ) ); ?>,"buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
