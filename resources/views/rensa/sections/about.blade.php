@php
    $about = [
        'gambar' => 'images/about.jpg',
        'judul' => 'Tentang Rensa',
        'teks' => 'Rensa adalah perusahaan yang bergerak di bidang interior dan dekorasi, khususnya dalam penyediaan produk WPC (Wood Plastic Composite). Kami berkomitmen untuk memberikan solusi terbaik bagi kebutuhan interior dan dekorasi Anda, dengan produk berkualitas tinggi dan layanan konsultasi yang profesional.',
        'paragraf' => [
            'Rensa didirikan dengan tujuan untuk menghadirkan produk WPC yang inovatif dan ramah lingkungan. Kami percaya bahwa interior yang indah dapat meningkatkan kualitas hidup, dan kami berusaha untuk membantu pelanggan kami mencapai hal tersebut melalui produk-produk kami.',
            'Kami memiliki tim ahli yang siap memberikan konsultasi dan saran terbaik untuk proyek interior dan dekorasi Anda. Dengan pengalaman dan pengetahuan yang luas, kami dapat membantu Anda memilih produk yang sesuai dengan kebutuhan dan preferensi Anda.',
            'Selain itu, Rensa juga berkomitmen untuk menjaga keberlanjutan lingkungan. Produk WPC kami terbuat dari bahan daur ulang, sehingga membantu mengurangi dampak negatif terhadap lingkungan.'
        ]
    ];
@endphp

<section id="about" class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="row align-item-center g-4 g-lg-5">
                <div class="col-lg-3">
                   <span>5 showroom</span>
                </div>
                <div class="col-lg-3">
                    <span>5 showroom</span>
                </div>
                <div class="col-lg-3">
                    <span>5 showroom</span>
                </div>
            </div>
            <div class="row align-item-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <span class="eyebrow"> About US</span>
                    <h2>{{ $about['judul'] }}</h2>
                    @foreach ($about['paragraf'] as $paragraf)
                        <p>{{ $paragraf }}</p>
                    @endforeach 
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset($about['gambar']) }}" class="about-img" loading="lazy" alt="Tentang Rensa">
                </div>
            </div>
        </div>
    </div>
</section>