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
                                                                <form id="Tambah-Dokumentasi" action="{{ '/admin/beranda/instagram' }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row mt-3">
                                                                        <div class="col-sm-12 mb-3">
                                                                            <div class="form-floating">
                                                                                <label>Link Postingan</label>
                                                                                <textarea name="link"  type="text" class="form-control" rows="4" required></textarea>
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
                                                        <th style="width: 1%">No</th>
                                                        <th style="width: 25%"">Tanggal Upload</th>
                                                        <th>Link Postingan</th>
                                                        <th style="width: 1%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                    @foreach ($instagram as $data)
                                                        <tr class="text-center">
                                                            <td>{{$i++}}</td>
                                                            <td>{{Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y')}}</td>
                                                            <td>{{$data->link}}</td>
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
                                                                                    <form id="Update-Dokumentasi" action="/admin/beranda/instagram/{{$data->id}}" method="post" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        <div class="row mt-3">
                                                                                            <div class="col-sm-12 mb-3">
                                                                                                <div class="form-floating">
                                                                                                    <label>Link Postingan</label>
                                                                                                    <textarea name="link" type="text" class="form-control" rows="4" required>{{$data->link}}</textarea>
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
                        window.location = "/admin/beranda/instagram/delete/"+no_id+""
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