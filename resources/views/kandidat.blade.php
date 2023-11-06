@extends('layouts.main')

@section('content')

  <!-- Start Breadcrumbs Section -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Profil Kandidat</h1>
            <ul class="breadcrumb-nav">
              <li><a href="/">Home</a></li>
              <li>Kandidat</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs Section  -->

  <!-- Start Profil Kandidat Section -->
  <div class="feature section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Why choose us</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Paslon BKM UCIC</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">Terdapat 2 Paslon dari BKM UCIC</p>
            </div>
          </div>
        </div>


    <section class="profil-kandidat section">
    <div class="row justify-content-center">
          <div class="col-lg-5 col-md-8 col-12 wow fadeInUp" data-wow-delay=".2s">
            <div class="feature-box">
              <div class="img-offset">
                <img src="{{ asset('assets_landing/images/features/no1.png') }}" alt="image" />
              </div>
              <div class="tumb">
                <img src="{{ asset('assets_landing/images/kandidat/bkm1.png') }}" alt="image" />
              </div>
              <h4 class="text-title">Yonatan & Primasari Dea A</h4>
              <p>"Pasangan Kandidat Nomor 1"</p>
              <div class="button-feature">
                <a href="/visi-misi" class="button">
                  <?xml version="1.0" encoding="utf-8"?>
                  <svg fill="#1C2033" width="52" class="icon-btn" height="52" version="1.1" id="lni_lni-briefcase" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background: new 0 0 64 64" xml:space="preserve">
                    <path
                      d="M56,13.2H44.8V7.7c0-2.9-2.4-5.3-5.3-5.3H24.4c-2.9,0-5.3,2.4-5.3,5.3v5.5H8c-3.4,0-6.3,2.8-6.3,6.3v35.8
                      c0,3.4,2.8,6.3,6.3,6.3h48c3.4,0,6.3-2.8,6.3-6.3V19.5C62.2,16,59.4,13.2,56,13.2z M23.7,7.7C23.7,7.3,24,7,24.4,7h15.1
                      c0.4,0,0.8,0.3,0.8,0.8v5.5H23.7V7.7z M57.7,55.3c0,1-0.8,1.8-1.8,1.8H8c-1,0-1.8-0.8-1.8-1.8V19.5c0-1,0.8-1.8,1.8-1.8h48
                      c1,0,1.8,0.8,1.8,1.8V55.3z" />
                  </svg>

                  Visi & Misi
                  <div class="arrow">›</div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-12 wow fadeInUp" data-wow-delay=".4s">
            <div class="feature-box">
              <div class="img-offset">
                <img src="{{ asset('assets_landing/images/features/no2.png') }}" alt="imagw" />
              </div>
              <div class="tumb">
                <img src="{{ asset('assets_landing/images/kandidat/bkm2.jpg') }}" alt="" />
              </div>
              <h4 class="text-title">Andika Adi P & Novita Putri</h4>
              <p>"Pasangan Kandidat No 2"</p>
              <div class="button-feature">
                <a href="/visi-misi" class="button">
                  <?xml version="1.0" encoding="utf-8"?>
                  <svg fill="#1C2033" width="52" class="icon-btn" height="52" version="1.1" id="lni_lni-briefcase" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background: new 0 0 64 64" xml:space="preserve">
                    <path
                      d="M56,13.2H44.8V7.7c0-2.9-2.4-5.3-5.3-5.3H24.4c-2.9,0-5.3,2.4-5.3,5.3v5.5H8c-3.4,0-6.3,2.8-6.3,6.3v35.8
                    c0,3.4,2.8,6.3,6.3,6.3h48c3.4,0,6.3-2.8,6.3-6.3V19.5C62.2,16,59.4,13.2,56,13.2z M23.7,7.7C23.7,7.3,24,7,24.4,7h15.1
                    c0.4,0,0.8,0.3,0.8,0.8v5.5H23.7V7.7z M57.7,55.3c0,1-0.8,1.8-1.8,1.8H8c-1,0-1.8-0.8-1.8-1.8V19.5c0-1,0.8-1.8,1.8-1.8h48
                    c1,0,1.8,0.8,1.8,1.8V55.3z" />
                  </svg>

                  Visi & Misi
                  <div class="arrow">›</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Kandidat BKM Section -->

     <!-- Start Kandidat HIMABIS Section -->
     <div class="feature section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Why choose us</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Paslon HIMABIS </h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">Terdapat 1 Paslon dari HIMABIS</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-8 col-12 wow fadeInUp" data-wow-delay=".2s">
            <div class="feature-box">
              <div class="img-offset">
                <img src="{{ asset('assets_landing/images/features/no1.png') }}" alt="image" />
              </div>
              <div class="tumb">
                <img src="{{ asset('assets_landing/images/kandidat/himabis.jpg') }}" alt="image" />
              </div>
              <h4 class="text-title">Siti Zahra & Aditya Firnanda</h4>
              <p>"Kandidat Paslon HIMABIS"</p>
              <div class="button-feature">
                <a href="/visi-misi" class="button">
                  <?xml version="1.0" encoding="utf-8"?>
                  <svg fill="#1C2033" width="52" class="icon-btn" height="52" version="1.1" id="lni_lni-briefcase" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background: new 0 0 64 64" xml:space="preserve">
                    <path
                      d="M56,13.2H44.8V7.7c0-2.9-2.4-5.3-5.3-5.3H24.4c-2.9,0-5.3,2.4-5.3,5.3v5.5H8c-3.4,0-6.3,2.8-6.3,6.3v35.8
                      c0,3.4,2.8,6.3,6.3,6.3h48c3.4,0,6.3-2.8,6.3-6.3V19.5C62.2,16,59.4,13.2,56,13.2z M23.7,7.7C23.7,7.3,24,7,24.4,7h15.1
                      c0.4,0,0.8,0.3,0.8,0.8v5.5H23.7V7.7z M57.7,55.3c0,1-0.8,1.8-1.8,1.8H8c-1,0-1.8-0.8-1.8-1.8V19.5c0-1,0.8-1.8,1.8-1.8h48
                      c1,0,1.8,0.8,1.8,1.8V55.3z" />
                  </svg>

                  Visi & Misi
                  <div class="arrow">›</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  <!-- End Profil Kandidat Section  -->
@endsection