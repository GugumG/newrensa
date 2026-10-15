// HEADER
function cekScroll() {
    document.body.classList.toggle('scrolled', window.scrollY > 40);
}
window.addEventListener('scroll', cekScroll);
cekScroll();

// MENU MOBILE

const navToggle = document.querySelector('.nav-toggle');

function tutupMenu() {
    document.body.classList.remove('nav-open');
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.querySelector('i').className = 'bi bi-list';
}

navToggle.addEventListener('click', function() {
    const terbuka = document.body.classList.toggle('nav-open');
    navToggle.setAttribute('aria-expanded', terbuka);
    navToggle.querySelector('i').className = terbuka ? 'bi bi-x-lg' : 'bi bi-list';
});

// animasi buka tutup nav

document.querySelectorAll('.navmenu a').forEach(function(link){
    link.addEventListener('click', tutupMenu);
});

// untuk slide geser pake mouse

const heroCarousel = document.querySelector('#heroCarousel');

if (heroCarousel){
    const carousel = bootstrap.Carousel.getOrCreateInstance(heroCarousel);
    let mulaiX = null;

    heroCarousel.addEventListener('mousedown', function (e){
        mulaiX = e.clientX;
    })

    heroCarousel.addEventListener('mouseup', function(e){
        if (mulaiX === null) return;
        const jarak = e.clientX - mulaiX;
        if (jarak > 50) carousel.prev();
        if (jarak < 50) carousel.next();
        mulaiX = null;
    })

    heroCarousel.addEventListener('mouseleave', function(){
        mulaiX = null;
    })
    heroCarousel.addEventListener('dragstart', function(e){
        e.preventDefault();
    })
}

