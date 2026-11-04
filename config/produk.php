<?php

return [

    // Kiri = slug (dipakai di link), kanan = nama yang tampil
    'kategori' => [
        'wallpanel'        => 'Wallpanel',
        'wallboard'        => 'Wallboard',
        'spc-flooring'     => 'SPC Flooring',
        'vinyl-flooring'   => 'Vinyl Flooring',
        'bamboo-board'     => 'Bamboo Board',
        'uv-marble'        => 'UV Marble',
        'plafon'           => 'Plafon',
        '3d-wallpanel'     => '3D Wallpanel',
        'ceiling-outdoor'  => 'Ceiling Outdoor',
        'decking-outdoor'  => 'Decking Outdoor',
        'moulding'         => 'Moulding',
        'kisi-kisi-hollow' => 'Kisi-Kisi Hollow',
        'pu-stone'         => 'PU Stone',
        'sandblast'        => 'Sandblast',
        'pohon-rumput'     => 'Pohon Rumput',
    ],

    // Semua produk. Satu [ ... ] = satu produk, dan semua datanya ada DI DALAM kurung itu.
    'items' => [

        // ===== Produk 1: detail lengkap =====
        [
            'slug'      => 'plafon-pvc-plr-series',
            'nama'      => 'Plafon PVC PLR Series',
            'kategori'  => 'plafon',
            'ukuran'    => '15cm (L) x 290cm (P) x 9mm (T)',
            'gambar'    => 'img/gambar1.webp',
            'tanggal'   => '2026-10-20',
            'limited'   => true,
            'deskripsi' => 'Wallpanel adalah material penutup dinding yang dipasang di permukaan tembok untuk menutupi kekurangan ataupun membuat tampilan ruangan jadi lebih cantik dan rapi. Terbuat dari bahan PVC dengan berbagai pilihan warna. Memiliki desain khusus yang membuatnya aman dipasang pada dinding yang tidak rata dan lembab sekalipun.',
            'struktur'  => 'img/gambar1.webp',

            'spesifikasi' => [
                'Isi'                 => '10pcs/box (4.64m²)',
                'Material Pemasangan' => 'Lem Sealant, Kuncian Wallpanel, Baut',
            ],

            'kode' => [
                ['kode' => 'RP06', 'nama' => 'French Walnut', 'motif' => 'img/gambar1.webp', 'foto' => 'img/gambar1.webp'],
                ['kode' => 'RP07', 'nama' => 'Ash Latte',     'motif' => 'img/gambar2.webp', 'foto' => 'img/gambar2.webp'],
                ['kode' => 'RP08', 'nama' => 'Natural Oak',   'motif' => 'img/gambar1.webp', 'foto' => 'img/gambar1.webp'],
                ['kode' => 'RP09', 'nama' => 'Dark Walnut',   'motif' => 'img/gambar2.webp', 'foto' => 'img/gambar2.webp'],
            ],

            // 'ikon' = nama ikon Bootstrap Icons (tanpa "bi-"), bukan alamat gambar
            'keunggulan' => [
                ['ikon' => 'stars',        'label' => 'Mudah Dibersihkan'],
                ['ikon' => 'droplet',      'label' => 'Anti Air'],
                ['ikon' => 'bug',          'label' => 'Anti Rayap'],
                ['ikon' => 'shield-check', 'label' => 'Tahan Lama'],
            ],

            'galeri' => [
                ['foto' => 'img/gambar1.webp', 'kode' => 'RP06'],
                ['foto' => 'img/gambar2.webp', 'kode' => 'RP07'],
                ['foto' => 'img/gambar1.webp', 'kode' => 'RP08'],
                ['foto' => 'img/gambar2.webp', 'kode' => 'RP09'],
            ],
        ],   // ← kurung tutup produk 1

        // ===== Produk lain: data pendek dulu =====
        ['slug' => 'wpc-premium-series-zpsb', 'nama' => 'WPC Premium Series ZPSB', 'kategori' => 'wallpanel',      'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar2.webp', 'tanggal' => '2026-10-18'],
        ['slug' => 'wallpanel-series',        'nama' => 'Wallpanel Series',        'kategori' => 'wallpanel',      'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar1.webp', 'tanggal' => '2026-10-20'],
        ['slug' => 'wallboard-series',        'nama' => 'Wallboard Series',        'kategori' => 'wallboard',      'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar1.webp', 'tanggal' => '2026-10-20'],
        ['slug' => 'vinyl-series',            'nama' => 'Vinyl Series',            'kategori' => 'vinyl-flooring', 'ukuran' => '15cm (L) x 290cm (P) x 9mm (T)', 'gambar' => 'img/gambar1.webp', 'tanggal' => '2026-10-20'],

    ],   // ← kurung tutup 'items'

];   // ← kurung tutup return