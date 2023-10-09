<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - Admin BEM POLNEP</title>
	@include('admin.layouts.vendor.head')
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			@include('admin.layouts.logo-header')
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			@include('admin.layouts.navbar')
			<!-- End Navbar -->
		</div>
                                    
		<!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- End Sidebar -->
		
        <div class="tanyajak">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title">TanyaJak!</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="add-row" class="display table table-striped table-hover" >
                                                <thead>
                                                    <tr class="text-center">
                                                        <th style="width: 1%">Kode</th>
                                                        <th>Pengirim</th>
                                                        <th>NIM</th>
                                                        <th>Jurusan</th>
                                                        <th>Email</th>
                                                        <th style="width: 15%">Pertanyaan</th>
                                                        <th>Terkirim</th>
                                                        <th style="width: 1%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tanyajak as $data)
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                $number = $data->id;
                                                                $formattedNumber = sprintf("%03d", $number);
                                                                echo $formattedNumber;
                                                            ?>
                                                        </td>
                                                        <td>{{$data->nama}}</td>
                                                        <td>{{$data->nim}}</td>
                                                        <td>{{$data->jurusan->nama}}</td>
                                                        <td><a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$data->email}}" target="_blank">{{$data->email}}</a></td>
                                                        <td>
                                                            <?php
                                                            $num_char = 30;
                                                            $text = $data->keterangan;
                                                            echo substr($text, 0, $num_char) . '...';
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            @if ($data->created_at->diffInSeconds() <= 86400)
                                                                {{$data->created_at->diffForHumans()}} <span class="badge bg-success text-white">Baru</span>
                                                            @elseif ($data->created_at->diffInSeconds() <= 604800)
                                                                {{$data->created_at->diffForHumans()}}
                                                            @else
                                                                {{Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y')}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal" data-target="#detail{{$data->id}}" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                    <i class="fa-solid fa-circle-info"></i>
                                                                </button>
                                                                <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger swa_btn_delete" data-id="{{$data->id}}">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
														    </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal -->
                                                        <div class="modal-admin">
                                                            <div class="modal fade" id="detail{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="container">
                                                                                <div class="mb-3">
                                                                                    <div class="title-detail">
                                                                                        <p>Kode Pengirim</p>
                                                                                    </div>
                                                                                    <div class="text-detail">
                                                                                        <p>
                                                                                            <?php
                                                                                            $number = $data->id;
                                                                                            $formattedNumber = sprintf("%03d", $number);
                                                                                            echo $formattedNumber;
                                                                                            ?>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <div class="title-detail">
                                                                                        <p>Nama Lengkap</p>
                                                                                    </div>
                                                                                    <div class="text-detail">
                                                                                        <p>{{$data->nama}}</p>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="mb-3">
                                                                                    <div class="title-detail">
                                                                                        <p>Nomor Induk Mahasiswa</p>
                                                                                    </div>
                                                                                    <div class="text-detail">
                                                                                        <p>{{$data->nim}}</p>
                                                                                    </div>
                                                                                </div>                                
                                                                                <div class="mb-3">
                                                                                    <div class="title-detail">
                                                                                        <p>Jurusan</p>
                                                                                    </div>
                                                                                    <div class="text-detail">
                                                                                        <p>{{$data->jurusan->nama}}</p>
                                                                                    </div>
                                                                                </div>                                
                                                                                <div class="mb-3">
                                                                                    <div class="title-detail">
                                                                                        <p>Pertanyaan</p>
                                                                                    </div>
                                                                                    <div class="text-detail">
                                                                                        <p>{{$data->keterangan}}</p>
                                                                                    </div>
                                                                                </div>                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer no-bd">
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                                                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$data->email}}" target="_blank">
                                                                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-paper-plane mr-2"></i> Balas Pesan</button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal -->
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
                @include('admin.layouts.footer')
            </div>
        </div>

        
		
		
        
	</div>

    @include('admin.layouts.vendor.js')

    <script>
        @if (Session::has('success')) 
            toastr.success("{{Session::get('success')}}")
        @endif
    </script>
    
	<script >
		$(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});
		});

        $('.swa_btn_delete').click(function() {
            var no_id = $(this).attr('data-id');
            Swal.fire({
                title: 'Yakin?',
                text: "Anda akan menghapus data ini ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/layanan/tanyajak/delete/"+no_id+""
                    Swal.fire(
                        'Berhasil!',
                        'Data telah dihapus.',
                        'success'
                    )
                }
            })
        });
	</script>
</body>
</html>