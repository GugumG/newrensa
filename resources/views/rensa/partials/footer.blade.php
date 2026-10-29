@php

  $sosmed= [
      ['ikon' => 'instagram','link' => 'https://www.instagram.com/rensa_id/'],
      ['ikon' => 'facebook', 'link' => 'https://www.facebook.com/p/RENSA-Interior-Decoration-61565434780323/'],
      ['ikon' => 'tiktok' , 'link' => 'https://www.tiktok.com/@rensa.id'],
  ];

  $menuFooter = [
      ['label' => 'Katalog', 'href' => '#katalog'],
      ['label' => 'Hasil Pasang', 'href' => '#testimoni']
  ];

  $menuFooter2 = [
      ['label' => 'About Us', 'href' => '#about'],
      ['label' => 'Contact Us', 'href' => '#contactus'],
      ['label' => 'Artikel', 'href' => '#artikel'],
      ['label' => 'Kalkulator','href' => '#kalkulator'],
      ['label' => 'Privacy Policy','href' => '#']
  ];

  $menuFooter3 = [
      ['icon' => 'whatsapp', 'label' => '+62 815-4600-4444'],
      ['icon' => 'Envelope', 'label' => 'info@rensa.id']
  ];
@endphp
<footer class="footer">
    <div class="container">
      <div class="row g-4">
          <div class="col-lg-5 footer-card">
              <a href="{{url('/')}}" class="footer-logo">
                <img src="{{asset('img/Rensa Logo Ori Black.svg')}}" alt="Rensa">
              </a>
              <div class="col-lg-6">
                <p>Jl. Baros No.52, Leuwigajah, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40521</p>
              </div>
              </a>
              
            <div class="footer-sosmed">
                <a href="" class="followus">Follow Us</a>
                @foreach ($sosmed as $item)
                  <a href="{{$item['link']}}" target="_blank" rel="noopener" aria-label="{{ucfirst($item['ikon'])}}" class="footer-btn">
                    <i class="bi bi-{{$item['ikon']}}"></i>
                  </a>
                @endforeach
            </div>
          </div>

          <div class="col4 col-lg-2 menufooter">
            <h4>Produk</h4>
            <ul>
              @foreach ($menuFooter as $item)
                <li><a href="{{$item['href']}}" class="footer-menu">{{$item['label']}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col4 col-lg-2">
            <h4>Informasi & Layanan</h4>
            <ul>
              @foreach ($menuFooter2 as $item)
                <li><a href="{{$item['href']}}" class="footer-menu">{{$item['label']}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col4 col-lg-2">
            <h4>Customer Service</h4>
            <ul>
              @foreach ($menuFooter3 as $item)
              <i class="bi bi-{{$item['icon']}}"><span>{{$item['label']}}</span></i>
              @endforeach
            </ul>
          </div>
      </div>
</div>
</footer>
<div class="footerter text-center">
        <p>© <span>2026 |</span> <strong>Rensa ID</strong> <span>All Rights Reserved</span></p>
    </div>
</body>
</html>