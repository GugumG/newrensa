@extends('rensa.layouts.app')

@section('title','Katalog - Rensa')

@section('content')

@php

        $placeholder = $aktif === 'all'
            ? 'Cari produk, kategori, atau merek'
            : 'Cari produk, kategori, atau merek di ' . $aktif;
@endphp


 <section class="katalog">
    <div class="container">

        <nav class="breadcrumb" aria-label="breadcrumb">
            <a href="{{url('/')}}" aria-label="Beranda"><i class="bi bi-house-door-fill"></i></a>   
            <span class="breadcrumb-garis" >/</span>
            <span aria-current="page">Katalog</span>
        </nav>

        <div class="row g-4">
            <aside class="col-lg-3">
                <ul class="katalog-kategori">
                    <li>
                        <a href="{{route('katalog',['urut' => $urut])}}" @class(['aktif' => $aktif === 'all'])>ALL</a>
                    </li>
                    @foreach ($kategori as $slug => $nama)
                    <li>
                        <a href="{{ route('katalog',['kategori' => $slug, 'urut' => $urut])}}" @class(['aktif' => $aktif === $slug])>
                            {{$nama}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </aside>

            <div class="col-lg-9">
                <form action="{{route('katalog')}}" method="GET" class="katalog-alat">
                    <input type="hidden" name="kategori" value="{{$aktif}}">
                    <input type="hidden" name="urut" value="{{$urut}}">
                    <input type="text" name="cari" placeholder="{{$placeholder}}" value="{{$cari}}">
                    <button type="submit"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
 </section>