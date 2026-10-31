<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_promises = array(
	array( '◈', __( '2-year warranty', 'bblocks' ), __( 'Every device is covered for two full years, parts and labour included.', 'bblocks' ) ),
	array( '➜', __( 'Fast delivery', 'bblocks' ), __( 'Order by 3 pm for free next-day delivery on in-stock items.', 'bblocks' ) ),
	array( '↺', __( '30-day returns', 'bblocks' ), __( 'Not the right fit? Send it back within 30 days for a full refund.', 'bblocks' ) ),
	array( '✆', __( 'Expert support', 'bblocks' ), __( 'Real product specialists on chat and phone, seven days a week.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","backgroundColor":"secondary","textColor":"surface","style":{"border":{"radius":"1.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
	<div class="wp-block-group alignwide has-surface-color has-secondary-background-color has-text-color has-background" style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"58%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
				<!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
				<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'Voltix care', 'bblocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textColor":"surface","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-surface-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Support that has your back', 'bblocks' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"13rem"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
					<?php foreach ( $bblocks_promises as $bblocks_promise ) : ?>
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"bblocks-icon is-small"} -->
						<p class="bblocks-icon is-small"><?php echo esc_html( $bblocks_promise[0] ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":3,"textColor":"surface","fontSize":"medium"} -->
						<h3 class="wp-block-heading has-surface-color has-text-color has-medium-font-size"><?php echo esc_html( $bblocks_promise[1] ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php echo esc_html( $bblocks_promise[2] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<?php endforeach; ?>
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:button {"backgroundColor":"accent","textColor":"foreground"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php echo esc_html__( 'Visit the support centre', 'bblocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
				<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gadget-desk.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Tidy desk with a monitor, phone dock, headphones and wireless mouse', 'bblocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/5;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
