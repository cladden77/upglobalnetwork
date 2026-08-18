/**
 * Mobile navigation toggle + current page highlight.
 */
(function () {
	const toggle = document.querySelector('.up-nav-toggle');
	const nav = document.querySelector('.up-nav');
	if (!nav) return;

	const path = window.location.pathname.replace(/\/$/, '') || '/';
	nav.querySelectorAll('a').forEach(function (link) {
		const href = link.getAttribute('href') || '';
		try {
			const linkPath = new URL(href, window.location.origin).pathname.replace(/\/$/, '') || '/';
			if (linkPath === path) {
				link.classList.add('is-active');
				link.setAttribute('aria-current', 'page');
			}
		} catch (e) {
			/* ignore invalid hrefs */
		}
	});

	if (!toggle) return;

	toggle.addEventListener('click', function () {
		const open = nav.classList.toggle('is-open');
		toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
		toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
		document.body.classList.toggle('up-nav-open', open);
	});

	nav.querySelectorAll('a').forEach(function (link) {
		link.addEventListener('click', function () {
			nav.classList.remove('is-open');
			toggle.setAttribute('aria-expanded', 'false');
			document.body.classList.remove('up-nav-open');
		});
	});
})();
