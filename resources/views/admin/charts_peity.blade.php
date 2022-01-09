@extends('admin.app')
@section('body')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Peity chart</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">Peity chart</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="callout callout-info">
			<h2 class="page-header no-border mb-0 mt-0">Peity Chart</h2>
			 <p><small>Peity is a jQuery plugin that converts an element's content into a mini pie, donut, line or bar chart.<br><a class="fs-12" href="http://benpickles.github.io/peity/" target="_blank">Official documentation</a></small></p>
		  </div>


		  <div class="row">
			<!-- /.col-->
			<div class="col-12">
			  <!-- Pie CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Pie</h4>
				</div>
				<div class="box-body">
				  <p><code>class="pie"</code> applies to <em>&lt;span&gt;</em></p>
					<div class="row gap-y">
					  <div class="col-6 col-md-2 text-center">
						<span class="pie" data-peity='{ "fill": ["#0bb2d4", "#eeeeee"], "radius": 19 }'>1/5</span>
						<p><small>1/5</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="pie" data-peity='{ "fill": ["#17b3a3", "#eeeeee"], "radius": 21 }'>226/360</span>
						<p><small>226/360</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="pie" data-peity='{ "fill": ["#3e8ef7", "#eeeeee"], "radius": 24 }'>0.52/1.561</span>
						<p><small>0.52/1.561</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="pie" data-peity='{ "fill": ["#faa700", "#eeeeee"], "radius": 28 }'>1,4</span>
						<p><small>1,4</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="pie" data-peity='{ "fill": ["#ff4c52", "#eeeeee"], "radius": 32 }'>226,134</span>
						<p><small>226,134</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="pie" data-peity='{ "fill": ["#0bb2d4", "#faa700", "#3e8ef7"], "radius": 36 }'>1,2,1</span>
						<p><small>3,2,1</small></p>
					  </div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-12">
			  <!-- Donut CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Donut Chart</h4>
				</div>
				<div class="box-body">
					<div class="row gap-y">
					  <div class="col-6 col-md-2 text-center">
						<span class="donut" data-peity='{ "fill": ["#0bb2d4", "#eeeeee"], "radius": 19 }'>1/5</span>
						<p><small>1/5</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="donut" data-peity='{ "fill": ["#17b3a3", "#f3f5f6"], "radius": 21 }' >226/360</span>
						<p><small>226/360</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="donut" data-peity='{ "fill": ["#3e8ef7", "#f3f5f6"], "innerRadius": 20, "radius": 24 }'>0.52/1.561</span>
						<p><small>0.52/1.561</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="donut" data-peity='{ "fill": ["#faa700", "#f3f5f6"], "innerRadius": 10, "radius": 28 }' >1,4</span>
						<p><small>1,4</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="donut" data-peity='{ "fill": ["#ff4c52", "#f3f5f6"], "innerRadius": 30, "radius": 32 }' data-provide="peity" data-type="donut" data-fill="#ff4c52,#f3f5f6" data-size="64" data-inner-radius="30">226,134</span>
						<p><small>226,134</small></p>
					  </div>

					  <div class="col-6 col-md-2 text-center">
						<span class="donut" data-peity='{ "fill": ["#3e8ef7", "#faa700", "#ff4c52"], "radius": 36 }' >1,2,1</span>
						<p><small>1,2,1</small></p>
					  </div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <!-- Line CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Line Chart</h4>
				</div>
				<div class="box-body">
					<div class="row">
					  <div class="col-md-6 col-lg-4 text-center">
						<span class="line1">5,3,9,6,5,9,7,3,5,2</span>
					  </div>

					  <div class="col-md-6 col-lg-4 text-center">
						<hr class="d-md-none">
						<span class="line2">5,3,2,-1,-3,-2,2,3,5,2</span>
					  </div>

					  <div class="col-md-6 col-lg-4 text-center">
						<hr class="d-lg-none">
						<span class="line3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
					  </div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12 col-lg-9">
			  <!-- Bar CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Bar Chart</h4>
				</div>
				<div class="box-body">
					<div class="row">
					  <div class="col-md-6 col-lg-4 text-center">
						<span class="bar" data-peity='{ "fill": ["#0bb2d4"], "height": 36, "width": 120, "padding":0.2 }'> 5,3,9,6,5,9,7,3,5,2</span>
					  </div>

					  <div class="col-md-6 col-lg-4 text-center">
						<hr class="d-md-none">
						<span class="bar" data-peity='{ "fill": ["#0bb2d4", "#f3f5f6"], "height": 64, "width": 250, "padding":0.2 }'> 5,3,2,-1,-3,-2,2,3,5,2</span>
					  </div>

					  <div class="col-md-6 col-lg-4 text-center">
						<hr class="d-lg-none">
						<span class="bar" data-peity='{ "fill": ["#0bb2d4", "#17b3a3"], "height": 96, "width": 250, "padding":0.2 }'> 0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
					  </div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			</div>
			<!-- /.col-->

			<div class="col-12 col-lg-3">
			  <!-- Dynamic CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Updating Charts</h4>
				</div>
				<div class="box-body">
				  <span class="updating-chart" data-provide="peity" data-type="line" id="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			</div>
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection