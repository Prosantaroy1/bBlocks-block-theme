/* ==========================================================================
   bBlocks — marketing site scripts (vanilla JS, no dependencies)
   ========================================================================== */
(function () {
	'use strict';

	var root = document.documentElement;
	var $ = function (s, c) { return (c || document).querySelector(s); };
	var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
	var store = {
		get: function (k) { try { return localStorage.getItem(k); } catch (e) { return null; } },
		set: function (k, v) { try { localStorage.setItem(k, v); } catch (e) {} }
	};
	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var esc = function (s) {
		return String(s).replace(/[&<>"']/g, function (c) {
			return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
		});
	};

	/* ------------------------------------------------------------------
	   Data (from the bBlocks theme: inc/starter-sites.php, styles/, etc.)
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

	var SITES = [
		{ t: 'Business', c: 'business', img: 'scene-meeting', s: 'Default', col: '#2954e3', d: 'Classic company site with a split hero, services, story, testimonials and a contact page.' },
		{ t: 'Creative Agency', c: 'business', img: 'scene-cafe', s: 'Modern', col: '#6d28d9', d: 'Bold gradient hero, services, process, team and a featured client quote.' },
		{ t: 'SaaS Product', c: 'business', img: 'gadget-desk', s: 'Default', col: '#2954e3', d: 'Product landing page with features, social proof and pricing, plus Features, Pricing and About pages.' },
		{ t: 'Freelancer', c: 'business', img: 'scene-shop', s: 'Dark', col: '#5b8def', d: 'Personal one-person studio: minimal hero, services, about, a client quote and recent writing.' },
		{ t: 'Conselta Consulting', c: 'business', img: 'consult-wide', s: 'Conselta', col: '#f6c624', d: 'Consultant site with a dark portrait hero, numbered services, client story, dark pricing table and FAQ.' },
		{ t: 'Nirman Architecture', c: 'creative', img: 'arch-skyline', s: 'Nirman', col: '#a43fd6', d: 'Architecture studio with a dark city hero, stats, zig-zag expertise, project grid, architects and blog.' },
		{ t: 'Lumen Photography', c: 'creative', img: 'photography-arches', s: 'Lumen', col: '#d9a85b', d: 'Dark photographer portfolio with a full-height hero, captioned gallery, session packages and booking.' },
		{ t: 'DigiMagnet Marketplace', c: 'creative', img: 'architecture-2', s: 'DigiMagnet', col: '#7c5cff', d: 'Theme marketplace with a showcase hero, stats, product grid with search, reviews hub, FAQ and newsletter.' },
		{ t: 'Daily Ink Magazine', c: 'creative', img: 'law-books', s: 'Daily Ink', col: '#c8102e', d: 'News and magazine blog with a lead story, latest grid, numbered trending list, editor\'s picks and newsletter.' },
		{ t: 'Savora Restaurant', c: 'lifestyle', img: 'restaurant-table', s: 'Savora', col: '#a13f2b', d: 'Warm restaurant site with story and stats, a three-course menu, chef specials, reviews and opening hours.' },
		{ t: 'Naturexplo Eco Resort', c: 'lifestyle', img: 'resort-hero', s: 'Naturexplo', col: '#2f4a27', d: 'Nature retreat with a giant-wordmark hero, cottages, places, rooms, dining, activities and booking.' },
		{ t: 'Sweet Pixie Spa', c: 'lifestyle', img: 'spa-hero', s: 'Sweet Pixie', col: '#1c1b4d', d: 'Spa and wellness site with a calm hero, zig-zag treatments, experts band, reviews, gallery and contact.' },
		{ t: 'Pulsefit Gym', c: 'lifestyle', img: 'fitness-dumbbells', s: 'Pulsefit', col: '#c5f82a', d: 'Bold dark gym site with programs, a weekly class timetable, trainers, membership plans and a free trial.' },
		{ t: 'Carely Clinic', c: 'professional', img: 'medical-stethoscope', s: 'Carely', col: '#0b7a83', d: 'Medical and dental clinic with departments, doctors, opening hours, emergency band, reviews and FAQ.' },
		{ t: 'Justica Law', c: 'professional', img: 'law-library', s: 'Justica', col: '#15233f', d: 'Law firm with practice areas, firm story and stats, attorneys, case results and a free consultation.' },
		{ t: 'Edunova Academy', c: 'professional', img: 'education-campus', s: 'Edunova', col: '#7c3aed', d: 'Online academy with a course grid, instructors, library stats, membership plans, stories and FAQ.' },
		{ t: 'Homely Realty', c: 'realestate', img: 'realestate-house', s: 'Homely', col: '#1f4d3a', d: 'Real estate agency with property search, listings, services, agents, neighborhoods and a free valuation.' },
		{ t: 'Harbor Lane Rentals', c: 'realestate', img: 'rentals-hero', s: 'Harbor Lane', col: '#b3121f', d: 'Family-owned rental company with an aerial hero, listings grid, resident services and neighborhoods.' },
		{ t: 'Summit Ridge Commercial', c: 'realestate', img: 'commercial-hero', s: 'Summit Ridge', col: '#0b6b3a', d: 'Commercial brokerage with a skyscraper hero, portfolio stats, service cards and partner logos.' },
		{ t: 'QuickKey Home Buyers', c: 'realestate', img: 'homebuyer-porch', s: 'QuickKey', col: '#c8102e', d: 'Cash home buyer site with situation cards, a three-step process, a cash offer section and FAQ.' },
		{ t: 'Shoplane Store', c: 'shop', img: 'shop-sneakers', s: 'Shoplane', col: '#ff5a4e', d: 'Store showcase with categories, product grid, sale banner, perks and reviews. No shop plugin required.' },
		{ t: 'Modista Fashion', c: 'shop', img: 'fashion-hero', s: 'Modista', col: '#d8b4a0', woo: true, d: 'WooCommerce fashion store with categories, best sellers, new arrivals, a sale banner and brand story.' },
		{ t: 'Voltix Electronics', c: 'shop', img: 'gadget-hero', s: 'Voltix', col: '#1d4ed8', woo: true, d: 'WooCommerce electronics store with deals, featured and top-rated products, FAQ and support band.' }
	];

	// [name, background, text, primary, accent]
	var STYLES = [
		['Default', '#ffffff', '#14171a', '#2954e3', '#f59e0b'],
		['Modern', '#ffffff', '#17151f', '#6d28d9', '#f43f5e'],
		['Dark', '#0f1115', '#f3f4f6', '#5b8def', '#fbbf24'],
		['Nirman', '#ffffff', '#1e1b2e', '#a43fd6', '#f5a524'],
		['DigiMagnet', '#ffffff', '#0f1115', '#7c5cff', '#a6e3c9'],
		['Naturexplo', '#fbf7e6', '#1b2a17', '#2f4a27', '#ef9f2f'],
		['Sweet Pixie', '#ffffff', '#1c1b3a', '#1c1b4d', '#e9b38c'],
		['Conselta', '#fbf7ec', '#111111', '#f6c624', '#111111'],
		['Daily Ink', '#ffffff', '#141414', '#c8102e', '#1d1d1f'],
		['Savora', '#faf6ef', '#2a2522', '#a13f2b', '#9a8a3c'],
		['Lumen', '#0d0d0c', '#f2ede4', '#d9a85b', '#ecd3a2'],
		['Edunova', '#ffffff', '#1e1b4b', '#7c3aed', '#fcc419'],
		['Pulsefit', '#0c0c0d', '#ffffff', '#c5f82a', '#2e2e33'],
		['Homely', '#fdfbf7', '#2b2b2b', '#1f4d3a', '#b5562f'],
		['Shoplane', '#ffffff', '#111111', '#111111', '#ff5a4e'],
		['Carely', '#ffffff', '#0f2a44', '#0b7a83', '#3bb38a'],
		['Justica', '#fbf8f1', '#26292e', '#15233f', '#b08d4f'],
		['Summit Ridge', '#ffffff', '#2b2f33', '#0b6b3a', '#3fae6a'],
		['Harbor Lane', '#ffffff', '#1d1b1a', '#b3121f', '#f0676c'],
		['QuickKey', '#ffffff', '#1c1c1c', '#c8102e', '#ff5c6f'],
		['Modista', '#faf7f2', '#151413', '#111111', '#d8b4a0'],
		['Voltix', '#f3f5f9', '#0d1220', '#1d4ed8', '#c4f135']
	];

	// [name, primary, secondary, accent]
	var PALETTES = [
		['Default', '#2954e3', '#0ea5a4', '#f59e0b'],
		['Forest', '#2f6b4f', '#8a9a5b', '#d98e48'],
		['Midnight', '#7c9cff', '#38d0c4', '#ffb547'],
		['Monochrome', '#111111', '#444444', '#d4d4d4'],
		['Ocean', '#0b6bcb', '#0aa3a3', '#f2a541'],
		['Rose', '#c2416b', '#7a4ea8', '#e6a23c'],
		['Sunset', '#e0563b', '#b8336a', '#f6b93b']
	];

	var PATTERN_CATS = [
		{ key: 'all', label: 'All' },
		{ key: 'hero', label: 'Heroes' },
		{ key: 'content', label: 'Content' },
		{ key: 'proof', label: 'Social proof' },
		{ key: 'convert', label: 'Conversion' },
		{ key: 'commerce', label: 'Commerce' },
		{ key: 'utility', label: 'Utility' }
	];

	// [title, desc, category, wireframe type]
	var PATTERNS = [
		['Split hero', 'Headline, text and buttons beside an image.', 'hero', 'split'],
		['Cover hero', 'Full-width photo with an overlay heading.', 'hero', 'cover'],
		['Centered hero', 'Big centered headline with two calls to action.', 'hero', 'center'],
		['Features grid', 'Icon cards in three or four columns.', 'content', 'grid3'],
		['Services', 'Numbered or image service cards.', 'content', 'grid3img'],
		['About / story', 'Zig-zag text and image with stats.', 'content', 'split'],
		['Stats band', 'Large numbers that build trust.', 'proof', 'stats'],
		['Team', 'Portrait cards with names and roles.', 'proof', 'team'],
		['Testimonials', 'Quotes in cards or a featured quote.', 'proof', 'quote'],
		['Logo strip', 'Partner and client logos.', 'proof', 'logos'],
		['Pricing table', 'Two or three plans with a highlight.', 'convert', 'pricing'],
		['FAQ', 'Questions and answers in a clean list.', 'convert', 'faq'],
		['Call to action', 'Bold band with a single goal.', 'convert', 'cta'],
		['Contact', 'Details and a booking or contact block.', 'convert', 'split'],
		['Blog grid', 'Latest posts with images and meta.', 'content', 'grid3img'],
		['Gallery / portfolio', 'Image grid with captions.', 'content', 'gallery'],
		['Product grid', 'Products, prices and ratings.', 'commerce', 'grid3img'],
		['Sale banner', 'Promotional band with a countdown feel.', 'commerce', 'cta'],
		['Newsletter', 'Email signup with a short pitch.', 'utility', 'center'],
		['Coming soon & 404', 'Maintenance, coming soon and error pages.', 'utility', 'center']
	];

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
		if (!tabs.length) return;
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
	$('#theme-toggle').addEventListener('click', function () { setTheme(isDark() ? 'light' : 'dark'); });

	/* ------------------------------------------------------------------
	   Header: mobile menu, scrolled state, smart sticky
	   ------------------------------------------------------------------ */
	var header = $('.site-header');
	var nav = $('#main-nav');
	var menuBtn = $('#menu-toggle');
	function closeMenu() {
		nav.classList.remove('is-open');
		menuBtn.setAttribute('aria-expanded', 'false');
		menuBtn.setAttribute('aria-label', 'Open menu');
		menuBtn.querySelector('path').setAttribute('d', 'M4 7h16M4 12h16M4 17h16');
	}
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

	var modules = { sticky: true, progress: true, totop: true, animations: !reduceMotion, contact: false, announce: true };
	var progress = $('.progress');
	var toTop = $('#to-top');
	var lastY = window.scrollY;
	var ticking = false;

	function onScroll() {
		var y = window.scrollY;
		header.classList.toggle('is-scrolled', y > 8);

		if (modules.sticky && !nav.classList.contains('is-open')) {
			header.classList.toggle('is-hidden', y > lastY && y > 400);
		} else {
			header.classList.remove('is-hidden');
		}
		lastY = y;

		if (modules.progress) {
			var max = document.documentElement.scrollHeight - window.innerHeight;
			progress.style.transform = 'scaleX(' + (max > 0 ? Math.min(y / max, 1) : 0) + ')';
		}
		toTop.classList.toggle('is-visible', modules.totop && y > 700);
		ticking = false;
	}
	window.addEventListener('scroll', function () {
		if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
	}, { passive: true });
	toTop.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
		$('.logo').focus({ preventScroll: true });
	});

	/* ------------------------------------------------------------------
	   Design system: tabs, style variations, palettes
	   ------------------------------------------------------------------ */
	initTabs('.ds-item');

	var dots = $('#style-dots');
	var preview = $('#style-preview');
	function applyStyle(i) {
		var s = STYLES[i];
		preview.style.background = s[1];
		preview.style.color = s[2];
		$('#sp-kicker').style.color = s[3] === s[1] ? s[4] : s[3];
		$('#sp-kicker').textContent = s[0] + ' style';
		var b1 = $('#sp-btn1'), b2 = $('#sp-btn2');
		b1.style.background = s[3]; b1.style.color = inkFor(s[3]);
		b2.style.background = 'transparent'; b2.style.color = s[2]; b2.style.boxShadow = 'inset 0 0 0 1.5px ' + s[2];
		$('#style-name').textContent = s[0];
		$$('.style-dot', dots).forEach(function (d, j) { d.setAttribute('aria-pressed', j === i ? 'true' : 'false'); });
	}
	STYLES.forEach(function (s, i) {
		var b = document.createElement('button');
		b.type = 'button';
		b.className = 'style-dot';
		b.title = s[0];
		b.setAttribute('aria-label', s[0] + ' style');
		b.style.background = 'linear-gradient(135deg, ' + s[3] + ' 50%, ' + s[1] + ' 50%)';
		b.addEventListener('click', function () { applyStyle(i); });
		dots.appendChild(b);
	});
	applyStyle(0);

	var palWrap = $('#palettes');
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
		$$('.palette-row', palWrap).forEach(function (r, j) { r.setAttribute('aria-pressed', j === i ? 'true' : 'false'); });
		if (save) store.set('bb-palette', String(i));
	}
	PALETTES.forEach(function (p, i) {
		var b = document.createElement('button');
		b.type = 'button';
		b.className = 'palette-row';
		b.innerHTML = '<span class="sw"><i style="background:' + p[1] + '"></i><i style="background:' + p[2] + '"></i><i style="background:' + p[3] + '"></i></span><b>' + esc(p[0]) + '</b><small>' + (i === 0 ? 'Theme default' : 'Palette') + '</small>';
		b.addEventListener('click', function () { applyPalette(i, true); });
		palWrap.appendChild(b);
	});
	var savedPal = parseInt(store.get('bb-palette'), 10);
	applyPalette(savedPal >= 0 && savedPal < PALETTES.length ? savedPal : 0, false);

	/* ------------------------------------------------------------------
	   Starter sites: render + filter
	   ------------------------------------------------------------------ */
	var sitesGrid = $('#sites-grid');
	sitesGrid.innerHTML = SITES.map(function (s) {
		return '<article class="site-card" data-cat="' + s.c + '">' +
			'<div class="site-thumb">' +
				'<img src="assets/img/' + s.img + '.jpg" alt="' + esc(s.t) + ' starter site preview" loading="lazy" width="1400" height="933">' +
				'<div class="badges"><span>Free</span>' + (s.woo ? '<span class="woo">WooCommerce</span>' : '') + '</div>' +
				'<div class="overlay"><strong>' + esc(s.t) + '</strong></div>' +
			'</div>' +
			'<div class="site-body">' +
				'<p>' + esc(s.d) + '</p>' +
				'<div class="site-meta"><span class="swatch"><i style="background:' + s.col + '"></i>' + esc(s.s) + ' style</span><span class="free-tag">One-click import</span></div>' +
			'</div>' +
		'</article>';
	}).join('');

	var siteFilters = $('#site-filters');
	siteFilters.innerHTML = SITE_CATS.map(function (c, i) {
		var n = c.key === 'all' ? SITES.length : SITES.filter(function (s) { return s.c === c.key; }).length;
		return '<button class="tab" role="tab" type="button" data-filter="' + c.key + '" aria-selected="' + (i === 0) + '">' + esc(c.label) + '<span class="count">' + n + '</span></button>';
	}).join('');
	var selectSiteTab = initTabs('#site-filters .tab', function (tab) {
		var f = tab.getAttribute('data-filter');
		$$('.site-card', sitesGrid).forEach(function (card) {
			card.hidden = !(f === 'all' || card.getAttribute('data-cat') === f);
		});
	});
	$$('[data-filter-link]').forEach(function (a) {
		a.addEventListener('click', function () {
			var tab = $('#site-filters [data-filter="' + a.getAttribute('data-filter-link') + '"]');
			if (tab && selectSiteTab) selectSiteTab(tab);
		});
	});

	/* ------------------------------------------------------------------
	   Patterns: render + filter
	   ------------------------------------------------------------------ */
	var WIRES = {
		split: '<div class="w-split"><div><i class="w-t"></i><i class="w-l"></i><i class="w-s"></i><i class="w-b"></i></div><i class="w-img"></i></div>',
		cover: '<div class="w-img" style="display:flex;flex-direction:column;justify-content:center;gap:6px;padding:12px;border-radius:6px"><i class="w-t" style="background:#fff"></i><i class="w-l" style="background:rgba(255,255,255,.6)"></i><i class="w-b"></i></div>',
		center: '<div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px"><i class="w-t"></i><i class="w-l"></i><i class="w-s"></i><i class="w-b"></i></div>',
		grid3: '<i class="w-t" style="align-self:center;width:40%"></i><div class="w-row"><i></i><i></i><i></i></div><div class="w-row"><i></i><i></i><i></i></div>',
		grid3img: '<i class="w-t" style="width:40%"></i><div class="w-row"><i class="w-img"></i><i class="w-img"></i><i class="w-img"></i></div><div class="w-row" style="flex:.4"><i></i><i></i><i></i></div>',
		stats: '<div style="flex:1;display:grid;grid-template-columns:repeat(4,1fr);gap:6px;align-items:center"><i class="w-t" style="width:100%;height:18px"></i><i class="w-t" style="width:100%;height:18px"></i><i class="w-t" style="width:100%;height:18px"></i><i class="w-t" style="width:100%;height:18px"></i></div><i class="w-l" style="width:100%"></i>',
		team: '<i class="w-t" style="align-self:center;width:30%"></i><div class="w-row"><i class="w-img" style="border-radius:50%;aspect-ratio:1;flex:none;width:22%"></i><i class="w-img" style="border-radius:50%;aspect-ratio:1;flex:none;width:22%"></i><i class="w-img" style="border-radius:50%;aspect-ratio:1;flex:none;width:22%"></i><i class="w-img" style="border-radius:50%;aspect-ratio:1;flex:none;width:22%"></i></div><i class="w-l" style="width:100%"></i>',
		quote: '<div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px"><i class="w-t" style="width:16px;height:16px;background:var(--accent)"></i><i class="w-l"></i><i class="w-l"></i><i class="w-s"></i><i class="w-img" style="flex:none;width:22px;height:22px;border-radius:50%"></i></div>',
		logos: '<div style="flex:1;display:grid;grid-template-columns:repeat(3,1fr);gap:10px;align-content:center"><i class="w-t" style="width:100%"></i><i class="w-t" style="width:100%"></i><i class="w-t" style="width:100%"></i><i class="w-t" style="width:100%"></i><i class="w-t" style="width:100%"></i><i class="w-t" style="width:100%"></i></div>',
		pricing: '<div class="w-row"><i></i><i style="border:2px solid var(--primary)"></i><i></i></div>',
		faq: '<i class="w-t" style="width:40%"></i><i class="w-l" style="width:100%;height:12px"></i><i class="w-l" style="width:100%;height:12px"></i><i class="w-l" style="width:100%;height:12px"></i><i class="w-l" style="width:100%;height:12px"></i>',
		cta: '<div style="flex:1;border-radius:8px;background:var(--primary);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px"><i class="w-t" style="background:#fff"></i><i class="w-s" style="background:rgba(255,255,255,.6)"></i><i class="w-b" style="background:#fff"></i></div>',
		gallery: '<div style="flex:1;display:grid;grid-template-columns:2fr 1fr 1fr;grid-template-rows:1fr 1fr;gap:6px"><i class="w-img" style="grid-row:span 2"></i><i class="w-img"></i><i class="w-img"></i><i class="w-img" style="grid-column:span 2"></i></div>'
	};
	var patGrid = $('#pattern-grid');
	patGrid.innerHTML = PATTERNS.map(function (p) {
		return '<article class="pattern-card" data-cat="' + p[2] + '"><div class="wire" aria-hidden="true">' + WIRES[p[3]] + '</div><h3>' + esc(p[0]) + '</h3><p>' + esc(p[1]) + '</p></article>';
	}).join('');
	$('#pattern-filters').innerHTML = PATTERN_CATS.map(function (c, i) {
		return '<button class="tab" role="tab" type="button" data-filter="' + c.key + '" aria-selected="' + (i === 0) + '">' + esc(c.label) + '</button>';
	}).join('');
	initTabs('#pattern-filters .tab', function (tab) {
		var f = tab.getAttribute('data-filter');
		$$('.pattern-card', patGrid).forEach(function (card) {
			card.hidden = !(f === 'all' || card.getAttribute('data-cat') === f);
		});
	});

	/* ------------------------------------------------------------------
	   Templates & plugins
	   ------------------------------------------------------------------ */
	var tplIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>';
	$('#tpl-grid').innerHTML = TEMPLATES.map(function (t) { return '<div class="tpl">' + tplIcon + esc(t) + '</div>'; }).join('');

	$('#plugin-grid').innerHTML = PLUGINS.map(function (p) {
		return '<a class="plugin reveal" href="https://wordpress.org/plugins/' + p[4] + '/" target="_blank" rel="noopener">' +
			'<span class="pi" style="background:' + p[2] + ';font-size:' + (p[3].length > 2 ? '.8rem' : '1rem') + '">' + esc(p[3]) + '</span>' +
			'<b>' + esc(p[0]) + '</b><span>' + esc(p[1]) + '</span><span class="free-tag" style="align-self:flex-start">Free</span></a>';
	}).join('');

	/* ------------------------------------------------------------------
	   Dashboard tabs
	   ------------------------------------------------------------------ */
	initTabs('.dash-tab');

	/* ------------------------------------------------------------------
	   Modules (live demo switches)
	   ------------------------------------------------------------------ */
	var floatContact = $('#float-contact');
	var announce = $('.announce');
	var MODULE_ACTIONS = {
		dark: function (on) { setTheme(on ? 'dark' : 'light'); },
		sticky: function (on) { modules.sticky = on; if (!on) header.classList.remove('is-hidden'); },
		progress: function (on) { modules.progress = on; progress.style.display = on ? '' : 'none'; onScroll(); },
		totop: function (on) { modules.totop = on; onScroll(); },
		animations: function (on) {
			modules.animations = on;
			document.body.classList.toggle('no-anim', !on);
		},
		contact: function (on) { modules.contact = on; floatContact.classList.toggle('is-on', on); },
		announce: function (on) { modules.announce = on; announce.hidden = !on; }
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
	   Scroll reveal + stat counters + jump-nav highlight
	   ------------------------------------------------------------------ */
	var revealEls = $$('.reveal');
	if (reduceMotion || !('IntersectionObserver' in window)) {
		document.body.classList.add('no-anim');
		revealEls.forEach(function (el) { el.classList.add('is-in'); });
	} else {
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) { en.target.classList.add('is-in'); io.unobserve(en.target); }
			});
		}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
		revealEls.forEach(function (el, i) {
			el.style.transitionDelay = (i % 3) * 80 + 'ms';
			io.observe(el);
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

	var jumpLinks = $$('.jump a, .main-nav a');
	var sections = $$('main section[id]');
	if ('IntersectionObserver' in window) {
		var so = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (!en.isIntersecting) return;
				var id = en.target.id;
				jumpLinks.forEach(function (a) {
					var active = a.getAttribute('href') === '#' + id;
					a.classList.toggle('is-active', active);
					if (active && a.closest('.jump')) {
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
	var TO = 'royprosanta140@gmail.com';
	function setErr(input, msg) {
		var err = input.parentNode.querySelector('.err');
		if (err) err.textContent = msg || '';
		input.setAttribute('aria-invalid', msg ? 'true' : 'false');
		return !msg;
	}
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

	/* Year */
	$('#year').textContent = new Date().getFullYear();

	onScroll();
})();
