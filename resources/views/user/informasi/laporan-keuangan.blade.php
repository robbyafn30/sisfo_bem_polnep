<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transparansi Dana - Kabinet Grahita Arahan</title>
    @include('user.layout-user.head')

</head>

<body>
    <!-- Spinner Start -->
    @include('user.layout-user.preload')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('user.layout-user.navbar')
    <!-- Navbar End -->


    <div class="laporan-keuangan mb-5">
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown mb-4 text-center">Laporan Keuangan</h1>
            </div>
        </div>

        <!-- Tentang Transparansi Keuangan -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 align-content-center wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="1s">
                        <img class="img-fluid" src="/user/img/transparansi-keuangan-icon.png" alt="" />
                    </div>
                    <div class="col-md-6 align-self-center wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <h1 class="display-6 mt-5 mb-2">Transparansi Dana</h1>
                        <div class="line-dec mb-4"></div>
                        <p class="text-transparansi font-weight-bold ">
                            Transparansi Dana adalah program kerja dari Kementerian Koordinator Keuangan, yaitu
                            menampilkan total pemasukan dan pengeluaran BEM Politeknik Negeri Pontianak.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Tentang Transparansi Keuangan End -->

            <!-- Laporan Keuangan -->
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card wow fadeIn" data-wow-delay="1s">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="card-title">
                                        <p>Pemasukan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="pemasukan" class="table table-bordered mb-5 wow fadeIn"
                                        data-wow-delay="1s">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th style="width: 10%">Tanggal</th>
                                                <th style="width: 30%">Rincian</th>
                                                <th style="width: 20%">Jumlah</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($data_laporan_pemasukan as $data)
                                                <tr class="text-center">
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y') }}
                                                    </td>
                                                    <td>{{ $data->rincian }}</td>
                                                    <td>Rp. {{ $data->jumlah }},00</td>
                                                    <td>{{ $data->keterangan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card wow fadeIn" data-wow-delay="1s">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="card-title">
                                        <p>Pemasukan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="pengeluaran" class="table table-bordered wow fadeIn" data-wow-delay="1s">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th style="width: 10%">Tanggal</th>
                                                <th style="width: 30%">Rincian</th>
                                                <th style="width: 20%">Jumlah</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($data_laporan_pengeluaran as $data)
                                                <tr class="text-center">
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y') }}
                                                    </td>
                                                    <td>{{ $data->rincian }}</td>
                                                    <td>Rp. {{ $data->jumlah }},00</td>
                                                    <td>{{ $data->keterangan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Laporan Keuangan End -->

    </div>
    <!-- Footer Start -->
    @include('user.layout-user.footer')
    <!-- Footer End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-plane-up fa-bounce"></i></a>

    @include('admin.layouts.vendor.js')
    <script>
        $(document).ready(function() {
            $('#pemasukan').DataTable({});
        });
        $(document).ready(function() {
            $('#pengeluaran').DataTable({});
        });
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="user/lib/wow/wow.min.js"></script>
    <script src="user/lib/easing/easing.min.js"></script>
    <script src="user/lib/waypoints/waypoints.min.js"></script>
    <script src="user/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="user/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="user/js/main.js"></script>

</body>

</html>
