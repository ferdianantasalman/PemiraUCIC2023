<!-- Start Navbar -->
<header class="header navbar-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="nav-inner">
          <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.html">
              <img src="{{ asset('assets_landing/images/logo/logo.png') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="/" class="{{ Request::is('/') ? 'active' : '' }}" aria-label="Toggle navigation">Home</a>
                </li>
                <li class="nav-item">
                  <a href="/kandidat" class="{{ Request::is('kandidat') ? 'active' : '' }}" aria-label="Toggle navigation">Kandidat</a>
                </li>
                <li class="nav-item">
                  <a href="/visi-misi" class="{{ Request::is('visi-misi') ? 'active' : '' }}" aria-label="Toggle navigation">Visi & Misi</a>
                </li>
                <li class="nav-item">
                  <a href="/login" class="{{ Request::is('login') ? 'active' : '' }}" aria-label="Toggle navigation">Login</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Navbar -->