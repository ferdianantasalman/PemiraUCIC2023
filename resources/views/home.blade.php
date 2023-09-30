@extends('layouts.main')

@section('content')
    <!-- Start Hero Section -->
    <section class="hero-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-12 col-12">
            <div class="hero-content text-center mb-5">
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
                PEMIRA
                <span>
                  <img class="text-shape" src="{{ asset('assets_landing/images/hero/text-shape.svg') }}" alt="#" />
                  2023.
                </span>
              </h1>
              <p class="wow fadeInUp" data-wow-delay=".6s">Pemilihan Raya Badan Koordinasi Mahasiswa Universitas Catur Insan Cendekia Cirebon Tahun 2023</p>
            </div>
          </div>
          <div class="col-lg-8 col-12">
            <div class="hero-image">
              <img class="main-image" src="{{ asset('assets_landing/images/hero/hero_vote-5.png') }}" alt="#" />
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1110 320" class="svg-wave"><path fill="#ffffff" fill-opacity="1" d="M0,288L80,277.3C160,267,320,245,480,245.3C640,245,800,267,960,256C1120,245,1280,203,1360,181.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!-- End Hero Section -->

    <!-- Start Kandidat Section -->
    <div class="feature section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Why choose us</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Paslon</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci qui eum mollitia voluptate aspernatur inventore.</p>
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
                <img src="{{ asset('assets_landing/images/kandidat/kandidat.png') }}" alt="image" />
              </div>
              <h4 class="text-title">Kinan & Galih</h4>
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
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
                <img src="{{ asset('assets_landing/images/kandidat/kandidat.png') }}" alt="" />
              </div>
              <h4 class="text-title">Fia & Roy</h4>
              <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit."</p>
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
    <!-- End Kandidat Section -->

    <!-- Start Step Section -->
    <section class="start-process section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Ready to get started?</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Step Voting</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            </div>
          </div>
        </div>
        <div class="row toggle-nav">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link tab-links" onclick="openTab(event, 'Online')" id="defaultOpen">Online</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-links" onclick="openTab(event, 'Offline')">Offline</a>
            </li>
          </ul>
        </div>
        <div class="row tab-content" id="Online">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">01</span>
              <h3>Login</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">02</span>
              <h3>Isi Data Diri</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">03</span>
              <h3>Pilih Paslon</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">04</span>
              <h3>Pilih Paslon</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">05</span>
              <h3>Pilih Paslon</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
        </div>

        <div class="row tab-content" id="Offline" style="display: none">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">01</span>
              <h3>Login</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">02</span>
              <h3>Isi Data Diri</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="single-process">
              <span class="serial">03</span>
              <h3>Pilih Paslon</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur tidio.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Step Section -->

    <!-- Start FAQ Section -->
    <section class="faq section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Faq</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">FAQ</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-lg-6 col-md-12 col-12">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1"><span class="title">Apa itu PEMIRA?</span><i class="lni lni-plus"></i></button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu erat mattis lorem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit amet ante nec vulputate.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><span class="title">What cryptocurrencies can I use to purchase?</span><i class="lni lni-plus"></i></button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><span class="title">Do I need an account to place an order?</span><i class="lni lni-plus"></i></button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita, repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil non itaque alias similique quas quam odit consequatur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12 xs-margin">
            <div class="accordion" id="accordionExample2">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading11">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11"><span class="title">Apa itu PEMIRA?</span><i class="lni lni-plus"></i></button>
                </h2>
                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample2">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu erat mattis lorem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit amet ante nec vulputate.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading22">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22"><span class="title">What is ICO Crypto?</span><i class="lni lni-plus"></i></button>
                </h2>
                <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionExample2">
                  <div class="accordion-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading33">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33"><span class="title">How do I benefit from the ICO Token?</span><i class="lni lni-plus"></i></button>
                </h2>
                <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#accordionExample2">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita, repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil non itaque alias similique quas quam odit consequatur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End FAQ Section -->

    <!-- Start Contact Section  -->
    <div class="contact-us section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Faq</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Contact</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-12">
            <div class="contact-widget-wrapper">
              <div class="contact-widget-block pt-10">
                <div class="row box-contact justify-content-center">
                  <div class="col-2">
                    <i class="lni lni-envelope icon"></i>
                  </div>
                  <div class="col-10">
                    <h3 class="title">Email :</h3>
                    <p>bkmcic.official@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="contact-widget-block">
                <div class="row box-contact justify-content-center">
                  <div class="col-2">
                    <i class="lni lni-phone icon"></i>
                  </div>
                  <div class="col-10">
                    <h3 class="title">WhatsApp :</h3>
                    <p>085722784526 (Rio)</p>
                  </div>
                </div>
              </div>
              <div class="contact-widget-block">
                <div class="row box-contact justify-content-center">
                  <div class="col-2">
                    <i class="lni lni-map-marker icon"></i>
                  </div>
                  <div class="col-10">
                    <h3 class="title">Location :</h3>
                    <p>Jl. Kesambi No.202, Drajat, Kec. Kesambi, Kota Cirebon 45133</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-12">
            <div class="contact-form">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="100%" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2969803365854!2d108.55082680966831!3d-6.733576793234485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d8ebc133e3f%3A0x91385801f5822049!2sUniversitas%20Catur%20Insan%20Cendekia%20(CIC)!5e0!3m2!1sid!2sid!4v1695644468475!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  {{-- <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Section  -->
@endsection