/* ==========================================================================
   bBlocks — marketing site scripts (vanilla JS, no dependencies)
   Shared by index.html, starter-sites.html and patterns.html.
   Starter-site and pattern data comes from js/data.js (generated from the
   theme), and every preview is a real page rendered from the theme.
   ========================================================================== */
(function () {
	'use strict';

	var root = document.documentElement;
	var DATA = window.BB_DATA || { sites: [], patterns: [], styles: [] };
	var $ = function (s, c) { return (c || document).querySelector(s); };
	var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
	var store = {
		get: function (k) { try { return localStorage.getItem(k); } catch (e) { return null; } },
		set: function (k, v) { try { localStorage.setItem(k, v); } catch (e) {} }
	};
	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;
	var esc = function (s) {
		return String(s == null ? '' : s).replace(/[&<>"']/g, function (c) {
			return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
		});
	};
	var ICON_ARROW = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>';
	var ICON_EYE = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>';

	/* ------------------------------------------------------------------
	   Shared data helpers
	   ------------------------------------------------------------------ */
	var SITE_CATS = [
		{ key: 'all', label: 'All' },
		{ key: 'business', label: 'Business' },
		{ key: 'creative', label: 'Creative & Media' },
		{ key: 'lifestyle', label: 'Food, Travel & Wellness' },
		{ key: 'professional', label: 'Health, Law & Education' },
		{ key: 'realestate', label: 'Real Estate' },
		{ key: 'shop', label: 'Shop' }
	];
	var SITE_CAT_OF = {
		business: 'business', agency: 'business', saas: 'business', freelancer: 'business', consulting: 'business',
		architecture: 'creative', photography: 'creative', marketplace: 'creative', magazine: 'creative',
		restaurant: 'lifestyle', resort: 'lifestyle', spa: 'lifestyle', fitness: 'lifestyle',
		medical: 'professional', law: 'professional', education: 'professional',
		realestate: 'realestate', rentals: 'realestate', commercial: 'realestate', homebuyer: 'realestate',
		shop: 'shop', 'fashion-store': 'shop', 'gadget-store': 'shop'
	};

	var TYPES = [
		['header', 'Headers'], ['hero', 'Heroes'], ['about', 'About & story'], ['features', 'Features'],
		['services', 'Services'], ['gallery', 'Gallery & listings'], ['stats', 'Stats & results'], ['team', 'Team'],
		['testimonials', 'Testimonials'], ['pricing', 'Pricing'], ['faq', 'FAQ'], ['blog', 'Blog & posts'],
		['cta', 'Call to action'], ['contact', 'Contact'], ['shop', 'Shop'], ['utility', 'Utility'], ['footer', 'Footers']
	];
	var TYPE_LABEL = {};
	TYPES.forEach(function (t) { TYPE_LABEL[t[0]] = t[1]; });
	var TYPE_WORDS = [
		['hero', /hero/],
		['faq', /faq/],
		['pricing', /pricing|packages/],
		['team', /team|doctors|attorneys|agents|trainers|instructors/],
		['testimonials', /testimonial|reviews|stories|partners/],
		['blog', /blog|latest|trending|picks/],
		['contact', /contact|visit|hours/],
		['cta', /cta|consultation|newsletter|connect|offer|sale|promo|support/],
		['stats', /stats|results|marquee/],
		['services', /services|practice|programs|courses|schedule|treatments/],
		['gallery', /portfolio|gallery|listings|products|themes|categories|menu|specials|cottage|accommodation|places|dining|activities|areas|neighborhoods|arrivals|sellers|deals|featured|rated/],
		['features', /features|why|benefits|highlights|expertise|approach|perks|situations|steps|paths/],
		['about', /about|intro|story|leader|statement/]
	];
	function typeOf(p) {
		if (p._type) return p._type;
		var t;
		if (p.group !== 'sites') {
			t = p.group === 'portfolio' ? 'gallery' : p.group;
		} else {
			var suffix = p.slug.replace(/^(site|woo)-[a-z]+-/, '');
			t = 'about';
			for (var i = 0; i < TYPE_WORDS.length; i++) { if (TYPE_WORDS[i][1].test(suffix)) { t = TYPE_WORDS[i][0]; break; } }
		}
		p._type = TYPE_LABEL[t] ? t : 'utility';
		return p._type;
	}
	function siteByKey(k) { for (var i = 0; i < DATA.sites.length; i++) { if (DATA.sites[i].key === k) return DATA.sites[i]; } return null; }
	function siteOfPattern(p) {
		if (p.site) return siteByKey(p.site);
		var m = p.slug.match(/^(?:site|woo)-([a-z]+)-/);
		if (!m) return null;
		var k = { fashion: 'fashion-store', gadget: 'gadget-store' }[m[1]] || m[1];
		return siteByKey(k);
	}
	function siteUrl(s, file) { return 'preview/sites/' + s.key + '/' + (file || 'index.html'); }
	function viewerSite(s, file) { return 'preview.html?site=' + encodeURIComponent(s.key) + (file && file !== 'index.html' ? '&page=' + encodeURIComponent(file) : ''); }
	function viewerPattern(p, ctx) { return 'preview.html?pattern=' + encodeURIComponent(p.slug) + (ctx ? '&in=' + encodeURIComponent(ctx) : ''); }
	// Library order: by category (heroes first), core patterns before starter-site sections.
	(function () {
		var rank = {};
		TYPES.forEach(function (t, i) { rank[t[0]] = i; });
		DATA.patterns.forEach(function (p, i) { p._i = i; });
		DATA.patterns.sort(function (a, b) {
			return (rank[typeOf(a)] - rank[typeOf(b)]) ||
				((a.group === 'sites') - (b.group === 'sites')) ||
				(a._i - b._i);
		});
	})();

	window.bb = {
		typeOf: typeOf, siteOfPattern: siteOfPattern, siteByKey: siteByKey, TYPE_LABEL: TYPE_LABEL,
		siteUrl: siteUrl, viewerSite: viewerSite, viewerPattern: viewerPattern, esc: esc
	};

	/* ------------------------------------------------------------------
	   Live previews: scaled iframes of real rendered pages.
	   The iframe keeps a desktop viewport (data-vw × data-vh) and is
	   scaled down to the card; on hover the page scrolls inside the
	   iframe (driven by postMessage, so it also works from file://).
	   ------------------------------------------------------------------ */
	var Live = (function () {
		var items = [];
		var io = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) { load(en.target._live); io.unobserve(en.target); }
			});
		}, { rootMargin: '500px 0px' }) : null;
		var ro = 'ResizeObserver' in window ? new ResizeObserver(function (entries) {
			entries.forEach(function (en) { if (en.target._live) layout(en.target._live); });
		}) : null;

		function mount(el) {
			if (el._live) return el._live;
			var it = {
				el: el,
				src: el.getAttribute('data-src'),
				vw: +el.getAttribute('data-vw') || 1280,
				vh: +el.getAttribute('data-vh') || 0,
				fit: el.hasAttribute('data-fit'),
				maxVh: +el.getAttribute('data-max') || 1000,
				contentH: 0, scrollMax: 0, loaded: false
			};
			el._live = it;
			el.insertAdjacentHTML('beforeend', '<span class="live-skel" aria-hidden="true"></span>' + (canHover ? '<span class="live-scroll-hint" aria-hidden="true">Hover to scroll</span>' : ''));
			it.iframe = document.createElement('iframe');
			it.iframe.setAttribute('tabindex', '-1');
			it.iframe.setAttribute('aria-hidden', 'true');
			it.iframe.setAttribute('title', el.getAttribute('data-title') || 'Preview');
			it.iframe.setAttribute('scrolling', 'no');
			it.iframe.addEventListener('load', function () { if (it.loaded) { el.classList.add('is-ready'); } });
			el.appendChild(it.iframe);
			if (el.classList.contains('is-fit') === false && it.fit) el.classList.add('is-fit');
			items.push(it);
			layout(it);
			if (io) io.observe(el); else load(it);
			if (ro) ro.observe(el);
			var hoverEl = el.closest('[data-live-hover]') || el;
			if (canHover) {
				hoverEl.addEventListener('mouseenter', function () { scroll(it, true); });
				hoverEl.addEventListener('mouseleave', function () { scroll(it, false); });
			}
			return it;
		}
		function load(it) {
			if (it.loaded) return;
			it.loaded = true;
			it.iframe.src = it.src + (it.src.indexOf('?') > -1 ? '&' : '?') + 'thumb=1';
		}
		function layout(it) {
			var w = it.el.clientWidth;
			if (!w) return;
			var s = w / it.vw;
			var frameH;
			if (it.fit) {
				var shown = it.contentH ? Math.min(it.contentH, it.maxVh) : Math.round(it.vw * 0.5);
				it.el.style.height = Math.round(shown * s) + 'px';
				frameH = it.vh || it.maxVh;
			} else {
				frameH = it.el.clientHeight / s;
			}
			it.iframe.style.width = it.vw + 'px';
			it.iframe.style.height = Math.ceil(frameH) + 'px';
			it.iframe.style.transform = 'scale(' + s + ')';
			it.el.classList.toggle('is-scrollable', it.scrollMax > 60);
		}
		function scroll(it, down) {
			if (!it.iframe.contentWindow || !it.scrollMax) return;
			var dur = down ? Math.min(Math.max(it.scrollMax / 0.45, 1500), 9000) : 700;
			try { it.iframe.contentWindow.postMessage({ type: 'bb-scroll', to: down ? 'bottom' : 'top', duration: reduceMotion ? 0 : dur }, '*'); } catch (e) {}
		}
		window.addEventListener('message', function (e) {
			var d = e.data;
			if (!d || d.type !== 'bb-preview') return;
			for (var i = 0; i < items.length; i++) {
				var it = items[i];
				if (it.iframe.contentWindow === e.source) {
					it.contentH = d.height || 0;
					it.scrollMax = d.scrollMax || 0;
					it.el.classList.add('is-ready');
					layout(it);
					break;
				}
			}
		});
		window.addEventListener('resize', function () { items.forEach(layout); });
		return { mount: mount, mountAll: function (ctx) { $$('.live[data-src]', ctx).forEach(mount); } };
	})();
	window.bbLive = Live;

	/* ------------------------------------------------------------------
	   Card templates
	   ------------------------------------------------------------------ */
	function swatches(c) {
		if (!c) return '';
		return '<span class="swatches" aria-hidden="true"><i style="background:' + esc(c.bg) + '"></i><i style="background:' + esc(c.primary) + '"></i><i style="background:' + esc(c.accent) + '"></i></span>';
	}
	function siteCard(s, opts) {
		opts = opts || {};
		var pages = s.pages.map(function (p) {
			return '<li><a href="' + viewerSite(s, p.file) + '">' + esc(p.title) + '</a></li>';
		}).join('');
		return '<article class="site-card' + (opts.reveal ? ' reveal' : '') + '" data-cat="' + (SITE_CAT_OF[s.key] || 'business') + '" data-live-hover>' +
			'<a class="site-link" href="' + viewerSite(s) + '" aria-label="Live preview: ' + esc(s.title) + '">' +
				'<div class="live" data-src="' + siteUrl(s) + '" data-title="' + esc(s.title) + ' preview"></div>' +
				'<div class="badges"><span>Free</span>' + (s.woo ? '<span class="woo">WooCommerce</span>' : '') + '</div>' +
				'<span class="view-cta"><b>' + ICON_EYE + 'Live preview</b></span>' +
			'</a>' +
			'<div class="site-body">' +
				'<h3><a href="' + viewerSite(s) + '">' + esc(s.title) + '</a></h3>' +
				'<p>' + esc(s.description) + '</p>' +
				(opts.pages === false ? '' : '<ul class="site-pages" aria-label="Pages">' + pages + '</ul>') +
				'<div class="site-meta"><span class="swatch">' + swatches(s.colors) + esc(s.style) + ' style</span><span class="free-tag">' + s.pages.length + ' pages</span></div>' +
				(opts.actions === false ? '' :
				'<div class="site-actions">' +
					'<a class="btn btn-primary btn-sm" href="' + viewerSite(s) + '">' + ICON_EYE + 'Live preview</a>' +
					'<a class="btn btn-ghost btn-sm" href="' + siteUrl(s) + '" target="_blank" rel="noopener">Open site ↗</a>' +
				'</div>') +
			'</div>' +
		'</article>';
	}
	function patternCard(p, ctx, opts) {
		opts = opts || {};
		var site = siteOfPattern(p);
		var meta = TYPE_LABEL[typeOf(p)] + (site ? ' · ' + site.title : '');
		return '<article class="pattern-card is-live' + (opts.reveal ? ' reveal' : '') + '" data-live-hover>' +
			'<a href="' + viewerPattern(p, ctx) + '" aria-label="Preview pattern: ' + esc(p.title) + '">' +
				'<div class="live" data-fit data-max="' + (opts.max || 900) + '" data-vh="900" data-src="preview/patterns/' + esc(p.slug) + '.html" data-title="' + esc(p.title) + ' preview"></div>' +
				'<span class="view-cta"><b>' + ICON_EYE + 'Live preview</b></span>' +
			'</a>' +
			'<div class="pc-body"><div><h3>' + esc(p.title.replace(/^[^:]+:\s*/, '')) + '</h3><p>' + esc(meta) + '</p></div>' +
			'<a class="pc-go" href="' + viewerPattern(p, ctx) + '" aria-label="Open ' + esc(p.title) + '">' + ICON_ARROW + '</a></div>' +
		'</article>';
	}

	/* ------------------------------------------------------------------
	   Helpers
	   ------------------------------------------------------------------ */
	function luminance(hex) {
		var h = hex.replace('#', '');
		if (h.length === 3) h = h.split('').map(function (c) { return c + c; }).join('');
		var rgb = [0, 2, 4].map(function (i) {
			var v = parseInt(h.substr(i, 2), 16) / 255;
			return v <= 0.03928 ? v / 12.92 : Math.pow((v + 0.055) / 1.055, 2.4);
		});
		return 0.2126 * rgb[0] + 0.7152 * rgb[1] + 0.0722 * rgb[2];
	}
	function inkFor(hex) { return luminance(hex) > 0.4 ? '#14171a' : '#ffffff'; }

	/** Accessible tabs: roving selection, arrow keys, panel switching. */
	function initTabs(tabSelector, onSelect) {
		var tabs = $$(tabSelector);
		if (!tabs.length) return null;
		function select(tab, focus) {
			tabs.forEach(function (t) {
				var on = t === tab;
				t.setAttribute('aria-selected', on ? 'true' : 'false');
				t.tabIndex = on ? 0 : -1;
				var panelId = t.getAttribute('aria-controls');
				if (panelId) { var p = document.getElementById(panelId); if (p) p.hidden = !on; }
			});
			if (focus) tab.focus();
			if (onSelect) onSelect(tab);
		}
		tabs.forEach(function (t, i) {
			t.tabIndex = t.getAttribute('aria-selected') === 'true' ? 0 : -1;
			t.addEventListener('click', function () { select(t); });
			t.addEventListener('keydown', function (e) {
				var n = null;
				if (e.key === 'ArrowRight' || e.key === 'ArrowDown') n = tabs[(i + 1) % tabs.length];
				if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') n = tabs[(i - 1 + tabs.length) % tabs.length];
				if (e.key === 'Home') n = tabs[0];
				if (e.key === 'End') n = tabs[tabs.length - 1];
				if (n) { e.preventDefault(); select(n, true); }
			});
		});
		return select;
	}

	/* ------------------------------------------------------------------
	   Dark mode
	   ------------------------------------------------------------------ */
	var darkSwitch = $('[data-module="dark"] .switch');
	function isDark() { return root.getAttribute('data-theme') === 'dark'; }
	function setTheme(mode) {
		root.setAttribute('data-theme', mode);
		store.set('bb-theme', mode);
		if (darkSwitch) {
			darkSwitch.setAttribute('aria-checked', mode === 'dark' ? 'true' : 'false');
			darkSwitch.closest('.module').classList.toggle('is-on', mode === 'dark');
		}
	}
	if (!root.getAttribute('data-theme')) {
		var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
		root.setAttribute('data-theme', prefersDark ? 'dark' : 'light');
	}
	setTheme(isDark() ? 'dark' : 'light');
	var themeToggle = $('#theme-toggle');
	if (themeToggle) themeToggle.addEventListener('click', function () { setTheme(isDark() ? 'light' : 'dark'); });

	/* ------------------------------------------------------------------
	   Header: mobile menu, scrolled state, smart sticky
	   ------------------------------------------------------------------ */
	var header = $('.site-header');
	var nav = $('#main-nav');
	var menuBtn = $('#menu-toggle');
	function closeMenu() {
		if (!nav) return;
		nav.classList.remove('is-open');
		menuBtn.setAttribute('aria-expanded', 'false');
		menuBtn.setAttribute('aria-label', 'Open menu');
		menuBtn.querySelector('path').setAttribute('d', 'M4 7h16M4 12h16M4 17h16');
	}
	if (nav && menuBtn) {
		menuBtn.addEventListener('click', function () {
			var open = !nav.classList.contains('is-open');
			nav.classList.toggle('is-open', open);
			menuBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
			menuBtn.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
			menuBtn.querySelector('path').setAttribute('d', open ? 'M6 6l12 12M18 6 6 18' : 'M4 7h16M4 12h16M4 17h16');
			if (open) header.classList.remove('is-hidden');
		});
		$$('#main-nav a').forEach(function (a) { a.addEventListener('click', closeMenu); });
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && nav.classList.contains('is-open')) { closeMenu(); menuBtn.focus(); }
		});
		document.addEventListener('click', function (e) {
			if (nav.classList.contains('is-open') && !nav.contains(e.target) && !menuBtn.contains(e.target)) closeMenu();
		});
		window.addEventListener('resize', function () { if (window.innerWidth > 960) closeMenu(); });
	}

	var modules = { sticky: true, progress: true, totop: true, animations: !reduceMotion, contact: false, announce: true };
	var progress = $('.progress');
	var toTop = $('#to-top');
	var lastY = window.scrollY;
	var ticking = false;

	function onScroll() {
		var y = window.scrollY;
		if (header) {
			header.classList.toggle('is-scrolled', y > 8);
			if (modules.sticky && !(nav && nav.classList.contains('is-open'))) {
				header.classList.toggle('is-hidden', y > lastY && y > 400);
			} else {
				header.classList.remove('is-hidden');
			}
		}
		lastY = y;
		if (progress && modules.progress) {
			var max = document.documentElement.scrollHeight - window.innerHeight;
			progress.style.transform = 'scaleX(' + (max > 0 ? Math.min(y / max, 1) : 0) + ')';
		}
		if (toTop) toTop.classList.toggle('is-visible', modules.totop && y > 700);
		ticking = false;
	}
	window.addEventListener('scroll', function () {
		if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
	}, { passive: true });
	if (toTop) {
		toTop.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
			var logo = $('.logo'); if (logo) logo.focus({ preventScroll: true });
		});
	}

	/* ------------------------------------------------------------------
	   Home: design system tabs, style variations, palettes
	   ------------------------------------------------------------------ */
	initTabs('.ds-item');

	var dots = $('#style-dots');
	var preview = $('#style-preview');
	if (dots && preview && DATA.styles.length) {
		var applyStyle = function (i) {
			var s = DATA.styles[i], c = s.colors;
			preview.style.background = c.bg;
			preview.style.color = c.fg;
			$('#sp-kicker').style.color = c.primary === c.bg ? c.accent : c.primary;
			$('#sp-kicker').textContent = s.title + ' style';
			var b1 = $('#sp-btn1'), b2 = $('#sp-btn2');
			b1.style.background = c.primary; b1.style.color = inkFor(c.primary);
			b2.style.background = 'transparent'; b2.style.color = c.fg; b2.style.boxShadow = 'inset 0 0 0 1.5px ' + c.fg;
			$('#style-name').textContent = s.title;
			$$('.style-dot', dots).forEach(function (d, j) { d.setAttribute('aria-pressed', j === i ? 'true' : 'false'); });
		};
		DATA.styles.forEach(function (s, i) {
			var b = document.createElement('button');
			b.type = 'button';
			b.className = 'style-dot';
			b.title = s.title;
			b.setAttribute('aria-label', s.title + ' style');
			b.style.background = 'linear-gradient(135deg, ' + s.colors.primary + ' 50%, ' + s.colors.bg + ' 50%)';
			b.addEventListener('click', function () { applyStyle(i); });
			dots.appendChild(b);
		});
		applyStyle(0);
	}

	// [name, primary, secondary, accent] — styles/colors/*.json
	var PALETTES = [
		['Default', '#2954e3', '#0ea5a4', '#f59e0b'],
		['Forest', '#2f6b4f', '#8a9a5b', '#d98e48'],
		['Midnight', '#7c9cff', '#38d0c4', '#ffb547'],
		['Monochrome', '#111111', '#444444', '#d4d4d4'],
		['Ocean', '#0b6bcb', '#0aa3a3', '#f2a541'],
		['Rose', '#c2416b', '#7a4ea8', '#e6a23c'],
		['Sunset', '#e0563b', '#b8336a', '#f6b93b']
	];
	function applyPalette(i, save) {
		var p = PALETTES[i];
		if (i === 0) {
			['--primary', '--secondary', '--accent', '--primary-soft', '--primary-ink'].forEach(function (v) { root.style.removeProperty(v); });
		} else {
			root.style.setProperty('--primary', p[1]);
			root.style.setProperty('--secondary', p[2]);
			root.style.setProperty('--accent', p[3]);
			root.style.setProperty('--primary-ink', inkFor(p[1]));
			root.style.setProperty('--primary-soft', 'color-mix(in srgb, ' + p[1] + ' 14%, var(--bg))');
		}
		$$('.palette-row').forEach(function (r, j) { r.setAttribute('aria-pressed', j === i ? 'true' : 'false'); });
		if (save) store.set('bb-palette', String(i));
	}
	var palWrap = $('#palettes');
	if (palWrap) {
		PALETTES.forEach(function (p, i) {
			var b = document.createElement('button');
			b.type = 'button';
			b.className = 'palette-row';
			b.innerHTML = '<span class="sw"><i style="background:' + p[1] + '"></i><i style="background:' + p[2] + '"></i><i style="background:' + p[3] + '"></i></span><b>' + esc(p[0]) + '</b><small>' + (i === 0 ? 'Theme default' : 'Palette') + '</small>';
			b.addEventListener('click', function () { applyPalette(i, true); });
			palWrap.appendChild(b);
		});
	}
	var savedPal = parseInt(store.get('bb-palette'), 10);
	if (savedPal > 0 && savedPal < PALETTES.length) applyPalette(savedPal, false);

	/* ------------------------------------------------------------------
	   Counts from the generated data
	   ------------------------------------------------------------------ */
	$$('[data-bb-count]').forEach(function (el) {
		var k = el.getAttribute('data-bb-count');
		if (k === 'sites') el.textContent = DATA.sites.length;
		if (k === 'patterns') el.textContent = DATA.patterns.length;
		if (k === 'styles') el.textContent = DATA.styles.length;
	});

	/* ------------------------------------------------------------------
	   Home: featured starter sites, patterns, WooCommerce, hero
	   ------------------------------------------------------------------ */
	var featured = $('#sites-featured');
	if (featured) {
		var keys = (featured.getAttribute('data-sites') || '').split(',');
		featured.innerHTML = keys.map(siteByKey).filter(Boolean).map(function (s) { return siteCard(s, { reveal: true }); }).join('');
	}

	var catTiles = $('#pattern-cats');
	if (catTiles) {
		var counts = {};
		DATA.patterns.forEach(function (p) { var t = typeOf(p); counts[t] = (counts[t] || 0) + 1; });
		catTiles.innerHTML = TYPES.filter(function (t) { return counts[t[0]]; }).map(function (t) {
			return '<a class="cat-tile" href="patterns.html?type=' + t[0] + '">' + esc(t[1]) + '<small>' + counts[t[0]] + '</small></a>';
		}).join('');
	}
	var patFeatured = $('#patterns-featured');
	if (patFeatured) {
		var slugs = (patFeatured.getAttribute('data-patterns') || '').split(',');
		var bySlug = {};
		DATA.patterns.forEach(function (p) { bySlug[p.slug] = p; });
		patFeatured.innerHTML = slugs.map(function (s) { return bySlug[s]; }).filter(Boolean).map(function (p) { return patternCard(p, '', { reveal: true, max: 760 }); }).join('');
	}

	// Showcase panels: three stacked live pages of a starter site.
	$$('.sp-stack[data-site]').forEach(function (stack) {
		var s = siteByKey(stack.getAttribute('data-site'));
		if (!s) return;
		var pages = s.pages.filter(function (p) { return p.patterns && p.patterns.length; }).slice(0, 3);
		var vis = stack.parentNode;
		vis.style.setProperty('--c1', 'color-mix(in srgb, ' + s.colors.primary + ' 55%, #0b0d12)');
		vis.style.setProperty('--c2', 'color-mix(in srgb, ' + s.colors.accent + ' 25%, #0b0d12)');
		stack.innerHTML = pages.map(function (p, i) {
			return '<a class="sp-card" href="' + viewerSite(s, p.file) + '"' + (i === 0 ? ' data-live-hover' : ' tabindex="-1"') + ' aria-label="' + esc(s.title + ' — ' + p.title) + ' live preview">' +
				'<div class="live" data-vw="' + (i === 0 ? 1100 : 1280) + '" data-src="' + siteUrl(s, p.file) + '" data-title="' + esc(p.title) + '"></div>' +
				'<span class="sp-label">' + esc(p.title) + '</span></a>';
		}).join('');
	});
	['#pattern-showcase', '#dash-showcase'].forEach(function (id) {
		initTabs(id + ' .sp-tab', function (tab) {
			var panel = document.getElementById(tab.getAttribute('aria-controls'));
			if (!panel || reduceMotion) return;
			panel.classList.remove('is-entering');
			void panel.offsetWidth;
			panel.classList.add('is-entering');
		});
	});

	$$('[data-site-viewer]').forEach(function (a) {
		var s = siteByKey(a.getAttribute('data-site-viewer'));
		if (s) a.setAttribute('href', viewerSite(s));
	});

	/* ------------------------------------------------------------------
	   Starter sites page
	   ------------------------------------------------------------------ */
	var sitesGrid = $('#sites-grid');
	if (sitesGrid) {
		sitesGrid.innerHTML = DATA.sites.map(function (s) { return siteCard(s); }).join('');
		var siteFilters = $('#site-filters');
		siteFilters.innerHTML = SITE_CATS.map(function (c, i) {
			var n = c.key === 'all' ? DATA.sites.length : DATA.sites.filter(function (s) { return SITE_CAT_OF[s.key] === c.key; }).length;
			return '<button class="tab" role="tab" type="button" data-filter="' + c.key + '" aria-selected="' + (i === 0) + '">' + esc(c.label) + '<span class="count">' + n + '</span></button>';
		}).join('');
		var applySiteFilter = function (f) {
			$$('.site-card', sitesGrid).forEach(function (card) {
				card.hidden = !(f === 'all' || card.getAttribute('data-cat') === f);
			});
			try { history.replaceState(null, '', f === 'all' ? location.pathname : '?cat=' + f); } catch (e) {}
		};
		var selectSiteTab = initTabs('#site-filters .tab', function (tab) { applySiteFilter(tab.getAttribute('data-filter')); });
		var startCat = new URLSearchParams(location.search).get('cat');
		var startTab = startCat && $('#site-filters [data-filter="' + startCat + '"]');
		if (startTab && selectSiteTab) selectSiteTab(startTab);
	}

	/* ------------------------------------------------------------------
	   Pattern library page
	   ------------------------------------------------------------------ */
	var lib = $('#pattern-lib');
	if (lib) {
		var PAGE = 12;
		var params = new URLSearchParams(location.search);
		var state = { type: params.get('type') || 'all', site: params.get('site') || 'all', q: params.get('q') || '', shown: PAGE };
		var grid = $('#pattern-grid');
		var countEl = $('#lib-count');
		var titleEl = $('#lib-title');
		var moreBtn = $('#lib-more');
		var searchEl = $('#pattern-search');
		var typeCounts = {};
		DATA.patterns.forEach(function (p) { var t = typeOf(p); typeCounts[t] = (typeCounts[t] || 0) + 1; });
		var typeList = [['all', 'All patterns']].concat(TYPES.filter(function (t) { return typeCounts[t[0]]; }));

		// Sidebar + mobile chips.
		$('#cat-list').innerHTML = typeList.map(function (t) {
			return '<li><button class="cat-btn" type="button" data-type="' + t[0] + '" aria-pressed="false">' + esc(t[1]) + '<small>' + (t[0] === 'all' ? DATA.patterns.length : typeCounts[t[0]]) + '</small></button></li>';
		}).join('');
		$('#lib-chips').innerHTML = typeList.map(function (t) {
			return '<button class="tab" type="button" data-type="' + t[0] + '" aria-pressed="false">' + esc(t[1]) + '</button>';
		}).join('');
		var siteOpts = '<option value="all">All sources</option><option value="core">Core patterns</option>' +
			DATA.sites.filter(function (s) { return DATA.patterns.some(function (p) { var so = siteOfPattern(p); return so && so.key === s.key; }); })
				.map(function (s) { return '<option value="' + s.key + '">' + esc(s.title) + '</option>'; }).join('');
		$$('.js-site-filter').forEach(function (sel) { sel.innerHTML = siteOpts; });
		$$('.js-type-filter').forEach(function (sel) {
			sel.innerHTML = typeList.map(function (t) { return '<option value="' + t[0] + '">' + esc(t[1]) + '</option>'; }).join('');
		});

		var filtered = function () {
			var q = state.q.trim().toLowerCase();
			return DATA.patterns.filter(function (p) {
				if (state.type !== 'all' && typeOf(p) !== state.type) return false;
				if (state.site !== 'all') {
					var so = siteOfPattern(p);
					if (state.site === 'core' ? !!so : !(so && so.key === state.site)) return false;
				}
				if (q) {
					var so2 = siteOfPattern(p);
					var hay = (p.title + ' ' + p.description + ' ' + p.slug + ' ' + TYPE_LABEL[typeOf(p)] + ' ' + (so2 ? so2.title : '')).toLowerCase();
					if (hay.indexOf(q) === -1) return false;
				}
				return true;
			});
		};
		var ctxString = function () {
			var parts = [];
			if (state.type !== 'all') parts.push('type:' + state.type);
			if (state.site !== 'all') parts.push('site:' + state.site);
			return parts.join(',');
		};
		var render = function (append) {
			var list = filtered();
			var label = state.type === 'all' ? 'All patterns' : TYPE_LABEL[state.type];
			if (state.site !== 'all') {
				var ss = siteByKey(state.site);
				label += state.site === 'core' ? ' · Core' : ss ? ' · ' + ss.title : '';
			}
			titleEl.textContent = label;
			countEl.textContent = list.length + (list.length === 1 ? ' pattern' : ' patterns') + (state.q ? ' matching “' + state.q + '”' : '');
			var start = append ? grid.children.length : 0;
			var slice = list.slice(start, state.shown);
			var html = slice.map(function (p) { return patternCard(p, ctxString()); }).join('');
			if (append) grid.insertAdjacentHTML('beforeend', html); else grid.innerHTML = html;
			if (!list.length) grid.innerHTML = '<div class="lib-empty" style="grid-column:1/-1">No patterns match. Try another category or search.</div>';
			Live.mountAll(grid);
			moreBtn.hidden = state.shown >= list.length;
			moreBtn.textContent = 'Show more patterns (' + (list.length - Math.min(state.shown, list.length)) + ' left)';
			$$('[data-type]').forEach(function (b) { b.setAttribute('aria-pressed', b.getAttribute('data-type') === state.type ? 'true' : 'false'); });
			$$('.js-site-filter').forEach(function (sel) { sel.value = state.site; });
			$$('.js-type-filter').forEach(function (sel) { sel.value = state.type; });
			var qs = [];
			if (state.type !== 'all') qs.push('type=' + state.type);
			if (state.site !== 'all') qs.push('site=' + state.site);
			if (state.q) qs.push('q=' + encodeURIComponent(state.q));
			try { history.replaceState(null, '', qs.length ? '?' + qs.join('&') : location.pathname); } catch (e) {}
		};
		var reset = function () { state.shown = PAGE; render(false); };

		lib.addEventListener('click', function (e) {
			var b = e.target.closest('[data-type]');
			if (!b || b.tagName !== 'BUTTON') return;
			state.type = b.getAttribute('data-type');
			reset();
			if (b.closest('#lib-chips')) b.scrollIntoView({ block: 'nearest', inline: 'center', behavior: reduceMotion ? 'auto' : 'smooth' });
			if (window.scrollY > lib.offsetTop) window.scrollTo({ top: lib.offsetTop - 90, behavior: reduceMotion ? 'auto' : 'smooth' });
		});
		$$('.js-site-filter').forEach(function (sel) { sel.addEventListener('change', function () { state.site = sel.value; reset(); }); });
		$$('.js-type-filter').forEach(function (sel) { sel.addEventListener('change', function () { state.type = sel.value; reset(); }); });
		var searchTimer;
		if (searchEl) {
			searchEl.value = state.q;
			searchEl.addEventListener('input', function () {
				clearTimeout(searchTimer);
				searchTimer = setTimeout(function () { state.q = searchEl.value; reset(); }, 200);
			});
		}
		moreBtn.addEventListener('click', function () { state.shown += PAGE; render(true); });
		render(false);
	}

	/* ------------------------------------------------------------------
	   Templates & plugins (home)
	   ------------------------------------------------------------------ */
	var TEMPLATES = [
		'Front / Blog Home', 'Index', 'Single Post', 'Post with Sidebar', 'Post with Cover Image', 'Page',
		'Page No Title', 'Page with Sidebar', 'Page with Wide Image', 'Landing Page', 'Blank Canvas', 'Archive',
		'Category', 'Tag', 'Author', 'Search', '404', 'Shop Archive', 'Single Product', 'Product Search',
		'Cart', 'Checkout', 'Order Confirmation'
	];
	var PLUGINS = [
		['bBlocks Plugin', '80+ lightweight blocks for every section.', 'linear-gradient(135deg,#0ea5e9,#2563eb)', 'bB', 'b-blocks'],
		['Advanced Post Block', 'Post grids, sliders and tickers.', 'linear-gradient(135deg,#6366f1,#8b5cf6)', 'AP', 'advanced-post-block'],
		['bSlider', 'Responsive sliders and carousels.', 'linear-gradient(135deg,#f97316,#e11d48)', 'bS', 'b-slider'],
		['Timeline Block', 'Vertical and horizontal timelines.', 'linear-gradient(135deg,#14b8a6,#0d9488)', 'TB', 'timeline-block-block'],
		['Awesome FAQ', 'Accessible FAQ accordions.', 'linear-gradient(135deg,#8b5cf6,#6d28d9)', 'FQ', 'faq-and-answers'],
		['HTML5 Video Player', 'MP4, YouTube and Vimeo player.', 'linear-gradient(135deg,#ef4444,#b91c1c)', 'VP', 'html5-video-player'],
		['PDF Poster', 'PDF viewer and flipbook.', 'linear-gradient(135deg,#f43f5e,#be123c)', 'PDF', 'pdf-poster'],
		['3D Viewer', '3D models, 360° views and AR.', 'linear-gradient(135deg,#22c55e,#15803d)', '3D', '3d-viewer']
	];
	var tplGrid = $('#tpl-grid');
	if (tplGrid) {
		var tplIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>';
		tplGrid.innerHTML = TEMPLATES.map(function (t) { return '<div class="tpl">' + tplIcon + esc(t) + '</div>'; }).join('');
	}
	var plugGrid = $('#plugin-grid');
	if (plugGrid) {
		plugGrid.innerHTML = PLUGINS.map(function (p) {
			return '<a class="plugin reveal" href="https://wordpress.org/plugins/' + p[4] + '/" target="_blank" rel="noopener">' +
				'<span class="pi" style="background:' + p[2] + ';font-size:' + (p[3].length > 2 ? '.8rem' : '1rem') + '">' + esc(p[3]) + '</span>' +
				'<b>' + esc(p[0]) + '</b><span>' + esc(p[1]) + '</span><span class="free-tag" style="align-self:flex-start">Free</span></a>';
		}).join('');
	}


	/* ------------------------------------------------------------------
	   Modules (live demo switches)
	   ------------------------------------------------------------------ */
	var floatContact = $('#float-contact');
	var announce = $('.announce');
	var MODULE_ACTIONS = {
		dark: function (on) { setTheme(on ? 'dark' : 'light'); },
		sticky: function (on) { modules.sticky = on; if (!on && header) header.classList.remove('is-hidden'); },
		progress: function (on) { modules.progress = on; if (progress) progress.style.display = on ? '' : 'none'; onScroll(); },
		totop: function (on) { modules.totop = on; onScroll(); },
		animations: function (on) { modules.animations = on; document.body.classList.toggle('no-anim', !on); },
		contact: function (on) { modules.contact = on; if (floatContact) floatContact.classList.toggle('is-on', on); },
		announce: function (on) { modules.announce = on; if (announce) announce.hidden = !on; }
	};
	$$('.module').forEach(function (m) {
		var sw = $('.switch', m);
		var key = m.getAttribute('data-module');
		if (key !== 'dark') m.classList.toggle('is-on', sw.getAttribute('aria-checked') === 'true');
		if (key === 'animations' && reduceMotion) { sw.setAttribute('aria-checked', 'false'); m.classList.remove('is-on'); }
		sw.addEventListener('click', function () {
			var on = sw.getAttribute('aria-checked') !== 'true';
			sw.setAttribute('aria-checked', on ? 'true' : 'false');
			m.classList.toggle('is-on', on);
			if (MODULE_ACTIONS[key]) MODULE_ACTIONS[key](on);
		});
	});

	/* ------------------------------------------------------------------
	   Live previews in static markup + rendered cards
	   ------------------------------------------------------------------ */
	Live.mountAll(document);

	/* ------------------------------------------------------------------
	   Scroll reveal + stat counters + jump-nav highlight
	   ------------------------------------------------------------------ */
	var revealEls = $$('.reveal');
	if (reduceMotion || !('IntersectionObserver' in window)) {
		document.body.classList.add('no-anim');
		revealEls.forEach(function (el) { el.classList.add('is-in'); });
	} else {
		var rio = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) { en.target.classList.add('is-in'); rio.unobserve(en.target); }
			});
		}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
		revealEls.forEach(function (el, i) {
			el.style.transitionDelay = (i % 3) * 80 + 'ms';
			rio.observe(el);
		});
	}

	var counters = $$('[data-count]');
	if (!reduceMotion && 'IntersectionObserver' in window) {
		var co = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (!en.isIntersecting) return;
				var el = en.target, end = +el.getAttribute('data-count'), suf = el.getAttribute('data-suffix') || '';
				var start = null;
				(function step(ts) {
					if (!start) start = ts;
					var p = Math.min((ts - start) / 1200, 1);
					el.textContent = Math.round(end * (1 - Math.pow(1 - p, 3))) + suf;
					if (p < 1) requestAnimationFrame(step);
				})(performance.now());
				co.unobserve(el);
			});
		}, { threshold: 0.6 });
		counters.forEach(function (c) { co.observe(c); });
	}

	var jumpLinks = $$('.jump a');
	var sections = $$('main section[id]');
	if (jumpLinks.length && 'IntersectionObserver' in window) {
		var so = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (!en.isIntersecting) return;
				var id = en.target.id;
				jumpLinks.forEach(function (a) {
					var active = a.getAttribute('href') === '#' + id;
					a.classList.toggle('is-active', active);
					if (active) {
						var ul = a.closest('ul');
						var left = a.offsetLeft - ul.clientWidth / 2 + a.clientWidth / 2;
						ul.scrollTo({ left: left, behavior: reduceMotion ? 'auto' : 'smooth' });
					}
				});
			});
		}, { rootMargin: '-45% 0px -50% 0px' });
		sections.forEach(function (s) { so.observe(s); });
	}

	/* ------------------------------------------------------------------
	   Contact form → mailto
	   ------------------------------------------------------------------ */
	var form = $('#contact-form');
	if (form) {
		var TO = 'royprosanta140@gmail.com';
		var setErr = function (input, msg) {
			var err = input.parentNode.querySelector('.err');
			if (err) err.textContent = msg || '';
			input.setAttribute('aria-invalid', msg ? 'true' : 'false');
			return !msg;
		};
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			var name = form.elements.name.value.trim();
			var email = form.elements.email.value.trim();
			var msg = form.elements.message.value.trim();
			var ok = [
				setErr(form.elements.name, name ? '' : 'Please enter your name.'),
				setErr(form.elements.email, /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) ? '' : 'Please enter a valid email.'),
				setErr(form.elements.message, msg.length >= 10 ? '' : 'Please write at least 10 characters.')
			].every(Boolean);
			if (!ok) { $('[aria-invalid="true"]', form).focus(); return; }
			var subject = '[bBlocks] ' + form.elements.topic.value + ' — ' + name;
			var body = msg + '\n\n—\nName: ' + name + '\nEmail: ' + email + '\nTopic: ' + form.elements.topic.value;
			window.location.href = 'mailto:' + TO + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
			$('#form-status').textContent = 'Your email app should open now. If it doesn\'t, write to ' + TO + '.';
		});
	}

	var year = $('#year');
	if (year) year.textContent = new Date().getFullYear();

	onScroll();
})();
