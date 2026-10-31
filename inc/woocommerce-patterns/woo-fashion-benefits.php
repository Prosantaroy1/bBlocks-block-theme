<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_benefits = array(
	array( '✦', __( 'Free shipping', 'bblocks' ), __( 'Complimentary delivery on every order over $100.', 'bblocks' ) ),
	array( '↺', __( 'Easy returns', 'bblocks' ), __( 'Changed your mind? Return within 30 days, free of charge.', 'bblocks' ) ),
	array( '◈', __( 'Secure payment', 'bblocks' ), __( 'Pay safely by card, wallet or bank transfer.', 'bblocks' ) ),
	array( '✉', __( 'Personal support', 'bblocks' ), __( 'Our stylists answer every message within one day.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:heading {"className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text"><?php echo esc_html__( 'Why shop with us', 'bblocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $bblocks_benefits as $bblocks_benefit ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bblocks-icon"} -->
			<p class="bblocks-icon"><?php echo esc_html( $bblocks_benefit[0] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"600"}},"fontFamily":"inter"} -->
				<h3 class="wp-block-heading has-inter-font-family has-medium-font-size" style="font-weight:600"><?php echo esc_html( $bblocks_benefit[1] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted-text","fontSize":"small"} -->
				<p class="has-muted-text-color has-text-color has-small-font-size"><?php echo esc_html( $bblocks_benefit[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
