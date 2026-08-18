/* =========================================================
   SHARED NAVBAR ELEMENTS
   ========================================================= */

const siteHeader = document.querySelector('.site-header');
const siteFooter = document.querySelector('.site-footer');
const navbar = document.querySelector('.site-navbar');


/* =========================================================
   MOBILE NAVBAR
   ========================================================= */

const navbarToggle = document.querySelector('.navbar-toggle');
const navbarMenu = document.querySelector('.navbar-menu');

if (navbarToggle && navbarMenu) {
    navbarToggle.addEventListener('click', () => {
        const isOpen = navbarMenu.classList.toggle('is-open');

        navbarToggle.classList.toggle(
            'is-active',
            isOpen
        );

        navbarToggle.setAttribute(
            'aria-expanded',
            isOpen.toString()
        );
    });

    const navbarLinks =
        navbarMenu.querySelectorAll('a');

    navbarLinks.forEach((link) => {
        link.addEventListener('click', () => {
            navbarMenu.classList.remove('is-open');

            navbarToggle.classList.remove(
                'is-active'
            );

            navbarToggle.setAttribute(
                'aria-expanded',
                'false'
            );
        });
    });
}


/* =========================================================
   NAVBAR SCROLL EFFECT
   ========================================================= */

if (siteHeader && navbar) {
    function updateNavbarScroll() {
        siteHeader.classList.toggle(
            'is-scrolled',
            window.scrollY > 20
        );
    }

    window.addEventListener(
        'scroll',
        updateNavbarScroll,
        { passive: true }
    );

    updateNavbarScroll();
}


/* =========================================================
   HIDE NAVBAR AT FOOTER
   ========================================================= */

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


/* =========================================================
   SCROLL REVEAL
   ========================================================= */

const revealElements =
    document.querySelectorAll('.reveal');

if (revealElements.length > 0) {
    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add(
                    'is-visible'
                );

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
   HERO BACKGROUND SLIDER
   ========================================================= */

const heroSlides = document.querySelectorAll(
    '.hero-background-slide'
);

if (heroSlides.length > 1) {
    let currentSlide = 0;

    setInterval(() => {
        heroSlides[currentSlide].classList.remove(
            'is-active'
        );

        currentSlide =
            (currentSlide + 1) % heroSlides.length;

        heroSlides[currentSlide].classList.add(
            'is-active'
        );
    }, 4000);
}
