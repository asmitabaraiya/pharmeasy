@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Badges</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Badges</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Basic badge styling</h4>               
						  </div>
						<div class="box-body">
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Primary badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-primary">Primary</span></div>
							  <div class="px-25 py-10">Primary To use, add <code>.badge-primary</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Secondary badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-secondary">Secondary</span></div>
							  <div class="px-25 py-10">secondary To use, add <code>.badge-secondary</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Info badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-info">Info</span></div>
							  <div class="px-25 py-10">Info To use, add <code>.badge-Info</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Success badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-success">Success</span></div>
							  <div class="px-25 py-10">Success To use, add <code>.badge-Success</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Danger badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-danger">Danger</span></div>
							  <div class="px-25 py-10">Danger To use, add <code>.badge-Danger</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Warning badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-warning">Warning</span></div>
							  <div class="px-25 py-10">Warning To use, add <code>.badge-Warning</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Light badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-light">Light</span></div>
							  <div class="px-25 py-10">Light To use, add <code>.badge-Light</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Dark badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-dark">Dark</span></div>
							  <div class="px-25 py-10">Dark To use, add <code>.badge-Dark</code> to the base <code>.badge</code> class</div>
							</div>
							
							
							<div class="d-flex flex-row mb-3">
							  <div class="px-25 py-10 w-200">Transparent badge</div>
							  <div class="px-25 py-10 w-100"><span class="badge badge-transparent">Transparent</span></div>
							  <div class="px-25 py-10">Transparent To use, add <code>.badge-Transparent</code> to the base <code>.badge</code> class</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">

				<div class="col-lg-6 col-12">
					<!-- Default box -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Pill</h4>
						</div>
						<div class="box-body">
							<span class="badge badge-pill badge-default">Text</span>
							<span class="badge badge-pill badge-primary">7</span>
							<span class="badge badge-pill badge-success">+7</span>
							<span class="badge badge-pill badge-info">-7</span>
							<span class="badge badge-pill badge-warning">10</span>
							<span class="badge badge-pill badge-dark"><i class="fa fa-envelope faa-shake animated"></i></span>
							<span class="badge badge-pill badge-gray"><i class="fa fa-trophy faa-tada animated"></i></span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
						  <code>.badge-pill</code> applies to <em>.badge</em>.
						</div>
						<!-- /.box-footer-->
					  </div>
					<!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- Default box -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Mono colors</h4>
						</div>
						<div class="box-body">
							<span class="badge badge-dark">Dark</span>
							<span class="badge badge-gray">Grey</span>
							<span class="badge badge-secondary">Secondary</span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
						  <code>.badge-*</code> which <code>*</code> is one of the following color names.
						</div>
						<!-- /.box-footer-->
					  </div>
					<!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- Default box -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sizing</h4>
						</div>
						<div class="box-body">
							<span class="badge badge-xl badge-primary">Extra large</span>
							<span class="badge badge-lg badge-info">Large</span>
							<span class="badge badge-warning">Medium</span>
							<span class="badge badge-sm badge-danger">Small</span>
							<span class="badge badge-xl badge-primary"><i class="fa fa-thumbs-up"></i></span>
							<span class="badge badge-lg badge-info"><i class="fa fa-envelope faa-horizontal animated"></i></span>
							<span class="badge badge-warning"><i class="fa fa-thumbs-up faa-vertical animated"></i></span>
							<span class="badge badge-sm badge-danger"><i class="fa fa-trophy faa-tada animated"></i></span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
						  Available sizes are <code>sm</code>, <code>lg</code>, <code>xl</code>
						</div>
						<!-- /.box-footer-->
					  </div>
					<!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- Default box -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Dot badges</h4>
						</div>
						<div class="box-body">
							<span class="badge badge-sm badge-dot badge-primary"></span>
							<span class="badge badge-sm badge-dot badge-success"></span>
							<span class="badge badge-sm badge-dot badge-info"></span>
							<span class="badge badge-sm badge-dot badge-warning"></span>
							<span class="badge badge-sm badge-dot badge-danger"></span>
							<span class="badge badge-sm badge-dot badge-dark"></span>
							<span class="badge badge-sm badge-dot badge-gray"></span>
							<span class="badge badge-sm badge-dot badge-secondary"></span>
							<br>
							<span class="badge badge-dot badge-primary"></span>
							<span class="badge badge-dot badge-success"></span>
							<span class="badge badge-dot badge-info"></span>
							<span class="badge badge-dot badge-warning"></span>
							<span class="badge badge-dot badge-danger"></span>
							<span class="badge badge-dot badge-dark"></span>
							<span class="badge badge-dot badge-gray"></span>
							<span class="badge badge-dot badge-secondary"></span>
							<br>
							<span class="badge badge-lg badge-dot badge-primary"></span>
							<span class="badge badge-lg badge-dot badge-success"></span>
							<span class="badge badge-lg badge-dot badge-info"></span>
							<span class="badge badge-lg badge-dot badge-warning"></span>
							<span class="badge badge-lg badge-dot badge-danger"></span>
							<span class="badge badge-lg badge-dot badge-dark"></span>
							<span class="badge badge-lg badge-dot badge-gray"></span>
							<span class="badge badge-lg badge-dot badge-secondary"></span>
							<br>
							<span class="badge badge-xl badge-dot badge-primary"></span>
							<span class="badge badge-xl badge-dot badge-success"></span>
							<span class="badge badge-xl badge-dot badge-info"></span>
							<span class="badge badge-xl badge-dot badge-warning"></span>
							<span class="badge badge-xl badge-dot badge-danger"></span>
							<span class="badge badge-xl badge-dot badge-dark"></span>
							<span class="badge badge-xl badge-dot badge-gray"></span>
							<span class="badge badge-xl badge-dot badge-secondary"></span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
						  <code>.badge-dot</code> applies to <em>.badge</em>.
						</div>
						<!-- /.box-footer-->
					  </div>
					<!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- Default box -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Ring badges</h4>
						</div>
						<div class="box-body">

							<p><code>.badge-ring</code> applies to <em>.badge</em>.</p>
							<span class="badge badge-sm badge-ring badge-primary"></span>
							<span class="badge badge-sm badge-ring badge-success"></span>
							<span class="badge badge-sm badge-ring badge-info"></span>
							<span class="badge badge-sm badge-ring badge-warning"></span>
							<span class="badge badge-sm badge-ring badge-danger"></span>
							<span class="badge badge-sm badge-ring badge-dark"></span>
							<span class="badge badge-sm badge-ring badge-gray"></span>
							<span class="badge badge-sm badge-ring badge-secondary"></span>
							<br>
							<span class="badge badge-ring badge-primary"></span>
							<span class="badge badge-ring badge-success"></span>
							<span class="badge badge-ring badge-info"></span>
							<span class="badge badge-ring badge-warning"></span>
							<span class="badge badge-ring badge-danger"></span>
							<span class="badge badge-ring badge-dark"></span>
							<span class="badge badge-ring badge-gray"></span>
							<span class="badge badge-ring badge-secondary"></span>
							<br>
							<span class="badge badge-lg badge-ring badge-primary"></span>
							<span class="badge badge-lg badge-ring badge-success"></span>
							<span class="badge badge-lg badge-ring badge-info"></span>
							<span class="badge badge-lg badge-ring badge-warning"></span>
							<span class="badge badge-lg badge-ring badge-danger"></span>
							<span class="badge badge-lg badge-ring badge-dark"></span>
							<span class="badge badge-lg badge-ring badge-gray"></span>
							<span class="badge badge-lg badge-ring badge-secondary"></span>
							<br>
							<span class="badge badge-xl badge-ring badge-primary"></span>
							<span class="badge badge-xl badge-ring badge-success"></span>
							<span class="badge badge-xl badge-ring badge-info"></span>
							<span class="badge badge-xl badge-ring badge-warning"></span>
							<span class="badge badge-xl badge-ring badge-danger"></span>
							<span class="badge badge-xl badge-ring badge-dark"></span>
							<span class="badge badge-xl badge-ring badge-gray"></span>
							<span class="badge badge-xl badge-ring badge-secondary"></span>
							<br><br>

							<p></p>
							<span class="badge badge-sm badge-ring fill badge-primary"></span>
							<span class="badge badge-ring fill badge-primary"></span>
							<span class="badge badge-lg badge-ring fill badge-primary"></span>
							<span class="badge badge-xl badge-ring fill badge-primary"></span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer"><code>.fill</code> can applies to <em>.badge-ring</em>
						</div>
						<!-- /.box-footer-->
					  </div>
					<!-- /.box -->
				</div>


			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection