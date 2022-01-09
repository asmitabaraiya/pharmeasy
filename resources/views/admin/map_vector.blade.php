@extends('admin.app')
@section('body')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Vector Map</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Map</li>
								<li class="breadcrumb-item active" aria-current="page">Vector Map</li>
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
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">World Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="world-map-markers" style="height: 400px"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<div class="col-lg-6 col-12">  
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">India</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="india" style="height: 350px"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<div class="col-lg-6 col-12">  
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">USA</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="usa" style="height: 350px"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<div class="col-lg-6 col-12">          
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Australia</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="australia" style="height: 350px"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<div class="col-lg-6 col-12">          
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">UK</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="uk" style="height: 350px"></div>
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