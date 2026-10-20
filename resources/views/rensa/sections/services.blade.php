@php 
$layanan = [
    ['gambar' => 'tools','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ['gambar' => 'truck','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ['gambar' => 'chat-heart','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ['gambar' => 'box','judul' => 'Pengiriman Cepat','text' => 'Kami menyediakan pengiriman langsung kepada user'],
    ];
@endphp

<section id="services" class="section services">
    <div class="container">
        <div class="section-title">
            <h2>Our Service</h2>
        </div>
    </div>
    <div class="cf-warp" data-coverflow data-auto="4000">
        <div class="cf">
            <div class="cf-track">
                @foreach ($layanan as $item)
                <div class="cf-item">
                    <i class="bi bi-{{ $item['gambar'] }} cf-ikon"></i>
                    <h3>{{ $item['judul']}}</h3>
                    <p>{{ $item['text']}}</p>
                </div>
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