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
		
        <div class="berita-terkini">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title">Dokumentasi Kegiatan</h4>
                                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah">
                                                <i class="fa fa-plus mr-2"></i>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                        <div class="modal-admin">
                                            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog " role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <form id="Tambah-Dokumentasi" action="{{ '/admin/beranda/dokumentasi-kegiatan' }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row mt-3">
                                                                        <div class="col-sm-12 mb-3">
                                                                            <div class="form-floating">
                                                                                <label>Nama Kegiatan</label>
                                                                                <input name="nama" type="text" class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 mb-3">
                                                                            <div class="form-floating">
                                                                                <label>Tanggal Kegiatan</label>
                                                                                <input name="tanggal" type="date" class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-floating mb-3">
                                                                                <label>Foto Kegiatan</label>
                                                                                <input name="foto_kegiatan" class="form-control" type="file" accept=".jpg, .jpeg, .png" multiple required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer pr-0 no-bd">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" id="addRowButton " class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Modal -->

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="add-row" class="display table table-striped table-hover" >
                                                <thead>
                                                    <tr class="text-center">
                                                        <th style="width: 1%">Kode</th>
                                                        <th>Nama Kegiatan</th>
                                                        <th>Tanggal Kegiatan</th>
                                                        <th>Tanggal Upload</th>
                                                        <th>Foto Kegiatan</th>
                                                        <th style="width: 1%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dokumentasikegiatan as $data)
                                                    <tr class="text-center">
                                                        <td>
                                                            <?php
                                                                $number = $data->id;
                                                                $formattedNumber = sprintf("%03d", $number);
                                                                echo $formattedNumber;
                                                            ?>
                                                        </td>
                                                        <td>{{$data->nama}}</td>
                                                        <td>{{Carbon\Carbon::parse($data->tanggal)->isoformat('dddd, D MMMM Y')}}</td>
                                                        <td>
                                                            @if ($data->created_at->diffInSeconds() <= 86400)
                                                                {{$data->created_at->diffForHumans()}} <span class="badge bg-success text-white">Baru</span>
                                                            @elseif ($data->created_at->diffInSeconds() <= 604800)
                                                                {{$data->created_at->diffForHumans()}}
                                                            @else
                                                                {{Carbon\Carbon::parse($data->tanggal)->isoformat('D/M/Y')}}
                                                            @endif
                                                          </td>
                                                        <td>
                                                            <div uk-lightbox class="p-3">
                                                                <a href="{{ asset('assets/DokumentasiKegiatan/' . $data->foto_kegiatan) }}">
                                                                    <img src="{{ asset('assets/DokumentasiKegiatan/' . $data->foto_kegiatan) }}" width="150"height="100" alt="">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal" data-target="#edit{{$data->id}}" class="btn btn-link btn-primary btn-lg">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <a href="#">
                                                                    <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger swa_btn_delete" data-id="{{$data->id}}">  
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal Edit -->
                                                        <div class="modal-admin">
                                                            <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="container">
                                                                                <form id="Update-Dokumentasi" action="/admin/beranda/dokumentasi-kegiatan/{{$data->id}}" method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="row mt-3">
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Nama Kegiatan</label>
                                                                                                <input name="nama" value="{{$data->nama}}" type="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Tanggal Kegiatan</label>
                                                                                                <input name="tanggal" value="{{$data->tanggal}}" type="date" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Foto Kegiatan</label>                                                 
                                                                                                <div class="d-flex">
                                                                                                    <div class="col-md-4 p-0">
                                                                                                        <p>File sebelumnya :</p>
                                                                                                    </div>
                                                                                                    <div class="col-md-8 p-0">
                                                                                                        <a href="{{ asset('assets/DokumentasiKegiatan/' . $data->foto_kegiatan) }}">
                                                                                                            <img src="{{ asset('assets/DokumentasiKegiatan/' . $data->foto_kegiatan) }}" height="100px" alt="">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-floating mb-3">
                                                                                                <input name="foto_kegiatan" value="{{$data->foto_kegiatan}}" type="file" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer pr-0 no-bd">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                                        <button type="submit" id="addRowButton " class="btn btn-primary">Update</button>
                                                                                    </div>
                                                                                    
                                                                                </form>
                                                                            </div>
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
                        window.location = "/admin/beranda/dokumentasi-kegiatan/delete/"+no_id+""
                        Swal.fire(
                            'Berhasil!',
                            'Data telah dihapus.',
                            'success'
                        )
                    }
                })
            });

		});
	</script>
</body>
</html>