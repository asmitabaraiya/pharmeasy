@extends('admin.app')
@section('body')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Inline chart</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">Inline chart</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		  <!-- callout -->
		  <div class="callout callout-info">
			<h4>The following was created using data tags</h4>

			<p>The following three inline (sparkline) chart have been initialized to read and interpret data tags</p>
		  </div>
		  <!-- /.callout -->
			
		  	<div class="row">
				<!-- col -->
				<div class="col-lg-4 col-md-4">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Disable display input</h4>
							<div class="text-center">
								<input class="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#3e8ef7" data-displayInput="false" value="55" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-4">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Cursor mode</h4>
							<div class="text-center">
								<input class="knob" data-width="150" data-height="150" data-cursor="true" data-fgColor="#17b3a3" value="65" />
							</div>
						</div>
					</div>
				</div>
				<!-- /column -->
				<!-- column -->
				<div class="col-lg-4 col-md-4">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Display previous value</h4>
							<div class="text-center">
								<input class="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#faa700" data-displayPrevious="true" value="84" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Angle offset and arc</h4>
							<div class="text-center">
								<input class="knob" data-width="250" data-height="250" data-min="-100" data-fgColor="#ff4c52" data-displayPrevious="true" data-angleOffset="-125" data-angleArc="250" value="65" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Angle offset</h4>
							<div class="text-center">
								<input class="knob" data-width="250" data-height="250" data-angleOffset="85" data-linecap="round" data-fgColor="#0bb2d4" value="85" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">5-digit values, step 1000</h4>
							<div class="text-center">
								<input class="knob" data-width="150" data-height="150" data-min="-15000" data-displayPrevious="true" data-max="15000" data-step="1000" value="11000" data-fgColor="#17b3a3" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Readonly</h4>
							<div class="text-center">
								<input class="knob" data-width="150" data-height="150" data-linecap="round" data-fgColor="#3e8ef7" value="50" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".1" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Angle offset and arc</h4>
							<div class="text-center">
								<input class="knob" data-width="150" data-height="150" data-displayPrevious="true" data-fgColor="#ff4c52" data-skin="tron" data-cursor="true" value="65" data-thickness=".2" data-angleOffset="-125" data-angleArc="250" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Readonly</h4>
							<div class="text-center">
								<input class="knob" data-width="220" data-height="220" data-linecap="round" data-fgColor="#0bb2d4" value="80" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".2" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Readonly</h4>
							<div class="text-center">
								<input class="knob" data-width="180" data-height="180" data-linecap="round" data-fgColor="#faa700" value="65" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".1" />
							</div>
						</div>
					</div>
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-lg-4 col-md-6">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Readonly</h4>
							<div class="text-center">
								<input class="knob" data-width="120" data-height="120" data-linecap="round" data-fgColor="#ff4c52" value="60" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".1" />
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
			</div>

		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header">
				  <h4 class="box-title">Sparkline examples</h4>
				</div>
				<!-- /.box-header -->
				<div id="myBody" class="box-body">
				  <div class="row">
					<div class="col-12 col-sm-6">
					  <p>
						Mouse speed <span id="mousespeed">Loading..</span>
					  </p>

					  <p>
						Inline <span class="sparkline-1">4,5,3,4,5,9,7,5</span>
						line graphs
						<span class="sparkline-1">7,3,10,5,4,8,6,4,2,4,5,3,4,5</span>
					  </p>

					  <p>
						Bar charts <span class="sparkbar">4,5,3,4,5,9,7,5</span>
						negative values: <span class="sparkbar">-4,1,5,0,3,-2</span>
						stacked: <span class="sparkbar">0:2,2:4,4:2,4:1</span>
					  </p>

					  <p>
						Composite inline
						<span id="compositeline">7,3,10,5,4,8,6,4,2,4,5,3,4,5</span>
					  </p>

					  <p>
						Inline with normal range
						<span id="normalline">7,3,10,5,4,8,6,4,2,4,5,3,4,5</span>
					  </p>

					  <p>
						Composite bar
						<span id="compositebar">4,5,3,4,5,9,7,5</span>
					  </p>

					  <p>
						Discrete
						<span class="discrete1">7,3,10,5,4,8,6,4,2,4,5,3,4,5</span><br>

						Discrete with threshold
						<span id="discrete2">4,5,3,4,5,9,7,5</span>
					  </p>

					  <p>
						Bullet charts<br>
						<span class="sparkbullet">4,11,1,9,7</span><br>
						<span class="sparkbullet">8,7,12,9,10</span><br>
						<span class="sparkbullet">10,1,14,8,5</span><br>
					  </p>
					</div>
					<!-- /.col -->
					<div class="col-12 col-sm-6">
					  <p>
						Customize size and colours
						<span id="linecustom">4,5,3,4,5,9,7,5</span>
					  </p>

					  <p>
						Tristate charts
						<span class="sparktristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span><br>
						(think games won, lost or drawn)
					  </p>

					  <p>
						Tristate chart using a colour map:
						<span class="sparktristatecols">1,2,0,2,-1,-2,1,-2,0,0,1,1</span>
					  </p>

					  <p>
						Box Plot: <span class="sparkboxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span><br>
						Pre-computed box plot <span class="sparkboxplotraw">Loading..</span>
					  </p>

					  <p>
						Pie charts
						<span class="sparkpie">1,1,2</span>
						<span class="sparkpie">1,5</span>
						<span class="sparkpie">30,70,90</span>
					  </p>
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-header">
				  <h4 class="box-title text-danger">Sparkline Pie</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <div id="sparkline5"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-header">
				  <h4 class="box-title text-blue">Sparkline line</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#faa700" data-highlight-Line-Color="#222" data-min-Spot-Color="#ff4c52" data-max-Spot-Color="#745af2" data-spot-Color="#3aa0dc" data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="#06d79c" data-fill-Color="rgba(57, 204, 204, 0.08)">
					7,3,2,5,4,8,6,4,2,8,7,9,4,5,3,4,5,9,7,5
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-header">
				  <h4 class="box-title text-warning">Sparkline Bar</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <div class="sparkline" data-type="bar" data-width="100%" data-height="100px" data-bar-Width="5" data-bar-Spacing="10" data-bar-Color="#ff4c52">
					7,3,10,5,4,8,6,4,2,4,5,3,4,5
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