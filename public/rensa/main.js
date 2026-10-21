// HEADER
function cekScroll() {
    document.body.classList.toggle('scrolled', window.scrollY > 40);
}
window.addEventListener('scroll', cekScroll);
cekScroll();

// MENU MOBILE (drawer dari kiri)

const navToggle  = document.querySelector('.nav-toggle');
const navClose   = document.querySelector('.nav-close');
const navOverlay = document.querySelector('.nav-overlay');

function bukaMenu() {
    document.body.classList.add('nav-open');
    navToggle.setAttribute('aria-expanded', 'true');
}

function tutupMenu() {
    document.body.classList.remove('nav-open');
    navToggle.setAttribute('aria-expanded', 'false');
}

navToggle.addEventListener('click', bukaMenu);
navClose.addEventListener('click', tutupMenu);
navOverlay.addEventListener('click', tutupMenu);

// Pilih menu = drawer langsung nutup
document.querySelectorAll('.navmenu a').forEach(function (link) {
    link.addEventListener('click', tutupMenu);
});

// Tombol Esc di keyboard juga nutup
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') tutupMenu();
});

// MENU AKTIF: tebalkan menu sesuai section yang lagi ada di tengah layar

const menuLinks = document.querySelectorAll('.navmenu a[href^="#"]');

const pantauSection = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        menuLinks.forEach(function (a) {
            a.classList.toggle('aktif', a.getAttribute('href') === '#' + entry.target.id);
        });
    });
}, { rootMargin: '-45% 0px -50% 0px' });

menuLinks.forEach(function (a) {
    const section = document.querySelector(a.getAttribute('href'));
    if (section) pantauSection.observe(section);
});


// STORE: panah mati di halaman pertama / terakhir

const storeCarousel = document.querySelector('#storeCarousel');
const storePrev = document.querySelector('[data-bs-target="#storeCarousel"][data-bs-slide="prev"]');
const storeNext = document.querySelector('[data-bs-target="#storeCarousel"][data-bs-slide="next"]');

if (storeCarousel && storePrev && storeNext) {
    const jumlahHalaman = storeCarousel.querySelectorAll('.carousel-item').length;

    storeCarousel.addEventListener('slid.bs.carousel', function (e) {
        storePrev.disabled = e.to === 0;
        storeNext.disabled = e.to === jumlahHalaman - 1;
    });
}

