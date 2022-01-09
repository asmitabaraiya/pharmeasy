@extends('admin.app')
@section('body')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Google Map</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Map</li>
								<li class="breadcrumb-item active" aria-current="page">Google Map</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		  <!-- START Map -->
		  <div class="row">
			<div class="col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Simple Basic Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="gmaps-simple" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Market with Info window</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="markermap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Over Layer Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="overlayermap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<div class="col-lg-6">          
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Polygonal Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="polymap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Routes Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="routesmap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Styled Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="styledmap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Map -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection