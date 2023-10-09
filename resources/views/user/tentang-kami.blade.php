<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tentang Kami - Kabinet Grahita Arahan</title>

    @include('user.layout-user.head')
  </head>

  <body>
    <!-- Spinner Start -->
    @include('user.layout-user.preload')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('user.layout-user.navbar')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="tentang-kami">
      <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
          <h1 class="display-4 animated slideInDown mb-4 text-center">Tentang Kami</h1>
        </div>
      </div>
      <!-- Page Header End -->
  
      <!-- Tentang BEM -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px">
                <img class="position-absolute img-fluid " src="/user/img/logo/logo-bem-polnep.png" alt="" style="object-fit: cover" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <h1 class="display-6 mb-2">Tentang BEM</h1>
              <div class="line-dec mb-4"></div>
              <p class="text-about-us font-weight-bold">
                BEM Polnep adalah organisasi mahasiswa kampus yang berperan sebagai mediator antara Mahasiswa dengan pihak lembaga kampus serta mewakili Mahasiswa Polnep di tingkat Perguruan Tinggi dan Organisasi Eksternal lainnya dalam menyampaikan aspirasi. BEM Polnep merupakan organisasi eksekutif tertinggi di Politeknik Negeri Pontianak yang berkoordinasi dengan MPM Polnep dan Pembantu Direktur III Politeknik Negeri Pontianak.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Tentang BEM End -->

      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto col-md-12 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
            <h1 class="display-6 animated slideInDown">Struktur BEM</h1>
            <div class="line-dec mb-4 mx-auto"></div>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
              <img src="/user/img/Struktur.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
  
      <!-- Visi dan Misi -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto col-md-12 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
            <h1 class="display-6 animated slideInDown">Visi</h1>
            <div class="line-dec mb-4 mx-auto"></div>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item h-100 p-5">
                <p class="text-about-us font-weight-bold">
                  Menjadikan BEM Polnep sebagai organisasi interaktif dan inovatif kepada mahasiswa dan masyarakat untuk dapat berperan aktif dalam kemajuan untuk Indonesia dengan berlandaskan sifat demokratis serta menjalankan program regional, nasional, dan internasional sebagai bentuk kontribusi terhadap Polnep demi terwujudnya visi dan misi Politeknik Negeri Pontianak.
                </p>
              </div>
            </div>
          </div>
          <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
            <h1 class="display-6 animated slideInDown">Misi</h1>
            <div class="line-dec mb-4 mx-auto"></div>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div class="service-icon flex-shrink-0 bg-primary me-4" >
                    <h2 class="text-white">1</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4"  style="text-align:center;padding: 0px 20px 10px 20px;" >
                  Membangun internal BEM Polnep yang berlandaskan kekeluargaan dan profesionalisme.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">2</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Menjunjung tinggi almamater dan berkepribadian, beriman dan berakhlak terpuji serta mampu mencapai cita-cita nasional.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">3</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Membentuk pola pembinaan dan pengembangan mahasiswa Polnep yang terpadu untuk mendukung tujuan organisasi.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">4</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Meningkatkan dan memperluas sarana informasi kepada mahasiswa Polnep.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4 ">
                    <h2 class="text-white">5</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Meningkatkan sinergitas antara organisasi mahasiswa di dalam kampus.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">6</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Siap menjadi garda terdepan bagi Mahasiswa dengan cara akademisi.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">7</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Mendorong Pengurus BEM Polnep serta mahasiswa Polnep untuk memiliki pemikiran yang Go Global.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">8</h2>
                  </div>
                </div>
                <p class=" text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Mengoptimalisasi seluruh potensi dan aspirasi mahasiswa Polnep secara suportif.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4 ">
                    <h2 class="text-white">9</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Membangun hubungan eksternal untuk menunjang kemajuan akademik dan non akademik mahasiswa Polnep.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">10</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Membuat program – program yang berkualitas demi menunjang kesejahteraan mahasiswa sesuai dengan Tri Dharma Perguruan Tinggi.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">11</h2>
                  </div>
                </div>
                <p class="text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Menampung dan menyalurkan kepedulian mahasiswa terhadap persoalan – persoalan sosial kemasyarakatan.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item h-100">
                <div class="d-flex align-items-center ms-n5 mb-3">
                  <div
                    class="service-icon flex-shrink-0 bg-primary me-4">
                    <h2 class="text-white">12</h2>
                  </div>
                </div>
                <p class=" text-about-us mb-4" style="text-align:center;padding: 0px 20px 10px 20px;">
                  Mengawasi dan mengkaji kebijakan – kebijakan yang ditetapkan oleh Pemerintah dan Kampus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Visi dan Misi End -->
  
      <!-- Filosofi Logo -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto col-md-12 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
            <h1 class="display-6 animated slideInDown">Filosofi Logo</h1>
            <div class="line-dec mb-4 mx-auto"></div>
          </div>
          <div class="row g-4 ">
            <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item h-100 p-5">
                <div class="row justify-content-center">
                  <img src="/user/img/logo/logo-bem-polnep-gear.png" alt="" class="img-logo img-fluid">
                </div>
                <p class="text-about-us font-weight-bold">
                  <span style="color:black; font-weight:600">Lambang Roda Gigi</span> dan <span style="color:black; font-weight:600">Panah ke Kiri</span>  yang artinya BEM Polnep akan terus berjalan di kota Pontianak maupun diluar Pontianak.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item h-100 p-5">
                <div class="row justify-content-center">
                  <img src="/user/img/logo/logo-bem-polnep-padi.png" alt="" class="img-logo img-fluid">
                </div>
                <p class="text-about-us font-weight-bold">
                  <span style="color:black; font-weight:600">Padi</span> yang artinya melambangkan kemakmuran BEM Polnep, Organisasi Mahasiswa dibawah naungan BEM, serta seluruh Mahasiswa Polnep. 
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item h-100 p-5">
                <div class="row justify-content-center">
                  <img src="/user/img/logo/logo-bem-polnep-bem.png" alt="" class="img-logo img-fluid">
                </div>
                <p class="text-about-us font-weight-bold">
                  <span style="color:black; font-weight:600">BEM (Badan Eksekutif Mahasiswa)</span> adalah nama organisasi tersebut.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item h-100 p-5">
                <div class="row justify-content-center">
                  <img src="/user/img/logo/logo-bem-polnep-polnep.png" alt="" class="img-logo img-fluid">
                </div>
                <p class="text-about-us font-weight-bold">
                  <span style="color:black; font-weight:600">Politeknik Negeri Pontianak</span> adalah tempat bernaungnya organisasi tersebut.  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>



    <!-- Filosofi Logo End -->

    <!-- Page Secondary Start -->
    {{-- <div class="container-fluid page-secondary py-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5 mt-5">
      </div>
    </div> --}}
    <!-- Page Secondary End -->

    <!-- Kabinet Start -->
    {{-- <div class="container-fluid wow fadeIn" data-wow-delay="0.1s" style="background: #5d8ecc">
      <div class="container">
        <div class="text-center mx-auto col-md-12 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <h1 class="display-6 animated slideInDown text-white">Logo Kabinet</h1>
          <div class="line-dec mb-4 mx-auto"></div>
        </div>
        <div class="row g-4 ">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="row justify-content-center">
                <img src="/user/img/logo/logo-bem-polnep-gear.png" alt="" class="img-logo img-fluid">
              </div>
              <p class="text-about-us text-white font-weight-bold">
                <span style="font-weight:900">Lambang Roda Gigi</span> dan <span style="font-weight:900">Panah ke Kiri</span>  yang artinya BEM Polnep akan terus berjalan di kota Pontianak maupun diluar Pontianak.
              </p>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="row justify-content-center">
                <img src="/user/img/logo/logo-bem-polnep-padi.png" alt="" class="img-logo img-fluid">
              </div>
              <p class="text-about-us font-weight-bold">
                <span style="color:black; font-weight:900">Padi</span> yang artinya melambangkan kemakmuran BEM Polnep, Organisasi Mahasiswa dibawah naungan BEM, serta seluruh Mahasiswa Polnep. 
              </p>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Kabinet End -->




    <!-- Footer Start -->
    @include('user.layout-user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-plane-up fa-bounce"></i></a>

    @include('user.layout-user.footer-js')
    
  </body>
</html>
