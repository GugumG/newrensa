document.querySelectorAll('[data-coverflow]').forEach(pasangCoverflow);

function pasangCoverflow(wrap) {
    const akar  = wrap.querySelector('.cf');
    const kartu = [...wrap.querySelectorAll('.cf-item')];
    const dots  = [...wrap.querySelectorAll('.cf-dots button')];
    const n     = kartu.length;

    const TAMPIL = 2;
    const BISA_PUTAR = n >=TAMPIL * 2 + 2;
    let aktif = Math.floor( n / 2 );
    let habisGeser = false;

    function jarakLingkar(i){
        let d = i - aktif;
        if (!BISA_PUTAR) return d;
        if (d > n /2) d -= n;
        if (d < -n /2) d += n;
        return d;
    }

    function gambar() {
        const gaya = getComputedStyle(wrap);
        const jarak = parseFloat(gaya.getPropertyValue('--jarak'));
        const dSkala = parseFloat(gaya.getPropertyValue('--skala'));
        const dRedup = parseFloat(gaya.getPropertyValue('--redup'));
        const putar = parseFloat(gaya.getPropertyValue('--putar')) || 0;
        
        kartu.forEach((el, i) =>{
            const d = jarakLingkar(i);
            const j = Math.abs(d);
            const simpan = j > TAMPIL;

            const lompat = el.dataset.d !== undefined && Math.abs(d - el.dataset.d) > 1;
            if (lompat) el.style.transition = 'none';

                       el.style.transform = `translate(-50%, -50%) translateX(${d * jarak}px)`
            + (putar ? ` rotateY(${-d * putar}deg)` : '')
            + ` scale(${Math.max(0, 1 - j * dSkala)})`;
            el.style.opacity = simpan ? 0 : Math.max(0, 1 - j * dRedup);
            el.style.zIndex = 50 - j;
            el.classList.toggle('is-simpan', simpan);
            el.classList.toggle('is-aktif', d === 0);
            el.setAttribute('aria-hidden',simpan);

            if (lompat){
                el.offsetWidth;
                el.style.transition = '';
            }
            el.dataset.d = d;
        });

        dots.forEach((b, i) => b.setAttribute('aria-current', i === aktif));
    }

    function ke(i){
        aktif = BISA_PUTAR ? ((i % n) + n) % n : Math.max(0, Math.min(n - 1, i));
        gambar();
    }

    const geser = (langkah) => ke(aktif + langkah);

    kartu.forEach((el, i) => el.addEventListener('click', () => {
        if(!habisGeser) ke(i);
    }))

    dots.forEach((b, i) => b.addEventListener('click', () => ke(i)));
    wrap.querySelector('.cf-prev').addEventListener('click', () => geser(-1));
    wrap.querySelector('.cf-next').addEventListener('click', () => geser(1));

    akar.tabIndex = 0;
    akar.addEventListener('keydown', (e)=>{
        if (e.key === 'ArrowLeft') {e.preventDefault(); geser(-1);}
        if (e.key === 'ArrowRight') {e.preventDefault(); geser(1);}
    });

    let mulaiX = null;
    akar.addEventListener('pointerdown', (e) =>{
        mulaiX = e.clientX;
        habisGeser = false;
    });
    akar.addEventListener('pointermove', (e) => {
        if(mulaiX === null || habisGeser) return;
        const beda = e.clientX - mulaiX;
        if (Math.abs(beda) > 60){
            geser(beda < 0 ? 1 : -1);
            habisGeser = true;
        }
    });
    ['pointerup', 'pointercancel', 'pointerleave'].forEach((nama)=>
    akar.addEventListener(nama, () => {mulaiX = null; }));

    let jedaRoda = 0;
    akar.addEventListener('wheel', (e) =>{
        if (Math.abs(e.deltaX) < Math.abs(e.deltaY)) return;
        e.preventDefault();
        if (Date.now() - jedaRoda < 320) return;
        jedaRoda = Date.now();
        geser(e.deltaX > 0 ? 1 : -1);
    }, { passive: false});

    window.addEventListener('resize', gambar);

    gambar();
}

