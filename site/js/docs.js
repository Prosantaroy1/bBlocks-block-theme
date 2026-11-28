/* ==========================================================================
   bBlocks — documentation (docs.html)
   Articles live in the page as <article class="doc" data-slug>; the hash
   picks one (docs.html#modules). No hash shows the docs home.
   ========================================================================== */
(function () {
	'use strict';

	var DATA = window.BB_DATA || { sites: [] };
	var bb = window.bb || {};
	var $ = function (s, c) { return (c || document).querySelector(s); };
	var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
	var esc = bb.esc || function (s) { return String(s); };
	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var ICON = {
		rocket: '<path d="M5 15c-1.5 1.5-2 5-2 5s3.5-.5 5-2M14 4c3-1 6-1 6-1s0 3-1 6l-7 7-5-5 7-7z"/><circle cx="15" cy="9" r="1.5"/>',
		grid: '<rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/>',
		layers: '<path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="m3 13 9 5 9-5"/>',
		palette: '<circle cx="13.5" cy="6.5" r="1.5"/><circle cx="17.5" cy="10.5" r="1.5"/><circle cx="8.5" cy="7.5" r="1.5"/><circle cx="6.5" cy="12.5" r="1.5"/><path d="M12 2a10 10 0 1 0 0 20c1.1 0 2-.9 2-2 0-.5-.2-1-.5-1.3-.3-.4-.5-.8-.5-1.3 0-1.1.9-2 2-2h2.4A5.6 5.6 0 0 0 22 9.8C22 5.5 17.5 2 12 2z"/>',
		blocks: '<rect x="3" y="4" width="18" height="6" rx="1.5"/><rect x="3" y="14" width="8" height="6" rx="1.5"/><rect x="13" y="14" width="8" height="6" rx="1.5"/>',
		toggle: '<rect x="2" y="7" width="20" height="10" rx="5"/><circle cx="16" cy="12" r="3"/>',
		cart: '<circle cx="9" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2 3h3l2.7 12.2a2 2 0 0 0 2 1.6h7.6a2 2 0 0 0 2-1.5L21 8H6"/>',
		help: '<circle cx="12" cy="12" r="9"/><path d="M9.5 9a2.5 2.5 0 1 1 3.5 2.3c-.6.3-1 .9-1 1.6V14M12 17.5v.01"/>'
	};
	var CATS = [
		{ key: 'getting-started', title: 'Getting started', icon: 'rocket', desc: 'Install bBlocks and build your first site.' },
		{ key: 'dashboard', title: 'Theme dashboard', icon: 'grid', desc: 'Everything under Appearance → bBlocks.' },
		{ key: 'starter-sites', title: 'Starter sites', icon: 'layers', desc: 'Import complete websites in one click.' },
		{ key: 'design', title: 'Design & styles', icon: 'palette', desc: 'Styles, colors, fonts, headers and footers.' },
		{ key: 'building', title: 'Patterns & templates', icon: 'blocks', desc: 'Build pages from ready-made sections.' },
		{ key: 'modules', title: 'Modules', icon: 'toggle', desc: 'Optional extras like dark mode and WhatsApp buttons.' },
		{ key: 'woocommerce', title: 'WooCommerce', icon: 'cart', desc: 'Sell online with matching store pages.' },
		{ key: 'help', title: 'Help & support', icon: 'help', desc: 'FAQ, accessibility and where to get help.' }
	];
	var CAT = {};
	CATS.forEach(function (c) { CAT[c.key] = c; });
	function icon(name) {
		return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' + ICON[name] + '</svg>';
	}

	var docs = $$('.doc').map(function (el) {
		return {
			el: el,
			slug: el.getAttribute('data-slug'),
			cat: el.getAttribute('data-cat'),
			title: el.getAttribute('data-title'),
			desc: el.getAttribute('data-desc') || '',
			text: el.textContent.replace(/\s+/g, ' ').toLowerCase()
		};
	});
	// Order articles by category order.
	docs.sort(function (a, b) {
		return CATS.indexOf(CAT[a.cat]) - CATS.indexOf(CAT[b.cat]) || $$('.doc').indexOf(a.el) - $$('.doc').indexOf(b.el);
	});
	var bySlug = {};
	docs.forEach(function (d) { bySlug[d.slug] = d; });
	function inCat(key) { return docs.filter(function (d) { return d.cat === key; }); }

	/* Starter site table (from the generated data). */
	var tbody = $('#doc-sites-table');
	if (tbody && bb.viewerSite) {
		tbody.innerHTML = DATA.sites.map(function (s) {
			return '<tr><td><a href="' + bb.viewerSite(s) + '">' + esc(s.title) + '</a>' + (s.woo ? ' <small>(WooCommerce)</small>' : '') + '</td><td>' + esc(s.style) + '</td><td>' +
				s.pages.map(function (p) { return '<a href="' + bb.viewerSite(s, p.file) + '">' + esc(p.title) + '</a>'; }).join(', ') + '</td></tr>';
		}).join('');
	}

	/* Docs home: category cards. */
	$('#doc-cats').innerHTML = CATS.map(function (c) {
		var list = inCat(c.key);
		if (!list.length) return '';
		return '<section class="doc-cat">' +
			'<span class="dc-icon">' + icon(c.icon) + '</span>' +
			'<h2>' + esc(c.title) + '</h2><p>' + esc(c.desc) + '</p>' +
			'<ul>' + list.map(function (d) { return '<li><a href="#' + d.slug + '">' + d.title + '</a></li>'; }).join('') + '</ul>' +
			'<a class="dc-all" href="#' + list[0].slug + '">' + (list.length > 1 ? 'Read ' + list.length + ' articles' : 'Read article') + ' →</a>' +
		'</section>';
	}).join('');

	/* Sidebar + mobile picker. */
	var nav = $('#docs-nav-list');
	nav.innerHTML = CATS.map(function (c) {
		var list = inCat(c.key);
		if (!list.length) return '';
		return '<h2>' + esc(c.title) + '</h2><ul>' + list.map(function (d) { return '<li><a href="#' + d.slug + '" data-slug="' + d.slug + '">' + d.title + '</a></li>'; }).join('') + '</ul>';
	}).join('');
	var mobile = $('#docs-mobile-select');
	mobile.innerHTML = '<option value="">Documentation home</option>' + CATS.map(function (c) {
		var list = inCat(c.key);
		if (!list.length) return '';
		return '<optgroup label="' + esc(c.title) + '">' + list.map(function (d) { return '<option value="' + d.slug + '">' + d.title.replace(/&amp;/g, '&') + '</option>'; }).join('') + '</optgroup>';
	}).join('');
	mobile.addEventListener('change', function () { location.hash = mobile.value; });

	/* Router */
	var hero = $('#docs-hero'), home = $('#docs-home'), layout = $('#docs-layout');
	var toc = $('#docs-toc'), crumbs = $('#doc-crumbs'), pager = $('#doc-pager');
	var tocObserver = null;
	var baseTitle = document.title;

	function showHome() {
		hero.hidden = false; home.hidden = false; layout.hidden = true;
		docs.forEach(function (d) { d.el.classList.remove('is-active'); });
		document.title = baseTitle;
		mobile.value = '';
	}

	function showDoc(d, keepScroll) {
		hero.hidden = true; home.hidden = true; layout.hidden = false;
		docs.forEach(function (x) { x.el.classList.toggle('is-active', x === d); });
		$$('a[data-slug]', nav).forEach(function (a) {
			if (a.getAttribute('data-slug') === d.slug) a.setAttribute('aria-current', 'page'); else a.removeAttribute('aria-current');
		});
		mobile.value = d.slug;
		var c = CAT[d.cat];
		crumbs.innerHTML = '<a href="docs.html">Docs</a><span aria-hidden="true">/</span><a href="#' + inCat(d.cat)[0].slug + '">' + esc(c.title) + '</a>';
		document.title = d.title.replace(/&amp;/g, '&') + ' · bBlocks Documentation';

		// On this page.
		var heads = $$('h2', d.el);
		heads.forEach(function (h, i) { h.id = d.slug + '--' + (i + 1); });
		toc.innerHTML = heads.length ? '<h2>On this page</h2><ul>' + heads.map(function (h) {
			return '<li><a href="#' + d.slug + '" data-target="' + h.id + '">' + esc(h.textContent) + '</a></li>';
		}).join('') + '</ul>' : '';
		if (tocObserver) tocObserver.disconnect();
		if (heads.length && 'IntersectionObserver' in window) {
			tocObserver = new IntersectionObserver(function (entries) {
				entries.forEach(function (en) {
					if (!en.isIntersecting) return;
					$$('a', toc).forEach(function (a) { a.classList.toggle('is-active', a.getAttribute('data-target') === en.target.id); });
				});
			}, { rootMargin: '-15% 0px -70% 0px' });
			heads.forEach(function (h) { tocObserver.observe(h); });
		}

		// Previous / next.
		var i = docs.indexOf(d), prev = docs[i - 1], next = docs[i + 1];
		pager.innerHTML =
			(prev ? '<a class="prev" href="#' + prev.slug + '"><small>← Previous</small><b>' + prev.title + '</b></a>' : '') +
			(next ? '<a class="next" href="#' + next.slug + '"><small>Next →</small><b>' + next.title + '</b></a>' : '');
		$('#doc-feedback-msg').textContent = 'Was this page helpful?';
		$('#doc-feedback-btns').hidden = false;

		if (window.bbLive) window.bbLive.mountAll(d.el);
		if (!keepScroll) window.scrollTo(0, 0);
	}

	function route() {
		var slug = decodeURIComponent(location.hash.slice(1));
		if (!slug) { showHome(); return; }
		if (bySlug[slug]) { showDoc(bySlug[slug]); return; }
		if (CAT[slug] && inCat(slug).length) { showDoc(inCat(slug)[0]); return; }
		// A heading id inside an article (article--n).
		var m = slug.match(/^(.+)--\d+$/);
		if (m && bySlug[m[1]]) {
			showDoc(bySlug[m[1]], true);
			var t = document.getElementById(slug);
			if (t) t.scrollIntoView();
			return;
		}
		showHome();
	}
	window.addEventListener('hashchange', route);

	toc.addEventListener('click', function (e) {
		var a = e.target.closest('a[data-target]');
		if (!a) return;
		e.preventDefault();
		var t = document.getElementById(a.getAttribute('data-target'));
		if (t) t.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth' });
	});

	/* Feedback (local only). */
	$('#doc-feedback-btns').addEventListener('click', function (e) {
		if (!e.target.closest('button')) return;
		$('#doc-feedback-msg').textContent = 'Thanks for the feedback!';
		$('#doc-feedback-btns').hidden = true;
	});

	/* Search */
	function highlight(text, q) {
		var safe = esc(text.replace(/&amp;/g, '&'));
		if (!q) return safe;
		var re = new RegExp('(' + q.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + ')', 'ig');
		return safe.replace(re, '<mark>$1</mark>');
	}
	function search(q) {
		q = q.trim().toLowerCase();
		if (!q) return [];
		return docs.map(function (d) {
			var t = d.title.toLowerCase(), score = 0;
			if (t.indexOf(q) === 0) score += 10;
			else if (t.indexOf(q) > -1) score += 6;
			if (d.desc.toLowerCase().indexOf(q) > -1) score += 3;
			if (d.text.indexOf(q) > -1) score += 1;
			return { d: d, score: score };
		}).filter(function (r) { return r.score > 0; }).sort(function (a, b) { return b.score - a.score; }).slice(0, 8);
	}
	$$('[data-docs-search]').forEach(function (box) {
		var input = $('input', box), results = $('.docs-results', box), active = -1;
		function close() { results.hidden = true; active = -1; input.setAttribute('aria-expanded', 'false'); }
		function render() {
			var q = input.value, list = search(q);
			if (!q.trim()) { close(); return; }
			results.hidden = false;
			input.setAttribute('aria-expanded', 'true');
			active = list.length ? 0 : -1;
			results.innerHTML = list.length ? list.map(function (r, i) {
				return '<a href="#' + r.d.slug + '" role="option"' + (i === 0 ? ' class="is-active"' : '') + '><b>' + highlight(r.d.title, q) + '</b><small>' + esc(CAT[r.d.cat].title) + ' · ' + highlight(r.d.desc, q) + '</small></a>';
			}).join('') : '<div class="empty">No results for “' + esc(q) + '”. Try “import”, “logo” or “WhatsApp”.</div>';
		}
		input.addEventListener('input', render);
		input.addEventListener('focus', function () { if (input.value.trim()) render(); });
		input.addEventListener('keydown', function (e) {
			var items = $$('a', results);
			if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
				if (!items.length) return;
				e.preventDefault();
				active = (active + (e.key === 'ArrowDown' ? 1 : -1) + items.length) % items.length;
				items.forEach(function (a, i) { a.classList.toggle('is-active', i === active); });
				items[active].scrollIntoView({ block: 'nearest' });
			} else if (e.key === 'Enter') {
				if (items[active]) { e.preventDefault(); location.hash = items[active].getAttribute('href').slice(1); input.value = ''; close(); input.blur(); }
			} else if (e.key === 'Escape') { close(); input.blur(); }
		});
		results.addEventListener('click', function (e) { if (e.target.closest('a')) { input.value = ''; close(); } });
		document.addEventListener('click', function (e) { if (!box.contains(e.target)) close(); });
	});
	document.addEventListener('keydown', function (e) {
		if (e.key !== '/' || e.target.closest('input, textarea, select')) return;
		var visible = $$('[data-docs-search] input').filter(function (i) { return i.offsetParent !== null; })[0];
		if (visible) { e.preventDefault(); visible.focus(); }
	});

	route();
})();
