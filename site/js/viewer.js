/* ==========================================================================
   bBlocks — live preview viewer (preview.html)
   ?site=<key>[&page=<file>]   full starter site, navigable page by page
   ?pattern=<slug>[&in=<ctx>]  single pattern, prev/next within its list
   ========================================================================== */
(function () {
	'use strict';

	var DATA = window.BB_DATA || { sites: [], patterns: [] };
	var bb = window.bb;
	var $ = function (s) { return document.querySelector(s); };
	var esc = bb.esc;
	var params = new URLSearchParams(location.search);
	var frame = $('#vframe-iframe');
	var loading = $('#vloading');
	var stage = $('#vstage');
	var titleEl = $('#vtitle-main');
	var subEl = $('#vtitle-sub');
	var center = $('#vcenter');
	var back = $('#vback');
	var openNew = $('#vopen');
	var info = $('#vinfo-text');
	var infoLinks = $('#vinfo-links');
	var store = {
		get: function (k) { try { return localStorage.getItem(k); } catch (e) { return null; } },
		set: function (k, v) { try { localStorage.setItem(k, v); } catch (e) {} }
	};

	/* Device switcher */
	var deviceBtns = Array.prototype.slice.call(document.querySelectorAll('.devices button'));
	function setDevice(d, save) {
		stage.setAttribute('data-device', d);
		deviceBtns.forEach(function (b) { b.setAttribute('aria-pressed', b.getAttribute('data-device') === d ? 'true' : 'false'); });
		if (save) store.set('bb-device', d);
	}
	deviceBtns.forEach(function (b) { b.addEventListener('click', function () { setDevice(b.getAttribute('data-device'), true); }); });
	setDevice(store.get('bb-device') || 'desktop', false);

	function load(src) {
		loading.classList.remove('is-done');
		frame.src = src;
		openNew.href = src;
	}
	frame.addEventListener('load', function () { loading.classList.add('is-done'); });

	function notFound(what) {
		titleEl.textContent = 'Preview not found';
		stage.innerHTML = '<div class="vnotfound"><h2>We couldn\'t find that ' + what + '.</h2><p><a class="btn btn-primary" href="' + (what === 'pattern' ? 'patterns.html' : 'starter-sites.html') + '">Browse all</a></p></div>';
		document.title = 'Not found · bBlocks';
	}

	/* ---------------- Starter site ---------------- */
	var siteKey = params.get('site');
	var patSlug = params.get('pattern');

	if (siteKey) {
		var site = bb.siteByKey(siteKey);
		back.href = 'starter-sites.html';
		back.querySelector('span').textContent = 'Starter sites';
		if (!site) { notFound('starter site'); return; }
		var page = params.get('page') || 'index.html';
		if (!site.pages.some(function (p) { return p.file === page; })) page = 'index.html';

		titleEl.textContent = site.title;
		subEl.textContent = site.style + ' style · ' + site.pages.length + ' pages' + (site.woo ? ' · WooCommerce' : '');
		document.title = site.title + ' — Live preview · bBlocks';

		var sel = document.createElement('select');
		sel.className = 'vselect';
		sel.setAttribute('aria-label', 'Page');
		sel.innerHTML = site.pages.map(function (p) { return '<option value="' + esc(p.file) + '">' + esc(p.title) + '</option>'; }).join('');
		sel.value = page;
		center.insertBefore(sel, center.firstChild);
		sel.addEventListener('change', function () { go(sel.value); });

		var go = function (file) {
			page = file;
			sel.value = file;
			load(bb.siteUrl(site, file));
			try { history.replaceState(null, '', bb.viewerSite(site, file)); } catch (e) {}
		};

		// Keep the page picker in sync when visitors click links inside the site.
		window.addEventListener('message', function (e) {
			var d = e.data;
			if (!d || d.type !== 'bb-preview' || e.source !== frame.contentWindow) return;
			if (d.page && d.page !== page && site.pages.some(function (p) { return p.file === d.page; })) {
				page = d.page;
				sel.value = page;
				openNew.href = bb.siteUrl(site, page);
				try { history.replaceState(null, '', bb.viewerSite(site, page)); } catch (err) {}
			}
		});

		info.textContent = site.description;
		var idx = DATA.sites.indexOf(site);
		var prev = DATA.sites[(idx - 1 + DATA.sites.length) % DATA.sites.length];
		var next = DATA.sites[(idx + 1) % DATA.sites.length];
		infoLinks.innerHTML = '<a href="' + bb.viewerSite(prev) + '">← ' + esc(prev.title) + '</a><a href="' + bb.viewerSite(next) + '">' + esc(next.title) + ' →</a>';
		load(bb.siteUrl(site, page));
		return;
	}

	/* ---------------- Pattern ---------------- */
	if (patSlug) {
		var list = DATA.patterns;
		var ctx = params.get('in') || '';
		var filters = {};
		ctx.split(',').forEach(function (part) { var kv = part.split(':'); if (kv[1]) filters[kv[0]] = kv[1]; });
		if (filters.type || filters.site) {
			list = list.filter(function (p) {
				if (filters.type && bb.typeOf(p) !== filters.type) return false;
				if (filters.site) {
					var so = bb.siteOfPattern(p);
					if (filters.site === 'core' ? !!so : !(so && so.key === filters.site)) return false;
				}
				return true;
			});
		}
		var pi = -1;
		for (var i = 0; i < list.length; i++) { if (list[i].slug === patSlug) { pi = i; break; } }
		if (pi === -1) {
			list = DATA.patterns;
			for (var j = 0; j < list.length; j++) { if (list[j].slug === patSlug) { pi = j; break; } }
			ctx = '';
		}
		var qs = [];
		if (filters.type) qs.push('type=' + filters.type);
		if (filters.site) qs.push('site=' + filters.site);
		back.href = 'patterns.html' + (qs.length && ctx ? '?' + qs.join('&') : '');
		back.querySelector('span').textContent = 'Patterns';
		if (pi === -1) { notFound('pattern'); return; }

		var nav = document.createElement('div');
		nav.className = 'vnav';
		nav.innerHTML =
			'<button class="icon-btn" type="button" id="vprev" aria-label="Previous pattern"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg></button>' +
			'<button class="icon-btn" type="button" id="vnext" aria-label="Next pattern"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg></button>';
		center.insertBefore(nav, center.firstChild);

		var show = function (k) {
			pi = (k + list.length) % list.length;
			var p = list[pi];
			var site = bb.siteOfPattern(p);
			titleEl.textContent = p.title;
			subEl.textContent = bb.TYPE_LABEL[bb.typeOf(p)] + ' · ' + (pi + 1) + ' of ' + list.length + (site ? ' · ' + site.style + ' style' : '');
			document.title = p.title + ' — Pattern preview · bBlocks';
			info.textContent = p.description || 'A ready-made bBlocks section built entirely from core WordPress blocks.';
			infoLinks.innerHTML = site ? '<a href="' + bb.viewerSite(site) + '">See it in ' + esc(site.title) + ' →</a>' : '<a href="patterns.html?type=' + bb.typeOf(p) + '">More ' + esc(bb.TYPE_LABEL[bb.typeOf(p)].toLowerCase()) + ' →</a>';
			load('preview/patterns/' + p.slug + '.html');
			try { history.replaceState(null, '', bb.viewerPattern(p, ctx)); } catch (e) {}
		};
		document.getElementById('vprev').addEventListener('click', function () { show(pi - 1); });
		document.getElementById('vnext').addEventListener('click', function () { show(pi + 1); });
		document.addEventListener('keydown', function (e) {
			if (e.target.closest('input, select, textarea')) return;
			if (e.key === 'ArrowLeft') show(pi - 1);
			if (e.key === 'ArrowRight') show(pi + 1);
		});
		show(pi);
		return;
	}

	notFound('preview');
})();
