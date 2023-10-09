<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Layanan - Kabinet Grahita Arahan</title>
    @include('user.layout-user.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
  </head>



  <body>
    <!-- Spinner Start -->
    @include('user.layout-user.preload')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('user.layout-user.navbar')
    <!-- Navbar End -->

    <!-- Berita Terkini -->
    <div class="layanan">
      <!-- Heading Start -->
        <div class="heading">
            <div class="container-fluid p-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-white mb-5">
                            Apa Itu Layanan PolnepCare ?
                        </h1>
                        <p class="text-white mb-5">
                            Layanan PolnepCare merupakan sarana yang memberikan pelayanan akses untuk mendapatkan informasi, rumah aspirasi, melaporkan, mengkritik serta memberikan saran bagi Badan Eksekutif Mahasiswa Politeknik Negeri Pontianak.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Heading End -->
    
      <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center mx-auto col-md-12 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
                  <h1 class="display-6 animated slideInDown">Jenis Layanan</h1>
                  <div class="line-dec mb-4 mx-auto"></div>
              </div>
              <div class="row g-4 justify-content-center">
                  <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="service-item border h-100 p-4">
                          <div class="row justify-content-center mb-4">
                              <img src="/user/img/bg-LaporJak.png" alt="" class="img-logo img-fluid">
                          </div>
                          <div class="mb-1">
                              <p>
                                <b>LaporJak!</b> 
                                merupakan program layanan BEM Polnep yang digunakan untuk melaporkan suatu permasalahan di Politeknik Negeri Pontianak.
                              </p>
                          </div>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-service" data-toggle="modal" data-target="#btn-lapor">
                              Ajukan
                          </button>

        

                          <!-- Modal -->
                          <div class="modal fade" id="btn-lapor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">LaporJak!</h5>
                                      </div>
                                      <div class="modal-body">
                                          <form id="Tambah-LaporJak" action="{{route('Tambah-LaporJak')}}"method="post" enctype="multipart/form-data" required>
                                            @csrf
                                              <div class="row g-3">
                                                <div class="col-sm-12">
                                                  <div class="form-floating">
                                                    <select name="jenis" class="form-select" aria-label="Default select example" required>
                                                      <option value="LaporJak" selected>LaporJak</option>
                                                      <option value="TanyaJak" disabled>TanyaJak</option>
                                                      <option value="Kritik & Saran" disabled>Kritik & Saran</option>
                                                    </select>
                                                  <label for="cage">Jenis Layanan</label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-12">
                                                  <div class="form-floating">
                                                    <input type="text" name="nama" class="form-control" id="laporNameInput" placeholder="Gurdian Name" required>
                                                    <label>Nama Lengkap</label>
                                                    @error('nama')
                                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                    <span class="error-message" id="laporNameError"></span>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-floating">
                                                    <input type="number" name="nim" class="form-control" id="laporNIMInput" placeholder="Child Name" required>
                                                    <label for="laporNIMInput">NIM</label>
                                                    @error('nim')
                                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                    <span class="error-message" id="laporNIMError"></span>
                                                </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-floating">
                                                    <select name="jurusan_id" class="form-select" aria-label="Default select example" required>
                                                      <option value="" disabled selected>--Pilih Jurusan--</option>
                                                      @foreach($jurusan as $data)
                                                          <option value="{{ $data->id }}" {{ old('jurusan_id') == $data->id ? 'selected' : '' }}>
                                                              {{ $data->nama }}
                                                          </option>
                                                      @endforeach
                                                    </select>
                                                    <label for="cage">Jurusan</label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-12">
                                                  <div class="form-floating">
                                                    <input type="email" name="email" class="form-control" id="gmail" placeholder="Gurdian Email" required>
                                                    <label for="gmail">Email</label>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <div class="form-floating">
                                                    <textarea name="keterangan" class="form-control" placeholder="Leave a message here" id="message" style="height: 120px" required></textarea>
                                                    <label for="message">Kronologi</label>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                              </div>
                                          </form>
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="service-item border h-100 p-4">
                          <div class="row justify-content-center mb-4">
                              <img src="/user/img/bg-TanyaJak.png" alt="" class="img-logo img-fluid">
                          </div>
                          <div class="mb-1">
                              <p><b>TanyaJak!</b> merupakan program layanan BEM Polnep yang dapat digunakan untuk bertanya terkait informasi internal maupun eksternal Politeknik Negeri Pontianak.</p>
                          </div>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-service" data-toggle="modal" data-target="#btn-tanya">
                              Ajukan
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="btn-tanya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">TanyaJak!</h5>
                                    </div>
                                    <div class="modal-body">
                                      <form id="Tambah-TanyaJak" action="{{route('Tambah-TanyaJak')}}"method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row g-3">
                                              <div class="col-sm-12">
                                                <div class="form-floating">
                                                  <select name="jenis" class="form-select" aria-label="Default select example" required>
                                                    <option value="LaporJak" disabled>LaporJak</option>
                                                    <option value="TanyaJak"  selected>TanyaJak</option>
                                                    <option value="Kritik & Saran" disabled>Kritik & Saran</option>
                                                  </select>
                                                <label for="cage">Jenis Layanan</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-12">
                                                <div class="form-floating">
                                                  <input type="text" name="nama" class="form-control" id="tanyaNameInput" placeholder="Gurdian Name" required>
                                                  <label>Nama Lengkap</label>
                                                  @error('nama')
                                                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                  @enderror
                                                  <span class="error-message" id="tanyaNameError"></span>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="form-floating">
                                                  <input type="number" name="nim" class="form-control" id="tanyaNIMInput" placeholder="Child Name" required>
                                                  <label>NIM</label>
                                                  @error('nim')
                                                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                  @enderror
                                                  <span class="error-message" id="tanyaNIMError"></span>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <select name="jurusan_id" class="form-select" aria-label="Default select example" required>
                                                      <option value="" disabled selected>--Pilih Jurusan--</option>
                                                      @foreach($jurusan as $data)
                                                          <option value="{{ $data->id }}" {{ old('jurusan_id') == $data->id ? 'selected' : '' }}>
                                                              {{ $data->nama }}
                                                          </option>
                                                      @endforeach
                                                    </select>
                                                  <label for="cage">Jurusan</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-12">
                                                <div class="form-floating">
                                                  <input name="email" type="email" class="form-control" id="gmail" placeholder="Gurdian Email" required>
                                                  <label for="gmail">Email</label>
                                                  <small id="emailHelp2" class="form-text text-muted">*Pertanyaan akan dibalas melalui Email yang tertera.</small>

                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <div class="form-floating">
                                                  <textarea name="keterangan" class="form-control" placeholder="Leave a message here" id="message" style="height: 120px" required></textarea>
                                                  <label for="message">Pertanyaan</label>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                              <button type="submit" class="btn btn-primary">Kirim</button>
                                          </div>
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="service-item border h-100 p-4">
                          <div class="row justify-content-center mb-4">
                              <img src="/user/img/bg-KritikSaran.png" alt="" class="img-logo img-fluid">
                          </div>
                          <div class="mb-1">
                              <p><b>Kritik & Saran</b> merupakan program layanan BEM Polnep yang digunakan untuk memberikan kritikan atau saran kepada BEM Polnep</p>
                          </div>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-service" data-toggle="modal" data-target="#btn-kritiksaran">
                              Ajukan
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="btn-kritiksaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Kritik & Saran</h5>
                                      </div>
                                      <div class="modal-body">
                                        <form id="Tambah-KritikSaran" action="{{route('Tambah-KritikSaran')}}"method="post" enctype="multipart/form-data">
                                          @csrf
                                              <div class="row g-3">
                                                <div class="col-sm-12">
                                                  <div class="form-floating">
                                                    <select name="jenis" class="form-select" aria-label="Default select example" required>
                                                      <option value="LaporJak" disabled>LaporJak</option>
                                                      <option value="TanyaJak" disabled>TanyaJak</option>
                                                      <option value="Kritik & Saran" selected>Kritik & Saran</option>
                                                    </select>
                                                  <label for="cage">Jenis Layanan</label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-12">
                                                  <div class="form-floating">
                                                    <input type="text" name="nama" class="form-control" id="kritikNameInput" placeholder="Gurdian Name" required>
                                                    <label>Nama Lengkap</label>
                                                    @error('nama')
                                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                    <span class="error-message" id="kritikNameError"></span>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-floating">
                                                    <input type="number" name="nim" class="form-control" id="kritikNIMInput" placeholder="Child Name" required>
                                                    <label>NIM</label>
                                                    @error('nim')
                                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                    <span class="error-message" id="kritikNIMError"></span>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-floating">
                                                      <select name="jurusan_id" class="form-select" aria-label="Default select example" required>
                                                      <option value="" disabled selected>--Pilih Jurusan--</option>
                                                        @foreach($jurusan as $data)
                                                            <option value="{{ $data->id }}" {{ old('jurusan_id') == $data->id ? 'selected' : '' }}>
                                                                {{ $data->nama }}
                                                            </option>
                                                        @endforeach
                                                        </select>
                                                    <label for="cage">Jurusan</label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-12">
                                                  <div class="form-floating">
                                                    <input name="email" type="email" class="form-control" id="gmail" placeholder="Gurdian Email" required>
                                                    <label for="gmail">Email</label>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <div class="form-floating">
                                                    <textarea name="keterangan" class="form-control" placeholder="Leave a message here" id="message" style="height: 120px" required></textarea>
                                                    <label for="message">Kritik atau Saran</label>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                            </form>
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
    <!-- Berita Terkini End -->

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
    @if($errors->any())
      <script>
              Swal.fire({
              title: 'Gagal!',
              text: 'Terjadi Kesalahan...',
              icon: 'error',
              confirmButtonText: 'OK'
            });
      </script>
    @endif
    @if(session('success'))
      <script>
              Swal.fire({
              title: 'Terkirim',
              icon: 'success',
              confirmButtonText: 'OK'
            });
      </script>
    @endif

    <!-- Footer Start -->
    @include('user.layout-user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-plane-up fa-bounce"></i></a>

    <script>
      // Ambil elemen alert menggunakan JavaScript
      const alertDiv = document.getElementById('alertDiv');

      // Tampilkan alert
      function showAlert() {
          alertDiv.style.display = 'block';

          // Atur timeout 5 detik untuk menghilangkan alert setelah muncul
          setTimeout(function() {
              hideAlert();
          }, 3000);
      }

      // Sembunyikan alert
      function hideAlert() {
          alertDiv.style.display = 'none';
      }

      // Panggil fungsi untuk menampilkan alert
      showAlert();
  </script>

    <script>
      // const nimInput = document.getElementById('nimInput');
      // const nimError = document.getElementById('nimError');

      // nimInput.addEventListener('input', checkNimValidity);
      // nimInput.addEventListener('blur', checkNimValidity);

      // function checkNimValidity() {
      //     const nim = nimInput.value;
      //     const isNumeric = /^\d+$/.test(nim); // Regex untuk memeriksa apakah input hanya mengandung angka

      //     if (!isNumeric) {
      //         nimError.textContent = 'NIM hanya boleh berisi angka!';
      //         nimInput.classList.add('error-border');
      //     } else if (nim.length > 10) {
      //         nimError.textContent = 'NIM tidak boleh lebih dari 10 angka!';
      //         nimInput.classList.add('error-border');
      //     } else {
      //         nimError.textContent = '';
      //         nimInput.classList.remove('error-border');
      //     }
      // }

      // Validasi Name
      const laporNameInput = document.getElementById('laporNameInput');
      const laporNameError = document.getElementById('laporNameError');

      laporNameInput.addEventListener('input', checklaporNameValidity);
      laporNameInput.addEventListener('blur', checklaporNameValidity);

      function checklaporNameValidity() {
          const laporName = laporNameInput.value;
          const laporNameRegex = /^[a-zA-Z\s]+$/; // Regex untuk memeriksa apakah input hanya mengandung huruf dan spasi

          if (!laporNameRegex.test(laporName)) {
              laporNameError.textContent = 'Nama hanya boleh berisi huruf!';
              laporNameInput.classList.add('error-border');
          } else {
              laporNameError.textContent = '';
              laporNameInput.classList.remove('error-border');
          }
      }

      const tanyaNameInput = document.getElementById('tanyaNameInput');
      const tanyaNameError = document.getElementById('tanyaNameError');

      tanyaNameInput.addEventListener('input', checktanyaNameValidity);
      tanyaNameInput.addEventListener('blur', checktanyaNameValidity);

      function checktanyaNameValidity() {
          const tanyaName = tanyaNameInput.value;
          const tanyaNameRegex = /^[a-zA-Z\s]+$/; // Regex untuk memeriksa apakah input hanya mengandung huruf dan spasi

          if (!tanyaNameRegex.test(tanyaName)) {
              tanyaNameError.textContent = 'Nama hanya boleh berisi huruf!';
              tanyaNameInput.classList.add('error-border');
          } else {
              tanyaNameError.textContent = '';
              tanyaNameInput.classList.remove('error-border');
          }
      }

      const kritikNameInput = document.getElementById('kritikNameInput');
      const kritikNameError = document.getElementById('kritikNameError');

      kritikNameInput.addEventListener('input', checkkritikNameValidity);
      kritikNameInput.addEventListener('blur', checkkritikNameValidity);

      function checkkritikNameValidity() {
          const kritikName = kritikNameInput.value;
          const kritikNameRegex = /^[a-zA-Z\s]+$/; // Regex untuk memeriksa apakah input hanya mengandung huruf dan spasi

          if (!kritikNameRegex.test(kritikName)) {
              kritikNameError.textContent = 'Nama hanya boleh berisi huruf!';
              kritikNameInput.classList.add('error-border');
          } else {
              kritikNameError.textContent = '';
              kritikNameInput.classList.remove('error-border');
          }
      }

      const laporNIMInput = document.getElementById('laporNIMInput');
      const laporNIMError = document.getElementById('laporNIMError');

      laporNIMInput.addEventListener('input', checklaporNIMValidity);
      laporNIMInput.addEventListener('blur', checklaporNIMValidity);

      function checklaporNIMValidity() {
          const laporNIM = laporNIMInput.value;
          const isNumeric = /^\d+$/.test(laporNIM); // Regex untuk memeriksa apakah input hanya mengandung angka

          if (!isNumeric) {
              laporNIMError.textContent = 'NIM hanya boleh berisi angka!';
              laporNIMInput.classList.add('error-border');
          } else if (laporNIM.length > 10) {
              laporNIMError.textContent = 'NIM tidak boleh lebih dari 10 angka!';
              laporNIMInput.classList.add('error-border');
          } else {
              laporNIMError.textContent = '';
              laporNIMInput.classList.remove('error-border');
          }
      }

      const kritikNIMInput = document.getElementById('kritikNIMInput');
      const kritikNIMError = document.getElementById('kritikNIMError');

      kritikNIMInput.addEventListener('input', checkkritikNIMValidity);
      kritikNIMInput.addEventListener('blur', checkkritikNIMValidity);

      function checkkritikNIMValidity() {
          const kritikNIM = kritikNIMInput.value;
          const isNumeric = /^\d+$/.test(kritikNIM); // Regex untuk memeriksa apakah input hanya mengandung angka

          if (!isNumeric) {
              kritikNIMError.textContent = 'NIM hanya boleh berisi angka!';
              kritikNIMInput.classList.add('error-border');
          } else if (kritikNIM.length > 10) {
              kritikNIMError.textContent = 'NIM tidak boleh lebih dari 10 angka!';
              kritikNIMInput.classList.add('error-border');
          } else {
              kritikNIMError.textContent = '';
              kritikNIMInput.classList.remove('error-border');
          }
      }

      const tanyaNIMInput = document.getElementById('tanyaNIMInput');
      const tanyaNIMError = document.getElementById('tanyaNIMError');

      tanyaNIMInput.addEventListener('input', checktanyaNIMValidity);
      tanyaNIMInput.addEventListener('blur', checktanyaNIMValidity);

      function checktanyaNIMValidity() {
          const tanyaNIM = tanyaNIMInput.value;
          const isNumeric = /^\d+$/.test(tanyaNIM); // Regex untuk memeriksa apakah input hanya mengandung angka

          if (!isNumeric) {
              tanyaNIMError.textContent = 'NIM hanya boleh berisi angka!';
              tanyaNIMInput.classList.add('error-border');
          } else if (tanyaNIM.length > 10) {
              tanyaNIMError.textContent = 'NIM tidak boleh lebih dari 10 angka!';
              tanyaNIMInput.classList.add('error-border');
          } else {
              tanyaNIMError.textContent = '';
              tanyaNIMInput.classList.remove('error-border');
          }
      }
    </script>

    @include('user.layout-user.footer-js')

  </body>
</html>
