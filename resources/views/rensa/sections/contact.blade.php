@php 
$kontak = [
    ['ikon' => 'geo-alt', 'label' => 'Alamat', 'isi' => 'Jl.Baros No. 52, Leuwihgajah, Cimahi Selatan'],
    ['ikon' => 'whatsapp', 'label' => 'WhatsApp', 'isi' => '0857-2093-2145'],
    ['ikon' => 'Envelope', 'label' => 'Email', 'isi' => 'info@rensa.id'],
    ];

$mapsEmbed = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4698.466548619952!2d107.53638289999999!3d-6.8969964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e58b14dbdbe5%3A0xbf4ac8437c9d8527!2sRensa%20Interior%20Decoration%20Office!5e1!3m2!1sid!2sid!4v1792746090739!5m2!1sid!2sid';
@endphp

<section id="contact" class="section contact">
    <div class="container">
        <div class="container-title">
            <h2>CONTACT US</h2>
        </div>
        <div class="contact-card">
            <div class="row-lg-0">
                <div class="col-lg-5">
                    <div class="contact-kiri">
                        <h2 class="contact-judul">Yuk,Ceritakan Kebutuhanmu</h2>
                        <p class="contact-ajakan">Punya pertanyaan tentang produk, design, atau pemasangan? Kirim Pesan kamu melalui form di samping dan tim Rensa siap membantu.</p>

                        <ul class="contact-info">
                            @foreach ($kontak as $item)
                                <li> 
                                    <i class="bi bi-{{$item['ikon']}}"></i>
                                    <span>{{ $item['isi'] }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <iframe src="{{$mapsEmbed}}" class="contact-map" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="" class="contact-form">
                        <h3 class="contact-judul">Kirim Pesan</h3>

                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" placeholder="Masukan Nama" required>
                            </div>
                            <div class="col-12">
                                <label for="telepon" class="form-label">No.Telepon</label>
                                <input type="tel" id="telepon" class="form-control" placeholder="Masukan Nomor Telepon Anda">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <small>(Optional)</small></label>
                                <input type="email" id="email" class="form-control" placeholder="Masukan Alamat Email Anda">
                            </div>
                            <div class="col-12 contact-aksi">
                                <label for="pesan">Pesan</label>
                                <textarea rows="5" id="pesan" class="form-control" placeholder="Masukan pesan atau pertanyaan" required></textarea>
                            </div>
                            <div class="col-12 contact-aksi">
                                <button type="submit" class="btn-rensa">Kirim</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>