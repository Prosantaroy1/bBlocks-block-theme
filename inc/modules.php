<?php
/**
 * Optional front-end modules (Appearance → bBlocks → Modules).
 *
 * Every module is off by default, stores its state in a single option and
 * only loads its CSS/JS when at least one module is turned on.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Module definitions: key => label, description.
 *
 * @return array<string, array{label: string, description: string}>
 */
function bblocks_module_definitions() {
	return array(
		'back_to_top'      => array(
			'label'       => __( 'Back to top', 'bblocks' ),
			'description' => __( 'Show a floating button that scrolls visitors back to the top.', 'bblocks' ),
		),
		'dark_mode'        => array(
			'label'       => __( 'Dark mode toggle', 'bblocks' ),
			'description' => __( 'Add a light/dark switch. The alternate palette is generated from your current colors and the choice is remembered per visitor.', 'bblocks' ),
		),
		'reading_progress' => array(
			'label'       => __( 'Reading progress bar', 'bblocks' ),
			'description' => __( 'Show a thin bar at the top of single posts that tracks how much has been read.', 'bblocks' ),
		),
		'smart_header'     => array(
			'label'       => __( 'Smart sticky header', 'bblocks' ),
			'description' => __( 'Keep the header at the top of the screen, hide it while scrolling down and reveal it when scrolling up.', 'bblocks' ),
		),
		'animations'       => array(
			'label'       => __( 'Scroll animations', 'bblocks' ),
			'description' => __( 'Fade sections in as they enter the screen. Respects the visitor\'s reduced-motion setting.', 'bblocks' ),
		),
		'footer_reveal'    => array(
			'label'       => __( 'Footer reveal effect', 'bblocks' ),
			'description' => __( 'Reveal the footer from underneath the page as visitors reach the bottom.', 'bblocks' ),
		),
		'floating_contact' => array(
			'label'       => __( 'Floating contact buttons', 'bblocks' ),
			'description' => __( 'Show call, email and WhatsApp buttons in the bottom corner. Fill in the details below.', 'bblocks' ),
		),
		'announcement_bar' => array(
			'label'       => __( 'Announcement bar', 'bblocks' ),
			'description' => __( 'Show a slim, dismissible message above the header, with an optional link. Fill in the text below.', 'bblocks' ),
		),
		'table_of_contents' => array(
			'label'       => __( 'Table of contents', 'bblocks' ),
			'description' => __( 'Add a collapsible list of section links to the top of long posts that have three or more headings.', 'bblocks' ),
		),
	);
}

/**
 * Default option values.
 *
 * @return array<string, mixed>
 */
function bblocks_module_defaults() {
	$defaults = array_fill_keys( array_keys( bblocks_module_definitions() ), false );

	$defaults['dark_mode_default'] = 'light';
	$defaults['contact_phone']     = '';
	$defaults['contact_email']     = '';
	$defaults['contact_whatsapp']  = '';
	$defaults['announcement_text'] = '';
	$defaults['announcement_url']  = '';
	$defaults['announcement_cta']  = '';

	return $defaults;
}

/**
 * Get the saved module settings merged with defaults.
 *
 * @return array<string, mixed>
 */
function bblocks_get_modules() {
	$saved = get_option( 'bblocks_modules', array() );

	return wp_parse_args( is_array( $saved ) ? $saved : array(), bblocks_module_defaults() );
}

/**
 * Whether a single module is enabled.
 *
 * @param string $key Module key.
 * @return bool
 */
function bblocks_module_enabled( $key ) {
	$modules = bblocks_get_modules();

	return ! empty( $modules[ $key ] );
}

/**
 * Sanitize the module settings before they are saved.
 *
 * @param mixed $input Raw submitted value.
 * @return array<string, mixed>
 */
function bblocks_sanitize_modules( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();

	foreach ( array_keys( bblocks_module_definitions() ) as $key ) {
		$clean[ $key ] = ! empty( $input[ $key ] );
	}

	$clean['dark_mode_default'] = isset( $input['dark_mode_default'] ) && in_array( $input['dark_mode_default'], array( 'light', 'dark', 'auto' ), true ) ? $input['dark_mode_default'] : 'light';
	$clean['contact_phone']     = isset( $input['contact_phone'] ) ? preg_replace( '/[^0-9+\-\s()]/', '', sanitize_text_field( $input['contact_phone'] ) ) : '';
	$clean['contact_email']     = isset( $input['contact_email'] ) ? sanitize_email( $input['contact_email'] ) : '';
	$clean['contact_whatsapp']  = isset( $input['contact_whatsapp'] ) ? preg_replace( '/\D/', '', (string) $input['contact_whatsapp'] ) : '';
	$clean['announcement_text'] = isset( $input['announcement_text'] ) ? sanitize_text_field( $input['announcement_text'] ) : '';
	$clean['announcement_url']  = isset( $input['announcement_url'] ) ? esc_url_raw( $input['announcement_url'] ) : '';
	$clean['announcement_cta']  = isset( $input['announcement_cta'] ) ? sanitize_text_field( $input['announcement_cta'] ) : '';

	return $clean;
}

/**
 * Register the option with the Settings API.
 */
function bblocks_register_module_setting() {
	register_setting(
		'bblocks_modules_group',
		'bblocks_modules',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'bblocks_sanitize_modules',
			'default'           => bblocks_module_defaults(),
			'show_in_rest'      => false,
		)
	);
}
add_action( 'admin_init', 'bblocks_register_module_setting' );

/**
 * The settings form posts to options.php, which checks "manage_options" by
 * default. Match the capability the dashboard page itself requires.
 *
 * @return string
 */
function bblocks_module_setting_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_bblocks_modules_group', 'bblocks_module_setting_capability' );

/**
 * Whether any module needs front-end assets on this request.
 *
 * @return bool
 */
function bblocks_modules_active() {
	$modules = bblocks_get_modules();

	foreach ( array_keys( bblocks_module_definitions() ) as $key ) {
		if ( ! empty( $modules[ $key ] ) ) {
			return true;
		}
	}

	return false;
}

/**
 * Mix two hex colors.
 *
 * @param string $color_a Hex color.
 * @param string $color_b Hex color.
 * @param float  $weight  Share of $color_b, 0–1.
 * @return string Hex color.
 */
function bblocks_mix_hex( $color_a, $color_b, $weight ) {
	$a   = bblocks_hex_to_rgb( $color_a );
	$b   = bblocks_hex_to_rgb( $color_b );
	$mix = array();

	foreach ( array( 0, 1, 2 ) as $i ) {
		$mix[] = (int) round( $a[ $i ] * ( 1 - $weight ) + $b[ $i ] * $weight );
	}

	return sprintf( '#%02x%02x%02x', $mix[0], $mix[1], $mix[2] );
}

/**
 * Convert a hex color to an RGB triplet. Falls back to black for non-hex values.
 *
 * @param string $hex Hex color (#rgb or #rrggbb).
 * @return int[]
 */
function bblocks_hex_to_rgb( $hex ) {
	$hex = ltrim( (string) $hex, '#' );

	if ( 3 === strlen( $hex ) ) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}

	if ( ! preg_match( '/^[0-9a-f]{6}$/i', $hex ) ) {
		return array( 0, 0, 0 );
	}

	return array( hexdec( substr( $hex, 0, 2 ) ), hexdec( substr( $hex, 2, 2 ) ), hexdec( substr( $hex, 4, 2 ) ) );
}

/**
 * Relative luminance (0 = black, 1 = white).
 *
 * @param string $hex Hex color.
 * @return float
 */
function bblocks_luminance( $hex ) {
	$rgb = bblocks_hex_to_rgb( $hex );

	return ( 0.2126 * $rgb[0] + 0.7152 * $rgb[1] + 0.0722 * $rgb[2] ) / 255;
}

/**
 * The palette currently in use (theme, style variation or user colors), slug => color.
 *
 * @return array<string, string>
 */
function bblocks_current_palette() {
	$palette = wp_get_global_settings( array( 'color', 'palette' ) );
	$colors  = array();

	foreach ( array( 'default', 'theme', 'custom' ) as $origin ) {
		if ( ! empty( $palette[ $origin ] ) ) {
			foreach ( $palette[ $origin ] as $entry ) {
				if ( isset( $entry['slug'], $entry['color'] ) ) {
					$colors[ $entry['slug'] ] = $entry['color'];
				}
			}
		}
	}

	return $colors;
}

/**
 * Whether the active palette is a dark one.
 *
 * @return bool
 */
function bblocks_palette_is_dark() {
	$colors = bblocks_current_palette();

	return isset( $colors['background'] ) && bblocks_luminance( $colors['background'] ) < 0.4;
}

/**
 * Build the CSS that swaps the palette for the alternate (dark or light) scheme.
 *
 * The alternate palette is derived from the palette currently in use, so it
 * also matches the Modern and Dark style variations or custom colors.
 *
 * @return string
 */
function bblocks_color_scheme_css() {
	$colors   = bblocks_current_palette();
	$required = array( 'background', 'surface', 'border-color', 'foreground', 'muted-text', 'primary', 'secondary', 'accent' );

	foreach ( $required as $slug ) {
		if ( empty( $colors[ $slug ] ) || '#' !== substr( $colors[ $slug ], 0, 1 ) ) {
			return '';
		}
	}

	$is_dark   = bblocks_luminance( $colors['background'] ) < 0.4;
	$tint      = $is_dark ? '#000000' : '#ffffff';
	$alternate = array(
		'background'   => $colors['foreground'],
		'surface'      => bblocks_mix_hex( $colors['foreground'], $colors['background'], 0.06 ),
		'border-color' => bblocks_mix_hex( $colors['foreground'], $colors['background'], 0.18 ),
		'foreground'   => $colors['background'],
		'muted-text'   => bblocks_mix_hex( $colors['background'], $colors['foreground'], 0.32 ),
		'primary'      => bblocks_mix_hex( $colors['primary'], $tint, $is_dark ? 0.2 : 0.25 ),
		'secondary'    => bblocks_mix_hex( $colors['secondary'], $tint, 0.2 ),
		'accent'       => bblocks_mix_hex( $colors['accent'], $tint, $is_dark ? 0.15 : 0.1 ),
	);

	$declarations = '';
	foreach ( $alternate as $slug => $value ) {
		$declarations .= sprintf( '--wp--preset--color--%s:%s;', $slug, $value );
	}

	$scheme = $is_dark ? 'light' : 'dark';

	// Buttons have their own block-level palette, which sets the same variables on ".wp-block-button .wp-block-button__link".
	return sprintf(
		'html[data-bblocks-scheme="%1$s"],html[data-bblocks-scheme="%1$s"] .wp-block-button .wp-block-button__link{%2$s}html[data-bblocks-scheme="%1$s"]{color-scheme:%1$s;}',
		$scheme,
		$declarations
	);
}

/**
 * Print the color-scheme bootstrap as early as possible to avoid a flash of
 * the wrong colors.
 */
function bblocks_dark_mode_head() {
	if ( ! bblocks_module_enabled( 'dark_mode' ) ) {
		return;
	}

	$modules = bblocks_get_modules();
	$config  = array(
		'default'  => $modules['dark_mode_default'],
		'nativeIs' => bblocks_palette_is_dark() ? 'dark' : 'light',
	);

	wp_print_inline_script_tag(
		sprintf(
			'(function(c){try{var s=localStorage.getItem("bblocks-scheme");var w=s||(c.default==="auto"?(matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light"):c.default);if(w!==c.nativeIs){document.documentElement.setAttribute("data-bblocks-scheme",w);}}catch(e){}})(%s);',
			wp_json_encode( $config )
		)
	);
}
add_action( 'wp_head', 'bblocks_dark_mode_head', 1 );

/**
 * Enqueue module assets.
 */
function bblocks_module_assets() {
	if ( ! bblocks_modules_active() ) {
		return;
	}

	$modules = bblocks_get_modules();
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'bblocks-modules', get_theme_file_uri( 'assets/css/modules.css' ), array(), $version );

	if ( ! empty( $modules['dark_mode'] ) ) {
		wp_add_inline_style( 'bblocks-modules', bblocks_color_scheme_css() );
	}

	wp_enqueue_script(
		'bblocks-modules',
		get_theme_file_uri( 'assets/js/modules.js' ),
		array(),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_add_inline_script(
		'bblocks-modules',
		'window.bblocksModules = ' . wp_json_encode(
			array(
				'backToTop'       => ! empty( $modules['back_to_top'] ),
				'darkMode'        => ! empty( $modules['dark_mode'] ),
				'nativeScheme'    => bblocks_palette_is_dark() ? 'dark' : 'light',
				'readingProgress' => ! empty( $modules['reading_progress'] ) && is_singular( 'post' ),
				'smartHeader'     => ! empty( $modules['smart_header'] ),
				'animations'      => ! empty( $modules['animations'] ),
				'footerReveal'    => ! empty( $modules['footer_reveal'] ),
				'announcement'    => ! empty( $modules['announcement_bar'] ) && '' !== $modules['announcement_text'],
			)
		) . ';',
		'before'
	);
}
add_action( 'wp_enqueue_scripts', 'bblocks_module_assets' );

/**
 * Body classes used by module CSS.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function bblocks_module_body_class( $classes ) {
	foreach ( array( 'smart_header', 'footer_reveal', 'animations', 'dark_mode' ) as $key ) {
		if ( bblocks_module_enabled( $key ) ) {
			$classes[] = 'bblocks-has-' . str_replace( '_', '-', $key );
		}
	}

	return $classes;
}
add_filter( 'body_class', 'bblocks_module_body_class' );

/**
 * Print the reading progress bar at the top of the body on single posts.
 */
function bblocks_reading_progress_markup() {
	if ( ! bblocks_module_enabled( 'reading_progress' ) || ! is_singular( 'post' ) ) {
		return;
	}

	echo '<div class="bblocks-reading-progress" aria-hidden="true"><span class="bblocks-reading-progress__bar"></span></div>';
}
add_action( 'wp_body_open', 'bblocks_reading_progress_markup' );

/**
 * Print the announcement bar at the top of the body.
 *
 * The dismiss button only appears once the script has loaded; the
 * dismissal is remembered per visitor until the message text changes.
 */
function bblocks_announcement_markup() {
	$modules = bblocks_get_modules();

	if ( empty( $modules['announcement_bar'] ) || '' === $modules['announcement_text'] ) {
		return;
	}

	$link = '';
	if ( $modules['announcement_url'] ) {
		$link = sprintf(
			' <a class="bblocks-announcement__link" href="%1$s">%2$s</a>',
			esc_url( $modules['announcement_url'] ),
			esc_html( $modules['announcement_cta'] ? $modules['announcement_cta'] : __( 'Learn more', 'bblocks' ) )
		);
	}

	printf(
		'<div class="bblocks-announcement" role="region" aria-label="%1$s" data-bblocks-announcement="%2$s"><p class="bblocks-announcement__text">%3$s%4$s</p><button type="button" class="bblocks-announcement__close" aria-label="%5$s" hidden><span aria-hidden="true">&times;</span></button></div>',
		esc_attr__( 'Announcement', 'bblocks' ),
		esc_attr( md5( $modules['announcement_text'] . $modules['announcement_url'] ) ),
		esc_html( $modules['announcement_text'] ),
		$link, // Escaped above.
		esc_attr__( 'Dismiss announcement', 'bblocks' )
	);
}
add_action( 'wp_body_open', 'bblocks_announcement_markup', 5 );

/**
 * Add a table of contents to the top of single posts with three or more
 * h2/h3 headings. Headings without an id get one so the links can target them.
 *
 * @param string   $content      Rendered Post Content block.
 * @param array    $parsed_block Parsed block.
 * @param WP_Block $block        Block instance.
 * @return string
 */
function bblocks_table_of_contents( $content, $parsed_block, $block ) {
	if (
		! bblocks_module_enabled( 'table_of_contents' ) ||
		! is_singular( 'post' ) ||
		! isset( $block->context['postId'] ) ||
		(int) $block->context['postId'] !== get_queried_object_id()
	) {
		return $content;
	}

	$items = array();
	$used  = array();

	$content = preg_replace_callback(
		'#<h([23])([^>]*)>(.*?)</h\1>#is',
		function ( $match ) use ( &$items, &$used ) {
			$text = trim( wp_strip_all_tags( $match[3] ) );

			if ( '' === $text ) {
				return $match[0];
			}

			if ( preg_match( '/\sid=["\']([^"\']+)["\']/i', $match[2], $id_match ) ) {
				$id    = $id_match[1];
				$attrs = $match[2];
			} else {
				$base = sanitize_title( $text );
				$base = $base ? $base : 'section';
				$id   = $base;
				$i    = 2;
				while ( isset( $used[ $id ] ) ) {
					$id = $base . '-' . $i++;
				}
				$attrs = ' id="' . esc_attr( $id ) . '"' . $match[2];
			}

			$used[ $id ] = true;
			$items[]     = array( (int) $match[1], $id, $text );

			return '<h' . $match[1] . $attrs . '>' . $match[3] . '</h' . $match[1] . '>';
		},
		$content
	);

	if ( count( $items ) < 3 ) {
		return $content;
	}

	$list = '';
	foreach ( $items as $item ) {
		$list .= sprintf(
			'<li class="bblocks-toc__item is-level-%1$d"><a href="#%2$s">%3$s</a></li>',
			$item[0],
			esc_attr( $item[1] ),
			esc_html( $item[2] )
		);
	}

	$toc = sprintf(
		'<nav class="bblocks-toc" aria-label="%1$s"><details open><summary>%2$s</summary><ol>%3$s</ol></details></nav>',
		esc_attr__( 'Table of contents', 'bblocks' ),
		esc_html__( 'In this article', 'bblocks' ),
		$list
	);

	// Place the list inside the Post Content wrapper, before the first block.
	$placed = preg_replace_callback(
		'#^\s*<div[^>]*>#',
		function ( $opening ) use ( $toc ) {
			return $opening[0] . $toc;
		},
		$content,
		1,
		$count
	);

	return $count ? $placed : $toc . $content;
}
add_filter( 'render_block_core/post-content', 'bblocks_table_of_contents', 10, 3 );

/**
 * Inline SVG icons used by the floating buttons.
 *
 * @param string $name Icon name.
 * @return string
 */
function bblocks_icon( $name ) {
	$paths = array(
		'arrow-up' => '<path d="M12 19V5M5 12l7-7 7 7"/>',
		'moon'     => '<path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/>',
		'sun'      => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
		'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/>',
		'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
		'chat'     => '<path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 21l2.1-5.6A8.5 8.5 0 1 1 21 11.5z"/>',
	);

	if ( ! isset( $paths[ $name ] ) ) {
		return '';
	}

	return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $paths[ $name ] . '</svg>';
}

/**
 * Allowed markup for the inline SVG icons.
 *
 * @return array<string, array<string, bool>>
 */
function bblocks_icon_kses() {
	return array(
		'svg'    => array(
			'xmlns'           => true,
			'viewbox'         => true,
			'width'           => true,
			'height'          => true,
			'fill'            => true,
			'stroke'          => true,
			'stroke-width'    => true,
			'stroke-linecap'  => true,
			'stroke-linejoin' => true,
			'aria-hidden'     => true,
			'focusable'       => true,
		),
		'path'   => array( 'd' => true ),
		'circle' => array(
			'cx' => true,
			'cy' => true,
			'r'  => true,
		),
		'rect'   => array(
			'x'      => true,
			'y'      => true,
			'width'  => true,
			'height' => true,
			'rx'     => true,
		),
	);
}

/**
 * Print floating buttons (back to top, theme toggle, contact) in the footer.
 */
function bblocks_floating_markup() {
	if ( ! bblocks_modules_active() ) {
		return;
	}

	$modules = bblocks_get_modules();
	$allowed = bblocks_icon_kses();

	if ( ! empty( $modules['dark_mode'] ) || ! empty( $modules['back_to_top'] ) ) {
		echo '<div class="bblocks-floating bblocks-floating--end">';

		if ( ! empty( $modules['dark_mode'] ) ) {
			printf(
				'<button type="button" class="bblocks-fab bblocks-theme-toggle" aria-pressed="false" aria-label="%1$s"><span class="bblocks-theme-toggle__dark">%2$s</span><span class="bblocks-theme-toggle__light">%3$s</span></button>',
				esc_attr__( 'Toggle dark mode', 'bblocks' ),
				wp_kses( bblocks_icon( 'moon' ), $allowed ),
				wp_kses( bblocks_icon( 'sun' ), $allowed )
			);
		}

		if ( ! empty( $modules['back_to_top'] ) ) {
			printf(
				'<button type="button" class="bblocks-fab bblocks-back-to-top" aria-label="%1$s" hidden>%2$s</button>',
				esc_attr__( 'Back to top', 'bblocks' ),
				wp_kses( bblocks_icon( 'arrow-up' ), $allowed )
			);
		}

		echo '</div>';
	}

	if ( empty( $modules['floating_contact'] ) ) {
		return;
	}

	$links = array();

	if ( ! empty( $modules['contact_phone'] ) ) {
		$links[] = array( 'tel:' . preg_replace( '/[^0-9+]/', '', $modules['contact_phone'] ), __( 'Call us', 'bblocks' ), 'phone' );
	}

	if ( ! empty( $modules['contact_email'] ) && is_email( $modules['contact_email'] ) ) {
		$links[] = array( 'mailto:' . antispambot( $modules['contact_email'] ), __( 'Email us', 'bblocks' ), 'mail' );
	}

	if ( ! empty( $modules['contact_whatsapp'] ) ) {
		$links[] = array( 'https://wa.me/' . preg_replace( '/\D/', '', $modules['contact_whatsapp'] ), __( 'Chat on WhatsApp', 'bblocks' ), 'chat' );
	}

	if ( ! $links ) {
		return;
	}

	echo '<div class="bblocks-floating bblocks-floating--start">';

	foreach ( $links as $link ) {
		printf(
			'<a class="bblocks-fab bblocks-fab--%1$s" href="%2$s" aria-label="%3$s"%4$s>%5$s</a>',
			esc_attr( $link[2] ),
			esc_url( $link[0], array( 'tel', 'mailto', 'https' ) ),
			esc_attr( $link[1] ),
			'chat' === $link[2] ? ' target="_blank" rel="noopener noreferrer"' : '',
			wp_kses( bblocks_icon( $link[2] ), $allowed )
		);
	}

	echo '</div>';
}
add_action( 'wp_footer', 'bblocks_floating_markup' );

/**
 * Register the "Dark mode toggle" button style while dark mode is enabled, so
 * a light/dark switch can also be placed anywhere, for example in a header.
 */
function bblocks_theme_toggle_block_style() {
	if ( ! bblocks_module_enabled( 'dark_mode' ) ) {
		return;
	}

	register_block_style(
		'core/button',
		array(
			'name'  => 'theme-toggle',
			'label' => _x( 'Dark mode toggle', 'Block style', 'bblocks' ),
		)
	);
}
add_action( 'init', 'bblocks_theme_toggle_block_style' );
