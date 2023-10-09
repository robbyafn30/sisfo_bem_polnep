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
		
        <div class="inventaris">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title">Inventaris</h4>
                                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah">
                                                <i class="fa fa-plus mr-2"></i>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Modal Tambah -->
                                    <div class="modal-admin">
                                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog " role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form id="" action="/admin/inventaris/" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mt-3">
                                                                    <div class="col-sm-12 col-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Kode</label>
                                                                            <input name="kode" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Nama Barang</label>
                                                                            <input name="nama" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Satuan</label>
                                                                            <input name="satuan" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Jumlah</label>
                                                                            <input name="jumlah" type="number" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Kondisi</label>
                                                                            <div class="row">
                                                                                <div class="col-md-3 col-4">
                                                                                    <div class="form-check ml-3">
                                                                                        <input class="form-check-input" type="radio" name="kondisi" value="Baik" id="opsi1" >
                                                                                        <label class="form-check-label ml-2" for="opsi1">Baik</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="kondisi" value="Rusak" id="opsi2" >
                                                                                        <label class="form-check-label ml-2" for="opsi2">Rusak</label>
                                                                                      </div>
                                                                                </div>
                                                                            </div>                                                                             
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
                                                        <th style="width: 1px;"">No</th>
                                                        <th>Tanggal</th>
                                                        <th>Kode</th>
                                                        <th>Nama Barang</th>
                                                        <th>Satuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Kondisi</th>
                                                        <th style="width: 1px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                    @foreach ($barang as $data)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td>{{Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y')}}</td>
                                                        <td>{{$data->kode}}</td>
                                                        <td>{{$data->nama}}</td>
                                                        <td>{{$data->satuan}}</td>
                                                        <td>{{$data->jumlah}}</td>
                                                        <td>{{$data->kondisi}}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal" data-target="#edit{{$data->id}}" title="" class="btn btn-link btn-primary btn-lg" >
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger swa_btn_delete" data-id="{{$data->id}}">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
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
                                                                            <form id="" action="/admin/inventaris/{{$data->id}}"  method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="row mt-3">
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Kode</label>
                                                                                            <input name="kode" value="{{$data->kode}}" type="text" class="form-control" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Nama Barang</label>
                                                                                            <input name="nama" value="{{$data->nama}}" type="text" class="form-control" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>Satuan</label>
                                                                                            <input name="satuan" value="{{$data->satuan}}" type="text" class="form-control" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>Jumlah</label>
                                                                                            <input name="jumlah" value="{{$data->jumlah}}" type="number" class="form-control" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>Kondisi</label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-3 col-4">
                                                                                                    <div class="form-check ml-3">
                                                                                                        <input class="form-check-input" type="radio" name="kondisi" value="Baik" id="opsi1"
                                                                                                        @if ($data->kondisi == 'Baik') checked  @endif>
                                                                                                        <label class="form-check-label ml-2" for="opsi1">Baik</label>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class="col-md-3 col-4">
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input" type="radio" name="kondisi" value="Rusak" id="opsi2"
                                                                                                        @if ($data->kondisi == 'Rusak') {{ 'checked '}}  @endif>
                                                                                                        <label class="form-check-label ml-2" for="opsi2">Rusak</label>
                                                                                                      </div>
                                                                                                </div>
                                                                                            </div>                                                                             
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
                    window.location = "/admin/inventaris/delete/"+no_id+""
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