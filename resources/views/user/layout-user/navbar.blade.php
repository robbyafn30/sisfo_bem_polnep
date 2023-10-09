<nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-3 px-4 px-lg-5">
      <a href="beranda" class="navbar-brand d-flex align-items-center">
        <img class="img-fluid me-2" src="/user/img/logo/logo-bem-polnep.png" alt=""/>
        <h5 class="m-0">
          <b style="color:#003399">BEM POLNEP</b> <b style="color:#6699ff"><span id="year"></span></b>
        </h3>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto rounded p-3 pe-4 py-3 py-lg-0">
          <a href="beranda" class="nav-item nav-link {{ Request::is('beranda') ? 'active' : ''}}">Beranda</a>
          <a href="tentang-kami" class="nav-item nav-link {{ Request::is('tentang-kami') ? 'active' : ''}}" >Tentang Kami</a>
          <a href="kepengurusan" class="nav-item nav-link {{ Request::is('kepengurusan') ? 'active' : ''}}">Kepengurusan</a>
          <a href="berita-terkini" class="nav-item nav-link {{ Request::is('berita-terkini') ? 'active' : ''}}">Berita Terkini</a>
          <a href="arsipan-kajian" class="nav-item nav-link {{ Request::is('arsipan-kajian') ? 'active' : ''}}">Arsipan Kajian</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
            <div class="dropdown-menu border-1 m-0">
              <a href="laporan-keuangan" class="dropdown-item">Laporan Keuangan</a>
              <a href="hmj" class="dropdown-item">Himpunan Mahasiswa Jurusan</a>
              <a href="ukm" class="dropdown-item">Unit Kegiatan Mahasiswa</a>
            </div>
          </div>
          <a href="layanan" class="nav-item nav-link ">Layanan</a>
        </div>
      </div>
    </nav>

    <script>
      // Mendapatkan elemen span dengan ID 'year'
      var yearSpan = document.getElementById("year");
      
      // Mendapatkan tahun saat ini
      var currentYear = new Date().getFullYear();
      
      // Menetapkan tahun saat ini ke dalam elemen span
      yearSpan.textContent = currentYear;
  </script>