@php
$store = [
['gambar' => 'img/gambar1.webp', 'namatoko' => 'Rensa ID IBCC', 'nomor' => '086948548957', 'alamat' => 'Jln.Raya Bandung no.78 Braga Kec.Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'ig' => 'https://www.instagram.com/rensa_id?utm_source=ig_web_button_share_sheet&psln=ZDNlZDc0MzIxNw==', 'maps' => 'https://share.google/lIV1EhEThrnodN9Qy'],
['gambar' => 'img/gambar1.webp', 'namatoko' => 'Rensa ID IBCC', 'nomor' => '086948548957', 'alamat' => 'Jln.Raya Bandung no.78 Braga Kec.Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'ig' => 'https://www.instagram.com/rensa_id?utm_source=ig_web_button_share_sheet&psln=ZDNlZDc0MzIxNw==', 'maps' => 'https://share.google/lIV1EhEThrnodN9Qy'],
['gambar' => 'img/gambar1.webp', 'namatoko' => 'Rensa ID IBCC', 'nomor' => '086948548957', 'alamat' => 'Jln.Raya Bandung no.78 Braga Kec.Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'ig' => 'https://www.instagram.com/rensa_id?utm_source=ig_web_button_share_sheet&psln=ZDNlZDc0MzIxNw==', 'maps' => 'https://share.google/lIV1EhEThrnodN9Qy'],
['gambar' => 'img/gambar1.webp', 'namatoko' => 'Rensa ID IBCC', 'nomor' => '086948548957', 'alamat' => 'Jln.Raya Bandung no.78 Braga Kec.Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'ig' => 'https://www.instagram.com/rensa_id?utm_source=ig_web_button_share_sheet&psln=ZDNlZDc0MzIxNw==', 'maps' => 'https://share.google/lIV1EhEThrnodN9Qy'],
['gambar' => 'img/gambar1.webp', 'namatoko' => 'Rensa ID IBCC', 'nomor' => '086948548957', 'alamat' => 'Jln.Raya Bandung no.78 Braga Kec.Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'ig' => 'https://www.instagram.com/rensa_id?utm_source=ig_web_button_share_sheet&psln=ZDNlZDc0MzIxNw==', 'maps' => 'https://share.google/lIV1EhEThrnodN9Qy'],
];

$halaman = array_chunk($store, 4);
@endphp

<section class="section store" id="store">
    <div class="container">
        <div class="section-title">
            <h2>Store</h2>
        </div>

        <div class="store-banner">
            <p>Kunjungi toko kami untuk produk dan layanan dekorasi terbaik sesuai kebutuhan Anda.</p>
        </div>

        <div id="storeCarousel" class="carousel slide store-carousel" data-bs-wrap="false" data-bs-touch="true">
            <div class="carousel-inner">
                @foreach ($halaman as $isiHalaman)
                    <div class="carousel-item {{$loop->first ? 'active' : '' }}">
                        <div class="row g-4">
                            @foreach ($isiHalaman as $item)
                                @php
                                    $wa = preg_replace('/^0/','62', preg_replace('/\D/','', $item['nomor']));
                                @endphp
                                <div class="col-md-6">
                                    <div class="store-card">
                                        <img src="{{ asset($item['gambar'])}}" alt="{{$item['namatoko']}}" class="store-foto" loading="lazy">

                                        <div class="store-isi">
                                            <div class="store-atas">
                                                <h4>{{ $item['namatoko'] }}</h4>
                                                <a href="{{$item['ig']}}" class="store-ig" target="_blank" rel="noopener" aria-label="Instagram {{$item['namatoko']}}">
                                                    <i class="bi bi-instagram"></i>
                                                </a>
                                            </div>

                                            <a href="https://wa.me/{{$wa}}" class="store-telp" target="_blank" rel="noopener">
                                                <i class="bi bi-telephone-fill"></i>{{$item['nomor']}}
                                            </a>

                                            <p>{{$item['alamat']}}</p>
                                            <a href="{{$item['maps']}}" class="store-maps" target="_blank" rel="noopener">Lihat Maps</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @if (count($halaman) > 1)
            <div class="store-nav-wrap">
                <button type="button" class="store-nav" data-bs-target="#storeCarousel" data-bs-slide="prev" aria-label="Sebelumnya" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" class="store-nav" data-bs-target="#storeCarousel" data-bs-slide="next" aria-label="Berikutnya" >
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        @endif
    </div>
</section>