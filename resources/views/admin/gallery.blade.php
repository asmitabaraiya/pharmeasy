@extends('admin.app')
@section('body')
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Gallery</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Sample Page</li>
								<li class="breadcrumb-item active" aria-current="page">Gallery</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div id="gallery">
			  <div class="box bg-transparent no-shadow b-0">
				<div class="box-body text-center p-0">
					<div class="btn-group">
					  <button class="btn btn-info btn-rounded" id="filter-all">All</button>
					  <button class="btn btn-info btn-rounded" id="filter-studio">Studio</button>
					  <button class="btn btn-info btn-rounded" id="filter-landscape">Landscapes</button>
					</div>
				</div>
			  </div>
			  <!-- Default box -->
			  <div class="box bg-transparent no-shadow b-0">
				<div class="box-body">
					<div id="gallery-content">
						<div id="gallery-content-center">
							<a href="images/gallery/studio1.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio1.jpg" alt="gallery" class="all studio" /> </a>
							<a href="images/gallery/landscape1.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape1.jpg" class="all landscape" alt="gallery" /> </a>
							<a href="images/gallery/studio2.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio2.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/studio25.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio25.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/landscape2.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape2.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio27.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio27.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/studio3.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio3.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/landscape3.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape3.jpg" class="all landscape" alt="gallery" /> </a>
							<a href="images/gallery/studio26.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio26.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/studio4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio4.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/landscape4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape4.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio5.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio5.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/landscape5.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape5.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio6.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio6.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape6.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape6.jpg" class="all landscape" alt="gallery" /> </a>
							<a href="images/gallery/studio7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio7.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape7.jpg" class="all landscape" alt="gallery" /> </a>
							<a href="images/gallery/studio8.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio8.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape8.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape8.jpg" class="all landscape" alt="gallery" /> </a>
							<a href="images/gallery/studio9.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio9.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape9.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape9.jpg" class="all landscape" alt="gallery" /> </a>
							<a href="images/gallery/studio10.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio10.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape10.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape10.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio11.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio11.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape11.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape11.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio12.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio12.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape12.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape12.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio13.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio13.jpg" class="all studio" alt="gallery" /> </a>
							<a href="images/gallery/landscape13.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape13.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio14.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio14.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape14.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape14.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio15.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio15.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape15.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape15.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio16.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio16.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape16.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape16.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio17.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio17.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape17.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape17.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio18.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio18.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/landscape18.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/landscape18.jpg" class="all landscape" alt="gallery" /></a>
							<a href="images/gallery/studio19.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio19.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/studio20.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio20.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/studio21.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio21.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/studio22.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio22.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/studio23.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio23.jpg" class="all studio" alt="gallery" /></a>
							<a href="images/gallery/studio24.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('adminassets')}}/images/gallery/studio24.jpg" class="all studio" alt="gallery" /></a>
						</div>
					</div>
					</div>
				</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection
 