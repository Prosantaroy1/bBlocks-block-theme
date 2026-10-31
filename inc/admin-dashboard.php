<?php
/**
 * bBlocks admin dashboard (Appearance → bBlocks).
 *
 * Theme welcome page with quick links, the module settings form, the
 * starter site importer, recommended plugins and a feature overview.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register the theme dashboard under Appearance.
 */
function bblocks_admin_menu() {
	add_theme_page(
		__( 'bBlocks', 'bblocks' ),
		__( 'bBlocks', 'bblocks' ),
		'edit_theme_options',
		'bblocks-dashboard',
		'bblocks_admin_page_render'
	);
}
add_action( 'admin_menu', 'bblocks_admin_menu' );

/**
 * Enqueue scripts and styles for the theme dashboard.
 *
 * @param string $hook_suffix The current admin page hook.
 */
function bblocks_admin_assets( $hook_suffix ) {
	if ( 'appearance_page_bblocks-dashboard' !== $hook_suffix ) {
		return;
	}

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'bblocks-admin', get_theme_file_uri( 'assets/css/admin-dashboard.css' ), array(), $version );
	wp_enqueue_script( 'bblocks-admin', get_theme_file_uri( 'assets/js/admin-dashboard.js' ), array( 'jquery' ), $version, true );

	wp_localize_script(
		'bblocks-admin',
		'bblocksDashboardVars',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'bblocks_starter_nonce' ),
			'i18n'    => array(
				/* translators: %s: starter site name. */
				'confirm'     => __( 'Import the "%s" starter site? Its pages will be created (or updated if you imported it before) and your homepage settings will change.', 'bblocks' ),
				'importing'   => __( 'Importing…', 'bblocks' ),
				'imported'    => __( 'Imported!', 'bblocks' ),
				'failed'      => __( 'Import failed. Please try again.', 'bblocks' ),
				'error'       => __( 'An unexpected server error occurred during import.', 'bblocks' ),
				'visit'       => __( 'View site', 'bblocks' ),
				'installing'  => __( 'Installing…', 'bblocks' ),
				'activating'  => __( 'Activating…', 'bblocks' ),
				'active'      => __( 'Active', 'bblocks' ),
				'installFail' => __( 'Could not install. Opening the WordPress installer…', 'bblocks' ),
				/* translators: %s: style, header or footer design name. */
				'confirmDesign' => __( 'Apply "%s"? This changes the design of your whole site. You can switch back at any time.', 'bblocks' ),
				'applying'      => __( 'Applying…', 'bblocks' ),
				/* translators: 1: first item shown, 2: last item shown, 3: total number of starter sites. */
				'showing'       => __( 'Showing %1$s–%2$s of %3$s', 'bblocks' ),
				'prevPage'      => __( 'Previous page', 'bblocks' ),
				'nextPage'      => __( 'Next page', 'bblocks' ),
				/* translators: %s: page number. */
				'pageN'         => __( 'Page %s', 'bblocks' ),
			),
		)
	);
}
add_action( 'admin_enqueue_scripts', 'bblocks_admin_assets' );

/**
 * Count bundled theme assets for the overview (always accurate).
 *
 * @return array<string, int>
 */
function bblocks_asset_counts() {
	$dir   = get_template_directory();
	$count = array(
		'patterns'   => 0,
		'templates'  => count( (array) glob( $dir . '/templates/*.html' ) ),
		'variations' => count( (array) glob( $dir . '/styles/*.json' ) ) + 1, // Plus the default style.
		'headers'    => 0,
		'footers'    => 0,
		'modules'    => count( bblocks_module_definitions() ),
		'starters'   => count( bblocks_starter_sites() ),
	);

	foreach ( WP_Block_Patterns_Registry::get_instance()->get_all_registered() as $pattern ) {
		if ( 0 === strpos( $pattern['name'], 'bblocks/' ) && ( ! isset( $pattern['inserter'] ) || false !== $pattern['inserter'] ) ) {
			++$count['patterns'];
		}
	}

	foreach ( wp_get_theme_data_template_parts() as $part ) {
		if ( isset( $part['area'] ) && 'header' === $part['area'] ) {
			++$count['headers'];
		} elseif ( isset( $part['area'] ) && 'footer' === $part['area'] ) {
			++$count['footers'];
		}
	}

	return $count;
}

/**
 * Render a quick-action card.
 *
 * @param string $icon  Dashicon name (without the dashicons- prefix).
 * @param string $title Card title.
 * @param string $text  Card description.
 * @param string $url   Link target.
 */
function bblocks_admin_card( $icon, $title, $text, $url ) {
	?>
	<a class="bblocks-card" href="<?php echo esc_url( $url ); ?>">
		<span class="bblocks-card-icon" aria-hidden="true"><span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span></span>
		<span class="bblocks-card-body">
			<span class="bblocks-card-title"><?php echo esc_html( $title ); ?></span>
			<span class="bblocks-card-text"><?php echo esc_html( $text ); ?></span>
		</span>
		<span class="dashicons dashicons-arrow-right-alt2 bblocks-card-arrow" aria-hidden="true"></span>
	</a>
	<?php
}

/**
 * Read the changelog from the theme's readme.txt.
 *
 * @return array<string, string[]> Version => list of entries, newest first.
 */
function bblocks_get_changelog() {
	$file = get_template_directory() . '/readme.txt';

	if ( ! is_readable( $file ) ) {
		return array();
	}

	$readme = file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- Reading a local theme file.

	if ( ! $readme || ! preg_match( '/^==\s*Changelog\s*==\s*$(.*?)(?=^==[^=]|\z)/ims', $readme, $section ) ) {
		return array();
	}

	$changelog = array();
	$version   = '';

	foreach ( preg_split( '/\R/', $section[1] ) as $line ) {
		$line = trim( $line );

		if ( preg_match( '/^=\s*(.+?)\s*=$/', $line, $match ) ) {
			$version               = $match[1];
			$changelog[ $version ] = array();
		} elseif ( $version && 0 === strpos( $line, '* ' ) ) {
			$changelog[ $version ][] = substr( $line, 2 );
		}
	}

	return $changelog;
}

/**
 * Render a help card for the welcome sidebar (community, support).
 *
 * @param string $title Card title.
 * @param string $text  Card description.
 * @param string $label Link text.
 * @param string $url   External link target; opens in a new tab.
 */
function bblocks_admin_help_card( $title, $text, $label, $url ) {
	?>
	<div class="bblocks-help-card">
		<h3><?php echo esc_html( $title ); ?></h3>
		<p><?php echo esc_html( $text ); ?></p>
		<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer">
			<?php echo esc_html( $label ); ?>
			<span class="screen-reader-text"><?php esc_html_e( '(opens in a new tab)', 'bblocks' ); ?></span>
		</a>
	</div>
	<?php
}

/**
 * Render a decorative mini mockup of a starter site's homepage.
 *
 * Plain divs painted with the site's own design tokens (see
 * bblocks_starter_site_tokens()), so no preview images ship with the theme
 * and the cards follow the style variation each starter site uses.
 *
 * @param string $layout Starter site layout key.
 * @param string $logo   Short brand name shown in the mock header.
 */
function bblocks_starter_mockup( $layout, $logo ) {
	$lines  = function ( $widths, $modifier = '' ) {
		foreach ( $widths as $width ) {
			printf( '<span class="bbm-line %1$s" style="width:%2$d%%"></span>', esc_attr( $modifier ), (int) $width );
		}
	};
	$header = function ( $modifier = '' ) use ( $logo ) {
		echo '<div class="bbm-header ' . esc_attr( $modifier ) . '"><b class="bbm-logo">' . esc_html( $logo ) . '</b><span class="bbm-nav"><i></i><i></i><i></i><i></i></span><span class="bbm-btn is-small"></span></div>';
	};
	$cards  = function ( $count, $modifier = '' ) use ( $lines ) {
		echo '<div class="bbm-grid is-' . (int) $count . ' ' . esc_attr( $modifier ) . '">';
		for ( $i = 0; $i < $count; $i++ ) {
			echo '<div class="bbm-card"><span class="bbm-icon"></span>';
			$lines( array( 70 ), 'is-strong' );
			$lines( array( 92, 76 ) );
			echo '</div>';
		}
		echo '</div>';
	};
	?>
	<div class="bbm-chrome"><i></i><i></i><i></i><span class="bbm-url"></span></div>
	<div class="bbm-screen">
		<div class="bbm-page bbm-<?php echo esc_attr( $layout ); ?>">
			<?php if ( 'agency' === $layout ) : ?>
				<div class="bbm-cover">
					<?php $header( 'is-inverse' ); ?>
					<span class="bbm-kicker"></span>
					<b class="bbm-title is-lg"><?php esc_html_e( 'We build brands people remember', 'bblocks' ); ?></b>
					<?php $lines( array( 60 ) ); ?>
					<span class="bbm-actions"><span class="bbm-btn"></span><span class="bbm-btn is-ghost"></span></span>
				</div>
				<?php $cards( 4 ); ?>
				<div class="bbm-split"><span class="bbm-visual"></span><div><?php $lines( array( 80 ), 'is-strong' ); ?><?php $lines( array( 95, 88, 70 ) ); ?></div></div>
				<div class="bbm-grid is-4 bbm-team"><i></i><i></i><i></i><i></i></div>

			<?php elseif ( 'saas' === $layout ) : ?>
				<?php $header(); ?>
				<div class="bbm-hero is-center">
					<span class="bbm-pill"></span>
					<b class="bbm-title"><?php esc_html_e( 'Ship faster with less busywork', 'bblocks' ); ?></b>
					<?php $lines( array( 70, 50 ) ); ?>
					<span class="bbm-actions"><span class="bbm-btn"></span><span class="bbm-btn is-ghost"></span></span>
				</div>
				<?php $cards( 3, 'is-boxed' ); ?>
				<div class="bbm-grid is-3 bbm-pricing">
					<?php for ( $i = 0; $i < 3; $i++ ) : ?>
						<div class="bbm-card is-boxed<?php echo 1 === $i ? ' is-featured' : ''; ?>"><?php $lines( array( 40 ) ); ?><b class="bbm-price"></b><?php $lines( array( 80, 70, 75 ) ); ?><span class="bbm-btn is-block"></span></div>
					<?php endfor; ?>
				</div>

			<?php elseif ( 'architecture' === $layout ) : ?>
				<div class="bbm-cover is-dark">
					<?php $header( 'is-inverse' ); ?>
					<span class="bbm-kicker is-center"></span>
					<b class="bbm-title is-center"><?php esc_html_e( 'Architecture Solution', 'bblocks' ); ?></b>
					<span class="bbm-actions is-center"><span class="bbm-btn"></span><span class="bbm-btn is-ghost"></span></span>
				</div>
				<div class="bbm-split"><div><?php $lines( array( 30, 30, 30 ), 'is-strong' ); ?><?php $lines( array( 90, 80 ) ); ?></div><div><?php $lines( array( 85, 70 ), 'is-strong' ); ?></div></div>
				<div class="bbm-split is-tight"><span class="bbm-visual"></span><div><?php $lines( array( 70 ), 'is-strong' ); ?><?php $lines( array( 90, 80, 60 ) ); ?></div></div>
				<div class="bbm-grid is-3"><span class="bbm-visual is-tall"></span><span class="bbm-visual is-tall"></span><span class="bbm-visual is-tall"></span></div>

			<?php elseif ( 'marketplace' === $layout ) : ?>
				<?php $header(); ?>
				<div class="bbm-hero is-center">
					<b class="bbm-title"><?php esc_html_e( 'Enhance Website Aesthetics', 'bblocks' ); ?></b>
					<?php $lines( array( 60 ) ); ?>
					<span class="bbm-btn"></span>
				</div>
				<div class="bbm-card bbm-split"><div><?php $lines( array( 80 ), 'is-strong' ); ?><?php $lines( array( 90, 70 ) ); ?></div><span class="bbm-visual"></span></div>
				<div class="bbm-grid is-2"><span class="bbm-visual"></span><span class="bbm-visual"></span><span class="bbm-visual"></span><span class="bbm-visual"></span></div>

			<?php elseif ( 'resort' === $layout ) : ?>
				<div class="bbm-cover is-photo">
					<?php $header( 'is-inverse' ); ?>
					<b class="bbm-wordmark"><?php esc_html_e( 'Naturexplo', 'bblocks' ); ?></b>
				</div>
				<div class="bbm-split"><div><b class="bbm-title is-sm"><?php esc_html_e( 'About Us', 'bblocks' ); ?></b><?php $lines( array( 90, 70 ) ); ?><span class="bbm-visual"></span></div><div><?php $lines( array( 50, 40, 50, 40 ) ); ?></div></div>
				<span class="bbm-visual is-wide"></span>
				<div class="bbm-grid is-4"><span class="bbm-visual is-tall"></span><span class="bbm-visual is-tall"></span><span class="bbm-visual is-tall"></span><span class="bbm-visual is-tall"></span></div>

			<?php elseif ( 'spa' === $layout ) : ?>
				<?php $header(); ?>
				<div class="bbm-cover is-dark">
					<span class="bbm-kicker is-center"></span>
					<b class="bbm-title is-center"><?php esc_html_e( 'Gain The Peace', 'bblocks' ); ?></b>
					<span class="bbm-actions is-center"><span class="bbm-btn"></span></span>
				</div>
				<div class="bbm-split"><div><?php $lines( array( 80 ), 'is-strong' ); ?><?php $lines( array( 90, 85, 60 ) ); ?><span class="bbm-btn is-small"></span></div><span class="bbm-visual is-framed"></span></div>
				<div class="bbm-split"><span class="bbm-visual is-framed"></span><div><?php $lines( array( 80 ), 'is-strong' ); ?><?php $lines( array( 90, 85, 60 ) ); ?><span class="bbm-btn is-small"></span></div></div>

			<?php elseif ( 'consulting' === $layout ) : ?>
				<div class="bbm-cover is-dark">
					<?php $header( 'is-inverse' ); ?>
					<div class="bbm-split"><div><b class="bbm-title is-sm"><?php esc_html_e( 'With Strategic Direction', 'bblocks' ); ?></b><span class="bbm-btn is-small"></span></div><span class="bbm-visual is-tall"></span></div>
				</div>
				<div class="bbm-hero is-center"><?php $lines( array( 80, 70 ), 'is-strong' ); ?><span class="bbm-btn is-small"></span></div>
				<div class="bbm-panel"><?php $lines( array( 60, 90, 60, 90, 60, 90 ) ); ?></div>

			<?php elseif ( 'freelancer' === $layout ) : ?>
				<?php $header(); ?>
				<div class="bbm-hero">
					<span class="bbm-kicker"></span>
					<b class="bbm-title is-lg"><?php esc_html_e( 'Hi, I design and build', 'bblocks' ); ?> <em><?php esc_html_e( 'websites.', 'bblocks' ); ?></em></b>
					<?php $lines( array( 64 ) ); ?>
					<span class="bbm-btn"></span>
				</div>
				<div class="bbm-list">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
						<div class="bbm-row"><b class="bbm-num"><?php echo esc_html( number_format_i18n( $i ) ); ?></b><div><?php $lines( array( 50 ), 'is-strong' ); ?><?php $lines( array( 88 ) ); ?></div></div>
					<?php endfor; ?>
				</div>
				<div class="bbm-quote"><?php $lines( array( 90, 75 ), 'is-strong' ); ?><span class="bbm-avatar"></span></div>

			<?php else : ?>
				<?php $header(); ?>
				<div class="bbm-split is-hero">
					<div class="bbm-hero">
						<span class="bbm-pill"></span>
						<b class="bbm-title"><?php esc_html_e( 'Grow your business with confidence', 'bblocks' ); ?></b>
						<?php $lines( array( 90, 70 ) ); ?>
						<span class="bbm-actions"><span class="bbm-btn"></span><span class="bbm-btn is-ghost"></span></span>
					</div>
					<span class="bbm-visual"></span>
				</div>
				<?php $cards( 3, 'is-boxed' ); ?>
				<div class="bbm-stats"><b></b><b></b><b></b></div>
				<div class="bbm-band"><b class="bbm-title is-sm"><?php esc_html_e( 'Ready to get started?', 'bblocks' ); ?></b><span class="bbm-btn"></span></div>
			<?php endif; ?>
		</div>
	</div>
	<?php
}

/**
 * Starter site categories for the browser's sidebar.
 *
 * @return array<string, string> Category key => label.
 */
function bblocks_starter_site_categories() {
	return array(
		'business'   => __( 'Business', 'bblocks' ),
		'creative'   => __( 'Agency & Portfolio', 'bblocks' ),
		'ecommerce'  => __( 'eCommerce', 'bblocks' ),
		'food'       => __( 'Food & Hospitality', 'bblocks' ),
		'health'     => __( 'Health & Fitness', 'bblocks' ),
		'education'  => __( 'Education', 'bblocks' ),
		'realestate' => __( 'Real Estate & Architecture', 'bblocks' ),
		'services'   => __( 'Professional Services', 'bblocks' ),
		'blog'       => __( 'Blog & Magazine', 'bblocks' ),
		'dark'       => __( 'Dark Designs', 'bblocks' ),
	);
}

/**
 * Categories of one starter site. Sites can set their own 'categories' key;
 * the bundled ones are mapped here.
 *
 * @param string $slug Starter site key.
 * @return string[]
 */
function bblocks_starter_site_category_keys( $slug ) {
	static $sites = null;

	if ( null === $sites ) {
		$sites = bblocks_starter_sites();
	}

	if ( ! empty( $sites[ $slug ]['categories'] ) ) {
		return (array) $sites[ $slug ]['categories'];
	}

	$map = array(
		'business'      => array( 'business' ),
		'agency'        => array( 'business', 'creative' ),
		'saas'          => array( 'business', 'creative' ),
		'freelancer'    => array( 'creative', 'blog', 'dark' ),
		'architecture'  => array( 'realestate', 'creative', 'dark' ),
		'marketplace'   => array( 'ecommerce', 'business' ),
		'resort'        => array( 'food' ),
		'spa'           => array( 'health' ),
		'consulting'    => array( 'services', 'business', 'dark' ),
		'magazine'      => array( 'blog' ),
		'restaurant'    => array( 'food' ),
		'photography'   => array( 'creative', 'dark' ),
		'education'     => array( 'education' ),
		'fitness'       => array( 'health', 'dark' ),
		'realestate'    => array( 'realestate', 'business' ),
		'shop'          => array( 'ecommerce' ),
		'medical'       => array( 'health', 'services' ),
		'law'           => array( 'services', 'business' ),
		'fashion-store' => array( 'ecommerce' ),
		'gadget-store'  => array( 'ecommerce' ),
	);

	return isset( $map[ $slug ] ) ? $map[ $slug ] : array( 'business' );
}

/**
 * Render the main theme dashboard page.
 */
function bblocks_admin_page_render() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$theme   = wp_get_theme();
	$counts  = bblocks_asset_counts();
	$modules = bblocks_get_modules();
	?>
	<div class="wrap bblocks-dashboard-wrap">
		<h1 class="screen-reader-text"><?php esc_html_e( 'bBlocks', 'bblocks' ); ?></h1>

		<div class="bblocks-dashboard-navbar">
			<div class="bblocks-dashboard-brand">
				<div class="bblocks-brand-logo" aria-hidden="true">b</div>
				<span class="bblocks-brand-title"><?php esc_html_e( 'bBlocks', 'bblocks' ); ?></span>
			</div>
			<div class="bblocks-nav-tabs" role="tablist" aria-label="<?php esc_attr_e( 'Theme dashboard sections', 'bblocks' ); ?>">
				<?php
				$tabs  = array(
					'welcome'             => __( 'Welcome', 'bblocks' ),
					'starter-sites'       => __( 'Starter Sites', 'bblocks' ),
					'design'              => __( 'Design', 'bblocks' ),
					'modules'             => __( 'Modules', 'bblocks' ),
					'recommended-plugins' => __( 'Recommended Plugins', 'bblocks' ),
					'features'            => __( 'All Features', 'bblocks' ),
					'changelog'           => __( 'Changelog', 'bblocks' ),
				);
				$first = true;
				foreach ( $tabs as $id => $label ) {
					printf(
						'<button type="button" role="tab" id="bblocks-tab-%1$s" class="nav-tab%2$s" data-tab="%1$s" aria-controls="%1$s" aria-selected="%3$s"%4$s>%5$s</button>',
						esc_attr( $id ),
						$first ? ' nav-tab-active' : '',
						$first ? 'true' : 'false',
						$first ? '' : ' tabindex="-1"',
						esc_html( $label )
					);
					$first = false;
				}
				?>
			</div>
		</div>

		<?php settings_errors(); ?>
		<div id="bblocks-import-notice" class="bblocks-notice-toast" role="status" aria-live="polite"></div>

		<!-- TAB 1: WELCOME -->
		<div id="welcome" class="bblocks-tab-panel active" role="tabpanel" aria-labelledby="bblocks-tab-welcome" tabindex="0">
			<div class="bblocks-dashboard-banner">
				<div class="bblocks-banner-content">
					<h2>
						<?php esc_html_e( 'Welcome to bBlocks', 'bblocks' ); ?>
						<span class="bblocks-version-badge">
							<?php
							/* translators: %s: Theme version number. */
							echo esc_html( sprintf( __( 'v%s', 'bblocks' ), $theme->get( 'Version' ) ) );
							?>
						</span>
					</h2>
					<p><?php esc_html_e( 'Build a business, agency or SaaS site from core blocks — start from a starter site or mix the patterns yourself.', 'bblocks' ); ?></p>
				</div>
				<button type="button" class="bblocks-btn-primary bblocks-btn-browse-starters">
					<?php esc_html_e( 'Browse Starter Sites', 'bblocks' ); ?>
				</button>
			</div>

			<div class="bblocks-welcome-layout">
			<div class="bblocks-welcome-main">

			<?php
			$steps      = bblocks_onboarding_steps();
			$steps_done = count( array_filter( wp_list_pluck( $steps, 'done' ) ) );
			?>
			<section class="bblocks-checklist" aria-labelledby="bblocks-checklist-title">
				<div class="bblocks-checklist-head">
					<h2 id="bblocks-checklist-title"><?php esc_html_e( 'Get your site ready', 'bblocks' ); ?></h2>
					<span class="bblocks-checklist-count">
						<?php
						/* translators: 1: completed steps, 2: total steps. */
						echo esc_html( sprintf( __( '%1$s of %2$s done', 'bblocks' ), number_format_i18n( $steps_done ), number_format_i18n( count( $steps ) ) ) );
						?>
					</span>
				</div>
				<progress class="bblocks-checklist-progress" max="<?php echo esc_attr( count( $steps ) ); ?>" value="<?php echo esc_attr( $steps_done ); ?>" aria-labelledby="bblocks-checklist-title"></progress>
				<ol class="bblocks-checklist-steps">
					<?php foreach ( $steps as $step ) : ?>
						<li class="<?php echo $step['done'] ? 'is-done' : ''; ?>">
							<span class="bblocks-checklist-mark" aria-hidden="true"><span class="dashicons dashicons-<?php echo $step['done'] ? 'yes' : 'marker'; ?>"></span></span>
							<span class="bblocks-checklist-body">
								<strong><?php echo esc_html( $step['title'] ); ?></strong>
								<?php if ( $step['done'] ) : ?>
									<span class="screen-reader-text"><?php esc_html_e( '(done)', 'bblocks' ); ?></span>
								<?php endif; ?>
								<span><?php echo esc_html( $step['text'] ); ?></span>
							</span>
							<?php if ( $step['tab'] ) : ?>
								<button type="button" class="button bblocks-open-tab" data-tab="<?php echo esc_attr( $step['tab'] ); ?>"><?php echo esc_html( $step['label'] ); ?></button>
							<?php else : ?>
								<a class="button" href="<?php echo esc_url( $step['url'] ); ?>"><?php echo esc_html( $step['label'] ); ?></a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ol>
			</section>

			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'Quick Actions', 'bblocks' ); ?></h2>
			</div>
			<div class="bblocks-grid-3">
				<?php
				bblocks_admin_card( 'admin-appearance', __( 'Global styles', 'bblocks' ), __( 'Switch styles, color palettes and font pairings, or fine-tune colors and fonts.', 'bblocks' ), admin_url( 'site-editor.php?p=%2Fstyles' ) );
				bblocks_admin_card( 'layout', __( 'Templates', 'bblocks' ), __( 'Browse page, post, archive and landing page templates.', 'bblocks' ), admin_url( 'site-editor.php?p=%2Ftemplate' ) );
				bblocks_admin_card( 'screenoptions', __( 'Patterns', 'bblocks' ), __( 'Insert hero, features, pricing, team and other sections.', 'bblocks' ), admin_url( 'site-editor.php?p=%2Fpattern' ) );
				bblocks_admin_card( 'heading', __( 'Header', 'bblocks' ), __( 'Swap or edit the site header template part.', 'bblocks' ), admin_url( 'site-editor.php?p=%2Fpattern&categoryId=header' ) );
				bblocks_admin_card( 'editor-insertmore', __( 'Footer', 'bblocks' ), __( 'Swap or edit the site footer template part.', 'bblocks' ), admin_url( 'site-editor.php?p=%2Fpattern&categoryId=footer' ) );
				bblocks_admin_card( 'menu', __( 'Navigation', 'bblocks' ), __( 'Manage the menus used in headers and footers.', 'bblocks' ), admin_url( 'site-editor.php?p=%2Fnavigation' ) );
				?>
			</div>

			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'What is included', 'bblocks' ); ?></h2>
			</div>
			<ul class="bblocks-stats">
				<?php
				$stats = array(
					array( $counts['patterns'], __( 'Block patterns', 'bblocks' ) ),
					array( $counts['templates'], __( 'Templates', 'bblocks' ) ),
					array( $counts['headers'] + $counts['footers'], __( 'Headers & footers', 'bblocks' ) ),
					array( $counts['variations'], __( 'Style variations', 'bblocks' ) ),
					array( $counts['modules'], __( 'Modules', 'bblocks' ) ),
					array( $counts['starters'], __( 'Starter sites', 'bblocks' ) ),
				);
				foreach ( $stats as $stat ) {
					printf( '<li><strong>%1$s</strong><span>%2$s</span></li>', esc_html( number_format_i18n( $stat[0] ) ), esc_html( $stat[1] ) );
				}
				?>
			</ul>

			</div><!-- .bblocks-welcome-main -->

			<aside class="bblocks-welcome-aside" aria-label="<?php esc_attr_e( 'Community and support', 'bblocks' ); ?>">
				<?php
				bblocks_admin_help_card(
					__( 'Web Creators Community', 'bblocks' ),
					__( 'Join our community of fellow bBlocks users creating effective websites! Share your site, ask a question and help others.', 'bblocks' ),
					__( 'Join our Facebook Group', 'bblocks' ),
					'https://www.facebook.com/share/g/1drGNCe6d7/'
				);
				bblocks_admin_help_card(
					__( 'Support', 'bblocks' ),
					__( 'Have a question? We are happy to help! Get in touch with our support team on the WordPress.org forum.', 'bblocks' ),
					__( 'Submit a Ticket', 'bblocks' ),
					'https://wordpress.org/support/theme/bblocks/'
				);
				?>
			</aside>
			</div><!-- .bblocks-welcome-layout -->
		</div>

		<!-- TAB 2: MODULES -->
		<div id="modules" class="bblocks-tab-panel" role="tabpanel" aria-labelledby="bblocks-tab-modules" tabindex="0">
			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'Modules', 'bblocks' ); ?></h2>
			</div>
			<p class="bblocks-intro"><?php esc_html_e( 'Optional front-end extras. Every module is off by default and its files load only when at least one module is on.', 'bblocks' ); ?></p>
			<form method="post" action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>">
				<?php settings_fields( 'bblocks_modules_group' ); ?>
				<div class="bblocks-grid-3">
					<?php foreach ( bblocks_module_definitions() as $key => $module ) : ?>
						<div class="bblocks-module-card">
							<div class="bblocks-module-info">
								<h3 id="bblocks-module-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $module['label'] ); ?></h3>
								<p id="bblocks-module-<?php echo esc_attr( $key ); ?>-desc"><?php echo esc_html( $module['description'] ); ?></p>
							</div>
							<label class="bblocks-switch">
								<input type="checkbox" role="switch" name="bblocks_modules[<?php echo esc_attr( $key ); ?>]" value="1" aria-labelledby="bblocks-module-<?php echo esc_attr( $key ); ?>" aria-describedby="bblocks-module-<?php echo esc_attr( $key ); ?>-desc" <?php checked( ! empty( $modules[ $key ] ) ); ?>>
								<span class="bblocks-slider" aria-hidden="true"></span>
							</label>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="bblocks-section-header">
					<h2><?php esc_html_e( 'Module settings', 'bblocks' ); ?></h2>
				</div>
				<div class="bblocks-settings-panel">
					<p>
						<label for="bblocks-dark-default"><?php esc_html_e( 'Default color scheme for new visitors', 'bblocks' ); ?></label>
						<select id="bblocks-dark-default" name="bblocks_modules[dark_mode_default]">
							<option value="light" <?php selected( $modules['dark_mode_default'], 'light' ); ?>><?php esc_html_e( 'Light', 'bblocks' ); ?></option>
							<option value="dark" <?php selected( $modules['dark_mode_default'], 'dark' ); ?>><?php esc_html_e( 'Dark', 'bblocks' ); ?></option>
							<option value="auto" <?php selected( $modules['dark_mode_default'], 'auto' ); ?>><?php esc_html_e( 'Follow the visitor\'s device', 'bblocks' ); ?></option>
						</select>
					</p>
					<p>
						<label for="bblocks-contact-phone"><?php esc_html_e( 'Phone number (floating contact)', 'bblocks' ); ?></label>
						<input type="tel" id="bblocks-contact-phone" class="regular-text" name="bblocks_modules[contact_phone]" value="<?php echo esc_attr( $modules['contact_phone'] ); ?>" placeholder="+1 555 010 0199">
					</p>
					<p>
						<label for="bblocks-contact-email"><?php esc_html_e( 'Email address (floating contact)', 'bblocks' ); ?></label>
						<input type="email" id="bblocks-contact-email" class="regular-text" name="bblocks_modules[contact_email]" value="<?php echo esc_attr( $modules['contact_email'] ); ?>" placeholder="hello@example.com">
					</p>
					<p>
						<label for="bblocks-contact-whatsapp"><?php esc_html_e( 'WhatsApp number with country code, digits only', 'bblocks' ); ?></label>
						<input type="text" inputmode="numeric" pattern="[0-9]*" id="bblocks-contact-whatsapp" class="regular-text" name="bblocks_modules[contact_whatsapp]" value="<?php echo esc_attr( $modules['contact_whatsapp'] ); ?>" placeholder="15550100199">
					</p>
					<p>
						<label for="bblocks-announcement-text"><?php esc_html_e( 'Announcement text', 'bblocks' ); ?></label>
						<input type="text" id="bblocks-announcement-text" class="large-text" name="bblocks_modules[announcement_text]" value="<?php echo esc_attr( $modules['announcement_text'] ); ?>" placeholder="<?php esc_attr_e( 'Free shipping on all orders this week!', 'bblocks' ); ?>">
					</p>
					<p>
						<label for="bblocks-announcement-url"><?php esc_html_e( 'Announcement link (optional)', 'bblocks' ); ?></label>
						<input type="url" id="bblocks-announcement-url" class="regular-text" name="bblocks_modules[announcement_url]" value="<?php echo esc_attr( $modules['announcement_url'] ); ?>" placeholder="https://">
					</p>
					<p>
						<label for="bblocks-announcement-cta"><?php esc_html_e( 'Announcement link text', 'bblocks' ); ?></label>
						<input type="text" id="bblocks-announcement-cta" class="regular-text" name="bblocks_modules[announcement_cta]" value="<?php echo esc_attr( $modules['announcement_cta'] ); ?>" placeholder="<?php esc_attr_e( 'Learn more', 'bblocks' ); ?>">
					</p>
					<p class="description"><?php esc_html_e( 'Tip: while dark mode is on, any Button block can become a light/dark switch — pick the "Dark mode toggle" style in its Styles panel.', 'bblocks' ); ?></p>
				</div>
				<?php submit_button( __( 'Save modules', 'bblocks' ) ); ?>
			</form>
		</div>

		<!-- TAB 3: STARTER SITES -->
		<div id="starter-sites" class="bblocks-tab-panel" role="tabpanel" aria-labelledby="bblocks-tab-starter-sites" tabindex="0">
			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'Starter Sites', 'bblocks' ); ?></h2>
			</div>
			<p class="bblocks-intro"><?php esc_html_e( 'Each starter site stacks the theme\'s own patterns into ready-made pages and sets your homepage. Nothing is downloaded and your posts are never changed. Importing again updates the same pages instead of duplicating them.', 'bblocks' ); ?></p>
			<label class="bblocks-option">
				<input type="checkbox" id="bblocks-apply-style" value="1" checked>
				<?php esc_html_e( 'Also apply the matching style and header (replaces your current Global Styles colors and fonts, and your header design)', 'bblocks' ); ?>
			</label>
			<label class="bblocks-option">
				<input type="checkbox" id="bblocks-with-menu" value="1" checked>
				<?php esc_html_e( 'Create a navigation menu with the new pages', 'bblocks' ); ?>
			</label>

			<?php
			$imported_sites  = get_option( 'bblocks_imported_pages', array() );
			$imported_sites  = is_array( $imported_sites ) ? $imported_sites : array();
			$site_name       = get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'bBlocks';
			$starter_sites   = bblocks_starter_sites();
			$site_categories = bblocks_starter_site_categories();
			$category_counts = array_fill_keys( array_keys( $site_categories ), 0 );

			foreach ( $starter_sites as $slug => $site ) {
				foreach ( bblocks_starter_site_category_keys( $slug ) as $category ) {
					if ( isset( $category_counts[ $category ] ) ) {
						++$category_counts[ $category ];
					}
				}
			}
			?>
			<div class="bblocks-starter-browser">
				<aside class="bblocks-starter-sidebar" aria-label="<?php esc_attr_e( 'Filter starter sites', 'bblocks' ); ?>">
					<label class="screen-reader-text" for="bblocks-starter-search"><?php esc_html_e( 'Search starter sites', 'bblocks' ); ?></label>
					<div class="bblocks-starter-search">
						<span class="dashicons dashicons-search" aria-hidden="true"></span>
						<input type="search" id="bblocks-starter-search" placeholder="<?php esc_attr_e( 'Search starter sites', 'bblocks' ); ?>" autocomplete="off">
					</div>

					<h3 class="bblocks-starter-filter-title" id="bblocks-starter-categories-title"><?php esc_html_e( 'Categories', 'bblocks' ); ?></h3>
					<ul class="bblocks-starter-categories" aria-labelledby="bblocks-starter-categories-title">
						<li>
							<button type="button" class="bblocks-starter-cat is-active" data-cat="" aria-pressed="true">
								<span><?php esc_html_e( 'All sites', 'bblocks' ); ?></span>
								<span class="bblocks-starter-cat-count"><?php echo esc_html( number_format_i18n( count( $starter_sites ) ) ); ?></span>
							</button>
						</li>
						<?php foreach ( $site_categories as $category => $label ) : ?>
							<?php
							if ( empty( $category_counts[ $category ] ) ) {
								continue;
							}
							?>
							<li>
								<button type="button" class="bblocks-starter-cat" data-cat="<?php echo esc_attr( $category ); ?>" aria-pressed="false">
									<span><?php echo esc_html( $label ); ?></span>
									<span class="bblocks-starter-cat-count"><?php echo esc_html( number_format_i18n( $category_counts[ $category ] ) ); ?></span>
								</button>
							</li>
						<?php endforeach; ?>
					</ul>

					<h3 class="bblocks-starter-filter-title"><label for="bblocks-starter-status"><?php esc_html_e( 'Status', 'bblocks' ); ?></label></h3>
					<select id="bblocks-starter-status">
						<option value=""><?php esc_html_e( 'All starter sites', 'bblocks' ); ?></option>
						<option value="imported"><?php esc_html_e( 'Imported', 'bblocks' ); ?></option>
						<option value="new"><?php esc_html_e( 'Not imported yet', 'bblocks' ); ?></option>
					</select>
				</aside>

				<div class="bblocks-starter-main">
			<div class="bblocks-starter-grid">
				<?php
				foreach ( $starter_sites as $slug => $site ) :
					$tokens   = bblocks_starter_site_tokens( $site['style'] );
					$imported = ! empty( $imported_sites[ $slug ] );
					$cat_keys = bblocks_starter_site_category_keys( $slug );
					$haystack = array( $site['title'], $site['description'], $site['style'] );
					foreach ( $cat_keys as $category ) {
						$haystack[] = isset( $site_categories[ $category ] ) ? $site_categories[ $category ] : '';
					}
					foreach ( $site['pages'] as $page ) {
						$haystack[] = $page[0];
					}
					$vars     = sprintf(
						'--bb-bg:%1$s;--bb-bg2:%2$s;--bb-fg:%3$s;--bb-fg2:%4$s;--bb-ac:%5$s;--bb-ac2:%6$s;--bb-r:%7$s',
						$tokens['background'],
						$tokens['surface'],
						$tokens['text'],
						$tokens['muted'],
						$tokens['primary'],
						$tokens['secondary'],
						$tokens['radius']
					);
					?>
					<article class="bblocks-starter-card<?php echo $imported ? ' is-imported' : ''; ?>" style="<?php echo esc_attr( $vars ); ?>" aria-labelledby="bblocks-starter-<?php echo esc_attr( $slug ); ?>" data-cats="<?php echo esc_attr( implode( ' ', $cat_keys ) ); ?>" data-search="<?php echo esc_attr( strtolower( implode( ' ', $haystack ) ) ); ?>" data-imported="<?php echo $imported ? '1' : '0'; ?>">
						<div class="bblocks-starter-preview-wrap" aria-hidden="true">
							<?php bblocks_starter_mockup( $site['layout'], $site_name ); ?>
						</div>
						<div class="bblocks-starter-footer">
							<div class="bblocks-starter-head">
								<h3 class="bblocks-starter-title" id="bblocks-starter-<?php echo esc_attr( $slug ); ?>"><?php echo esc_html( $site['title'] ); ?></h3>
								<?php if ( $imported ) : ?>
									<span class="bblocks-starter-status"><span class="dashicons dashicons-yes" aria-hidden="true"></span><?php esc_html_e( 'Imported', 'bblocks' ); ?></span>
								<?php endif; ?>
							</div>
							<p class="bblocks-starter-desc"><?php echo esc_html( $site['description'] ); ?></p>

							<dl class="bblocks-starter-meta">
								<div>
									<dt><?php esc_html_e( 'Style', 'bblocks' ); ?></dt>
									<dd>
										<span class="bblocks-starter-swatches" aria-hidden="true"><i style="background:var(--bb-bg)"></i><i style="background:var(--bb-fg)"></i><i style="background:var(--bb-ac)"></i><i style="background:var(--bb-ac2)"></i></span>
										<?php echo esc_html( $site['style'] ? $site['style'] : __( 'Default', 'bblocks' ) ); ?>
									</dd>
								</div>
								<div>
									<dt><?php esc_html_e( 'Pages', 'bblocks' ); ?></dt>
									<dd>
										<ul class="bblocks-starter-pages">
											<?php foreach ( $site['pages'] as $page ) : ?>
												<li><?php echo esc_html( $page[0] ); ?></li>
											<?php endforeach; ?>
										</ul>
									</dd>
								</div>
							</dl>

							<div class="bblocks-starter-actions">
								<button type="button" class="bblocks-btn-import" data-site="<?php echo esc_attr( $slug ); ?>" data-title="<?php echo esc_attr( $site['title'] ); ?>">
									<span class="dashicons dashicons-<?php echo $imported ? 'update' : 'download'; ?>" aria-hidden="true"></span>
									<?php $imported ? esc_html_e( 'Re-import', 'bblocks' ) : esc_html_e( 'Import', 'bblocks' ); ?>
								</button>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<p class="bblocks-starter-empty" hidden><?php esc_html_e( 'No starter sites match your search. Try another word or category.', 'bblocks' ); ?></p>

			<div class="bblocks-starter-toolbar">
				<p class="bblocks-starter-count" role="status" aria-live="polite"></p>
				<nav class="bblocks-starter-pagination" aria-label="<?php esc_attr_e( 'Starter sites pages', 'bblocks' ); ?>"></nav>
				<p class="bblocks-starter-per-page">
					<label for="bblocks-starter-per-page"><?php esc_html_e( 'Per page:', 'bblocks' ); ?></label>
					<select id="bblocks-starter-per-page">
						<option value="6">6</option>
						<option value="9" selected>9</option>
						<option value="12">12</option>
						<option value="0"><?php esc_html_e( 'All', 'bblocks' ); ?></option>
					</select>
				</p>
			</div>
				</div><!-- .bblocks-starter-main -->
			</div><!-- .bblocks-starter-browser -->
		</div>

		<!-- TAB: DESIGN -->
		<div id="design" class="bblocks-tab-panel" role="tabpanel" aria-labelledby="bblocks-tab-design" tabindex="0">
			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'Style', 'bblocks' ); ?></h2>
			</div>
			<p class="bblocks-intro"><?php esc_html_e( 'Apply a complete style — colors, fonts and buttons — in one click. This replaces the colors and fonts in your Global Styles; separate color palettes and font pairings are also available in the Site Editor under Styles.', 'bblocks' ); ?></p>
			<div class="bblocks-design-grid">
				<?php
				$active_style = bblocks_active_style_title();
				foreach ( bblocks_full_style_variations() as $variation ) :
					$is_default = __( 'Default', 'bblocks' ) === $variation['title'];
					$tokens     = bblocks_starter_site_tokens( $is_default ? '' : $variation['title'] );
					$is_active  = $active_style === $variation['title'];
					?>
					<div class="bblocks-design-card<?php echo $is_active ? ' is-active' : ''; ?>">
						<span class="bblocks-design-swatch" aria-hidden="true" style="<?php echo esc_attr( sprintf( 'background:%1$s;color:%2$s;border-radius:%3$s', $tokens['background'], $tokens['text'], '0.6rem' ) ); ?>">
							<b style="<?php echo esc_attr( 'color:' . $tokens['text'] ); ?>">Aa</b>
							<i style="<?php echo esc_attr( 'background:' . $tokens['primary'] ); ?>"></i><i style="<?php echo esc_attr( 'background:' . $tokens['secondary'] ); ?>"></i><i style="<?php echo esc_attr( 'background:' . $tokens['surface'] ); ?>"></i>
						</span>
						<span class="bblocks-design-name"><?php echo esc_html( $variation['title'] ); ?></span>
						<?php if ( $is_active ) : ?>
							<span class="bblocks-design-status"><?php esc_html_e( 'Active', 'bblocks' ); ?></span>
						<?php else : ?>
							<button type="button" class="button bblocks-apply-design" data-kind="style" data-value="<?php echo esc_attr( $variation['title'] ); ?>" data-title="<?php echo esc_attr( $variation['title'] ); ?>">
								<?php esc_html_e( 'Apply', 'bblocks' ); ?>
								<span class="screen-reader-text"><?php echo esc_html( $variation['title'] ); ?></span>
							</button>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>

			<?php
			$areas = array(
				'header' => array( __( 'Header', 'bblocks' ), __( 'Choose the header shown on every page. You can still edit it afterwards in the Site Editor; picking the first design restores the theme\'s original header.', 'bblocks' ) ),
				'footer' => array( __( 'Footer', 'bblocks' ), __( 'Choose the footer shown on every page. Picking the first design restores the theme\'s original footer.', 'bblocks' ) ),
			);
			foreach ( $areas as $area => $labels ) :
				$current = bblocks_current_part_design( $area );
				?>
				<div class="bblocks-section-header">
					<h2><?php echo esc_html( $labels[0] ); ?></h2>
				</div>
				<p class="bblocks-intro">
					<?php echo esc_html( $labels[1] ); ?>
					<?php if ( '' === $current ) : ?>
						<strong><?php esc_html_e( 'Your current design has been edited in the Site Editor — applying another one replaces those edits (a revision is kept).', 'bblocks' ); ?></strong>
					<?php endif; ?>
				</p>
				<ul class="bblocks-part-list">
					<?php foreach ( bblocks_part_designs( $area ) as $slug => $title ) : ?>
						<li class="<?php echo $current === $slug ? 'is-active' : ''; ?>">
							<span><?php echo esc_html( $title ); ?></span>
							<?php if ( $current === $slug ) : ?>
								<span class="bblocks-design-status"><?php esc_html_e( 'Active', 'bblocks' ); ?></span>
							<?php else : ?>
								<button type="button" class="button bblocks-apply-design" data-kind="<?php echo esc_attr( $area ); ?>" data-value="<?php echo esc_attr( $slug ); ?>" data-title="<?php echo esc_attr( $title ); ?>">
									<?php esc_html_e( 'Use this', 'bblocks' ); ?>
									<span class="screen-reader-text"><?php echo esc_html( $title ); ?></span>
								</button>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<p><a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2Fwp_template_part%2Fall' ) ); ?>"><?php esc_html_e( 'Edit it in the Site Editor', 'bblocks' ); ?></a></p>
			<?php endforeach; ?>
		</div>

		<!-- TAB 4: RECOMMENDED PLUGINS -->
		<div id="recommended-plugins" class="bblocks-tab-panel" role="tabpanel" aria-labelledby="bblocks-tab-recommended-plugins" tabindex="0">
			<?php bblocks_render_recommended_plugins(); ?>
		</div>

		<!-- TAB 5: ALL FEATURES -->
		<div id="features" class="bblocks-tab-panel" role="tabpanel" aria-labelledby="bblocks-tab-features" tabindex="0">
			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'All Features — Included Free', 'bblocks' ); ?></h2>
			</div>
			<p class="bblocks-intro"><?php esc_html_e( 'Everything below is part of the free theme. There is nothing to unlock.', 'bblocks' ); ?></p>

			<table class="bblocks-comparison-table">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Feature', 'bblocks' ); ?></th>
						<th scope="col"><?php esc_html_e( 'What you get', 'bblocks' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Availability', 'bblocks' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$rows = array(
						array(
							__( 'Block patterns', 'bblocks' ),
							/* translators: %d: number of patterns. */
							sprintf( __( '%d sections: hero, about, features, services, team, testimonials, pricing, call to action, contact and blog', 'bblocks' ), $counts['patterns'] ),
						),
						array(
							__( 'Templates', 'bblocks' ),
							/* translators: %d: number of templates. */
							sprintf( __( '%d templates, including a full-width landing page, page with sidebar and page without title', 'bblocks' ), $counts['templates'] ),
						),
						array(
							__( 'Headers & footers', 'bblocks' ),
							/* translators: 1: number of headers, 2: number of footers. */
							sprintf( __( '%1$d headers and %2$d footers, all swappable template parts', 'bblocks' ), $counts['headers'], $counts['footers'] ),
						),
						array(
							__( 'Styles', 'bblocks' ),
							/* translators: %d: number of style variations. */
							sprintf( __( '%d one-click style variations and a named design system in Global Styles', 'bblocks' ), $counts['variations'] ),
						),
						array(
							__( 'Modules', 'bblocks' ),
							/* translators: %d: number of modules. */
							sprintf( __( '%d optional modules: back to top, dark mode, reading progress, smart header, scroll animations, footer reveal, floating contact, announcement bar and table of contents', 'bblocks' ), $counts['modules'] ),
						),
						array(
							__( 'Starter sites', 'bblocks' ),
							/* translators: %d: number of starter sites. */
							sprintf( __( '%d one-click starter sites built from the bundled patterns', 'bblocks' ), $counts['starters'] ),
						),
						array(
							__( 'Fonts', 'bblocks' ),
							__( 'Self-hosted Inter, Poppins, Manrope and Playfair Display — no requests to third-party font services', 'bblocks' ),
						),
						array(
							__( 'WooCommerce', 'bblocks' ),
							__( 'Shop, product, cart, checkout and order templates that follow your style, plus two WooCommerce starter sites', 'bblocks' ),
						),
						array(
							__( 'Support', 'bblocks' ),
							__( 'Community support forum on WordPress.org', 'bblocks' ),
						),
					);
					foreach ( $rows as $row ) {
						printf(
							'<tr><th scope="row">%1$s</th><td>%2$s</td><td><span class="bblocks-check-green"><span aria-hidden="true">✓</span> %3$s</span></td></tr>',
							esc_html( $row[0] ),
							esc_html( $row[1] ),
							esc_html__( 'Free', 'bblocks' )
						);
					}
					?>
				</tbody>
			</table>
		</div>

		<!-- TAB 6: CHANGELOG -->
		<div id="changelog" class="bblocks-tab-panel" role="tabpanel" aria-labelledby="bblocks-tab-changelog" tabindex="0">
			<div class="bblocks-section-header">
				<h2><?php esc_html_e( 'Changelog', 'bblocks' ); ?></h2>
			</div>
			<p class="bblocks-intro"><?php esc_html_e( 'What changed in each version of the theme.', 'bblocks' ); ?></p>

			<?php $changelog = bblocks_get_changelog(); ?>
			<?php if ( $changelog ) : ?>
				<div class="bblocks-changelog">
					<?php foreach ( $changelog as $version => $entries ) : ?>
						<section class="bblocks-changelog-version<?php echo $version === $theme->get( 'Version' ) ? ' is-current' : ''; ?>">
							<h3>
								<?php
								/* translators: %s: Theme version number. */
								echo esc_html( sprintf( __( 'Version %s', 'bblocks' ), $version ) );
								?>
								<?php if ( $version === $theme->get( 'Version' ) ) : ?>
									<span class="bblocks-version-badge"><?php esc_html_e( 'Current', 'bblocks' ); ?></span>
								<?php endif; ?>
							</h3>
							<ul>
								<?php foreach ( $entries as $entry ) : ?>
									<li><?php echo esc_html( $entry ); ?></li>
								<?php endforeach; ?>
							</ul>
						</section>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<p><?php esc_html_e( 'The changelog could not be loaded. You can find it in the theme\'s readme.txt file.', 'bblocks' ); ?></p>
			<?php endif; ?>
		</div>

	</div>
	<?php
}
