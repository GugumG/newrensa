@php

$produk =[
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (1).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (2).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (3).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (4).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (5).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (6).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (7).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1 (8).png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
    ['nama' => 'Wallpanel', 'gambar' => 'img/produk/ZWK04 1.png', 'link' => '#', 'text' => 'Panel dinding motif kayu yang dipasang tanpa bongkar tembok, cocok untuk ruang tamu dan kamar.'],
]
@endphp

<section id="katalog" class="section section-alt produk">
    <div class="container">
        <div class="section-title">
            <h2>Product Categories</h2>
        </div>

        <div class="produk-wrap" data-geser>
            <div class="produk-baris">
                @foreach ($produk as $item)
                    <a href="{{$item ['link']}}" class="produk-card">
                        <div class="produk-img">
                            <img src="{{asset($item['gambar'])}}" alt="{{ $item['nama']}}" loading="lazy">
                        </div>
                        <div class="produk-info">
                            <h4>{{$item['nama']}}</h4>
                            <div class="produk-detail">
                            <p>{{$item['text']}}</p>
                            </div>
                            <span class="produk-link"> Lihat Detail  <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                    @endforeach
            </div>
            <div class="produk-bar"><span class="produk-bar-isi"></span></div>
        </div>
    </div>
</section>