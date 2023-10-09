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
                                            <h4 class="card-title">Data User</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="add-row" class="display table table-striped table-hover" >
                                                <thead>
                                                    <tr class="text-center">
                                                        <th style="width: 1px;"">No</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th style="width: 1px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                    @foreach ($user as $data)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td>{{$data->name}}</td>
                                                        <td>{{$data->email}}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal" data-target="#edit{{$data->id}}" title="" class="btn btn-link btn-primary btn-lg" >
                                                                    <i class="fa-solid fa-pen-to-square"></i>
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
                                                                            <form id="" action="/admin/data-user/{{$data->id}}"  method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="row mt-3">
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Nama</label>
                                                                                            <input name="name" value="{{$data->name}}" type="text" class="form-control" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <div class="form-floating">
                                                                                            <label>Email</label>
                                                                                            <input name="email" value="{{$data->email}}" type="text" class="form-control" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating mb-3">
                                                                                            <label>*Password Baru</label>
                                                                                            <input name="password" type="password" class="form-control" required>
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
                var id_berita = $(this).attr('data-id');
                swal({
                    title: "Yakin?",
                    text: "Anda akan menghapus kajian ini ? ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/admin/inventaris/delete/"+id_berita+""
                        swal("Kajian telah dihapus!", {
                        icon: "success",
                        });
                    } else {
                        swal("Kajian tidak jadi dihapus");
                    }
                });
            });
	</script>
</body>
</html>