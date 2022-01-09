@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Advanced Form Elements</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Form Elements</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		    <div class="box">
				<div class="box-header">					
					<h4 class="box-title">Dropzone</h4>
					<h6 class="box-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
				</div>
				<div class="box-body">
					<form action="#" class="dropzone">
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- /.content -->

	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection