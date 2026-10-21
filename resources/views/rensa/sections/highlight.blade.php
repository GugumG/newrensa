@php 
$linkKatalog = '#katalog';

$highlight = [
    ['kategori' => 'Bamboo Board', 'nama' => 'Bamboo Board Wood Series', 'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar1.webp'],
    ['kategori' => 'Bamboo Board', 'nama' => 'Bamboo Board Wood Series', 'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar2.webp'],
    ['kategori' => 'Bamboo Board', 'nama' => 'Bamboo Board Wood Series', 'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar1.webp'],
    ['kategori' => 'Bamboo Board', 'nama' => 'Bamboo Board Wood Series', 'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar2.webp'],
];

@endphp

<section id="highlight" class="section highlight">
    <div class="container">
        <div class="highlight-head">
            <h2 class="judul-garis">Product Highlight</h2>
            <a href="{{ $linkKatalog }}" class="altbtn-rensa">Lihat Semua</a>
        </div>

        <div class="produk-warp" data-geser>
            <div class="produk-baris">
                @foreach ($highlight as $item)
                    <a href="{{$linkKatalog}}" class="highlight-card">
                        <img src="{{asset($item['gambar'])}}" alt="{{$item['nama']}}">
                        <div class="highlight-info">
                            <span class="highlight-badge">{{$item['kategori']}}</span>
                            <h4>{{$item['nama']}}</h4>
                            <p>{{$item['ukuran']}}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="produk-bar"><span class="produk-bar-isi"></span></div>
        </div>
    </div>
</section>