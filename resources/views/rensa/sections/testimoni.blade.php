@php

$testimoni =[
    ['nama' => 'Adam', 'peran' => 'Local Guide', 'foto' => '', 'review' => 'Pengiriman bagus dan cepat', 'bintang' => '5'],
    ['nama' => 'Adam', 'peran' => 'Local Guide', 'foto' => '', 'review' => 'Pengiriman bagus dan cepat', 'bintang' => '2'],
    ['nama' => 'Adam', 'peran' => 'Local Guide', 'foto' => '', 'review' => 'Pengiriman bagus dan cepat', 'bintang' => '3'],
    ['nama' => 'Adam', 'peran' => 'Local Guide', 'foto' => '', 'review' => 'Pengiriman bagus dan cepat', 'bintang' => '4'],
];
@endphp

<section id="testimoni" class="section testimoni">
    <div class="container">
        <div class="section-title">
            <h2>Testimoni</h2>
        </div>

        <div class="row align-item-center g-4">
            <div class="col-lg-3">
                <img src="img/katamereka.webp" alt="katamereka" class="testi-judul-img">
            </div>

            <div class="col-lg-9" data-testi>
                <div class="testi-baris">
                    @foreach ($testimoni as $item)
                        <div class="testi-card">
                            <div class="testi-bintang" aria-label="{{$item['bintang']}} dari 5 bintang">
                                @for ($i = 1; $i <=5;$i++)
                                    <i class="bi {{$i <= $item['bintang'] ? 'bi-star-fill' : 'bi-star'}}"></i>
                                @endfor
                            </div>

                            <p class="testi-teks">{{$item['review']}}</p>

                            <div class="testi-orang">
                                @if($item['foto'])
                                    <img src="{{ assets($item['foto'])}}" alt="{{ $item['nama']}}">
                                @else
                                    <span class="testi-foto">{{ mb_substr($item['nama'], 0, 1)}}</span>
                                @endif

                                <div>
                                    <h4>{{$item['nama']}}</h4>
                                    <span class="testi-peran">{{$item['peran']}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="testi-nav-wrap">
                    <button type="button" class="testi-nav testi-prev" aria-label="Sebelumnya" >
                        <i class="bi bi-chevron-left"></i>
                    </button>
                     <button type="button" class="testi-nav testi-next" aria-label="Berikutnya" >
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
