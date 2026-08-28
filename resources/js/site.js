// Mobile off-canvas menu toggle.
// Import this from resources/js/app.js, e.g.: import './site';
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