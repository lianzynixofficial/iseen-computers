/* =========================================================
   MOBILE NAVBAR
   ========================================================= */

const navbarToggle = document.querySelector('.navbar-toggle');
const navbarMenu = document.querySelector('.navbar-menu');

if (navbarToggle && navbarMenu) {
    navbarToggle.addEventListener('click', () => {
        const isOpen = navbarMenu.classList.toggle('is-open');
        navbarToggle.classList.toggle('is-active', isOpen);

        navbarToggle.setAttribute(
            'aria-expanded',
            isOpen.toString()
        );
    });
}


/* =========================================================
   SCROLL REVEAL
   ========================================================= */

const revealElements = document.querySelectorAll('.reveal');

if (revealElements.length > 0) {
    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');

                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.15,
        }
    );

    revealElements.forEach((element) => {
        revealObserver.observe(element);
    });
}



/* =========================================================
   HIDE NAVBAR AT FOOTER
   ========================================================= */

const siteHeader = document.querySelector('.site-header');
const siteFooter = document.querySelector('.site-footer');

if (siteHeader && siteFooter) {
    const footerObserver = new IntersectionObserver(
        ([entry]) => {
            siteHeader.classList.toggle(
                'is-hidden',
                entry.isIntersecting
            );
        },
        {
            threshold: 0.05,
        }
    );

    footerObserver.observe(siteFooter);
}
