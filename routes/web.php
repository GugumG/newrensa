<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('rensa/index');
});

Route::get('/katalog', function(){
    $kategori = config('produk.kategori');
    $pilihanUrut = ['terbaru' => 'Terbaru', 'nama-az' => 'Nama A-Z' , 'nama-za' => 'Nama Z-A'];

    $aktif = request('kategori','all');
    $cari = (string) request ('cari');
    $urut = request('urut','terbaru');

    if(! isset($kategori[$aktif])){
        $aktif = 'all';
    }
    if(! isset($pilihanUrut[$urut])){
        $urut = 'terbaru';
    }

    $produk = collect(config('produk.items'))
    ->when($aktif !== 'all', fn ($daftar) => $daftar->where('kategori',$aktif))

    ->when($cari !== '', fn($daftar) => $daftar->filter(fn ($item) => str_contains(strtolower($item['nama']),strtolower($cari))));

    $produk = match ($urut){
        'nama-az' => $produk->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE),
        'nama-za' => $produk->sortByDesc('nama', SORT_NATURAL | SORT_FLAG_CASE),
        default => $produk->sortByDesc('tanggal'),
    };

    return view('rensa.katalog', [
        'kategori' => $kategori,
        'pilihanUrut' => $pilihanUrut,
        'aktif'=> $aktif,
        'cari' => $cari,
        'urut' => $urut,
        'produk' =>$produk,
    ]);
})->name('katalog');


Route::get('/katalog/{slug}', function($slug){
    $semua = collect(config('produk.items'));
    $produk = $semua->firstWhere('slug',$slug);

    abort_if(!$produk, 404);

    $lainnya = $semua
    ->where('slug','!=',$slug)
    ->sortByDesc(fn ($item) => $item['kategori'] === $produk['kategori'])
    ->take(3);

    return view('rensa.produk', [
        'produk' => $produk,
        'kategori' => config('produk.kategori'),
        'lainnya' => $lainnya,
    ]);
})->name('produk.detail');