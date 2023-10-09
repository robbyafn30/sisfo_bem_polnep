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
		
        <div class="kepengurusan">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title">Data Pengurus</h4>
                                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah">
                                                <i class="fa fa-plus mr-2"></i>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                        
                                    <!-- Modal Tambah -->
                                    <div class="modal-admin">
                                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form id="" action="{{route('TambahKepengurusan')}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mt-3">
                                                                    <div class="col-sm-6 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Nama</label>
                                                                            <input name="nama" type="text" class="form-control" id="NameInput" required>
                                                                            @error('nama')
                                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                            @enderror
                                                                            <span class="error-message" id="NameError"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-6 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>NIM</label>
                                                                            <input name="nim" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Tanggal Lahir</label>
                                                                            <input name="tanggal_lahir" type="date" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-3">
                                                                        <div class="form-floating">
                                                                            <label>Jurusan</label>
                                                                            <select class="form-control" name="jurusan_id" required>
                                                                                <option value="" disabled selected>--Pilih Jurusan--</option>
                                                                                @foreach($jurusan as $data)
                                                                                    <option value="{{ $data->id }}" {{ old('jurusan_id') == $data->id ? 'selected' : '' }}>
                                                                                        {{ $data->nama }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Jabatan</label>
                                                                            <select class="form-control" name="jabatan_id" id="jabatan_id" required>
                                                                                <option value="" disabled selected>--Pilih Jabatan--</option>
                                                                                @foreach($jabatan as $data)
                                                                                    <option value="{{ $data->id }}" {{ old('jabatan_id') == $data->id ? 'selected' : '' }}>
                                                                                        {{ $data->nm_jabatan }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6" id="kementerian_select_container" style="display: none;">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Kementerian</label>
                                                                            <select class="form-control" name="kementerian_id">
                                                                                <option value="" disabled selected>--Pilih Kementerian--</option>
                                                                                @foreach($kementerian as $data)
                                                                                    <option value="{{ $data->id }}" {{ old('kementerian_id') == $data->id ? 'selected' : '' }}>
                                                                                        {{ $data->nm_kementerian }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6" id="departemen_container" style="display: none;">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Departemen</label>
                                                                            <input name="departemen" type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <label>No. Hp</label>
                                                                            <input name="no_hp" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Link Instagram</label>
                                                                            <input name="instagram" type="text" class="form-control" placeholder="*Tidak ada data">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <label>Foto</label>
                                                                            <input name="foto" type="file" class="form-control" required>
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
                                                        <th>Nama</th>
                                                        <th>NIM</th>
                                                        <th>Jurusan</th>
                                                        <th>Jabatan</th>
                                                        <th>Kementerian</th>
                                                        <th style="width: 1px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                    @foreach ($kepengurusan as $data)
                                                        <tr class="text-center">
                                                            <td>{{$i++}}</td>
                                                            <td>{{$data->nama}}</td>
                                                            <td>{{$data->nim}}</td>
                                                            <td>{{$data->jurusan->nama}}</td>
                                                            <td>{{$data->jabatan->nm_jabatan}}</td>
                                                            <td>
                                                                <?php echo ($data->kementerian !== null && $data->kementerian->nm_kementerian !== null) ? $data->kementerian->nm_kementerian : ' - '; ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="form-button-action">
                                                                    <button type="button" data-toggle="modal" data-target="#detail{{$data->id}}" title="" class="btn btn-link btn-warning btn-lg">
                                                                        <i class="fa-solid fa-circle-info"></i>
                                                                    </button>
                                                                    <button type="button" data-toggle="modal" data-target="#edit{{$data->id}}" title="" class="btn btn-link btn-primary btn-lg" >
                                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                                    </button>
                                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger swa_btn_delete" data-id="{{$data->id}}" data-nama="{{$data->nama}}">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        
                                                        </tr>
                        
                                                        <!-- Modal Detail -->
                                                        <div class="modal-admin">
                                                            <div class="modal fade" id="detail{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="container">
                                                                                <div class="row p-3">
                                                                                    <div class="col-md-5 border">
                                                                                        <div class="mb-3 text-center">
                                                                                            <img src="{{ asset('assets/Kepengurusan/' . $data->foto) }}" class="img-fluid mt-3" height="300" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-7 item-detail">
                                                                                        <div class="mt-3 mb-3">
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
                                                                                                <p>Tanggal Lahir</p>
                                                                                            </div>
                                                                                            <div class="text-detail">
                                                                                                <p>{{Carbon\Carbon::parse($data->tanggal_lahir)->isoformat('DD MMMM Y')}}</p>
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
                                                                                                <p>Jabatan</p>
                                                                                            </div>
                                                                                            <div class="text-detail">
                                                                                                <p>{{$data->jabatan->nm_jabatan}}</p>
                                                                                            </div>
                                                                                        </div>  
                                                                                        <div class="mb-3">
                                                                                            <div class="title-detail">
                                                                                                <p>Kementerian</p>
                                                                                            </div>
                                                                                            <div class="text-detail">
                                                                                                <p><?php echo ($data->kementerian !== null && $data->kementerian->nm_kementerian !== null) ? $data->kementerian->nm_kementerian : ' - '; ?></p>
                                                                                            </div>
                                                                                        </div>  
                                                                                        <div class="mb-3">
                                                                                            <div class="title-detail">
                                                                                                <p>Departemen</p>
                                                                                            </div>
                                                                                            <p><?php echo ($data->departemen !== null) ? $data->departemen : ' - '; ?></p>
                                                                                        </div>  
                                                                                        <div class="mb-3">
                                                                                            <div class="title-detail">
                                                                                                <p>No. Handphone</p>
                                                                                            </div>
                                                                                            <div class="text-detail">
                                                                                                <p>{{$data->no_hp}}</p>
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer no-bd">
                                                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Kembali</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal Detail -->
                                                        
                                                        <!-- Modal Edit -->
                                                        <div class="modal-admin">
                                                            <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="container">
                                                                                <form id="" action="{{ route('UpdateKepengurusan', $data->id) }}" method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="row mt-3">
                                                                                        <div class="col-sm-6 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Nama</label>
                                                                                                <input name="nama" value="{{$data->nama}}" type="text" class="form-control" id="NameInput" required>
                                                                                                @error('nama')
                                                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                                                @enderror
                                                                                                <span class="error-message" id="NameError"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6 col-6 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>NIM</label>
                                                                                                <input name="nim" value="{{$data->nim}}" type="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Tanggal Lahir</label>
                                                                                                <input name="tanggal_lahir" value="{{$data->tanggal_lahir}}" type="date" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6 mb-3">
                                                                                            <div class="form-floating">
                                                                                                <label>Jurusan</label>
                                                                                                <select class="form-control" name="jurusan_id" required>
                                              
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Jabatan</label>
                                                                                                <select class="form-control" name="jabatan_id">
                 
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Kementerian</label>
                                                                                                <select class="form-control" name="kementerian_id">


                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Departemen</label>
                                                                                                <input name="departemen" value="{{$data->departemen}}" type="text" class="form-control" placeholder="-">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>No. Hp</label>
                                                                                                <input name="no_hp" value="{{$data->no_hp}}"  type="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Link Instagram</label>
                                                                                                <input name="instagram" type="text" class="form-control" placeholder="*Tidak ada data">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-12">
                                                                                            <div class="form-floating mb-3">
                                                                                                <label>Foto</label>
                                                                                                <div class="d-flex">
                                                                                                    <div class="col-md-4 p-0">
                                                                                                        <p>File sebelumnya :</p>
                                                                                                    </div>
                                                                                                    <div class="col-md-8 p-0">
                                                                                                        <a href="{{ asset('assets/Kepengurusan/' . $data->foto) }}">
                                                                                                            <img src="{{ asset('assets/Kepengurusan/' . $data->foto) }}" width="100" alt="">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-floating mb-3">
                                                                                                <input name="foto" type="file" class="form-control" required>
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

    <script>
        // Mendapatkan elemen <select> Jabatan
        var jabatanSelect = document.getElementById('jabatan_id');
        // Mendapatkan elemen <div> yang berisi <select> Kementerian
        var kementerianSelectContainer = document.getElementById('kementerian_select_container');

        // Menambahkan event listener untuk memantau perubahan pada <select> Jabatan
        jabatanSelect.addEventListener('change', function() {
            // Memeriksa apakah yang dipilih adalah ID 1 atau 2 (sesuaikan dengan ID yang sesuai)
            if (jabatanSelect.value === '1' || jabatanSelect.value === '2') {
                // Jika dipilih ID 1 atau 2, sembunyikan <select> Kementerian
                kementerianSelectContainer.style.display = 'none';
            } else {
                // Jika dipilih selain ID 1 atau 2, tampilkan <select> Kementerian
                kementerianSelectContainer.style.display = 'block';
            }
        });
    </script>

    <script>
        // Ambil elemen select jabatan_id
        var jabatanSelect = document.getElementById('jabatan_id');
        // Ambil elemen container departemen
        var departemenContainer = document.getElementById('departemen_container');

        // Tambahkan event listener untuk mendeteksi perubahan dalam select jabatan_id
        jabatanSelect.addEventListener('change', function() {
            var selectedJabatanId = jabatanSelect.value;
            // Periksa apakah jabatan_id sama dengan 5 atau 6
            if (selectedJabatanId === '5' || selectedJabatanId === '6') {
                departemenContainer.style.display = 'block'; // Tampilkan input departemen
            } else {
                departemenContainer.style.display = 'none'; // Sembunyikan input departemen
            }
        });
    </script>

    
	<script >
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

		$(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 100,
			});			
		});

        $('.swa_btn_delete').click(function() {
            var no_id = $(this).attr('data-id');
            var nama_id = $(this).attr('data-nama');
            Swal.fire({
                title: 'Yakin?',
                text: "Anda akan menghapus data "+nama_id+" ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/data-pengurus/kepengurusan/delete/"+no_id+""
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