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
    <section class="profil-kandidat section">
      <div class="container pas-1">
        <div class="paslon-label">
          <img src="{{ asset('assets_landing/images/features/no1.png') }}" alt="image" />
        </div>
        <div class="box justify-content-start">
          <div class="card card-profil-kandidat mb-2">
            <div class="row g-0">
              <div class="col-md-4 img-kandidat d-grid justify-content-start">
                <img src="{{ asset('assets_landing/images/kandidat/yona.jpg') }}" class="img-fluid" alt="profile" />
              </div>
              <div class="col-md-8 ket-kandidat">
                <div class="card-body">
                  <h5 class="card-title mb-3">Yonatan</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">NIM</div>

                        <div class="col-8">: 20220123001</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Prodi</div>

                        <div class="col-8">: Manajemen Informatika</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Semester</div>

                        <div class="col-8">: Tiga</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Pendidikan</div>

                        <div class="col-8">: SMA Putra Nirmala</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Organisasi</div>

                        <div class="col-8">: Osis Bidang Belanegara</div>
                      </div>
                    </li>
                  </ul>
                  <!-- <p class="card-text">
                  <small class="text-body-secondary"> Last updated 3 mins ago </small>
                </p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="card card-profil-kandidat-mobile mb-4">
            <div class="row g-0">
              <div class="col-md-12 img-kandidat">
              <img src="{{ asset('assets_landing/images/kandidat/yonatan.png') }}" class="img-fluid" alt="profile" />
              </div>
              <div class="col-md-12 ket-kandidat">
                <div class="card-body">
                  <div class="accordion" id="accordionkandidat-1">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekandidat-1" aria-expanded="true" aria-controls="collapsekandidat-1">Data Diri</button>
                      </h2>
                      <div id="collapsekandidat-1" class="accordion-collapse collapse" data-bs-parent="#accordionkandidat-1">
                        <div class="accordion-body p-1">
                          <h5 class="card-title mb-3 mt-4 mx-2">Kinan</h5>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">NIM</div>

                                <div class="col-8">: 20210120064</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Prodi</div>

                                <div class="col-8">: Teknik Informatika</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Semester</div>

                                <div class="col-8">: Tiga</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Pendidikan</div>

                                <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Organisasi</div>

                                <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box justify-content-end">
          <div class="card card-profil-kandidat mt-2">
            <div class="row g-0">
              <div class="col-md-8 col-sm-12 ket-kandidat">
                <div class="card-body">
                  <h5 class="card-title mb-3">Primasari Dea A</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">NIM</div>

                        <div class="col-8">: 20210120064</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Prodi</div>

                        <div class="col-8">: Teknik Informatika</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Semester</div>

                        <div class="col-8">: Tiga</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Pendidikan</div>

                        <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Organisasi</div>

                        <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                      </div>
                    </li>
                  </ul>
                  <!-- <p class="card-text">
                  <small class="text-body-secondary"> Last updated 3 mins ago </small>
                </p> -->
                </div>
              </div>
              <div class="col-md-4 col-sm-12 img-kandidat d-grid justify-content-end">
                <img src="{{ asset('assets_landing/images/kandidat/primasari.jpg') }}" class="img-fluid" alt="profile" />
              </div>
            </div>
          </div>
          <div class="card card-profil-kandidat-mobile mb-3">
            <div class="row g-0">
              <div class="col-md-12 img-kandidat">
                <img src="{{ asset('assets_landing/images/kandidat/primasari.jpg') }}" class="card-img-top" alt="profile" />
              </div>
              <div class="col-md-12 ket-kandidat">
                <div class="card-body">
                  <div class="accordion" id="accordionkandidat-2">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekandidat-2" aria-expanded="true" aria-controls="collapsekandidat-2">Data Diri</button>
                      </h2>
                      <div id="collapsekandidat-2" class="accordion-collapse collapse" data-bs-parent="#accordionkandidat-2">
                        <div class="accordion-body p-1">
                          <h5 class="card-title mb-3 mt-4 mx-2">primasari Dea A</h5>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">NIM</div>

                                <div class="col-8">: 20210120064</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Prodi</div>

                                <div class="col-8">: Teknik Informatika</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Semester</div>

                                <div class="col-8">: Tiga</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Pendidikan</div>

                                <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Organisasi</div>

                                <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pas-2">
        <div class="paslon-label">
          <img src="{{ asset('assets_landing/images/features/no2.png') }}" alt="image" />
        </div>
        <div class="box justify-content-start">
          <div class="card card-profil-kandidat mb-2">
            <div class="row g-0">
              <div class="col-md-4 img-kandidat d-grid justify-content-start">
                <img src="{{ asset('assets_landing/images/kandidat/profile.jpg') }}" class="img-fluid" alt="profile" />
              </div>
              <div class="col-md-8 ket-kandidat">
                <div class="card-body">
                  <h5 class="card-title mb-3">Kinan</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">NIM</div>

                        <div class="col-8">: 20210120064</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Prodi</div>

                        <div class="col-8">: Teknik Informatika</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Semester</div>

                        <div class="col-8">: Tiga</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Pendidikan</div>

                        <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Organisasi</div>

                        <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                      </div>
                    </li>
                  </ul>
                  <!-- <p class="card-text">
                  <small class="text-body-secondary"> Last updated 3 mins ago </small>
                </p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="card card-profil-kandidat-mobile mb-4">
            <div class="row g-0">
              <div class="col-md-12 img-kandidat">
                <img src="{{ asset('assets_landing/images/kandidat/profile.jpg') }}" class="card-img-top" alt="profile" />
              </div>
              <div class="col-md-12 ket-kandidat">
                <div class="card-body">
                  <div class="accordion" id="accordionkandidat-3">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekandidat-3" aria-expanded="true" aria-controls="collapsekandidat-3">Data Diri</button>
                      </h2>
                      <div id="collapsekandidat-3" class="accordion-collapse collapse" data-bs-parent="#accordionkandidat-3">
                        <div class="accordion-body p-1">
                          <h5 class="card-title mb-3 mt-4 mx-2">Kinan</h5>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">NIM</div>

                                <div class="col-8">: 20210120064</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Prodi</div>

                                <div class="col-8">: Teknik Informatika</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Semester</div>

                                <div class="col-8">: Tiga</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Pendidikan</div>

                                <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Organisasi</div>

                                <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box justify-content-end">
          <div class="card card-profil-kandidat mt-2">
            <div class="row g-0">
              <div class="col-md-8 col-sm-12 ket-kandidat">
                <div class="card-body">
                  <h5 class="card-title mb-3">Kinan</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">NIM</div>

                        <div class="col-8">: 20210120064</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Prodi</div>

                        <div class="col-8">: Teknik Informatika</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Semester</div>

                        <div class="col-8">: Tiga</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Pendidikan</div>

                        <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4">Riwayat Organisasi</div>

                        <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                      </div>
                    </li>
                  </ul>
                  <!-- <p class="card-text">
                  <small class="text-body-secondary"> Last updated 3 mins ago </small>
                </p> -->
                </div>
              </div>
              <div class="col-md-4 col-sm-12 img-kandidat d-grid justify-content-end">
                <img src="{{ asset('assets_landing/images/kandidat/profile.jpg') }}" class="img-fluid" alt="profile" />
              </div>
            </div>
          </div>
          <div class="card card-profil-kandidat-mobile mb-3">
            <div class="row g-0">
              <div class="col-md-12 img-kandidat">
                <img src="{{ asset('assets_landing/images/kandidat/profile.jpg') }}" class="card-img-top" alt="profile" />
              </div>
              <div class="col-md-12 ket-kandidat">
                <div class="card-body">
                  <div class="accordion" id="accordionkandidat-4">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekandidat-4" aria-expanded="true" aria-controls="collapsekandidat-4">Data Diri</button>
                      </h2>
                      <div id="collapsekandidat-4" class="accordion-collapse collapse" data-bs-parent="#accordionkandidat-4">
                        <div class="accordion-body p-1">
                          <h5 class="card-title mb-3 mt-4 mx-2">Kinan</h5>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">NIM</div>

                                <div class="col-8">: 20210120064</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Prodi</div>

                                <div class="col-8">: Teknik Informatika</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Semester</div>

                                <div class="col-8">: Tiga</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Pendidikan</div>

                                <div class="col-8">: SDN 2 Pegagan, SMPN 4 Palimanan, SMAN 1 Palimanan</div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">Riwayat Organisasi</div>

                                <div class="col-8">: Ketua Pramuka, Wakil Ketua Osis</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End Profil Kandidat Section  -->
@endsection