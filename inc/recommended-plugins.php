<?php
/**
 * Recommended plugins.
 *
 * Follows the WordPress.org theme requirements: only plugins hosted on
 * WordPress.org are recommended, they are installed and activated only when
 * the user clicks (through WordPress core's own installer), the theme makes
 * no external requests itself, and the single admin notice is permanently
 * dismissible. The theme works fully without these plugins.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Recommended plugins, keyed by their WordPress.org slug.
 *
 * @return array<string, array<string, mixed>>
 */
function bblocks_recommended_plugins() {
	return array(
		'b-blocks'             => array(
			'name'     => __( 'bBlocks Plugin', 'bblocks' ),
			'tagline'  => __( 'The companion blocks for this theme.', 'bblocks' ),
			'desc'     => __( '80+ lightweight blocks for every kind of section: pricing tables, countdowns, team members, sliders, charts, tabs, timelines, testimonials and much more.', 'bblocks' ),
			'features' => array(
				__( 'Pricing tables & comparison tables', 'bblocks' ),
				__( 'Sliders, carousels & testimonials', 'bblocks' ),
				__( 'Countdown, counters & charts', 'bblocks' ),
				__( 'Tabs, accordions & timelines', 'bblocks' ),
			),
			'best_for' => __( 'Business, Creative Agency, SaaS Product', 'bblocks' ),
			'icon'     => 'bb',
		),
		'advanced-post-block'  => array(
			'name'     => __( 'Advanced Post Block', 'bblocks' ),
			'tagline'  => __( 'Display your posts exactly how you want.', 'bblocks' ),
			'desc'     => __( 'Show posts, pages and custom post types in grid, masonry, slider, ticker, news ticker, accordion and magazine layouts — with filters, pagination and a Load More button.', 'bblocks' ),
			'features' => array(
				__( 'Magazine, masonry & slider layouts', 'bblocks' ),
				__( 'News ticker for breaking stories', 'bblocks' ),
				__( 'Category, tag & author filters', 'bblocks' ),
				__( 'Pagination and Load More', 'bblocks' ),
			),
			'best_for' => __( 'Blog pages, Freelancer, Creative Agency', 'bblocks' ),
			'icon'     => 'apb',
		),
		'b-slider'             => array(
			'name'     => __( 'bSlider', 'bblocks' ),
			'tagline'  => __( 'Sliders that bring your content to life.', 'bblocks' ),
			'desc'     => __( 'Responsive sliders and carousels from images, posts, WooCommerce products, videos or blocks — or start from 50+ ready-made templates.', 'bblocks' ),
			'features' => array(
				__( 'Image, post & product sliders', 'bblocks' ),
				__( '50+ ready-made templates', 'bblocks' ),
				__( 'Video and block slides', 'bblocks' ),
				__( 'Block editor & shortcode', 'bblocks' ),
			),
			'best_for' => __( 'Business, Creative Agency, SaaS Product', 'bblocks' ),
			'icon'     => 'slider',
		),
		'timeline-block-block' => array(
			'name'     => __( 'Timeline Block', 'bblocks' ),
			'tagline'  => __( 'Tell your story with elegant timelines.', 'bblocks' ),
			'desc'     => __( 'Create horizontal and vertical timelines in the block editor to showcase your story, events, projects and milestones.', 'bblocks' ),
			'features' => array(
				__( 'Horizontal & vertical layouts', 'bblocks' ),
				__( 'Customizable themes', 'bblocks' ),
				__( 'Company history & milestones', 'bblocks' ),
				__( 'Native Gutenberg block', 'bblocks' ),
			),
			'best_for' => __( 'About pages, Creative Agency, Freelancer', 'bblocks' ),
			'icon'     => 'timeline',
		),
		'faq-and-answers'      => array(
			'name'     => __( 'Awesome FAQ', 'bblocks' ),
			'tagline'  => __( 'Answer questions before customers ask.', 'bblocks' ),
			'desc'     => __( 'Build responsive FAQ sections with accordion themes and FAQ schema for search rich results — no coding needed.', 'bblocks' ),
			'features' => array(
				__( 'Accordion themes', 'bblocks' ),
				__( 'FAQ schema for rich results', 'bblocks' ),
				__( 'Fully responsive', 'bblocks' ),
				__( 'Gutenberg block & shortcode', 'bblocks' ),
			),
			'best_for' => __( 'SaaS Product, Pricing and Contact pages', 'bblocks' ),
			'icon'     => 'faq',
		),
		'html5-video-player'   => array(
			'name'     => __( 'HTML5 Video Player', 'bblocks' ),
			'tagline'  => __( 'Fast, responsive videos with ease.', 'bblocks' ),
			'desc'     => __( 'A responsive, customizable video player for MP4, WebM and OGG files as well as YouTube and Vimeo videos.', 'bblocks' ),
			'features' => array(
				__( 'MP4, WebM & OGG files', 'bblocks' ),
				__( 'YouTube & Vimeo embeds', 'bblocks' ),
				__( 'Customizable player controls', 'bblocks' ),
				__( 'Block & shortcode', 'bblocks' ),
			),
			'best_for' => __( 'SaaS Product demos, Business, Creative Agency', 'bblocks' ),
			'icon'     => 'video',
		),
		'pdf-poster'           => array(
			'name'     => __( 'PDF Poster', 'bblocks' ),
			'tagline'  => __( 'Let visitors read PDFs without leaving the page.', 'bblocks' ),
			'desc'     => __( 'Embed PDF files with a responsive viewer or flipbook, with optional print and download buttons.', 'bblocks' ),
			'features' => array(
				__( 'Responsive PDF viewer', 'bblocks' ),
				__( 'Flipbook view', 'bblocks' ),
				__( 'Print & download options', 'bblocks' ),
				__( 'Block & shortcode', 'bblocks' ),
			),
			'best_for' => __( 'Business brochures, menus, reports and resumes', 'bblocks' ),
			'icon'     => 'pdf',
		),
		'3d-viewer'            => array(
			'name'     => __( '3D Viewer', 'bblocks' ),
			'tagline'  => __( 'Interactive 3D models and 360° views.', 'bblocks' ),
			'desc'     => __( 'Embed interactive 3D models, 360° product views and AR experiences. Supports GLB, GLTF, OBJ, STL and FBX files and works with WooCommerce.', 'bblocks' ),
			'features' => array(
				__( 'GLB, GLTF, OBJ, STL & FBX', 'bblocks' ),
				__( '360° product views', 'bblocks' ),
				__( 'Augmented reality', 'bblocks' ),
				__( 'WooCommerce ready', 'bblocks' ),
			),
			'best_for' => __( 'Product showcases, shops, architecture and design portfolios', 'bblocks' ),
			'icon'     => '3d',
		),
	);
}

/**
 * Find an installed plugin's main file by its folder slug.
 *
 * @param string $slug Plugin slug (folder name).
 * @return string Plugin file relative to the plugins folder, or ''.
 */
function bblocks_plugin_file( $slug ) {
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}

	foreach ( array_keys( get_plugins() ) as $file ) {
		if ( 0 === strpos( $file, $slug . '/' ) ) {
			return $file;
		}
	}

	return '';
}

/**
 * Status and action URL for a recommended plugin.
 *
 * @param string $slug Plugin slug.
 * @return array{status: string, url: string, file: string}
 */
function bblocks_plugin_status( $slug ) {
	$file = bblocks_plugin_file( $slug );

	if ( ! $file ) {
		return array(
			'status' => 'install',
			'file'   => '',
			// WordPress core's own install screen; the theme downloads nothing itself.
			'url'    => wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . $slug ), 'install-plugin_' . $slug ),
		);
	}

	if ( ! is_plugin_active( $file ) ) {
		return array(
			'status' => 'activate',
			'file'   => $file,
			'url'    => wp_nonce_url( self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $file ) ), 'activate-plugin_' . $file ),
		);
	}

	return array(
		'status' => 'active',
		'file'   => $file,
		'url'    => '',
	);
}

/**
 * A small brand mark for each plugin, drawn inline (no remote images).
 *
 * @param string $icon Icon key.
 * @return string SVG markup.
 */
function bblocks_plugin_icon( $icon ) {
	// Gradient start, gradient end, white glyph drawn on a 64×64 tile.
	$icons = array(
		'bb'       => array( '#0ea5e9', '#2563eb', '<path d="M16 18h12a7 7 0 0 1 0 14H16zM16 32h14a7 7 0 0 1 0 14H16z" fill="none" stroke="#fff" stroke-width="4" stroke-linejoin="round"/><rect x="38" y="18" width="10" height="10" rx="2.5" fill="#fff" opacity=".75"/><rect x="38" y="32" width="10" height="14" rx="2.5" fill="#fff"/>' ),
		'apb'      => array( '#6366f1', '#8b5cf6', '<rect x="14" y="15" width="16" height="16" rx="3" fill="#fff"/><rect x="34" y="15" width="16" height="16" rx="3" fill="#fff" opacity=".7"/><rect x="14" y="35" width="16" height="16" rx="3" fill="#fff" opacity=".7"/><rect x="34" y="35" width="16" height="4" rx="2" fill="#fff"/><rect x="34" y="42" width="12" height="4" rx="2" fill="#fff" opacity=".7"/>' ),
		'slider'   => array( '#f97316', '#e11d48', '<rect x="18" y="18" width="28" height="22" rx="3" fill="#fff"/><path d="M13 24l-4 5 4 5M51 24l4 5-4 5" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><circle cx="26" cy="47" r="2.5" fill="#fff"/><circle cx="32" cy="47" r="2.5" fill="#fff" opacity=".6"/><circle cx="38" cy="47" r="2.5" fill="#fff" opacity=".6"/>' ),
		'timeline' => array( '#14b8a6', '#0d9488', '<path d="M22 14v36" stroke="#fff" stroke-width="3" stroke-linecap="round"/><circle cx="22" cy="20" r="4" fill="#fff"/><circle cx="22" cy="32" r="4" fill="#fff"/><circle cx="22" cy="44" r="4" fill="#fff"/><rect x="30" y="17" width="18" height="6" rx="3" fill="#fff"/><rect x="30" y="29" width="14" height="6" rx="3" fill="#fff" opacity=".75"/><rect x="30" y="41" width="16" height="6" rx="3" fill="#fff" opacity=".75"/>' ),
		'faq'      => array( '#8b5cf6', '#6d28d9', '<rect x="14" y="15" width="36" height="9" rx="3" fill="#fff"/><rect x="14" y="28" width="36" height="9" rx="3" fill="#fff" opacity=".7"/><rect x="14" y="41" width="36" height="9" rx="3" fill="#fff" opacity=".7"/><path d="M42 18l2.5 3 2.5-3" fill="none" stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>' ),
		'video'    => array( '#ef4444', '#b91c1c', '<rect x="12" y="17" width="40" height="30" rx="5" fill="#fff"/><path d="M28 25v14l11-7z" fill="#b91c1c"/>' ),
		'pdf'      => array( '#f43f5e', '#be123c', '<path d="M20 12h17l9 9v31H20z" fill="#fff"/><path d="M37 12v9h9" fill="#fecdd3"/><rect x="25" y="32" width="16" height="3" rx="1.5" fill="#be123c"/><rect x="25" y="38" width="12" height="3" rx="1.5" fill="#be123c" opacity=".6"/>' ),
		'3d'       => array( '#22c55e', '#15803d', '<path d="M32 12l17 9.5v19L32 50l-17-9.5v-19z" fill="none" stroke="#fff" stroke-width="3" stroke-linejoin="round"/><path d="M15 21.5L32 31l17-9.5M32 31v19" fill="none" stroke="#fff" stroke-width="3" stroke-linejoin="round"/>' ),
	);

	$icon = isset( $icons[ $icon ] ) ? $icon : 'bb';
	$id   = 'bb-icon-' . $icon;

	return sprintf(
		'<svg viewBox="0 0 64 64" aria-hidden="true" focusable="false"><defs><linearGradient id="%1$s" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="%2$s"/><stop offset="1" stop-color="%3$s"/></linearGradient></defs><rect width="64" height="64" rx="16" fill="url(#%1$s)"/>%4$s</svg>',
		$id,
		$icons[ $icon ][0],
		$icons[ $icon ][1],
		$icons[ $icon ][2]
	);
}

/**
 * Render the Recommended Plugins tab content.
 */
function bblocks_render_recommended_plugins() {
	$can_install  = current_user_can( 'install_plugins' );
	$can_activate = current_user_can( 'activate_plugins' );
	?>
	<div class="bblocks-section-header">
		<h2><?php esc_html_e( 'Recommended Plugins', 'bblocks' ); ?></h2>
	</div>
	<p class="bblocks-starter-intro"><?php esc_html_e( 'Free plugins from bPlugins, the makers of this theme, that add more blocks and post layouts. They are optional — the theme works fully without them — and they install from WordPress.org only when you click.', 'bblocks' ); ?></p>

	<div class="bblocks-plugin-grid">
		<?php
		foreach ( bblocks_recommended_plugins() as $slug => $plugin ) :
			$state = bblocks_plugin_status( $slug );
			?>
			<div class="bblocks-plugin-card is-<?php echo esc_attr( $state['status'] ); ?>">
				<div class="bblocks-plugin-head">
					<span class="bblocks-plugin-icon"><?php echo bblocks_plugin_icon( $plugin['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static inline SVG. ?></span>
					<div>
						<h3><?php echo esc_html( $plugin['name'] ); ?></h3>
						<p class="bblocks-plugin-tagline"><?php echo esc_html( $plugin['tagline'] ); ?></p>
					</div>
					<span class="bblocks-plugin-free"><?php esc_html_e( 'Free', 'bblocks' ); ?></span>
				</div>

				<p class="bblocks-plugin-desc"><?php echo esc_html( $plugin['desc'] ); ?></p>

				<ul class="bblocks-plugin-features">
					<?php foreach ( $plugin['features'] as $feature ) : ?>
						<li><span class="dashicons dashicons-yes" aria-hidden="true"></span><?php echo esc_html( $feature ); ?></li>
					<?php endforeach; ?>
				</ul>

				<p class="bblocks-plugin-bestfor">
					<strong><?php esc_html_e( 'Pairs well with:', 'bblocks' ); ?></strong>
					<?php echo esc_html( $plugin['best_for'] ); ?>
				</p>

				<div class="bblocks-plugin-actions">
					<?php if ( 'active' === $state['status'] ) : ?>
						<span class="bblocks-plugin-active"><span class="dashicons dashicons-yes-alt" aria-hidden="true"></span><?php esc_html_e( 'Active', 'bblocks' ); ?></span>
					<?php elseif ( 'activate' === $state['status'] && $can_activate ) : ?>
						<a class="button button-primary bblocks-plugin-btn" href="<?php echo esc_url( $state['url'] ); ?>"><?php esc_html_e( 'Activate', 'bblocks' ); ?></a>
					<?php elseif ( 'install' === $state['status'] && $can_install ) : ?>
						<a class="button button-primary bblocks-plugin-btn bblocks-plugin-install" href="<?php echo esc_url( $state['url'] ); ?>" data-slug="<?php echo esc_attr( $slug ); ?>" data-name="<?php echo esc_attr( $plugin['name'] ); ?>"><?php esc_html_e( 'Install & activate', 'bblocks' ); ?></a>
					<?php else : ?>
						<span class="description"><?php esc_html_e( 'Ask a site administrator to install this plugin.', 'bblocks' ); ?></span>
					<?php endif; ?>

					<a class="button bblocks-plugin-details thickbox open-plugin-details-modal" href="<?php echo esc_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=' . $slug . '&TB_iframe=true&width=772&height=600' ) ); ?>" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: plugin name. */ __( 'More details about %s', 'bblocks' ), $plugin['name'] ) ); ?>"><?php esc_html_e( 'Details', 'bblocks' ); ?></a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Load core's plugin installer script and the details modal on the theme page.
 *
 * @param string $hook_suffix Current admin page.
 */
function bblocks_recommended_plugins_assets( $hook_suffix ) {
	if ( 'appearance_page_bblocks-dashboard' !== $hook_suffix ) {
		return;
	}

	if ( current_user_can( 'install_plugins' ) ) {
		wp_enqueue_script( 'updates' );
	}
	add_thickbox();
}
add_action( 'admin_enqueue_scripts', 'bblocks_recommended_plugins_assets' );

/**
 * One admin notice that points to the recommended plugins. Shown only while
 * one of them is not active, and dismissed permanently per user.
 */
function bblocks_recommended_plugins_notice() {
	$screen = get_current_screen();

	if ( ! current_user_can( 'install_plugins' ) || ! $screen || ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
		return;
	}

	if ( get_user_meta( get_current_user_id(), 'bblocks_dismissed_plugins_notice', true ) ) {
		return;
	}

	$missing = array();
	foreach ( bblocks_recommended_plugins() as $slug => $plugin ) {
		$state = bblocks_plugin_status( $slug );
		if ( 'active' !== $state['status'] ) {
			$missing[] = $plugin['name'];
		}
	}

	if ( ! $missing ) {
		return;
	}

	// Keep the notice to one short line: name the first few, count the rest.
	$names = implode( ', ', array_slice( $missing, 0, 3 ) );
	$more  = count( $missing ) - 3;

	if ( $more > 0 ) {
		/* translators: 1: list of plugin names, 2: number of other plugins. */
		$names = sprintf( _n( '%1$s and %2$d more', '%1$s and %2$d more', $more, 'bblocks' ), $names, $more );
	}

	printf(
		'<div class="notice notice-info is-dismissible bblocks-plugins-notice" data-nonce="%1$s"><p>%2$s <a href="%3$s">%4$s</a></p></div>',
		esc_attr( wp_create_nonce( 'bblocks_dismiss_plugins_notice' ) ),
		esc_html(
			sprintf(
				/* translators: %s: list of plugin names. */
				__( 'The bBlocks theme works even better with these free plugins: %s.', 'bblocks' ),
				$names
			)
		),
		esc_url( admin_url( 'themes.php?page=bblocks-dashboard#recommended-plugins' ) ),
		esc_html__( 'See recommended plugins', 'bblocks' )
	);
	?>
	<script>
		( function () {
			var notice = document.querySelector( '.bblocks-plugins-notice' );
			if ( ! notice ) {
				return;
			}
			notice.addEventListener( 'click', function ( event ) {
				if ( ! event.target.closest( '.notice-dismiss' ) ) {
					return;
				}
				var body = new FormData();
				body.append( 'action', 'bblocks_dismiss_plugins_notice' );
				body.append( 'nonce', notice.getAttribute( 'data-nonce' ) );
				fetch( window.ajaxurl, { method: 'POST', credentials: 'same-origin', body: body } );
			} );
		} )();
	</script>
	<?php
}
add_action( 'admin_notices', 'bblocks_recommended_plugins_notice' );

/**
 * AJAX: remember that the current user dismissed the notice.
 */
function bblocks_dismiss_plugins_notice() {
	check_ajax_referer( 'bblocks_dismiss_plugins_notice', 'nonce' );
	update_user_meta( get_current_user_id(), 'bblocks_dismissed_plugins_notice', 1 );
	wp_send_json_success();
}
add_action( 'wp_ajax_bblocks_dismiss_plugins_notice', 'bblocks_dismiss_plugins_notice' );
