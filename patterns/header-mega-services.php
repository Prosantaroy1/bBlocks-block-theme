<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Header: Mega Menu (Services)
 * Slug: bblocks/header-mega-services
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Logo, navigation with a three-column Services mega menu (links with short descriptions) and a call-to-action button.
 * Inserter: true
 *
 * The mega menu is the core Navigation block with the "Mega Menu" style
 * on the Services submenu: each nested submenu becomes a column.
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
		__( 'Services', 'bblocks' ),
		'/services/',
		array(
			$bblocks_submenu(
				__( 'Strategy', 'bblocks' ),
				'/services/',
				array(
					$bblocks_link( __( 'Business Planning', 'bblocks' ), '/services/', __( 'Clear goals and a step-by-step plan.', 'bblocks' ) ),
					$bblocks_link( __( 'Market Research', 'bblocks' ), '/services/', __( 'Know your customers and competitors.', 'bblocks' ) ),
					$bblocks_link( __( 'Growth Consulting', 'bblocks' ), '/services/', __( 'Find the next best move for your business.', 'bblocks' ) ),
				)
			),
			$bblocks_submenu(
				__( 'Marketing', 'bblocks' ),
				'/services/',
				array(
					$bblocks_link( __( 'Website Design', 'bblocks' ), '/services/', __( 'A fast website that turns visitors into leads.', 'bblocks' ) ),
					$bblocks_link( __( 'Local SEO', 'bblocks' ), '/services/', __( 'Get found on Google by customers nearby.', 'bblocks' ) ),
					$bblocks_link( __( 'Social Media', 'bblocks' ), '/services/', __( 'Posts and ads that people notice.', 'bblocks' ) ),
				)
			),
			$bblocks_submenu(
				__( 'Support', 'bblocks' ),
				'/contact/',
				array(
					$bblocks_link( __( 'Help Center', 'bblocks' ), '/faq/', __( 'Answers to the most common questions.', 'bblocks' ) ),
					$bblocks_link( __( 'Pricing', 'bblocks' ), '/pricing/', __( 'Simple plans for every budget.', 'bblocks' ) ),
					$bblocks_link( __( 'Book a Call', 'bblocks' ), '/contact/', __( 'Talk to us about your project.', 'bblocks' ) ),
				)
			),
		),
		array(
			'className'      => 'is-style-mega',
			'isTopLevelItem' => true,
		)
	),
	$bblocks_link( __( 'About', 'bblocks' ), '/about/', '', true ),
	$bblocks_link( __( 'Blog', 'bblocks' ), '/blog/', '', true ),
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
			<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get Started', 'bblocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
