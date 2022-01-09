@extends('admin.app')
@section('body')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Range Sliders and Carousel</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Sliders</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">	

		  <div class="row">
			<div class="col-lg-6 col-12">

			  <!-- Carousel Slider Only Slide -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Carousel Slider Only Slide</h4>
				</div>
				<div class="box-body">
					<div id="carousel-example-generic-only-slide" class="carousel slide" data-ride="carousel">                  
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						  <img src="{{asset('adminassets')}}/images/img1.jpg" class="img-fluid" alt="slide-1">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img2.jpg" class="img-fluid" alt="slide-2">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img3.jpg" class="img-fluid" alt="slide-3">
						</div>
					  </div>
					</div>               
				</div>
			  </div>
			  <!-- /.box -->

			</div>
			<!-- /.col -->
			<div class="col-lg-6 col-12">

			  <!-- Carousel Slider Only Slide -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Carousel Slider with Controls</h4>
				</div>
				<div class="box-body">
					<div id="carousel-example-generic-Controls" class="carousel slide" data-ride="carousel">                  
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						  <img src="{{asset('adminassets')}}/images/img3.jpg" class="img-fluid" alt="slide-1">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img1.jpg" class="img-fluid" alt="slide-2">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img2.jpg" class="img-fluid" alt="slide-3">
						</div>
					  </div>
					  <!-- Controls -->
					  <a class="carousel-control-prev" href="#carousel-example-generic-Controls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carousel-example-generic-Controls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>               
				</div>
			  </div>
			  <!-- /.box -->

			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-lg-6 col-12">

			  <!-- Carousel Slider Only Slide -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Carousel Slider with Indicators </h4>
				</div>
				<div class="box-body">
					<div id="carousel-example-generic-Indicators" class="carousel slide" data-ride="carousel"> 
					  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic-Indicators" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic-Indicators" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic-Indicators" data-slide-to="2"></li>
						  </ol>                 
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						  <img src="{{asset('adminassets')}}/images/img3.jpg" class="img-fluid" alt="slide-1">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img1.jpg" class="img-fluid" alt="slide-2">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img2.jpg" class="img-fluid" alt="slide-3">
						</div>
					  </div>
					</div>               
				</div>
			  </div>
			  <!-- /.box -->

			</div>
			<!-- /.col -->
			<div class="col-lg-6 col-12">

			  <!-- Carousel Slider Only Slide -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Carousel Slider With captions</h4>
				</div>
				<div class="box-body">
					<div id="carousel-example-generic-captions" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic-captions" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic-captions" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic-captions" data-slide-to="2"></li>
						  </ol>                      
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						  <img src="{{asset('adminassets')}}/images/img2.jpg" class="img-fluid" alt="slide-1">
						  <div class="carousel-caption">
							<h3>First here</h3>
							<p>this is the subcontent you can use this</p>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img3.jpg" class="img-fluid" alt="slide-2">
						  <div class="carousel-caption">					  
							<h3>Second here</h3>
							<p>this is the subcontent you can use this</p>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="{{asset('adminassets')}}/images/img1.jpg" class="img-fluid" alt="slide-3">
						  <div class="carousel-caption">					  
							<h3>Third here</h3>
							<p>this is the subcontent you can use this</p>
						  </div>
						</div>
					  </div>
					  <!-- Controls -->
					  <a class="carousel-control-prev" href="#carousel-example-generic-captions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carousel-example-generic-captions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>               
				</div>
			  </div>
			  <!-- /.box -->

			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

		  <div class="row">

			<div class="col-lg-6 col-12">
				<div class="box">
					<div class="box-header">
					  <h4 class="box-title">Image Slider</h4>
					</div>
					<!-- /.box-header -->
					<div class="box-body">				  
						<!-- Place somewhere in the <body> of your page -->
						<div class="flexslider">
						  <ul class="slides">
							<li>
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-1.jpg" alt="slide" />
							  <p class="flex-caption">Adventurer Cheesecake Brownie</p>
							</li>
							<li>
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-2.jpg" alt="slide" />
							  <p class="flex-caption">Adventurer Lemon</p>
							</li>
							<li>
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-3.jpg" alt="slide" />
							  <p class="flex-caption">Adventurer Donut</p>
							</li>
							<li>
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-4.jpg" alt="slide" />
							  <p class="flex-caption">Adventurer Cheesecake Brownie</p>
							</li>
						  </ul>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>  
			</div>  

			<div class="col-lg-6 col-12">
				<div class="box">
					<div class="box-header">
					  <h4 class="box-title">Image Slider thumbnails</h4>
					</div>
					<!-- /.box-header -->
					<div class="box-body">				  
						<!-- Place somewhere in the <body> of your page -->
						<div class="flexslider2">
						  <ul class="slides">
							<li data-thumb="../images/gallery/full/slide-1.jpg">
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-1.jpg" alt="slide" />
							</li>
							<li data-thumb="../images/gallery/full/slide-2.jpg">
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-2.jpg" alt="slide" />
							</li>
							<li data-thumb="../images/gallery/full/slide-3.jpg">
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-3.jpg" alt="slide" />
							</li>
							<li data-thumb="../images/gallery/full/slide-4.jpg">
							  <img src="{{asset('adminassets')}}/images/gallery/full/slide-4.jpg" alt="slide" />
							</li>
						  </ul>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>  
			</div> 

			<div class="col-12">
				<div class="box">
					<div class="box-header">
					  <h4 class="box-title">Image carousel</h4>
					</div>
					<!-- /.box-header -->
					<div class="box-body">				  
						<div class="owl-carousel owl-theme">
							<div class="box mb-0">
								<img class="card-img-top img-responsive" src="{{asset('adminassets')}}/images/card/img1.jpg" alt="Card image cap">
							</div>
							<div class="box mb-0">
								<img class="card-img-top img-responsive" src="{{asset('adminassets')}}/images/card/img2.jpg" alt="Card image cap">
							</div>
							<div class="box mb-0">
								<img class="card-img-top img-responsive" src="{{asset('adminassets')}}/images/card/img3.jpg" alt="Card image cap">
							</div>
							<div class="box mb-0">
								<img class="card-img-top img-responsive" src="{{asset('adminassets')}}/images/card/img4.jpg" alt="Card image cap">
							</div>
							<div class="box mb-0">
								<img class="card-img-top img-responsive" src="{{asset('adminassets')}}/images/card/img1.jpg" alt="Card image cap">
							</div>
							<div class="box mb-0">
								<img class="card-img-top img-responsive" src="{{asset('adminassets')}}/images/card/img2.jpg" alt="Card image cap">
							</div>

						</div>
					</div>
					<!-- /.box-body -->
				  </div>  
			</div>  

			<div class="col-12">
			  <div class="box">
				<div class="box-header">
				  <h4 class="box-title">Bootstrap Range Slider</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="row margin">
					<div class="col-md-6">

					  <p>data-slider-id="danger"</p>
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="danger">

					  <p>data-slider-id="info"</p>
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="info">

					  <p>data-slider-id="success"</p>
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="success">

					  <p>data-slider-id="warning"</p>
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="warning">

					  <p>data-slider-id="secondary"</p>
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="secondary">

					  <p style="margin-top: 10px">data-slider-id="primary"</p>
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="primary">
					</div>
					<div class="col-md-6 text-center">
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="danger">
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="info">
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="success">
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="warning">
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="secondary">
					  <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
							 data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
							 data-slider-selection="before" data-slider-tooltip="show" data-slider-id="primary">
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->


		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection