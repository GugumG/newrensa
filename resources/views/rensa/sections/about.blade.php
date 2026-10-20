@php
    $about = [
        'gambar' => 'img/gambar2.webp',
        'paragraf' => [
            'Rensa Wallpaper mengutamakan kepuasan belanja konsumennya, selain menyediakan beberapa kebutuhan konsumen yang ready stock dengan harga produk yang sangat terjangkau dan orang-orang profesional dibidangnya,',
            'kami pun sangat memperhatikan kenyamanan konsumen dalam melakukan aktivitas belanja di toko-toko kami.',
            ]
    ];

     $stats = [
        ['gambar' => 'img/shield.png', 'label' => 'Terpercaya 12 Tahun'],
        ['gambar' => 'img/bintang.png', 'label' => 'Terbaik dalam kualitas'],
        ['gambar' => 'img/indo.png', 'label' => 'Tersebar se indonesia'],
    ];
@endphp

<section id="about" class="section about">
    <div class="container">
            <div class="row align-item-center g-4 g-lg-5">
                <div class="col-lg-6 gallery-card order-last order-lg-first">
                    <h2 class="judul-garis">ABOUT US</h2>
                    @foreach ($about['paragraf'] as $paragraf)
                        <p>{{ $paragraf }}</p>
                    @endforeach 
                    <div class="col-lg-6">
                        <div class="stats-grid">
                            @foreach ($stats as $item)
                            <div class="stats-item">
                                <img src="{{ asset( $item['gambar']) }}" alt="">
                                <span class="stats-label">{{ $item['label']}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 gallery-card">
                    <div class="gallery-img">
                        <img src="{{ asset($about['gambar']) }}" class="about-img" loading="lazy" alt="Tentang Rensa">
                    </div>
                        <a href="#katalog" class="altbtn-rensa">Lihat Detail </a>
                </div>

                
            </div>
    </div>
</section>