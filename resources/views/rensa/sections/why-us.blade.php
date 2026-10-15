@php
$alasan = [
    ['judul' => 'Konsultasi & Survei Gratis','text' => 'Tim kami datang mengukur dan kasih saran material yang cocok'],
    ['judul' => 'Harga jelas dari awal','text' => 'Penawaran tertulis per meter, tanpa biaya tambahan dia akhir.'],
    ['judul' => 'Pemasangan rapi & cepat','text' => 'Kebanyakan ruangan selesai dalam 1-2 hari kerja'],    
];

@endphp

<section id="why-us" class="section section-alt why-us">
    <div class="container">
        <div class="row align-item-center g-4 g-lg-5">

            <div class="col-lg-6 order-lg-2">
                <img src="{{ asset('img/pemasangan/13.jpg') }}" alt="Pemasangan wallpanel" class="why-img" loading="lazy">
            </div>

            <div class="col-lg-6">
                <span class="eyebrow">Why Us</span>
                <h2>Kenapa Pilih Rensa?</h2>

                <div class="why-list">
                    @foreach ($alasan as $item)
                        <div class="why-item">
                            <span class="why-number">{{ str_pad($loop->iteration, 2, '0',STR_PAD_LEFT) }}</span>
                        </div>
                        <div>
                            <h4>{{ $item['judul'] }}</h4>
                            <p>{{ $item['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>