@extends('admin.app')
@section('body')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Dropdown</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Dropdown</li>
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
					  <div class="box-header with-border">
						  <h4 class="box-title">Dropdown Basic <br><small>Dropdowns are toggleable, contextual overlays for displaying lists of links and more.</small></h4>
					  </div>
					  <div class="box-body doc-dropdown">
						<div class="row">
						  <!--Default!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Default</h5>
								<p>A basic example</p>
									<div class="btn-group">
									  <button class="btn btn-rounded btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									  </div>
									</div>
							  </div>						
						  </div>

						  <!--Alignment!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Alignment</h5>
								<p><code>.dropdown-menu-right</code> applies to <em>.dropdown-menu</em></p>

									<div class="btn-group">
									  <button class="btn btn-rounded btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									  <div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									  </div>
									</div>
							  </div>
						  </div>


						  <!-- Dropup!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Dropup</h5>
								<p><code>.dropup</code> replaces with <em>.dropdown</em></p>

									<div class="btn-group dropup">
									  <button class="btn btn-rounded btn-success dropdown-toggle" type="button" data-toggle="dropdown">Dropup</button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									  </div>
									</div>
							  </div>
						  </div>

						  <!--Dropup alignment!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5 class="mt-30">Dropup alignment</h5>
								  <p><code>.dropdown-menu-right</code> applies to <em>.dropdown-menu</em></p>

									<div class="btn-group dropup">
									  <button class="btn btn-rounded btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup</button>
									  <div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									  </div>
									</div>
							  </div>
						  </div>

						  <!--No caret!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5 class="mt-30">No caret</h5>
								<p><code>.no-caret</code> applies to <em>.dropdown-toggle</em></p>

									<div class="btn-group">
									  <button class="btn btn-rounded btn-warning dropdown-toggle no-caret" type="button" data-toggle="dropdown">Dropdown</button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									  </div>
									</div>
							  </div>
						  </div>

						  <!--With icon!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5 class="mt-30">With icon</h5>
								<p><code>.icon</code> applies to <em>.dropdown-toggle</em></p>

									<div class="btn-group">
									  <button class="btn btn-rounded btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon ti-settings"></i> Dropdown</button>
									  <div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									  </div>
									</div>
							  </div>
						  </div>

						</div>
					  </div>
					</div>				
				</div>

				<div class="col-12">				
					<div class="box">
					  <div class="box-header with-border">
						  <h4 class="box-title">Dropdown menu <br><small>Dropdowns are toggleable, contextual overlays for displaying lists of links and more.</small></h4>
					  </div>
					  <div class="box-body doc-dropdown">
						<div class="row">
						  <!--Header!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Header</h5>
								  <div class="dropdown">
									<button class="btn btn-rounded btn-outline btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									<div class="dropdown-menu">
									  <h6 class="dropdown-header">Dropdown header</h6>
									  <a class="dropdown-item" href="#">Action</a>
									  <a class="dropdown-item" href="#">Another action</a>
									  <a class="dropdown-item" href="#">Something else here</a>
									</div>
								  </div>
							  </div>
						  </div>

						  <!--Divider!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Divider</h5>

								  <div class="dropdown">
									<button class="btn btn-rounded btn-outline btn-success dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item" href="#">Action</a>
									  <a class="dropdown-item" href="#">Another action</a>
									  <a class="dropdown-item" href="#">Something else here</a>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item" href="#">Separated link</a>
									</div>
								  </div>
							  </div>
						  </div>


						  <!-- With icon!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>With icon</h5>

								  <div class="dropdown">
									<button class="btn btn-rounded btn-outline btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item" href="#"><i class="fa fa-plus"></i> New</a>
									  <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
									  <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Delete</a>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item" href="#"><i class="fa fa-share-alt"></i> Share</a>
									</div>
								  </div>
							  </div>
						  </div>

						  <!--With badge!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>With badge</h5>

								  <div class="dropdown">
									<button class="btn btn-rounded btn-outline btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item flexbox" href="#">
										<span>Inbox</span>
										<span class="badge badge-pill badge-info">5</span>
									  </a>
									  <a class="dropdown-item" href="#">Sent</a>
									  <a class="dropdown-item" href="#">Spam</a>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item flexbox" href="#">
										<span>Draft</span>
										<span class="badge badge-pill badge-default">1</span>
									  </a>
									</div>
								  </div>
							  </div>
						  </div>

						  <!--Disabled item!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Disabled item</h5>
								<p><code>.disabled</code> applies to <em>.dropdown-item</em></p>

								  <div class="dropdown">
									<button class="btn btn-rounded btn-outline btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item" href="#">Action</a>
									  <a class="dropdown-item disabled" href="#">Another action</a>
									  <a class="dropdown-item" href="#">Something else here</a>
									</div>
								  </div>
							  </div>
						  </div>

						  <!--Active item!-->
						  <div class="col-xl-4">
							  <div class="h-200">
								<h5>Active item</h5>
								<p><code>.active</code> applies to <em>.dropdown-item</em></p>

								  <div class="dropdown">
									<button class="btn btn-rounded btn-outline btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item" href="#">Action</a>
									  <a class="dropdown-item active" href="#">Another action</a>
									  <a class="dropdown-item" href="#">Something else here</a>
									</div>
								  </div>
							  </div>
						  </div>

						</div>
					  </div>
					</div>

				</div>
			</div>


		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection