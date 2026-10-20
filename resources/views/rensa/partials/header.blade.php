@php
    $menu = [
        ['label' => 'Home', 'href' => '#hero'],
        ['label' => 'Katalog', 'href' => '#katalog'],
        ['label' => 'Store', 'href' => '#store'],
        ['label' => 'FAQ', 'href' => '#faq'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp
<header class="header">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ url('/')}}" class="logo">
        <img src="img/Rensa Logo Ori Black.svg" alt="logo rensa" class="logohitam">
        <img src="img/Rensa Logo Ori White.svg" alt="logo rensa" class="logoputih">
        </a>
        <nav class="navmenu">
            <ul>
                @foreach ($menu as $menu)
                    <li><a href="{{ $menu['href'] }}">{{ $menu['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        <button type="button" class="nav-toggle" aria-label="Buka Menu" expanded="false">
            <i class="bi bi-list"></i>
        </button>
        
        <a href="https://api.whatsapp.com/send?phone=6281547204444&text=Hello%20Toko%20Interior%20dan%20Decorator%20%7C%20Pusat%20WPC%21" class="btn-rensa btn-konsultasi" target="_blank" rel="noopener">
            Konsultasi
        </a>
        
        

    </div>
</header>