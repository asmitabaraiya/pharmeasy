@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Color utilities</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Color utilities</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- Color classes -->
		  <div class="box">
			  <div class="box-header with-border">
				<h4 class="box-title"><strong>Background</strong> colors</h4>
			  </div>

			  <div class="box-body">
				<div class="row">
					<div class="col-12">					
						<h5>Solid colors</h5>
						<p><code>.bg-*</code> can apply to any element, where <code>*</code> is a color name.</p>
						<div class="row">
						  <div class="col-lg-3 col-6">
						  	<div class="bg-primary rounded p-50 mb-30">.bg-primary</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-secondary rounded p-50 mb-30">.bg-secondary</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-success rounded p-50 mb-30">.bg-success</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-info rounded p-50 mb-30">.bg-info</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-warning rounded p-50 mb-30">.bg-warning</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-danger rounded p-50 mb-30">.bg-danger</div>
						  </div>						  
						  <div class="col-lg-3 col-6">
						  <div class="bg-dark rounded p-50 mb-30">.bg-dark</div>
						  </div>
						</div>
					</div> 
					 
					<div class="col-12">					
						<h5 class="mt-30">Other colors</h5>
						<p>Some other fade colors are available for background-color.</p>
						<div class="row">
						  <div class="col-lg-3 col-6">
						  <div class="bg-white text-center rounded p-50 b-1 mb-30">.bg-white</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-transparent ext-center rounded p-50 b-1 mb-30">.bg-transparent</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-light text-center rounded p-50 b-1 mb-30">.bg-light</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-lighter text-center rounded p-50 b-1 mb-30">.bg-lighter</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  <div class="bg-lightest text-center rounded p-50 b-1 mb-30">.bg-lightest</div>
						  </div>
						</div>
					</div>  
				</div>
			  </div>
			</div>
		  <!-- /.box -->

		  <!-- Color classes -->
		  <div class="box">
			  <div class="box-header with-border">
				<h4 class="box-title"><strong>Gradient</strong> colors</h4>
			  </div>

			  <div class="box-body">
				<div class="row">
					<div class="col-12">					
						<h5>gradient colors</h5>
						<div class="row">
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-primary">.bg-gradient-primary</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-secondary">.bg-gradient-secondary</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-info">.bg-gradient-info</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-success">.bg-gradient-success</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-danger">.bg-gradient-danger</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-warning">.bg-gradient-warning</div>
						  </div>						  
						  				  
						</div>
					</div> 
					<div class="col-12">						
						<h5>gradient colors in dark theme</h5>
						<div class="row">
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-primary-dark">.bg-gradient-primary-dark</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-secondary-dark">.bg-gradient-secondary-dark</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-info-dark">.bg-gradient-info-dark</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-success-dark">.bg-gradient-success-dark</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-danger-dark">.bg-gradient-danger-dark</div>
						  </div>
						  <div class="col-lg-3 col-6">
						  	  <div class="rounded p-50 mb-30 text-white bg-gradient-warning-dark">.bg-gradient-warning-dark</div>
						  </div>
						  				  
						</div>
					</div>  
				</div>
			  </div>
			</div>
		  <!-- /.box -->

		  <!-- Color classes -->
		  <div class="box">
			  <div class="box-header with-border">
				<h4 class="box-title"><strong>SVG</strong> Img Background</h4>
			  </div>

			  <div class="box-body">
				<div class="row">
					<div class="col-12">					
						<h5>SVG Background with color</h5>
						<div class="gap-items gap-y">
						  <div class="rounded p-15 h-200 bg-primary bg-temple-dark"> .bg-temple-dark</div>
						  <div class="rounded p-15 h-200 bg-info bg-food-dark"> .bg-food-dark</div>
						  <div class="rounded p-15 h-200 bg-warning bg-brick-dark"> .bg-brick-dark</div>
						  <div class="rounded p-15 h-200 bg-danger bg-bubbles-dark"> .bg-bubbles-dark</div>						
						</div>
					</div> 
					<div class="col-12">					
						<h5 class="mt-30">SVG Background with Transparent color</h5>
						<div class="gap-items gap-y">
						  <div class="rounded p-15 h-200 b-1 bg-temple-white"> .bg-temple-white</div>
						  <div class="rounded p-15 h-200 b-1 bg-food-white"> .bg-food-white</div>
						  <div class="rounded p-15 h-200 b-1 bg-brick-white"> .bg-brick-white</div>
						  <div class="rounded p-15 h-200 b-1 bg-bubbles-white"> .bg-bubbles-white</div>						
						</div>
					</div> 
				</div>
			  </div>
			</div>
		  <!-- /.box -->

			<div class="box">
			  <div class="box-header with-border">
				<h4 class="box-title"><strong>Border</strong> colors</h4>
			  </div>

			  <div class="box-body">
				<p><code>.border-*</code> can apply to any element, where <code>*</code> is a color name.</p>
				<div class="gap-items gap-y">
				  <div class="b-1 rounded p-15">Default color</div>
				  <div class="b-1 border-primary rounded p-15">.border-primary</div>
				  <div class="b-1 border-secondary rounded p-15">.border-secondary</div>
				  <div class="b-1 border-success rounded p-15">.border-success</div>
				  <div class="b-1 border-info rounded p-15">.border-info</div>
				  <div class="b-1 border-warning rounded p-15">.border-warning</div>
				  <div class="b-1 border-danger rounded p-15">.border-danger</div>
				  <div class="b-1 border-dark rounded p-15">.border-dark</div>
				  <div class="b-1 border-white rounded p-15">.border-white</div>
				  <div class="b-1 border-light rounded p-15">.border-light</div>
				  <div class="b-1 border-transparent text-center rounded py-15 px-0 w-150">.border-transparent</div>
				</div>
			  </div>
			</div>

		  <!-- /.box -->

			<div class="box">
			  <div class="box-header with-border">
				<h4 class="box-title"><strong>Text</strong> colors</h4>
			  </div>

			  <div class="box-body">
				<h5>Text colors</h5>
				<p><code>.text-*</code> can apply to any element, where <code>*</code> is a color name. Please note that you can safely add these classes to an <code>&lt;a&gt;</code> element.</p>
				<div class="gap-items gap-y font-size-20">
				  <div class="text-primary">.text-primary</div>
				  <div class="text-secondary">.text-secondary</div>
				  <div class="text-success">.text-success</div>
				  <div class="text-info">.text-info</div>
				  <div class="text-warning">.text-warning</div>
				  <div class="text-danger">.text-danger</div>
				  <div class="text-dark">.text-dark</div>
				  <div class="text-mute">.text-mute</div>
				  <div class="text-light">.text-light</div>
				  <div class="text-lighter">.text-lighter</div>
				  <div class="text-fade">.text-fade</div>
				  <div class="text-white bg-dark">.text-white</div>
				</div>


				<hr>

				<h5>Hover colors</h5>
				<p><code>.hover-*</code> can apply to any element, where <code>*</code> is a color name. Please note that you can safely add these classes to an <code>&lt;a&gt;</code> element.</p>
				<div class="gap-items gap-y font-size-20">
				  <div> <a class="hover-primary" href="#">.text-primary</a> </div>
				  <div> <a class="hover-secondary" href="#">.text-secondary</a> </div>
				  <div> <a class="hover-success" href="#">.text-success</a> </div>
				  <div> <a class="hover-info" href="#">.text-info</a> </div>
				  <div> <a class="hover-warning" href="#">.text-warning</a> </div>
				  <div> <a class="hover-danger" href="#">.text-danger</a> </div>
				  <div> <a class="hover-dark" href="#">.text-dark</a> </div>
				  <div> <a class="hover-mute" href="#">.text-mute</a> </div>
				  <div> <a class="hover-light" href="#">.text-light</a> </div>
				  <div> <a class="hover-lighter" href="#">.text-lighter</a> </div>
				  <div> <a class="hover-fade" href="#">.text-fade</a> </div>
				  <div> <a class="hover-white bg-dark" href="#">.text-white</a> </div>
				</div>
			  </div>
			</div>

		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection