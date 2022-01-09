@extends('admin.app')
@section('body')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Morris chart</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">Morris chart</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			
		    <div class="row">
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Line Chart</h4>
							<div id="line-chart"></div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Bar Chart</h4>
							<div id="bar-chart"></div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Donute Chart</h4>
							<div id="donut-chart"></div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Area Chart</h4>
							<ul class="list-inline text-center mt-40">
								<li>
									<h5><i class="fa fa-circle mr-5 text-success"></i>Data 1</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle mr-5 text-info"></i>Data 2</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle mr-5 text-warning"></i>Data 3</h5>
								</li>
							</ul>
							<div id="area-chart3"></div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">line Chart</h4>
							<ul class="list-inline text-right">
								<li>
									<h5><i class="fa fa-circle mr-5 text-primary"></i>Data 1</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle mr-5 text-success"></i>Data 2</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle mr-5 text-info"></i>Data 3</h5>
								</li>
							</ul>
							<div id="area-chart"></div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Area Chart</h4>
							<ul class="list-inline text-right">
								<li>
									<h5><i class="fa fa-circle mr-5 text-warning"></i>Data 1</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle mr-5 text-danger"></i>Data 2</h5>
								</li>
							</ul>
							<div id="area-chart2"></div>
						</div>
					</div>
				</div>
				<!-- /col -->
			</div>
		  
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection