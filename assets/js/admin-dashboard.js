/**
 * bBlocks admin dashboard.
 * Tabs, recommended plugin installs and the AJAX starter site import.
 */

( function ( $ ) {
	'use strict';

	$( function () {
		var vars = window.bblocksDashboardVars || {};
		var i18n = vars.i18n || {};
		var $tabs = $( '.bblocks-nav-tabs .nav-tab' );

		function openTab( targetTab, updateHash, focus ) {
			// The tab id can come from the URL hash, so only accept known ids.
			var $btn = $tabs.filter( function () {
				return $( this ).attr( 'data-tab' ) === targetTab;
			} );

			if ( ! $btn.length ) {
				return;
			}

			$tabs.removeClass( 'nav-tab-active' ).attr( { 'aria-selected': 'false', tabindex: '-1' } );
			$btn.addClass( 'nav-tab-active' ).attr( 'aria-selected', 'true' ).removeAttr( 'tabindex' );

			$( '.bblocks-tab-panel' ).removeClass( 'active' );
			$( document.getElementById( targetTab ) ).addClass( 'active' );

			if ( focus ) {
				$btn.trigger( 'focus' );
			}

			if ( updateHash && window.history.replaceState ) {
				window.history.replaceState( null, '', '#' + targetTab );
			}
		}

		// Tab switching.
		$tabs.on( 'click', function ( e ) {
			e.preventDefault();
			openTab( $( this ).attr( 'data-tab' ), true, false );
		} );

		// Arrow keys, Home and End move between tabs (WAI-ARIA tabs pattern).
		$tabs.on( 'keydown', function ( e ) {
			var index = $tabs.index( this );
			var next = null;

			if ( 'ArrowRight' === e.key ) {
				next = ( index + 1 ) % $tabs.length;
			} else if ( 'ArrowLeft' === e.key ) {
				next = ( index - 1 + $tabs.length ) % $tabs.length;
			} else if ( 'Home' === e.key ) {
				next = 0;
			} else if ( 'End' === e.key ) {
				next = $tabs.length - 1;
			}

			if ( null !== next ) {
				e.preventDefault();
				openTab( $tabs.eq( next ).attr( 'data-tab' ), true, true );
			}
		} );

		// Restore the tab from the URL hash, or return to Modules after saving it.
		if ( window.location.hash ) {
			openTab( window.location.hash.substring( 1 ), false, false );
		} else if ( /[?&]settings-updated=/.test( window.location.search ) ) {
			openTab( 'modules', true, false );
		}

		// "Browse Starter Sites" button.
		$( document ).on( 'click', '.bblocks-btn-browse-starters', function ( e ) {
			e.preventDefault();
			openTab( 'starter-sites', true, true );
		} );

		// Recommended plugins: install with core's wp.updates, then activate,
		// all without leaving the page. Without JS the link opens core's installer.
		function markActive( $btn ) {
			$btn.closest( '.bblocks-plugin-card' ).removeClass( 'is-install is-activate' ).addClass( 'is-active' );
			$btn.replaceWith(
				$( '<span class="bblocks-plugin-active">' )
					.append( '<span class="dashicons dashicons-yes-alt" aria-hidden="true"></span>' )
					.append( document.createTextNode( i18n.active || '' ) )
			);
		}

		function activate( $btn, url ) {
			$btn.addClass( 'updating-message' ).text( i18n.activating || '…' );
			$.get( url )
				.done( function () {
					markActive( $btn );
				} )
				.fail( function () {
					window.location.href = url;
				} );
		}

		$( document ).on( 'click', '.bblocks-plugin-install', function ( e ) {
			var $btn = $( this );

			if ( ! window.wp || ! window.wp.updates ) {
				return; // Follow the link to core's install screen.
			}

			e.preventDefault();
			$btn.addClass( 'updating-message disabled' ).attr( 'aria-disabled', 'true' ).text( i18n.installing || '…' );

			window.wp.updates
				.installPlugin( { slug: $btn.data( 'slug' ) } )
				.done( function ( response ) {
					if ( response && response.activateUrl ) {
						activate( $btn, response.activateUrl );
					} else {
						markActive( $btn );
					}
				} )
				.fail( function () {
					$btn.removeClass( 'updating-message disabled' ).text( i18n.installFail || '' );
					window.location.href = $btn.attr( 'href' );
				} );
		} );

		// Activate links stay on this page too.
		$( document ).on( 'click', '.bblocks-plugin-card.is-activate .bblocks-plugin-btn', function ( e ) {
			e.preventDefault();
			activate( $( this ), $( this ).attr( 'href' ) );
		} );

		// AJAX starter site import.
		$( document ).on( 'click', '.bblocks-btn-import', function ( e ) {
			e.preventDefault();

			var $btn = $( this );
			var title = String( $btn.data( 'title' ) );
			var confirmText = ( i18n.confirm || '%s' ).replace( '%s', title );

			if ( ! window.confirm( confirmText ) ) {
				return;
			}

			var originalHtml = $btn.html();
			var $notice = $( '#bblocks-import-notice' );

			$btn.prop( 'disabled', true ).text( i18n.importing || '…' );
			$notice.removeClass( 'success error' ).empty();

			$.ajax( {
				url: vars.ajaxUrl,
				type: 'POST',
				data: {
					action: 'bblocks_import_starter_site',
					site: $btn.data( 'site' ),
					apply_style: $( '#bblocks-apply-style' ).is( ':checked' ) ? 1 : 0,
					with_menu: $( '#bblocks-with-menu' ).is( ':checked' ) ? 1 : 0,
					security: vars.nonce,
				},
			} )
				.done( function ( response ) {
					if ( response && response.success ) {
						$btn.prop( 'disabled', false ).text( i18n.imported || '' );
						$btn.closest( '.bblocks-starter-card' ).addClass( 'is-imported' );
						$notice
							.addClass( 'success' )
							.append( document.createTextNode( response.data.message + ' ' ) )
							.append( $( '<a>' ).attr( { href: response.data.url, target: '_blank', rel: 'noopener' } ).text( i18n.visit || '' ) );
					} else {
						$btn.prop( 'disabled', false ).html( originalHtml );
						$notice.addClass( 'error' ).text( ( response && response.data && response.data.message ) || i18n.failed || '' );
					}
				} )
				.fail( function ( xhr ) {
					var message = xhr && xhr.responseJSON && xhr.responseJSON.data && xhr.responseJSON.data.message;

					$btn.prop( 'disabled', false ).html( originalHtml );
					$notice.addClass( 'error' ).text( message || i18n.error || '' );
				} );
		} );
	} );
} )( jQuery );
