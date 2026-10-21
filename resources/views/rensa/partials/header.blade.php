@php
    $menu = [
        ['label' => 'Beranda', 'href' => '#hero'],
        ['label' => 'Katalog', 'href' => '#katalog'],
        ['label' => 'Hasil Pasang', 'href' => '#testimoni'],
        ['label' => 'Kalkulator', 'href' => '#faq'],
        ['label' => 'Showroom', 'href' => '#store'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp
<header class="header">
    <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ url('/')}}" class="logo">
                <img src="img/Rensa Logo Ori Black.svg" alt="logo rensa" class="logohitam">
                <img src="img/Rensa Logo Ori White.svg" alt="logo rensa" class="logoputih">

            </a>    

            <nav class="navmenu" id="navmenu">
                <div class="navmenu-head">
                    <a href="{{ url('/')}}" class="logo">
                        <img src="img/Rensa Logo Ori Black.svg" alt="logo rensa" class="logo awal">
                        <!-- <img src="img/Rensa Logo Ori Black.svg" alt="logo rensa" class="logo"> -->

                    </a>
                    <!-- <img src="{{asset('img/Rensa Logo Ori Black.svg')}}" alt="logo rensa" > -->
                    <button type="button" class="nav-close" aria-label="Tutup Menu">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <ul>
                    @foreach ($menu as $menu)
                        <li><a href="{{ $menu['href'] }}">{{ $menu['label'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
        <div class="nav-overlay"></div> 
            <button type="button" class="nav-toggle" aria-label="Buka Menu" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>
            
            <a href="https://api.whatsapp.com/send?phone=6281547204444&text=Hello%20Toko%20Interior%20dan%20Decorator%20%7C%20Pusat%20WPC%21" class="btn-rensa btn-konsultasi" target="_blank" rel="noopener">
                Konsultasi
            </a>
            
        
    </div>
</header>