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


// TESTIMONI: panah geser kartu (muter: dari akhir balik ke awal)

document.querySelectorAll('[data-testi]').forEach(function (wrap) {
    const baris = wrap.querySelector('.testi-baris');

    function geserTesti(arah) {
        const kartu   = baris.querySelector('.testi-card');
        const langkah = kartu.offsetWidth + parseFloat(getComputedStyle(baris).columnGap);
        const ujung   = baris.scrollWidth - baris.clientWidth;

        if (arah > 0 && baris.scrollLeft >= ujung - 5) {
            baris.scrollTo({ left: 0, behavior: 'smooth' });        // udah di akhir: balik ke awal
        } else if (arah < 0 && baris.scrollLeft <= 5) {
            baris.scrollTo({ left: ujung, behavior: 'smooth' });    // udah di awal: lompat ke akhir
        } else {
            baris.scrollBy({ left: arah * langkah, behavior: 'smooth' });
        }
    }

    wrap.querySelector('.testi-prev').addEventListener('click', function () { geserTesti(-1); });
    wrap.querySelector('.testi-next').addEventListener('click', function () { geserTesti(1); });
});


// form kontak 

const formKontak = document.querySelector('.contact-form');

if (formKontak){
    formKontak.addEventListener('submit',function (e){
        e.preventDefault();
        formKontak.querySelector('.form-note').classList.remove('d-none');
    })
}

