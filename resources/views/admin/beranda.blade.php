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
		
        <div class="beranda">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner align-items-center mt-5 ">
                        <div class="col-md-12 text-center mt-5">
                            <p>Selamat Datang, <span style="font-weight: 800;">{{ Auth::user()-> name}}</span></p>
                            <img src="/admin/img/logo/logo-bem.png" alt="" class="img-fluid mt-5">
                        </div>
                        
                    </div>
                </div>
                @include('admin.layouts.footer')
            </div>
        </div>
		
		
        
	</div>

    @include('admin.layouts.vendor.js')

	<script >
		$(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});
		});
	</script>
</body>
</html>