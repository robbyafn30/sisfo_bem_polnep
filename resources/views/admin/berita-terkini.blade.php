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
                                            <h4 class="card-title">Berita Terkini</h4>
                                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah">
                                                <i class="fa fa-plus mr-2"></i>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Modal Tambah -->
                                    <div class="modal-admin">
                                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg " role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form id="Tambah-Berita" action="{{ '/admin/berita-terkini' }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mt-3">
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Judul Berita</label>
                                                                            <textarea name="judul_berita"  type="text" class="form-control" required></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Narasi Berita</label>
                                                                            <textarea name="narasi_berita" id="tambah_narasi"  type="text" class="form-control" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Foto Berita</label>
                                                                            <input name="foto_berita" type="file" class="form-control" accept=".jpg, .jpeg, .png" multiple required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer pr-0 no-bd">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" id="addRowButton " class="btn btn-primary">Upload</button>
                                                                </div>
                                                            
                                                                <script>
                                                                    ClassicEditor
                                                                            .create( document.querySelector( '#tambah_narasi' ) )
                                                                            .then( tambah_narasi => {
                                                                                    console.log( tambah_narasi );
                                                                            } )
                                                                            .catch( error => {
                                                                                    console.error( error );
                                                                            } );
                                                                </script>

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
                                                        <th style="width: 20%">Judul Berita</th>
                                                        <th>Narasi Berita</th>
                                                        <th style="width: 10%">Tanggal Upload</th>
                                                        <th style="width: 10%">Foto Berita</th>
                                                        <th style="width: 1%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($beritaterkini as $data)
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                $number = $data->id;
                                                                $formattedNumber = sprintf("%03d", $number);
                                                                echo $formattedNumber;
                                                            ?>
                                                        </td>
                                                        <td>{{$data->judul_berita}}</td>
                                                        <td><?php $num_char = 500; $text = $data->narasi_berita; echo substr($text, 0, $num_char) . '...';?></td>
                                                        <td>{{Carbon\Carbon::parse($data->created_at)->isoformat(' D MMMM Y')}}</td>
                                                        <td class="text-center">
                                                            <div uk-lightbox class="p-3">
                                                                <a href="{{ asset('assets/FotoBerita/' . $data->foto_berita) }}">
                                                                    <img src="{{ asset('assets/FotoBerita/' . $data->foto_berita) }}" width="150" height="100" alt="">
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
                                                                {{-- <a href="/admin/tes/{{$data->id}}">
                                                                    <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger">  
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button> 
                                                                </a> --}}
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal Edit -->
                                                    <div class="modal-admin">
                                                        <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <div class="container">
                                                                            <form id="Update-Berita" action="/admin/berita-terkini/{{$data->id}}" method="post" enctype="multipart/form-data">
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
                                                                                            <label>Judul Berita</label>
                                                                                            <textarea name="judul_berita" class="form-control" rows="2" required>{{ $data->judul_berita }}</textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Narasi Berita</label>
                                                                                            <textarea name="narasi_berita"  id='edit_narasi_{{ $data->id }}' class="form-control" rows="6" required>{{ $data->narasi_berita }}</textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>Foto Berita</label>
                                                                                            <div class="d-flex">
                                                                                                <div class="col-md-4 p-0">
                                                                                                    <p>File sebelumnya :</p>
                                                                                                </div>
                                                                                                <div class="col-md-8 p-0">
                                                                                                    <a href="{{ asset('assets/FotoBerita/' . $data->foto_berita) }}">
                                                                                                        <img src="{{ asset('assets/FotoBerita/' . $data->foto_berita) }}" width="150" height="100" alt="">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <input name="foto_berita" value="{{ $data->foto_berita }}" class="form-control" type="file" accept=".jpg, .jpeg, .png">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer pr-0 no-bd">
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                                    <button type="submit" id="addRowButton" class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <!-- End Modal -->

                                                    <script>
                                                        ClassicEditor
                                                                .create( document.querySelector( '#edit_narasi_' + @json($data->id)) )
                                                                .then( edit_narasi => {
                                                                        console.log( edit_narasi );
                                                                } )
                                                                .catch( error => {
                                                                        console.error( error );
                                                                } );
                                                    </script>
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
                    window.location = "/admin/berita-terkini/delete/"+no_id+""
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