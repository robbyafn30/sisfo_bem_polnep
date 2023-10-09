<!DOCTYPE html>
<html lang="en">

<head>

    <title>Kepengurusan - Kabinet Grahita Arahan</title>
    @include('user.layout-user.head')

<body>
    <!-- Spinner Start -->
    @include('user.layout-user.preload')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('user.layout-user.navbar')
    <!-- Navbar End -->


    <div class="kepengurusan mb-5">
        <!-- Heading Start -->
        <div class="heading">
            <div class="container-fluid p-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <p class="display-4 animated wow fadeInDown mb-2 text-center" data-wow-delay="0.5s">Kepengurusan,</p>
                    <h1 class="animated wow fadeInDown text-center" data-wow-delay="1s">BEM POLNEP 2023</h1>
                </div>
            </div>
        </div>
        <!-- Heading End -->

        <!-- Team Start -->
        <!-- Kementerian Koordinator Kesekretariatan -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            Presma dan Wapresma
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            @foreach ($kepengurusan as $data)
                                @if ($data->jabatan_id == 1 || $data->jabatan_id == 2)
                                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item h-100">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/Kepengurusan/' . $data->foto) }}"
                                                alt="" />
                                            <div class="text-center p-4">
                                                <p>{{ $data->nama }}</p>
                                                <span>{{ $data->jabatan->nm_jabatan }}</span>
                                            </div>
                                            <div class="team-text text-center p-1">
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-square btn-light m-2" href="{{ $data->instagram }}"><i
                                                            class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Koordinator Kesekretariatan -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            Kementerian Koordinator Kesekretariatan
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            @foreach ($kepengurusan as $data)
                                @if (($data->jabatan_id == 3 || $data->jabatan_id == 4) && $data->kementerian_id == 1)
                                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item h-100">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/Kepengurusan/' . $data->foto) }}"
                                                alt="" />
                                            <div class="text-center p-4">
                                                <p>{{ $data->nama }}</p>
                                                <span>{{ $data->jabatan->nm_jabatan}} {{ $data->kementerian->nm_kementerian}}</span>
                                            </div>
                                            <div class="team-text text-center p-1">
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-square btn-light m-2" href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($kepengurusan as $data)
                                @if (($data->jabatan_id == 5 || $data->jabatan_id == 6) && $data->kementerian_id == 1)
                                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item h-100">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/Kepengurusan/' . $data->foto) }}"
                                                alt="" />
                                            <div class="text-center p-4">
                                                <p>{{ $data->nama }}</p>
                                                <span>{{ $data->jabatan->nm_jabatan}} {{ $data->departemen}}</span>
                                            </div>
                                            <div class="team-text text-center p-1">
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-square btn-light m-2" href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Koordinator Keuangan -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            Kementerian Koordinator Keuangan
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            @foreach ($kepengurusan as $data)
                                @if (($data->jabatan_id == 3 || $data->jabatan_id == 4) && $data->kementerian_id == 2)
                                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item h-100">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/Kepengurusan/' . $data->foto) }}"
                                                alt="" />
                                            <div class="text-center p-4">
                                                <p>{{ $data->nama }}</p>
                                                <span>{{ $data->jabatan->nm_jabatan}} {{ $data->kementerian->nm_kementerian}}</span>
                                            </div>
                                            <div class="team-text text-center p-1">
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-square btn-light m-2" href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($kepengurusan as $data)
                                @if (($data->jabatan_id == 5 || $data->jabatan_id == 6) && $data->kementerian_id == 2)
                                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item h-100">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/Kepengurusan/' . $data->foto) }}"
                                                alt="" />
                                            <div class="text-center p-4">
                                                <p>{{ $data->nama }}</p>
                                                <span>{{ $data->jabatan->nm_jabatan}} {{ $data->departemen}}</span>
                                            </div>
                                            <div class="team-text text-center p-1">
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-square btn-light m-2" href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->


        <!-- Kementerian Koordinator Kesekretariatan -->
        {{-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            {{ $kosek->first()->kementerian }}
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Kosek/' . $kosek->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $kosek->first()->nama }}</p>
                                        <span>{{ $kosek->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $kosek->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Kosek/' . $kosek->skip(1)->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $kosek->skip(1)->first()->nama }}</p>
                                        <span>{{ $kosek->skip(1)->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $kosek->skip(1)->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($kosek->slice(2) as $data)
                                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item h-100">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/Kepengurusan/Kosek/' . $data->foto) }}"
                                            alt="" />
                                        <div class="text-center p-4">
                                            <p>{{ $data->nama }}</p>
                                            <span>{{ $data->jabatan }}</span>
                                        </div>
                                        <div class="team-text text-center p-1">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-square btn-light m-2"
                                                    href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Koordinator Keuangan -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            {{ $kokeu->first()->kementerian }}
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Kokeu/' . $kokeu->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $kokeu->first()->nama }}</p>
                                        <span>{{ $kokeu->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $kokeu->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Kokeu/' . $kokeu->skip(1)->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $kokeu->skip(1)->first()->nama }}</p>
                                        <span>{{ $kokeu->skip(1)->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $kokeu->skip(1)->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($kokeu->slice(2) as $data)
                                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item h-100">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/Kepengurusan/Kokeu/' . $data->foto) }}"
                                            alt="" />
                                        <div class="text-center p-4">
                                            <p>{{ $data->nama }}</p>
                                            <span>{{ $data->jabatan }}</span>
                                        </div>
                                        <div class="team-text text-center p-1">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-square btn-light m-2"
                                                    href="{{ $data->instagram }}"><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Dalam Negeri -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            {{ $dagri->first()->kementerian }}
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Dagri/' . $dagri->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $dagri->first()->nama }}</p>
                                        <span>{{ $dagri->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $dagri->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Dagri/' . $dagri->skip(1)->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $dagri->skip(1)->first()->nama }}</p>
                                        <span>{{ $dagri->skip(1)->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $dagri->skip(1)->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($dagri->slice(2) as $data)
                                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item h-100">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/Kepengurusan/Dagri/' . $data->foto) }}"
                                            alt="" />
                                        <div class="text-center p-4">
                                            <p>{{ $data->nama }}</p>
                                            <span>{{ $data->jabatan }}</span>
                                        </div>
                                        <div class="team-text text-center p-1">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-square btn-light m-2"
                                                    href="{{ $data->instagram }}"><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Luar Negeri -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            {{ $lugri->first()->kementerian }}
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Lugri/' . $lugri->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $lugri->first()->nama }}</p>
                                        <span>{{ $lugri->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $lugri->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Lugri/' . $lugri->skip(1)->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $lugri->skip(1)->first()->nama }}</p>
                                        <span>{{ $lugri->skip(1)->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $lugri->skip(1)->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($lugri->slice(2) as $data)
                                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item h-100">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/Kepengurusan/Lugri/' . $data->foto) }}"
                                            alt="" />
                                        <div class="text-center p-4">
                                            <p>{{ $data->nama }}</p>
                                            <span>{{ $data->jabatan }}</span>
                                        </div>
                                        <div class="team-text text-center p-1">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-square btn-light m-2"
                                                    href="{{ $data->instagram }}"><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian UKM-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            {{ $ukm->first()->kementerian }}
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/UKM/' . $ukm->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $ukm->first()->nama }}</p>
                                        <span>{{ $ukm->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $ukm->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/UKM/' . $ukm->skip(1)->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $ukm->skip(1)->first()->nama }}</p>
                                        <span>{{ $ukm->skip(1)->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $ukm->skip(1)->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($ukm->slice(2) as $data)
                                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item h-100">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/Kepengurusan/UKM/' . $data->foto) }}"
                                            alt="" />
                                        <div class="text-center p-4">
                                            <p>{{ $data->nama }}</p>
                                            <span>{{ $data->jabatan }}</span>
                                        </div>
                                        <div class="team-text text-center p-1">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-square btn-light m-2"
                                                    href="{{ $data->instagram }}"><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Agama -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 700px">
                    <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                        <p>
                            {{ $agama->first()->kementerian }}
                        </p>
                        <div class="line-dec mb-4 mx-auto"></div>
                    </div>
                </div>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Agama/' . $agama->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $agama->first()->nama }}</p>
                                        <span>{{ $agama->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $agama->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Agama/' . $agama->skip(1)->first()->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $agama->skip(1)->first()->nama }}</p>
                                        <span>{{ $agama->skip(1)->first()->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $agama->skip(1)->first()->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xxl">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            @foreach ($agama->slice(2) as $data)
                                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item h-100">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/Kepengurusan/Agama/' . $data->foto) }}"
                                            alt="" />
                                        <div class="text-center p-4">
                                            <p>{{ $data->nama }}</p>
                                            <span>{{ $data->jabatan }}</span>
                                        </div>
                                        <div class="team-text text-center p-1">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-square btn-light m-2"
                                                    href="{{ $data->instagram }}"><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------->

        <!-- Kementerian Sosial Politik -->
        <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center mx-auto" style="max-width: 700px">
                  <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                      <p>
                          {{ $sospol->first()->kementerian }}
                      </p>
                      <div class="line-dec mb-4 mx-auto"></div>
                  </div>
              </div>
              <div class="container-xxl py-5">
                  <div class="container">
                      <div class="row justify-content-center g-4">
                          <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="team-item h-100">
                                  <img class="img-fluid"
                                      src="{{ asset('assets/Kepengurusan/Sospol/' . $sospol->first()->foto) }}"
                                      alt="" />
                                  <div class="text-center p-4">
                                      <p>{{ $sospol->first()->nama }}</p>
                                      <span>{{ $sospol->first()->jabatan }}</span>
                                  </div>
                                  <div class="team-text text-center p-1">
                                      <div class="d-flex justify-content-center">
                                          <a class="btn btn-square btn-light m-2"
                                              href="{{ $sospol->first()->instagram }}"><i
                                                  class="fab fa-instagram"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                              <div class="team-item h-100">
                                  <img class="img-fluid"
                                      src="{{ asset('assets/Kepengurusan/Sospol/' . $sospol->skip(1)->first()->foto) }}"
                                      alt="" />
                                  <div class="text-center p-4">
                                      <p>{{ $sospol->skip(1)->first()->nama }}</p>
                                      <span>{{ $sospol->skip(1)->first()->jabatan }}</span>
                                  </div>
                                  <div class="team-text text-center p-1">
                                      <div class="d-flex justify-content-center">
                                          <a class="btn btn-square btn-light m-2"
                                              href="{{ $sospol->skip(1)->first()->instagram }}"><i
                                                  class="fab fa-instagram"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container-xxl">
                  <div class="container">
                      <div class="row g-4 justify-content-center">
                          @foreach ($sospol->slice(2) as $data)
                              <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                  <div class="team-item h-100">
                                      <img class="img-fluid"
                                          src="{{ asset('assets/Kepengurusan/Sospol/' . $data->foto) }}"
                                          alt="" />
                                      <div class="text-center p-4">
                                          <p>{{ $data->nama }}</p>
                                          <span>{{ $data->jabatan }}</span>
                                      </div>
                                      <div class="team-text text-center p-1">
                                          <div class="d-flex justify-content-center">
                                              <a class="btn btn-square btn-light m-2"
                                                  href="{{ $data->instagram }}"><i
                                                      class="fab fa-instagram"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-------->

        <!-- Kementerian Komunikasi dan Informasi -->
        <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center mx-auto" style="max-width: 700px">
                  <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                      <p>
                          {{ $kominfo->first()->kementerian }}
                      </p>
                      <div class="line-dec mb-4 mx-auto"></div>
                  </div>
              </div>
              <div class="container-xxl py-5">
                  <div class="container">
                      <div class="row justify-content-center g-4">
                          <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="team-item h-100">
                                  <img class="img-fluid"
                                      src="{{ asset('assets/Kepengurusan/Kominfo/' . $kominfo->first()->foto) }}"
                                      alt="" />
                                  <div class="text-center p-4">
                                      <p>{{ $kominfo->first()->nama }}</p>
                                      <span>{{ $kominfo->first()->jabatan }}</span>
                                  </div>
                                  <div class="team-text text-center p-1">
                                      <div class="d-flex justify-content-center">
                                          <a class="btn btn-square btn-light m-2"
                                              href="{{ $kominfo->first()->instagram }}"><i
                                                  class="fab fa-instagram"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                              <div class="team-item h-100">
                                  <img class="img-fluid"
                                      src="{{ asset('assets/Kepengurusan/Kominfo/' . $kominfo->skip(1)->first()->foto) }}"
                                      alt="" />
                                  <div class="text-center p-4">
                                      <p>{{ $kominfo->skip(1)->first()->nama }}</p>
                                      <span>{{ $kominfo->skip(1)->first()->jabatan }}</span>
                                  </div>
                                  <div class="team-text text-center p-1">
                                      <div class="d-flex justify-content-center">
                                          <a class="btn btn-square btn-light m-2"
                                              href="{{ $kominfo->skip(1)->first()->instagram }}"><i
                                                  class="fab fa-instagram"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container-xxl">
                  <div class="container">
                      <div class="row g-4 justify-content-center">
                          @foreach ($kominfo->slice(2) as $data)
                              <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                  <div class="team-item h-100">
                                      <img class="img-fluid"
                                          src="{{ asset('assets/Kepengurusan/Kominfo/' . $data->foto) }}"
                                          alt="" />
                                      <div class="text-center p-4">
                                          <p>{{ $data->nama }}</p>
                                          <span>{{ $data->jabatan }}</span>
                                      </div>
                                      <div class="team-text text-center p-1">
                                          <div class="d-flex justify-content-center">
                                              <a class="btn btn-square btn-light m-2"
                                                  href="{{ $data->instagram }}"><i
                                                      class="fab fa-instagram"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-------->

      <!-- Kementerian PSDM -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 700px">
                <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                    <p>
                        {{ $psdm->first()->kementerian }}
                    </p>
                    <div class="line-dec mb-4 mx-auto"></div>
                </div>
            </div>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item h-100">
                                <img class="img-fluid"
                                    src="{{ asset('assets/Kepengurusan/PSDM/' . $psdm->first()->foto) }}"
                                    alt="" />
                                <div class="text-center p-4">
                                    <p>{{ $psdm->first()->nama }}</p>
                                    <span>{{ $psdm->first()->jabatan }}</span>
                                </div>
                                <div class="team-text text-center p-1">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-square btn-light m-2"
                                            href="{{ $psdm->first()->instagram }}"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item h-100">
                                <img class="img-fluid"
                                    src="{{ asset('assets/Kepengurusan/PSDM/' . $psdm->skip(1)->first()->foto) }}"
                                    alt="" />
                                <div class="text-center p-4">
                                    <p>{{ $psdm->skip(1)->first()->nama }}</p>
                                    <span>{{ $psdm->skip(1)->first()->jabatan }}</span>
                                </div>
                                <div class="team-text text-center p-1">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-square btn-light m-2"
                                            href="{{ $psdm->skip(1)->first()->instagram }}"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        @foreach ($psdm->slice(2) as $data)
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/PSDM/' . $data->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $data->nama }}</p>
                                        <span>{{ $data->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $data->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------->

    <!-- Kementerian PSDM -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 700px">
                <div class="display-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                    <p>
                        {{ $ekraf->first()->kementerian }}
                    </p>
                    <div class="line-dec mb-4 mx-auto"></div>
                </div>
            </div>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item h-100">
                                <img class="img-fluid"
                                    src="{{ asset('assets/Kepengurusan/Ekraf/' . $ekraf->first()->foto) }}"
                                    alt="" />
                                <div class="text-center p-4">
                                    <p>{{ $ekraf->first()->nama }}</p>
                                    <span>{{ $ekraf->first()->jabatan }}</span>
                                </div>
                                <div class="team-text text-center p-1">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-square btn-light m-2"
                                            href="{{ $ekraf->first()->instagram }}"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item h-100">
                                <img class="img-fluid"
                                    src="{{ asset('assets/Kepengurusan/Ekraf/' . $ekraf->skip(1)->first()->foto) }}"
                                    alt="" />
                                <div class="text-center p-4">
                                    <p>{{ $ekraf->skip(1)->first()->nama }}</p>
                                    <span>{{ $ekraf->skip(1)->first()->jabatan }}</span>
                                </div>
                                <div class="team-text text-center p-1">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-square btn-light m-2"
                                            href="{{ $ekraf->skip(1)->first()->instagram }}"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        @foreach ($ekraf->slice(2) as $data)
                            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item h-100">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/Kepengurusan/Ekraf/' . $data->foto) }}"
                                        alt="" />
                                    <div class="text-center p-4">
                                        <p>{{ $data->nama }}</p>
                                        <span>{{ $data->jabatan }}</span>
                                    </div>
                                    <div class="team-text text-center p-1">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-2"
                                                href="{{ $data->instagram }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------> --}}



        <!-- Team End -->





        <!-- Footer Start -->
        @include('user.layout-user.footer')
        <!-- Footer End -->
        
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-plane-up fa-bounce"></i></a>

        @include('user.layout-user.footer-js')

</body>

</html>
