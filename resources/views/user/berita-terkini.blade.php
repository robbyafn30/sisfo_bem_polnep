<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Berita Terkini - Kabinet Grahita Arahan</title>
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
    <div class="berita-terkini">
        <!-- Page Header Start -->
        <div class="container mb-5 wow fadeIn" data-wow-delay="0.1s">
            <p class="display-4 animated slideInDown mb-4">Berita <b>Terbaru</b></p>
        </div>
        <!-- Page Header End -->

        <!-- Isi Berita -->
        <div class="container">
            <div class="container">
                <div class="row g-5 mb-5">
                    @foreach ($beritaterkini as $data)
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                            <img src="{{ asset('assets/FotoBerita/' . $data->foto_berita) }}" alt="" class="img-display img-fluid">
                        </div>
                        <div class="col-lg-8 align-self-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-header mb-2">
                                <p>
                                    <?php
                                    $text = $data->judul_berita;
                                    echo ($text);
                                    ?> 
                                </p>
                            </div>
                            <div class="text-caption">
                            <p>
                                <?php
                                $num_char = 200;
                                $text = $data->narasi_berita;
                                echo substr($text, 0, $num_char) . '...';
                                ?> 
                                <a style="font-weight: 400; " href="" data-toggle="modal" data-target="#detail{{$data->id}}">Selengkapnya</a>
                            </p> 
                            </div>
                            <div class="text-date">
                                <p>{{Carbon\Carbon::parse($data->created_at)->isoformat('dddd, D MMMM Y')}}</p>
                            </div>
                        </div>
                        <!-- Modal Detail -->
                        <div class="modal-layanan">
                            <div class="modal fade" id="detail{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header d-flex justify-content-end">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="text-detail-header mb-1">
                                                    <p>
                                                        <?php
                                                        $text = $data->judul_berita;
                                                        echo ($text);
                                                        ?> 
                                                    </p>
                                                </div>
                                                <div class="text-detail-date mb-3">
                                                    <p>{{Carbon\Carbon::parse($data->created_at)->isoformat('dddd, D MMMM Y')}}</p>
                                                </div>
                                                <div class="position-relative overflow-hidden rounded mb-5">
                                                    <img src="{{ asset('assets/FotoBerita/' . $data->foto_berita) }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="text-detail-caption mb-5">
                                                    <p>
                                                        <?php
                                                        $text = $data->narasi_berita;
                                                        echo ($text);
                                                        ?> 
                                                    </p> 
                                                </div>
                                                <div class="text-detail-caption mb-3">
                                                    <p>
                                                        ——— <br>
                                                        © BEM POLNEP 2022 <br>
                                                        Kementerian Komunikasi dan Informasi <br>
                                                        ——— <br>
                                                        <br>
                                                        #HidupMahasiswa <br>
                                                        #HidupPoliteknik <br>
                                                        #HidupRakyatIndonesia <br>
                                                        #BEMPOLNEP2022 <br>
                                                        #BIRUBARU <br>
                                                    </p> 
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
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
