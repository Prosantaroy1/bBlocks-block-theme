/**
 * bBlocks — front-end modules.
 *
 * Configuration comes from window.bblocksModules (printed by inc/modules.php).
 * Every module is progressive: without JavaScript the page still works.
 */
( function () {
	'use strict';

	var config = window.bblocksModules || {};
	var root = document.documentElement;
	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	/**
	 * Run a callback at most once per animation frame.
	 *
	 * @param {Function} fn Callback.
	 * @return {Function} Throttled callback.
	 */
	function onFrame( fn ) {
		var queued = false;
		return function () {
			if ( queued ) {
				return;
			}
			queued = true;
			window.requestAnimationFrame( function () {
				queued = false;
				fn();
			} );
		};
	}

	function getHeader() {
		return document.querySelector( '.wp-site-blocks > header.wp-block-template-part' );
	}

	/* ---------- Back to top ---------- */
	function initBackToTop() {
		var button = document.querySelector( '.bblocks-back-to-top' );
		if ( ! button ) {
			return;
		}

		var update = onFrame( function () {
			var show = window.scrollY > window.innerHeight * 0.6;
			if ( show && button.hidden ) {
				button.hidden = false;
			} else if ( ! show && ! button.hidden ) {
				button.hidden = true;
			}
		} );

		button.addEventListener( 'click', function () {
			window.scrollTo( { top: 0, behavior: reduceMotion ? 'auto' : 'smooth' } );
			var target = document.querySelector( 'main' ) || document.body;
			if ( ! target.hasAttribute( 'tabindex' ) ) {
				target.setAttribute( 'tabindex', '-1' );
			}
			target.focus( { preventScroll: true } );
		} );

		window.addEventListener( 'scroll', update, { passive: true } );
		update();
	}

	/* ---------- Dark mode ---------- */
	function initDarkMode() {
		var native = config.nativeScheme === 'dark' ? 'dark' : 'light';

		function current() {
			return root.getAttribute( 'data-bblocks-scheme' ) || native;
		}

		function sync() {
			var isDark = current() === 'dark';
			root.classList.toggle( 'bblocks-is-dark', isDark );
			document.querySelectorAll( '.bblocks-theme-toggle, .is-style-theme-toggle .wp-block-button__link' ).forEach( function ( el ) {
				el.setAttribute( 'aria-pressed', isDark ? 'true' : 'false' );
			} );
		}

		function set( scheme ) {
			if ( ! reduceMotion ) {
				root.classList.add( 'bblocks-scheme-transition' );
				window.setTimeout( function () {
					root.classList.remove( 'bblocks-scheme-transition' );
				}, 350 );
			}

			if ( scheme === native ) {
				root.removeAttribute( 'data-bblocks-scheme' );
			} else {
				root.setAttribute( 'data-bblocks-scheme', scheme );
			}

			try {
				window.localStorage.setItem( 'bblocks-scheme', scheme );
			} catch ( e ) {}

			sync();
		}

		document.addEventListener( 'click', function ( event ) {
			var toggle = event.target.closest( '.bblocks-theme-toggle, .is-style-theme-toggle .wp-block-button__link' );
			if ( ! toggle ) {
				return;
			}
			event.preventDefault();
			set( current() === 'dark' ? 'light' : 'dark' );
		} );

		// Button-block toggles act like buttons for assistive tech.
		document.querySelectorAll( '.is-style-theme-toggle .wp-block-button__link' ).forEach( function ( el ) {
			el.setAttribute( 'role', 'button' );
			if ( el.tagName === 'A' && ! el.getAttribute( 'href' ) ) {
				el.setAttribute( 'tabindex', '0' );
				el.addEventListener( 'keydown', function ( event ) {
					if ( event.key === 'Enter' || event.key === ' ' ) {
						event.preventDefault();
						el.click();
					}
				} );
			}
		} );

		sync();
	}

	/* ---------- Reading progress ---------- */
	function initReadingProgress() {
		var bar = document.querySelector( '.bblocks-reading-progress' );
		var content = document.querySelector( '.wp-block-post-content' );
		if ( ! bar || ! content ) {
			return;
		}

		var update = onFrame( function () {
			var rect = content.getBoundingClientRect();
			var total = rect.height - window.innerHeight;
			var progress = total > 0 ? Math.min( 1, Math.max( 0, -rect.top / total ) ) : 1;
			bar.style.setProperty( '--bblocks-progress', progress.toFixed( 4 ) );
		} );

		window.addEventListener( 'scroll', update, { passive: true } );
		window.addEventListener( 'resize', update );
		update();
	}

	/* ---------- Smart sticky header ---------- */
	function initSmartHeader() {
		var header = getHeader();
		if ( ! header ) {
			return;
		}

		var lastY = window.scrollY;
		var update = onFrame( function () {
			var y = window.scrollY;
			var height = header.offsetHeight;

			header.classList.toggle( 'is-scrolled', y > 4 );

			// Keep the header visible while a menu, search or dropdown inside it has focus.
			var hasFocus = header.contains( document.activeElement ) && document.activeElement !== document.body;

			if ( y > lastY && y > height * 2 && ! hasFocus ) {
				header.classList.add( 'is-hidden' );
			} else if ( y < lastY - 2 || y <= height ) {
				header.classList.remove( 'is-hidden' );
			}
			lastY = y;
		} );

		header.addEventListener( 'focusin', function () {
			header.classList.remove( 'is-hidden' );
		} );
		window.addEventListener( 'scroll', update, { passive: true } );
		update();
	}

	/* ---------- Scroll animations ---------- */
	function initAnimations() {
		if ( reduceMotion || ! ( 'IntersectionObserver' in window ) ) {
			return;
		}

		var targets = document.querySelectorAll(
			'.wp-site-blocks main > *, .wp-site-blocks main > .wp-block-group > .alignwide, .wp-site-blocks main .wp-block-post-content > *, .bblocks-animate'
		);
		var viewportBottom = window.innerHeight;
		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
		);

		targets.forEach( function ( el ) {
			// Content already on screen is never hidden.
			if ( el.getBoundingClientRect().top < viewportBottom ) {
				return;
			}
			el.classList.add( 'bblocks-reveal' );
			observer.observe( el );
		} );

		root.classList.add( 'bblocks-animations-ready' );
	}

	/* ---------- Footer reveal ---------- */
	function initFooterReveal() {
		var footer = document.querySelector( '.wp-site-blocks > footer.wp-block-template-part' );
		if ( ! footer ) {
			return;
		}

		var update = onFrame( function () {
			root.classList.remove( 'bblocks-footer-reveal-ready' );
			var height = footer.offsetHeight;

			// Only reveal footers that fit comfortably on screen.
			if ( height > 0 && height < window.innerHeight * 0.75 && window.innerWidth >= 600 ) {
				root.style.setProperty( '--bblocks-footer-height', height + 'px' );
				root.classList.add( 'bblocks-footer-reveal-ready' );
			}
		} );

		window.addEventListener( 'resize', update );
		update();
	}

	/* ---------- Announcement bar ---------- */
	function initAnnouncement() {
		var bar = document.querySelector( '.bblocks-announcement' );
		if ( ! bar ) {
			return;
		}

		var key = 'bblocks-announcement-' + bar.getAttribute( 'data-bblocks-announcement' );
		var close = bar.querySelector( '.bblocks-announcement__close' );

		try {
			if ( window.localStorage.getItem( key ) ) {
				bar.hidden = true;
				return;
			}
		} catch ( e ) {}

		if ( ! close ) {
			return;
		}

		close.hidden = false;
		close.addEventListener( 'click', function () {
			bar.hidden = true;
			try {
				window.localStorage.setItem( key, '1' );
			} catch ( e ) {}

			// Move focus somewhere sensible instead of losing it with the bar.
			var skip = document.querySelector( '.skip-link' ) || document.body;
			if ( skip === document.body && ! skip.hasAttribute( 'tabindex' ) ) {
				skip.setAttribute( 'tabindex', '-1' );
			}
			skip.focus();
		} );
	}

	function init() {
		if ( config.backToTop ) {
			initBackToTop();
		}
		if ( config.darkMode ) {
			initDarkMode();
		}
		if ( config.readingProgress ) {
			initReadingProgress();
		}
		if ( config.smartHeader ) {
			initSmartHeader();
		}
		if ( config.animations ) {
			initAnimations();
		}
		if ( config.footerReveal ) {
			initFooterReveal();
		}
		if ( config.announcement ) {
			initAnnouncement();
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
