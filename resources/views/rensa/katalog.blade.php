@extends('rensa.layout')

@section('title','Katalog - Rensa')

@section('body-class', 'scrolled')

@section('content')


@php 

$placeholder = $aktif === 'all'
? 'Cari nama produk di semua kategori'
: 'Cari nama produk di kategori' . $kategori[$aktif];
@endphp


<section class="katalog">
    <div class="container">
        <nav class="breadcrumb-rensa" aria-label="Breadcrumb">
            <a href="{{url('/')}}" aria-label="Beranda" ><i class="bi-bi-house-door-fill"></i></a>
            <span class="breadcrumb-garis">/</span>
            <span aria-current="page">Katalog</span>
        </nav>

        <div class="row g-4">
            <aside class="col-lg-3">
                <ul class="katalog-kategori">
                    <li>
                        <a href="{{ route('katalog',['urut' => $urut]) }}" @class(['aktif'=> $aktif === 'all'])>ALL</a>
                    </li>
                    @foreach ($kategori as $slug => $nama)
                        <li>
                            <a href="{{ route('katalog', ['kategori' => $slug, 'urut' => $urut])}}" @class(['aktif' => $aktif === $slug])>{{$nama}}</a>    
                        </li>
                    @endforeach
                </ul>
            </aside>

            <div class="col-lg-9">
                <form action="{{route('katalog')}}" method="GET" class="katalog-alat">
                    @if ($aktif !== 'all')
                        <input type="hidden" name="kategori" value="{{$aktif}}" >
                    @endif

                    <label class="katalog-cari">
                        <i class="bi bi-search"></i>
                        <input type="search" name="cari" value="{{$cari}}" placeholder="{{$placeholder}}" aria-label="Cari Produk">
                    </label>

                    <label class="katalog-urut">
                        <i class="bi bi-filter-left"></i>
                        <select name="urut" onchange="this.form.submit()" aria-label="Urutkan">
                            @foreach ($pilihanUrut as $nilai => $label)
                                <option value="{{$nilai}}" @selected($urut === $nilai)>{{$label}}</option>
                            @endforeach
                        </select>
                        <i class="bi bi-checron-down"></i>
                    </label>
                </form>

                @if ($produk -> isEmpty())
                    <div class="katalog-kosong">
                        <i class="bi bi-search"></i>
                        <h3>Produk tidak ditemukan</h3>
                        <p>Coba gunakan kata kunci lain untuk menemukan produk yang kamu cari</p>
                        <a href="{{route('katalog')}}" class="altbtn-rensa"></a>
                    </div>

                @else
                    <div class="row g-3 g-md-4">
                        @foreach ($produk as $item)
                            <div class="col-6 col-md-4">
                                <article class="katalog-card">
                                    <img src="{{asset($item['gambar'])}}" alt="{{$item['nama']}}" loading="lazy">
                                    <div class="katalog-info">
                                        <span class="katalog-badge">{{$kategori[$item['kategori']] ?? $item['kategori']}}</span>
                                        <h3>{{$item['nama']}}</h3>
                                        <p>{{$item['ukuran']}}</p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection