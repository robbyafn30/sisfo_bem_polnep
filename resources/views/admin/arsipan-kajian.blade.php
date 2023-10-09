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
		
        <div class="arsipan-kajian">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title">Arsipan Kajian</h4>
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
                                                            <form id="Tambah-Arsipan" action="/admin/arsipan-kajian" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mt-3">
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Judul</label>
                                                                            <input name="judul" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Thumbnail</label>
                                                                            <input name="thumbnail" type="file" class="form-control" accept=".jpg, .jpeg, .png" multiple required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Dokumen</label>
                                                                            <input name="dokumen" type="file" class="form-control" accept=".pdf, .docx" multiple required>
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
                                                        <th style="width: 20%">Kode Kajian</th>
                                                        <th>Judul Kajian</th>
                                                        <th style="width: 15%">Tanggal Upload</th>
                                                        <th style="width: 15%">Thumbnail</th>
                                                        <th style="width: 10%">Dokumen Kajian</th>
                                                        <th style="width: 1%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                    @foreach ($arsipankajian as $data)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td><?php $number = $data->id; $formattedNumber = sprintf("%03d", $number); echo $formattedNumber;?>/BEM-POLNEP/KASTRAG/{{Carbon\Carbon::parse($data->created_at)->isoformat('M')}}/{{Carbon\Carbon::parse($data->created_at)->isoformat('Y')}}
                                                        </td>
                                                        <td>{{$data->judul}}</td>
                                                        <td>{{Carbon\Carbon::parse($data->created_at)->isoformat('D/M/Y')}}</td>
                                                        <td>
                                                            <div uk-lightbox class="p-3">
                                                                <a href="{{ asset('assets/ThumbnailKajian/' . $data->thumbnail) }}">
                                                                    <img src="{{ asset('assets/ThumbnailKajian/' . $data->thumbnail) }}" height="150" alt="">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#!" onclick="newTab('{{ asset('assets/DokumenKajian/' . $data->dokumen) }}')">
                                                                <p>Download</p>
                                                            </a>
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
                                                                            <form id="Update-Arsipan" action="/admin/arsipan-kajian/{{$data->id}}"  method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="row mt-3">
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Kode Kajian</label>
                                                                                            <input type="text" class="form-control" id="disableinput" 
                                                                                            value=" <?php $number = $data->id; $formattedNumber = sprintf("%03d", $number); echo $formattedNumber;?>" disabled="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Judul</label>
                                                                                            <input name="judul" value="{{$data->judul}}" type="text" class="form-control" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>Thumbnail</label>
                                                                                            <div class="d-flex">
                                                                                                <div class="col-md-4 p-0">
                                                                                                    <p>File sebelumnya :</p>
                                                                                                </div>
                                                                                                <div class="col-md-8 p-0">
                                                                                                    <a href="{{ asset('assets/ThumbnailKajian/' . $data->thumbnail) }}">
                                                                                                        <img src="{{ asset('assets/ThumbnailKajian/' . $data->thumbnail) }}" height="150" alt="">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <input name="thumbnail" value="{{$data->thumnail}}" type="file" class="form-control" accept=".jpg, .jpeg, .png" multiple>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>Dokumen</label>
                                                                                            <div class="d-flex">
                                                                                                <div class="col-md-4 p-0">
                                                                                                    <p>File sebelumnya :</p>
                                                                                                </div>
                                                                                                <div class="col-md-8 p-0">
                                                                                                    <b><p>{{$data->dokumen}}</p></b>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input name="dokumen" type="file" class="form-control" accept=".pdf, .docx" multiple>
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

        
        function newTab(site) {
            window.open(site, '_blank').focus();
        }

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
                    window.location = "/admin/arsipan-kajian/delete/"+no_id+""
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