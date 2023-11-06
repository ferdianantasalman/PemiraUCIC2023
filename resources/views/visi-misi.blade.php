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
    <div class="col-12">
            <div class="section-title">
              <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Why choose us</h3> -->
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Visi Misi Paslon BKM UCIC</h2>
            </div>
          </div>
        </div>

      <div class="container">
        <div class="row align-items-center pas-1">
          <div class="col-lg-6 col-12">
            <div class="image wow fadeInUp img-kandidat" data-wow-delay=".4s">
              <img src="{{ asset('assets_landing/images/kandidat/bkm1.png') }}" alt="#" />
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="content wow fadeInUp" data-wow-delay=".7s">
              <h4>PASANGAN CALON 1</h4>
              <h2>Yonatan & Dea</h2>
              <div class="visi mb-3">
                <span>Visi</span>
                <p>Mengoptimalkan kinerja BKM sebagai tempat untuk mengembangkan prestasi mahasiswa, mewujudkan mahasiswa yang berperan aktif serta menciptakan mahasiswa yang mempunyai daya saing</p>
              </div>
              <div class="misi mb-3">
                <span>Misi</span>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item"><p>1. Meningkatkan hubungan kerjasama antara HIMA dan UKM serta memberikan dukungan penuh terhadap kreatifitas serta inovasi HIMA dan UKM.</p></li>
                  <li class="list-group-item"><p>2. Memupuk rasa solidaritas di antara mahasiswa, mempromosikan toleransi, keragaman, dan inklusivitas sebagai nilai-nilai kampus.</p></li>
                  <li class="list-group-item"><p>3. Membangun hubungan yang baik dengan pihak internal maupun eksternal kampus.</p></li>
                </ol>
              </div>

              <div class="proker mb-3">
                <span>Proker</span>
                <div class="list">
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>Mahasiswa bercertia</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>Dasi (Dapur Kreasi)</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>UCIC Matsuri</p>
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
              <h2>Andika & Novita</h2>
              <div class="visi mb-3">
                <span>Visi</span>
                <p>Mewujudkan BKM UCIC sebagai wadah mahasiswa UCIC dalam mengembangkan minat, bakat, dan intelektual dalam berorganisasi.</p>
              </div>
              <div class="misi mb-3">
                <span>Misi</span>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item"><p>1. Mewadahi minat & bakat mahasiswa UCIC dengan memaksimalkan organisasi mahasiswa yang ada di UCIC.</p></li>
                  <li class="list-group-item"><p>2. Menjalin komunikasi dan sinergi kekeluargaan antar mahasiswa UCIC.</p></li>
                  <li class="list-group-item"><p>3. Membangun dan menjaga relasi yang telah terjadi dengan pihak eksternal.</p></li>
                </ol>
              </div>

              <div class="proker mb-3">
                <span>Proker</span>
                <div class="list">
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>Perayaan Hari Besar</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>Rusli (Ruang Kolaborasi)</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>Putera Puteri Cermat UCIC</p>
                  </div>
                  <div class="single-list">
                    <div class="list-icon">
                      <i class="lni lni-checkmark"></i>
                    </div>
                    <p>Campaign Anti Kupu-Kupu</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="image wow fadeInUp img-kandidat" data-wow-delay=".4s">
              <img src="{{ asset('assets_landing/images/kandidat/bkm2.jpg') }}" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End Visi Misi Section  -->
@endsection