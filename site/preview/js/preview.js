/* bBlocks static preview runtime (vanilla JS). Generated pages only. */
(function () {
	'use strict';
	var doc = document.documentElement;
	var thumb = /[?&]thumb=1/.test(location.search);
	var embedded = window.parent && window.parent !== window;
	if (thumb) doc.classList.add('is-thumb');

	// Mobile navigation overlay (replaces the Interactivity API runtime).
	document.querySelectorAll('.wp-block-navigation').forEach(function (nav) {
		var open = nav.querySelector('.wp-block-navigation__responsive-container-open');
		var box = nav.querySelector('.wp-block-navigation__responsive-container');
		var close = nav.querySelector('.wp-block-navigation__responsive-container-close');
		if (!open || !box) return;
		function set(on) {
			box.classList.toggle('is-menu-open', on);
			box.classList.toggle('has-modal-open', on);
			doc.classList.toggle('has-modal-open', on);
			open.setAttribute('aria-expanded', on ? 'true' : 'false');
			if (on && close) close.focus();
		}
		open.addEventListener('click', function () { set(true); });
		if (close) close.addEventListener('click', function () { set(false); open.focus(); });
		box.addEventListener('click', function (e) { if (e.target.closest('a')) set(false); });
		document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && box.classList.contains('is-menu-open')) set(false); });
	});
	document.querySelectorAll('.wp-block-navigation-submenu__toggle').forEach(function (b) {
		b.addEventListener('click', function () {
			b.setAttribute('aria-expanded', b.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
		});
	});

	// Dead links and forms do nothing in a preview.
	document.addEventListener('click', function (e) {
		var a = e.target.closest('a');
		if (a && (a.getAttribute('href') === '#' || !a.getAttribute('href'))) e.preventDefault();
	});
	document.addEventListener('submit', function (e) { e.preventDefault(); });

	// Thumbnail mode: load every image now (lazy images never "enter" a scaled iframe reliably).
	if (thumb) {
		document.querySelectorAll('img[loading="lazy"]').forEach(function (img) { img.loading = 'eager'; });
	}

	// Smooth scroll driven by the embedding page (hover-to-scroll thumbnails).
	var anim = null;
	function scrollToY(y, dur) {
		if (anim) cancelAnimationFrame(anim);
		var from = window.scrollY, dist = y - from, t0 = null;
		if (!dur || Math.abs(dist) < 2) { window.scrollTo(0, y); return; }
		(function step(ts) {
			if (!t0) t0 = ts;
			var p = Math.min((ts - t0) / dur, 1);
			var e = p < .5 ? 2 * p * p : 1 - Math.pow(-2 * p + 2, 2) / 2;
			window.scrollTo(0, from + dist * e);
			if (p < 1) anim = requestAnimationFrame(step);
		})(performance.now());
	}
	window.addEventListener('message', function (e) {
		var d = e.data;
		if (!d || d.type !== 'bb-scroll') return;
		var max = doc.scrollHeight - window.innerHeight;
		scrollToY(d.to === 'bottom' ? max : 0, d.duration || 0);
	});

	// Report size + page to the embedding page.
	var blocks = document.querySelector('.wp-site-blocks');
	var last = '';
	function report() {
		if (!embedded) return;
		var h = blocks ? Math.ceil(blocks.getBoundingClientRect().height) : doc.scrollHeight;
		var msg = { type: 'bb-preview', height: h, scrollMax: Math.max(0, doc.scrollHeight - window.innerHeight), page: location.pathname.split('/').pop(), title: document.title };
		var key = msg.height + '|' + msg.scrollMax + '|' + msg.page;
		if (key === last) return;
		last = key;
		try { window.parent.postMessage(msg, '*'); } catch (err) {}
	}
	window.addEventListener('load', report);
	window.addEventListener('resize', report);
	if ('ResizeObserver' in window && blocks) new ResizeObserver(report).observe(blocks);
	report();
})();
