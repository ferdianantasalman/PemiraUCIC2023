<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <img src="{{ asset('assets_admin/img/logo/logo.png') }}" class="logo" alt="logo" />
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Menu -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu Utama</span></li>

    <!-- Dashboard -->
    <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
      <a href="/dashboard" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Prodi -->
    <li class="menu-item {{ Request::is('prodi*') ? 'active' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-box"></i>
        <div data-i18n="User interface">Prodi</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::is('prodi') ? 'active' : '' }}">
          <a href="/prodi" class="menu-link">
            <div data-i18n="Accordion">Daftar</div>
          </a>
        </li>
        <li class="menu-item {{ Request::is('prodi/create') ? 'active' : '' }}">
          <a href="{{ route('prodi.create') }}" class="menu-link">
            <div data-i18n="Alerts">Tambah</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Dosen & Staff -->
    <li class="menu-item {{ Request::is('mahasiswa*') ? 'active' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-graduation"></i>
        <div data-i18n="User interface">Dosen & Staff</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="ui-accordion.html" class="menu-link">
            <div data-i18n="Accordion">Daftar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-alerts.html" class="menu-link">
            <div data-i18n="Alerts">Tambah</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Mahasiswa -->
    <li class="menu-item {{ Request::is('mahasiswa*') ? 'active' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-graduation"></i>
        <div data-i18n="User interface">Mahasiswa</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="ui-accordion.html" class="menu-link">
            <div data-i18n="Accordion">Daftar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-alerts.html" class="menu-link">
            <div data-i18n="Alerts">Tambah</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Kandidat -->
    <li class="menu-item {{ Request::is('kandidat-admin*') ? 'active' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-group"></i>
        <div data-i18n="Extended UI">Kandidat</div>
      </a>
      <ul class="menu-sub">
      <li class="menu-item {{ Request::is('kandidat-admin') ? 'active' : '' }}">
          <a href="/kandidat-admin" class="menu-link">
            <div data-i18n="Accordion">Daftar</div>
          </a>
        </li>
        <li class="menu-item {{ Request::is('kandidat-admin/create') ? 'active' : '' }}">
          <a href="{{ route('kandidat-admin.create') }}" class="menu-link">
            <div data-i18n="Alerts">Tambah</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Administrator -->
    <li class="menu-item {{ Request::is('admin*') ? 'active' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-desktop"></i>
        <div data-i18n="Extended UI">Administrator</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
            <div data-i18n="Perfect Scrollbar">Daftar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-text-divider.html" class="menu-link">
            <div data-i18n="Text Divider">Tambah</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Logout -->
    <li class="menu-item">
      <a href="cards-basic.html" class="menu-link">
        <!-- <i class="menu-icon tf-icons bx bx-collection"></i> -->
        <!-- <i class="menu-icon tf-icons bx bx-log-out-circle"></i> -->
        <i class="menu-icon tf-icons bx bx-power-off me-2"></i>

        <div data-i18n="Basic">Logout</div>
      </a>
    </li>
  </ul>
</aside>