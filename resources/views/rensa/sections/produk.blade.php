@extends('rensa.layout')

@section('title',$produk['nama'] . ' - Rensa')

@section('body-class', 'scrolled')

@section('content')

@php
    $varian = $produk['kode'] ?? [];
    $spesifikasi = ['Ukuran' => $produk['ukuran']] + ($produk['spesifikasi'] ?? []);
    $keunggulan = $produk['keunggulan'] ?? [];
    $galeri = $produk['galeri'] ?? [];

    $sliderKode = $varian ?: [['kode' => null],'nama' => null, 'foto' => $produk['gambar']];

    $dataKode = collect($varian)->keyBy('kode');
@endphp

    <section class="pd-atas">
        <div class="container">

            <nav class="breadcrumb-rensa" aria-label="Breadcrumb">
                <a href="{{url('/')}}" aria-label="Beranda" ><i class="bi bi-house-door-fill"></i></a>
                <span>/</span>
                <a href="{{route('katalog')}}" aria-label="Katalog" class="breadcrumb-link">Katalog</a>
                <span>/</span>
                <span aria-current="page">Detail Katalog</span>
            </nav>
        
            <div class="row g-4 g-lg-5">
                <div class="col-lg-6">
                    <div class="pd-foto tab-content">
                                @foreach ($sliderKode as $k)
                                    @php
                                      $daftarFoto = (array) ($k['foto'] ?? $produk['gambar']);
                                      $idSlider = 'slider-'.$loop->index;  
                                    @endphp

                                    <div @class(['tab-pane', 'fade', 'show active' => $loop->first]) id="kode-{{ $loop->index}}" role="tabpanel">
                                        @if (! empty($k['limited']))
                                            <img src="{{ asset('img/limited.png') }}" alt="Limited Stock" class="pd-limited">
                                        @endif
                                        <div id="{{ $idSlider }}" class="carousel slide" data-bs-touch="true">
                                            @if (count($daftarFoto) > 1)
                                            <div class="carousel-indicators pd-titik">
                                                @foreach ($daftarFoto as $Foto)                                                   
                                                            <button type="button" data-bs-target="#{{ $idSlider }}" data-bs-slide-to="{{$loop->index}}" @class(['active' =>  $loop->first]) aria-label="Foto {{ $loop->iteration}}">
                                                            </button>
                                                @endforeach
                                            </div>
                                            @endif

                                            <div class="carousel-inner">
                                                @foreach ($daftarFoto as $foto)
                                                    <div @class(['carousel-item','active'=>$loop->first])>
                                                        <img src="{{asset($foto)}}" alt="{{$produk['nama']}} {{$k['nama']}}" loading="{{ $loop->parent->first ? 'eager' : 'lazy'}}">
                                                        @if ($k['kode'])
                                                        <span class="pd-caption">{{$k['kode']}} | {{$k['nama']}}</span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                            @if (count($daftarFoto) > 1)
                                                <button class="pd-panah pd-panah-kiri" type="button" data-bs-target="#{{$idSlider}}" data-bs-slide="prev" aria-label="Foto Sebelumnya ">
                                                    <i class="bi bi-chevron-left"></i>
                                                </button>
                                                <button class="pd-panah pd-panah-kanan" type="button" data-bs-target="#{{$idSlider}}" data-bs-slide="next" aria-label="Foto Berikutnya ">
                                                    <i class="bi bi-chevron-right"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                    </div>
                </div>

                {{-- Kanan: nama, tab deskripsi/spesifikasi, kode --}}
                <div class="col-lg-6">
                    <div class="pd-info">
                        <span class="katalog-badge">{{ $kategori[$produk['kategori']] ?? $produk['kategori'] }}</span>
                        <h1 class="pd-judul">{{ $produk['nama'] }}</h1>

                        {{-- Tab Bootstrap: klik tombol = tampilkan isi yang id-nya sama dengan data-bs-target --}}
                        <div class="pd-tab nav" role="tablist">
                            <button class="active" type="button" role="tab" data-bs-toggle="tab" data-bs-target="#tab-deskripsi" aria-controls="tab-deskripsi" aria-selected="true">Deskripsi Produk</button>
                            <button type="button" role="tab" data-bs-toggle="tab" data-bs-target="#tab-spesifikasi" aria-controls="tab-spesifikasi" aria-selected="false">Spesifikasi Produk</button>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-deskripsi" role="tabpanel">
                                <p>{{ $produk['deskripsi'] ?? 'Deskripsi produk tidak tersedia.' }}</p>
                            </div>
                            <div class="tab-pane fade" id="tab-spesifikasi" role="tabpanel">
                                {{-- Tiap baris bisa dibuka-tutup (Collapse Bootstrap). Awalnya kebuka semua ("collapse show") --}}
                                <div class="pd-spek">
                                    @if (! empty($produk['struktur']))
                                        <div class="pd-spek-item">
                                            <button class="pd-spek-judul" type="button" data-bs-toggle="collapse" data-bs-target="#spek-struktur" aria-expanded="true" aria-controls="spek-struktur">
                                                Struktur <i class="bi bi-chevron-up"></i>
                                            </button>
                                            <div class="collapse show" id="spek-struktur">
                                                <div class="pd-spek-isi">
                                                    <img src="{{ asset($produk['struktur']) }}" alt="Struktur {{ $produk['nama'] }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @foreach ($spesifikasi as $label => $isi)
                                        <div class="pd-spek-item">
                                            <button class="pd-spek-judul" type="button" data-bs-toggle="collapse" data-bs-target="#spek-{{ $loop->index }}" aria-expanded="true" aria-controls="spek-{{ $loop->index }}">
                                                {{ $label }} <i class="bi bi-chevron-up"></i>
                                            </button>
                                            <div class="collapse show" id="spek-{{ $loop->index }}">
                                                <div class="pd-spek-isi">{{ $isi }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($varian)
                        <h2 class="pd-kode-judul">Kode</h2>

                        {{-- Kotak kode = tombol Tab Bootstrap: klik = slider kiri ganti ke foto-foto kode ini --}}
                        <div class="pd-kode" role="tablist">
                            @foreach ($varian as $v)
                                <button type="button" role="tab" data-bs-toggle="tab" data-bs-target="#kode-{{ $loop->index }}"
                                    @class(['active' => $loop->first]) aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                    title="{{ $v['kode'] }} | {{ $v['nama'] }}" aria-label="{{ $v['kode'] }} {{ $v['nama'] }}">
                                    <img src="{{ asset($v['motif']) }}" alt="">
                                    @if (! empty($v['limited']))
                                        <span class="pd-kode-limited">Limited Stock</span>
                                    @endif
                                </button>
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>


    @if ($keunggulan)
        <section class="pd-keunggulan">
            <div class="container">
                <div class="pd-keunggulan-grid">
                    @foreach ($keunggulan as $k)
                        <div class="pd-keunggulan-item">
                            <i class="bi bi-{{$k['ikon']}}"></i>
                            <span>{{$k['label']}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($galeri)
        <section class="section pd-galeri">
            <div class="container">
                <div class="section-title">
                    <h2>Galeri Produk</h2>
                </div>
                <div id="galeriProduk" class="carousel slide" data-bs-touch="true">
                    <div class="carousel-inner">
                        @foreach ($galeri as $g)
                            @php 
                                $v = $dataKode[$g['kode']] ?? null;
                            @endphp
                            <div @class(['carousel-item', 'active' => $loop->first])>
                                <img src="{{ asset($g['foto']) }}" alt="Hasil Pasang {{ $produk['nama'] }}" class="pd-galeri-foto" loading="lazy">
                               <a href="{{ asset($g['foto']) }}" class="pd-zoom" target="_blank" rel="noopener" aria-label="Zoom In">
                                    <i class="bi bi-zoom-in"></i>
                                </a>

                                @if ($v)
                                <div class="pd-galeri-kode">
                                    <img src="{{ asset($v['motif']) }}" alt="{{ $v['kode'] }} | {{ $v['nama'] }}" loading="lazy">
                                    
                                    <div>
                                        <strong>{{ $v['kode'] }}</strong>
                                        <span>{{ $v['nama'] }}</span>
                                    </div>
                                </div>
                                @endif
                            </div>
                        @endforeach
                </div>
            </div>

            <div class="pd-thumb-wrap">
                <button class="pd-panah pd-panah-kiri" type="button" data-bs-target="#galeriProduk" data-bs-slide="prev" aria-label="Foto Sebelumnya">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <div class="pd-thumb">
                    @foreach ($galeri as $g)
                        <button type="button" data-bs-target="#galeriProduk" data-bs-slide-to="{{ $loop->index }}" @class(['aktif' => $loop->first]) aria-label="Foto hasil pasang {{ $loop->iteration }}">
                            <img src="{{ asset($g['foto']) }}" alt="Hasil Pasang {{ $produk['nama'] }}" loading="lazy">
                        </button>
                    @endforeach
                </div>

                <button class="pd-panah pd-panah-kanan" type="button" data-bs-target="#galeriProduk" data-bs-slide="next" aria-label="Foto Selanjutnya">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </section>
    @endif

    @if ($lainnya->isNotEmpty())
        <section class="pd-lainnya">
            <div class="container">
                <hr class="pd-garis">
                <div class="highlight-head">
                    <h2 class="judul-garis">Produk Lainnya</h2>
                    <a href="{{ route('katalog',['kategori' => $produk['kategori']])}}" class="altbtn-rensa">Lihat Semua</a>
                </div>

                <div class="row g-3 g-md-4">
                    @foreach ($lainnya as $item)
                        <div class="col-6 col-md-4">
                            @include('rensa.partials.kartu-produk')
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection


