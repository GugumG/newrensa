<a href="{{ route('produk.detail', $item['slug']) }}" class="katalog-card">
    <img src="{{ asset($item['carosel1']) }}" alt="{{ $item['nama'] }}" loading="lazy">
    <div class="katalog-info">
        <span class="katalog-badge">{{ $katalog[$item['kategori']] ?? $item['kategori'] }}</span>
        <h3>{{ $item['nama'] }}</h3>
        <p>{{ $item['ukuran'] }}</p>
    </div>
</a>