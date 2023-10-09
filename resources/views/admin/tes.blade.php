 

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
                        <div class="row justify-content-center">
                            <div class="col-md-8">

                                <img src="{{ asset('assets/FotoBerita/' . $beritaterkini->foto_berita) }}" class="img-fluid" alt="">
                                <div class="text-detail">
                                    <p>{{$beritaterkini->judul_berita}}</p>
                                </div>
                                <div class="text-detail">
                                    <p>{{$beritaterkini->narasi_berita}}</p>
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
                        window.location = "/admin/arsipan-kajian/delete/"+id_berita+""
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