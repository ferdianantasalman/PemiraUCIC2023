@extends('layouts.main')

@section('content')

  <!-- Start Breadcrumbs Section -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Visi & Misi</h1>
            <ul class="breadcrumb-nav">
              <li><a href="/">Home</a></li>
              <li>Visi & Misi</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs Section  -->

  <!-- Start Visi Misi Section -->
    <section class="about section">
      <div class="container">
        <div class="row align-items-center pas-1">
          <div class="col-lg-6 col-12">
            <div class="image wow fadeInUp img-kandidat" data-wow-delay=".4s">
              <img src="{{ asset('assets_landing/images/kandidat/kandidat.png') }}" alt="#" />
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="content wow fadeInUp" data-wow-delay=".7s">
              <h4>PASANGAN CALON 1</h4>
              <h2>Kinan & Galih</h2>
              <div class="visi mb-3">
                <span>Visi</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. ipsum dolor sit Sit labore fuga ad.</p>
              </div>
              <div class="misi mb-3">
                <span>Misi</span>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item"><p>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></li>
                  <li class="list-group-item"><p>2. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></li>
                  <li class="list-group-item"><p>3. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></li>
                </ol>
              </div>

              <div class="proker mb-3">
                <span>Proker</span>
                <div class="list">
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>U Care</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>UCIC Fest</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>BKM Training</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center pas-2">
          <div class="col-lg-6 col-12">
            <div class="content wow fadeInUp" data-wow-delay=".7s">
              <h4>PASANGAN CALON 2</h4>
              <h2>Fia & Roy</h2>
              <div class="visi mb-3">
                <span>Visi</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. ipsum dolor sit Sit labore fuga ad.</p>
              </div>
              <div class="misi mb-3">
                <span>Misi</span>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item"><p>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></li>
                  <li class="list-group-item"><p>2. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></li>
                  <li class="list-group-item"><p>3. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></li>
                </ol>
              </div>

              <div class="proker mb-3">
                <span>Proker</span>
                <div class="list">
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>U Care</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>UCIC Fest</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>BKM Training</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="image wow fadeInUp img-kandidat" data-wow-delay=".4s">
              <img src="{{ asset('assets_landing/images/kandidat/kandidat.png') }}" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End Visi Misi Section  -->
@endsection