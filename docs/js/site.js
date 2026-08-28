// Mobile off-canvas menu toggle.
// Loaded directly via <script src="{{ asset('js/site.js') }}" defer> in
// layouts/app.blade.php — plain script, no bundler/module system needed.
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menuBtn');
    const menuClose = document.getElementById('menuClose');
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('menuOverlay');

    if (!menuBtn || !mobileMenu || !overlay) return;

    const openMenu = () => {
        mobileMenu.classList.add('open');
        overlay.classList.remove('hidden');
        menuBtn.setAttribute('aria-expanded', 'true');
    };

    const closeMenu = () => {
        mobileMenu.classList.remove('open');
        overlay.classList.add('hidden');
        menuBtn.setAttribute('aria-expanded', 'false');
    };

    menuBtn.addEventListener('click', openMenu);
    menuClose?.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
    });
});

// Project index (Insights section): hovering/focusing/tapping a row in the
// directory list cross-fades the matching visual panel. Falls back to the
// server-rendered first-item-active state if JS never runs.
document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('.project-row');
    const panels = document.querySelectorAll('.project-panel');
    if (!rows.length || !panels.length) return;

    const activate = (index) => {
        rows.forEach((row) => {
            const isMatch = row.dataset.projectRow === index;
            row.classList.toggle('is-active', isMatch);
            row.setAttribute('aria-pressed', isMatch ? 'true' : 'false');
        });
        panels.forEach((panel) => {
            panel.classList.toggle('is-active', panel.dataset.projectPanel === index);
        });
    };

    rows.forEach((row) => {
        const index = row.dataset.projectRow;
        row.addEventListener('mouseenter', () => activate(index));
        row.addEventListener('focus', () => activate(index));
        row.addEventListener('click', () => {
            activate(index);

            // On phones/tablets the panel sits above the list, so a tap on a
            // row further down the list can update a panel that's scrolled
            // out of view. Bring it back into view so the change is visible.
            const panelWrap = document.getElementById('projectPanelWrap');
            if (panelWrap && window.matchMedia('(max-width: 1023px)').matches) {
                panelWrap.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    });
});

// Reveal-on-scroll for elements marked `.reveal`.
// Respects prefers-reduced-motion by showing everything immediately.
document.addEventListener('DOMContentLoaded', () => {
    const revealEls = document.querySelectorAll('.reveal');
    if (!revealEls.length) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealEls.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach((el) => observer.observe(el));
});