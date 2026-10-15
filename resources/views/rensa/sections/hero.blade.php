@php
$slides = [
    [
        'gambar' => 'img/gambar1.webp',
        'judul' => 'Title 1',
        'teks' => 'Description 1'
    ],
    [
        'gambar' => 'img/gambar2.webp',
        'judul' => 'Title 2',
        'teks' => 'Description 2'
    ]
];
@endphp


<section id="hero" class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
     @foreach ($slides as $slide)
        <button type="button" 
        data-bs-target="#heroCarousel" 
        data-bs-slide-to="{{ $loop->index }}" 
        @class(['active' => $loop->first]) 
        aria-label="Slide {{ $loop->iteration}}"></button>
     @endforeach
    </div>
    
    <div class="carousel-inner">
        @foreach ($slides as $slide)
        <div @class(['carousel-item', 'active' => $loop->first])>
           <img src="{{ asset($slide['gambar']) }}" 
           alt="{{ $slide['judul'] }}" class="hero-img" loading="lazy">
            
           <div class="hero-caption">
                <div class="container">
                <h1>{{ $slide['judul'] }}</h1>
                <p>{{ $slide['teks'] }}</p>
                <a href="#katalog" class="btn-rensa">Lihat Katalog <i class="bi bi-arrow-right"></i></a>
                </div>
           </div>
        </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>    
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
    </button>

</div>
</section>