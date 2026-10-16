@php
    $stats = [
        ['angka' => '5', 'label' => 'Showroom'],
        ['angka' => '80++', 'label' => 'Total Produk'],
        ['angka' => '14th', 'label' => 'Pengalaman'],
    ]
@endphp


<section class="stats">
    <div class="container">
        <div class="stats-grid">
            @foreach ($stats as $item)
            <div class="stats-item">
                <span class="stats-angka">{{ $item['angka']}}</span>
                <span class="stats-label">{{ $item['label']}}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>