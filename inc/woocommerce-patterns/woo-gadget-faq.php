<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$bblocks_questions = array(
	array( __( 'How long does shipping take?', 'bblocks' ), __( 'In-stock orders placed before 3 pm ship the same day. Standard delivery takes 1–3 business days and is free on orders over $49; express next-day delivery is available at checkout.', 'bblocks' ) ),
	array( __( 'What does the 2-year warranty cover?', 'bblocks' ), __( 'Our warranty covers manufacturing faults and hardware failures for two years from delivery, including parts and labour. Accidental damage is not covered, but you can add protection at checkout.', 'bblocks' ) ),
	array( __( 'How do I return a product?', 'bblocks' ), __( 'Start a return from your account within 30 days of delivery and print the free label. Once we receive the item in its original condition, we refund you within five business days.', 'bblocks' ) ),
	array( __( 'Which payment methods do you accept?', 'bblocks' ), __( 'We accept all major credit and debit cards, digital wallets and bank transfer. Every payment is encrypted and processed securely; we never store your full card details.', 'bblocks' ) ),
	array( __( 'Can I get help choosing the right device?', 'bblocks' ), __( 'Of course. Our product specialists are available by chat, phone and email seven days a week and will happily compare models for you.', 'bblocks' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large","top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:paragraph {"className":"bblocks-eyebrow"} -->
			<p class="bblocks-eyebrow"><?php echo esc_html__( 'FAQ', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Questions before you buy?', 'bblocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted-text"} -->
			<p class="has-muted-text-color has-text-color"><?php echo esc_html__( 'Quick answers about shipping, warranty, returns and payment. Still unsure? Our team is one message away.', 'bblocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact us', 'bblocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:group {"backgroundColor":"surface","style":{"border":{"radius":"1.25rem","width":"1px","color":"var:preset|color|border-color"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--border-color);border-width:1px;border-radius:1.25rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">
				<?php foreach ( $bblocks_questions as $bblocks_i => $bblocks_q ) : ?>
					<?php if ( $bblocks_i < count( $bblocks_questions ) - 1 ) : ?>
				<!-- wp:details {"className":"is-style-faq","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
				<details class="wp-block-details is-style-faq" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
					<?php else : ?>
				<!-- wp:details {"className":"is-style-faq","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
				<details class="wp-block-details is-style-faq" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php echo esc_html( $bblocks_q[0] ); ?></summary>
					<?php endif; ?>
					<!-- wp:paragraph -->
					<p><?php echo esc_html( $bblocks_q[1] ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
