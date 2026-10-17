@php 
$layanan = [
    ['gambar' => 'img/gambar1.webp','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ['gambar' => 'img/gambar2.webp','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ['gambar' => 'img/gambar1.webp','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ['gambar' => 'img/gambar2.webp','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ];
@endphp

<section id="services" class="section services">
    <!-- <img src="img/gambar1.webp" class="service-img"> -->
    <div class="container">
        <div class="section-title">
            <h2>Our Service</h2>
            <p>Kami menyediakan pengiriman langsung kepada user.</p>
        </div>
    </div>
    <div class="cf-warp" data-coverflow>
        <div class="cf">
            <div class="cf-track">
                @foreach ($layanan as $item)
                <figure class="cf-item">
                    <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" loading="lazy">
                    <figcaption class="cf-cap">
                        <h3>{{  $item['judul'] }}</h3>
                        <p>{{  $item['text']  }}</p>
                    </figcaption>
                </figure>
                @endforeach
            </div>

            <button type="button" class="cf-nav cf-prev" aria-label="Sebelumnya"><i class="bi bi-chevron-left"></i></button>
            <button type="button" class="cf-nav cf-next" aria-label="Berikutnya"><i class="bi bi-chevron-right"></i></button>
        </div>

        <div class="cf-dots">
            @foreach ($layanan as $item)
            <button type="button" aria-label="ke slide {{ $loop->iteration }}"></button>
            @endforeach
        </div>
    </div>
</section>