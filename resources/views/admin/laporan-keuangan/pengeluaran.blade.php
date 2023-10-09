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
                                            <h4 class="card-title">Pengeluaran</h4>
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
                                                            <form id="" action="/admin/laporan-keuangan/pengeluaran" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mt-3">
                                                                    <div class="col-md-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Jenis</label>
                                                                            <select class="form-control" name="jenis" required>
                                                                                <option value="Pemasukan" disabled>Pemasukan</option>
                                                                                <option value="Pengeluaran" selected>Pengeluaran</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Rincian</label>
                                                                            <input name="rincian" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Jumlah</label>
                                                                            <input name="jumlah" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Keterangan</label>
                                                                            <input name="keterangan" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Bukti</label>
                                                                            <input name="bukti" type="file" class="form-control" accept=".jpg, .jpeg, .png" multiple required>
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
                                                        <th>Kode</th>
                                                        <th>Tanggal</th>
                                                        <th>Rincian</th>
                                                        <th>Jumlah</th>
                                                        <th>Keterangan</th>
                                                        <th>Bukti</th>
                                                        <th style="width: 1px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                    @foreach ($laporan as $data)
                                                        <tr class="text-center">
                                                            <td>{{$i++}}</td>
                                                            <td>
                                                                <?php
                                                                    $number = $data->id;
                                                                    $formattedNumber = sprintf("%03d", $number);
                                                                    echo $formattedNumber;
                                                                ?>
                                                            </td>
                                                            <td>{{Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y')}}</td>
                                                            <td>{{$data->rincian}}</td>
                                                            <td>Rp. {{$data->jumlah}},00</td>
                                                            <td>{{$data->keterangan}}</td>
                                                            <td>
                                                                <div uk-lightbox class="p-2">
                                                                    <a href="{{ asset('assets/BuktiLaporanKeuangan/Pengeluaran/' . $data->bukti) }}">
                                                                        <img src="{{ asset('assets/BuktiLaporanKeuangan/Pengeluaran/' . $data->bukti) }}" height="150px" alt="">
                                                                    </a>
                                                                </div>
                                                            </td>
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
                                                                                <form id="" action="/admin/laporan-keuangan/pengeluaran/{{$data->id}}"  method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="row mt-3">
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Kode</label>
                                                                                                <input type="text" class="form-control" id="disableinput" 
                                                                                                value=" <?php $number = $data->id; $formattedNumber = sprintf("%03d", $number); echo $formattedNumber;?>" disabled="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Rincian</label>
                                                                                                <input name="rincian" value="{{$data->rincian}}" type="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Jumlah</label>
                                                                                                <input name="jumlah" value="{{$data->jumlah}}" type="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Keterangan</label>
                                                                                                <input name="keterangan" value="{{$data->keterangan}}" type="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Bukti</label>                                                    
                                                                                                <div class="d-flex">
                                                                                                    <div class="col-md-4 p-0">
                                                                                                        <p>File sebelumnya :</p>
                                                                                                    </div>
                                                                                                    <div class="col-md-8 p-0">
                                                                                                        <a href="{{ asset('assets/BuktiLaporanKeuangan/Pengeluaran/' . $data->bukti) }}">
                                                                                                            <img src="{{ asset('assets/BuktiLaporanKeuangan/Pengeluaran/' . $data->bukti) }}" height="100px" alt="">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 mb-3">
                                                                                            <div class="form-floating">                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                <input name="bukti" type="file" class="form-control" accept=".jpg, .jpeg, .png" multiple>
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
                    window.location = "/admin/laporan-keuangan/pengeluaran/delete/"+no_id+""
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