@php
$alasan = [
    ['judul' => 'Konsultasi & Survei Gratis','text' => 'Tim kami datang mengukur dan kasih saran material yang cocok'],
    ['judul' => 'Harga jelas dari awal','text' => 'Penawaran tertulis per meter, tanpa biaya tambahan dia akhir.'],
    ['judul' => 'Pemasangan rapi & cepat','text' => 'Kebanyakan ruangan selesai dalam 1-2 hari kerja'],    
];

@endphp

<section id="why-us" class="section why-us">
    <div class="container">
        <div class="section-title">
            <h2>Why Us ?</h2>
        </div>

        <div class="why-wrap">
            <img src="{{ asset('img/gambar1.webp')}}" alt="Showroom Rensa" class="why-img" loading="lazy">
            <div class="why-list">
                @foreach ($alasan as $item)
                    <div class="why-item">
                        <span class="why-number">{{ str_pad($loop->iteration, 2,'0', STR_PAD_LEFT)}}</span>
                        <div class="why-body">
                            <h4>{{$item['judul']}}</h4>
                            <p>{{$item['text']}}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>