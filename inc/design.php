<?php
/**
 * One-click design choices for the theme dashboard.
 *
 * Applies a full style variation, or swaps the header/footer design. A
 * header or footer choice is saved as a regular Site Editor customization
 * of the "header" / "footer" template part — exactly what editing the part
 * in the Site Editor does — so the editor and the front end always agree,
 * revisions are kept and "Reset" restores the theme's original part.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Header and footer designs that can be applied from the dashboard,
 * read from the template parts registered in theme.json.
 *
 * @param string $area "header" or "footer".
 * @return array<string, string> Part slug => title.
 */
function bblocks_part_designs( $area ) {
	$designs = array();

	foreach ( wp_get_theme_data_template_parts() as $slug => $part ) {
		if ( isset( $part['area'] ) && $area === $part['area'] && file_exists( get_theme_file_path( 'parts/' . $slug . '.html' ) ) ) {
			$designs[ $slug ] = isset( $part['title'] ) ? $part['title'] : $slug;
		}
	}

	return $designs;
}

/**
 * The design currently used for the header or footer area.
 *
 * @param string $area "header" or "footer".
 * @return string Part slug, or '' when the part was edited by hand.
 */
function bblocks_current_part_design( $area ) {
	$template = get_block_template( get_stylesheet() . '//' . $area, 'wp_template_part' );

	if ( ! $template || 'custom' !== $template->source ) {
		return $area;
	}

	$saved = get_option( 'bblocks_part_designs', array() );

	if ( is_array( $saved ) && ! empty( $saved[ $area ]['slug'] ) && isset( $saved[ $area ]['hash'] ) && md5( $template->content ) === $saved[ $area ]['hash'] ) {
		return $saved[ $area ]['slug'];
	}

	return '';
}

/**
 * Apply a header or footer design to the area's main template part.
 *
 * @param string $area "header" or "footer".
 * @param string $slug Part slug from bblocks_part_designs().
 * @return true|WP_Error
 */
function bblocks_apply_part_design( $area, $slug ) {
	if ( ! in_array( $area, array( 'header', 'footer' ), true ) ) {
		return new WP_Error( 'bblocks_bad_area', __( 'Unknown template part area.', 'bblocks' ) );
	}

	$designs = bblocks_part_designs( $area );

	if ( ! isset( $designs[ $slug ] ) ) {
		return new WP_Error( 'bblocks_bad_design', __( 'Unknown design.', 'bblocks' ) );
	}

	$template = get_block_template( get_stylesheet() . '//' . $area, 'wp_template_part' );
	$saved    = get_option( 'bblocks_part_designs', array() );
	$saved    = is_array( $saved ) ? $saved : array();

	// The area's own design is the theme default: drop the customization.
	if ( $slug === $area ) {
		if ( $template && 'custom' === $template->source && $template->wp_id ) {
			wp_delete_post( $template->wp_id, true );
		}

		unset( $saved[ $area ] );
		update_option( 'bblocks_part_designs', $saved, false );

		return true;
	}

	// Store the design's blocks rather than a pattern reference, so the part stays fully editable.
	$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( 'bblocks/' . $slug );
	$content = $pattern && ! empty( $pattern['content'] ) ? $pattern['content'] : file_get_contents( get_theme_file_path( 'parts/' . $slug . '.html' ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- Local theme file.

	$postarr = array(
		'post_content' => wp_slash( $content ),
		'post_status'  => 'publish',
	);

	if ( $template && 'custom' === $template->source && $template->wp_id ) {
		$postarr['ID'] = $template->wp_id;
		$post_id       = wp_update_post( $postarr, true );
	} else {
		$postarr['post_type']  = 'wp_template_part';
		$postarr['post_name']  = $area;
		$postarr['post_title'] = $template ? $template->title : ucfirst( $area );
		$post_id               = wp_insert_post( $postarr, true );

		if ( ! is_wp_error( $post_id ) ) {
			wp_set_object_terms( $post_id, get_stylesheet(), 'wp_theme' );
			wp_set_object_terms( $post_id, $area, 'wp_template_part_area' );
		}
	}

	if ( is_wp_error( $post_id ) ) {
		return $post_id;
	}

	$saved[ $area ] = array(
		'slug' => $slug,
		'hash' => md5( get_post_field( 'post_content', $post_id, 'raw' ) ),
	);
	update_option( 'bblocks_part_designs', $saved, false );

	return true;
}

/**
 * Full style variations (color and typography together), for the Design tab.
 * Color-only and typography-only presets are left to the Site Editor.
 *
 * @return array<int, array<string, mixed>>
 */
function bblocks_full_style_variations() {
	$variations = array(
		array( 'title' => __( 'Default', 'bblocks' ) ),
	);

	$full = array();

	foreach ( WP_Theme_JSON_Resolver::get_style_variations() as $variation ) {
		if ( isset( $variation['title'], $variation['settings']['color']['palette'] ) && ! empty( $variation['styles'] ) ) {
			$full[] = $variation;
		}
	}

	usort(
		$full,
		function ( $a, $b ) {
			return strnatcasecmp( $a['title'], $b['title'] );
		}
	);

	return array_merge( $variations, $full );
}

/**
 * Title of the style variation saved in Global Styles, if any.
 *
 * @return string
 */
function bblocks_active_style_title() {
	$user = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme() );

	if ( empty( $user['post_content'] ) ) {
		return __( 'Default', 'bblocks' );
	}

	$data = json_decode( $user['post_content'], true );

	if ( ! empty( $data['title'] ) ) {
		return $data['title'];
	}

	return empty( $data['settings'] ) && empty( $data['styles'] ) ? __( 'Default', 'bblocks' ) : '';
}

/**
 * AJAX: apply a style variation or a header/footer design.
 */
function bblocks_ajax_apply_design() {
	check_ajax_referer( 'bblocks_starter_nonce', 'security' );

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_send_json_error( array( 'message' => __( 'You are not allowed to change the site design.', 'bblocks' ) ), 403 );
	}

	$kind  = isset( $_POST['kind'] ) ? sanitize_key( wp_unslash( $_POST['kind'] ) ) : '';
	$value = isset( $_POST['value'] ) ? sanitize_text_field( wp_unslash( $_POST['value'] ) ) : '';

	if ( 'style' === $kind ) {
		$result = bblocks_apply_style_variation( __( 'Default', 'bblocks' ) === $value ? '' : $value );
		$result = $result ? true : new WP_Error( 'bblocks_style_failed', __( 'The style could not be applied.', 'bblocks' ) );
	} elseif ( in_array( $kind, array( 'header', 'footer' ), true ) ) {
		$result = bblocks_apply_part_design( $kind, sanitize_key( $value ) );
	} else {
		$result = new WP_Error( 'bblocks_bad_request', __( 'Unknown design option.', 'bblocks' ) );
	}

	if ( is_wp_error( $result ) ) {
		wp_send_json_error( array( 'message' => $result->get_error_message() ) );
	}

	wp_send_json_success(
		array(
			'message' => __( 'Design updated.', 'bblocks' ),
			'url'     => home_url( '/' ),
		)
	);
}
add_action( 'wp_ajax_bblocks_apply_design', 'bblocks_ajax_apply_design' );

/**
 * Onboarding checklist shown on the dashboard's Welcome tab.
 *
 * @return array<int, array<string, mixed>>
 */
function bblocks_onboarding_steps() {
	$imported   = get_option( 'bblocks_imported_pages', array() );
	$user_data  = WP_Theme_JSON_Resolver::get_user_data()->get_raw_data();
	$has_styles = ! empty( $user_data['settings'] ) || ! empty( $user_data['styles'] );
	$menus      = get_posts(
		array(
			'post_type'      => 'wp_navigation',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'fields'         => 'ids',
		)
	);

	return array(
		array(
			'done'  => ! empty( $imported ),
			'title' => __( 'Import a starter site', 'bblocks' ),
			'text'  => __( 'Get ready-made pages for your kind of business in one click.', 'bblocks' ),
			'label' => __( 'Choose a starter site', 'bblocks' ),
			'tab'   => 'starter-sites',
			'url'   => '',
		),
		array(
			'done'  => (bool) get_option( 'site_logo' ) || (bool) get_theme_mod( 'custom_logo' ),
			'title' => __( 'Add your logo and site title', 'bblocks' ),
			'text'  => __( 'Your logo also becomes the browser tab icon.', 'bblocks' ),
			'label' => __( 'Edit the header', 'bblocks' ),
			'tab'   => '',
			'url'   => admin_url( 'site-editor.php?p=%2Fwp_template_part%2Fall' ),
		),
		array(
			'done'  => $has_styles,
			'title' => __( 'Pick your colors and fonts', 'bblocks' ),
			'text'  => __( 'Apply a style, or a color palette and font pairing in the Site Editor.', 'bblocks' ),
			'label' => __( 'Open Design', 'bblocks' ),
			'tab'   => 'design',
			'url'   => '',
		),
		array(
			'done'  => 'header' !== bblocks_current_part_design( 'header' ) || 'footer' !== bblocks_current_part_design( 'footer' ),
			'title' => __( 'Choose a header and footer', 'bblocks' ),
			'text'  => __( 'Five header and three footer designs, all editable afterwards.', 'bblocks' ),
			'label' => __( 'Open Design', 'bblocks' ),
			'tab'   => 'design',
			'url'   => '',
		),
		array(
			'done'  => ! empty( $menus ),
			'title' => __( 'Set up your menu', 'bblocks' ),
			'text'  => __( 'Add, remove and reorder the pages in your navigation.', 'bblocks' ),
			'label' => __( 'Edit navigation', 'bblocks' ),
			'tab'   => '',
			'url'   => admin_url( 'site-editor.php?p=%2Fnavigation' ),
		),
		array(
			'done'  => bblocks_modules_active(),
			'title' => __( 'Switch on the extras you need', 'bblocks' ),
			'text'  => __( 'Dark mode, sticky header, WhatsApp button, announcement bar and more.', 'bblocks' ),
			'label' => __( 'Open Modules', 'bblocks' ),
			'tab'   => 'modules',
			'url'   => '',
		),
	);
}

/**
 * Show a one-time, dismissible welcome notice on the Themes screen after
 * the theme is activated.
 */
function bblocks_welcome_notice() {
	$screen = get_current_screen();

	if ( ! $screen || 'themes' !== $screen->id || ! current_user_can( 'edit_theme_options' ) || get_user_meta( get_current_user_id(), 'bblocks_welcome_dismissed', true ) ) {
		return;
	}

	$dismiss = wp_nonce_url( add_query_arg( 'bblocks-dismiss-welcome', '1' ), 'bblocks_dismiss_welcome' );
	?>
	<div class="notice notice-info">
		<p>
			<strong><?php esc_html_e( 'Thanks for choosing bBlocks!', 'bblocks' ); ?></strong>
			<?php esc_html_e( 'Import a starter site or follow the short setup checklist to get your site ready in minutes.', 'bblocks' ); ?>
		</p>
		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=bblocks-dashboard' ) ); ?>"><?php esc_html_e( 'Get started', 'bblocks' ); ?></a>
			<a class="button-link" href="<?php echo esc_url( $dismiss ); ?>"><?php esc_html_e( 'Dismiss', 'bblocks' ); ?></a>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'bblocks_welcome_notice' );

/**
 * Remember that the current user dismissed the welcome notice.
 */
function bblocks_dismiss_welcome_notice() {
	if ( ! isset( $_GET['bblocks-dismiss-welcome'] ) ) {
		return;
	}

	check_admin_referer( 'bblocks_dismiss_welcome' );
	update_user_meta( get_current_user_id(), 'bblocks_welcome_dismissed', 1 );
	wp_safe_redirect( remove_query_arg( array( 'bblocks-dismiss-welcome', '_wpnonce' ) ) );
	exit;
}
add_action( 'admin_init', 'bblocks_dismiss_welcome_notice' );

/**
 * Show the welcome notice again after the theme is switched back on.
 */
function bblocks_reset_welcome_notice() {
	delete_metadata( 'user', 0, 'bblocks_welcome_dismissed', '', true );
}
add_action( 'after_switch_theme', 'bblocks_reset_welcome_notice' );
