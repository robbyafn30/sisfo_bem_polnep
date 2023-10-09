<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Arsipan Kajian - Kabinet Grahita Arahan</title>
    @include('user.layout-user.head')
 
  </head>

  <body>
    <!-- Spinner Start -->
    @include('user.layout-user.preload')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('user.layout-user.navbar')
    <!-- Navbar End -->

    <!-- Berita Terkini -->
    <div class="arsipan-kajian">
        <!-- Page Header Start -->
        <div class="container mb-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 animated slideInDown text-center mb-4">Kajian Stategis</h1>
        </div>
        <!-- Page Header End -->

        <!-- Isi Berita -->
        <div class="container">
            <div class="container">
                <div class="row g-5 mb-5">
                    @foreach ($arsipankajian as $data)
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="item-kastrag d-flex justify-content-center">
                            <a href="{{ asset('assets/DokumenKajian/' . $data->dokumen) }}"><img src="{{ asset('assets/ThumbnailKajian/' . $data->thumbnail) }}" alt="" class="img-fluid shadow" width="70%"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-header mb-2 animated slideInUp"">
                            <p>{{$data->judul}}</p>
                        </div>
                        <div class="text-date">
                            <p>Diupload pada {{Carbon\Carbon::parse($data->created_at)->isoformat('dddd, D MMMM Y')}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Isi Berita End -->
    </div>
    <!-- Berita Terkini End -->


    <!-- Footer Start -->
    @include('user.layout-user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-plane-up fa-bounce"></i></a>

    @include('user.layout-user.footer-js')

  </body>
</html>
