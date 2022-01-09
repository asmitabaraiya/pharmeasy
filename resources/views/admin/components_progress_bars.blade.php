@extends('admin.app')
@section('body')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Progress Bars</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Progress Bars</li>
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
				  <h4 class="box-title">Progress Bars Different Sizes</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <p><code>.progress</code></p>

				  <div class="progress">
					<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					  <span class="sr-only">40% Complete (success)</span>
					</div>
				  </div>
				  <p>Class: <code>.sm</code></p>

				  <div class="progress progress-sm active">
					<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
					  <span class="sr-only">20% Complete</span>
					</div>
				  </div>
				  <p>Class: <code>.xs</code></p>

				  <div class="progress progress-xs">
					<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
					  <span class="sr-only">60% Complete (warning)</span>
					</div>
				  </div>
				  <p>Class: <code>.xxs</code></p>

				  <div class="progress progress-xxs">
					<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
					  <span class="sr-only">60% Complete (warning)</span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col (left) -->
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Progress bars</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="progress">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					  <span class="sr-only">40% Complete (primary)</span>
					</div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
					  <span class="sr-only">30% Complete (default)</span>
					</div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					  <span class="sr-only">40% Complete (success)</span>
					</div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
					  <span class="sr-only">20% Complete</span>
					</div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
					  <span class="sr-only">60% Complete (warning)</span>
					</div>
				  </div>
				  <div class="progress">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					  <span class="sr-only">80% Complete</span>
					</div>
				  </div>

				  <p><p>The striped gradient can also be animated. Add <code class="highlighter-rouge">.progress-bar-animated</code> to <code class="highlighter-rouge">.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p></p>
				  <div class="progress">
					<div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
					  <span class="sr-only">60% Complete (warning)</span>
					</div>
				  </div>

				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col (right) -->
		  </div>
		  <!-- /.row -->
		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Vertical Progress Bars Different Sizes</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code> or
					<code>.progress-xxs</code> we achieve:</p>

				  <div class="progress vertical active">
					<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
					  <span class="sr-only">40%</span>
					</div>
				  </div>
				  <div class="progress vertical progress-sm">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
					  <span class="sr-only">100%</span>
					</div>
				  </div>
				  <div class="progress vertical progress-xs">
					<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
					  <span class="sr-only">60%</span>
					</div>
				  </div>
				  <div class="progress vertical progress-xxs">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
					  <span class="sr-only">60%</span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col (left) -->
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Vertical Progress bars</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <p>By adding the class <code>.vertical</code> we achieve:</p>

				  <div class="progress vertical">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
					  <span class="sr-only">40%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
					  <span class="sr-only">40%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
					  <span class="sr-only">20%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
					  <span class="sr-only">60%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
					  <span class="sr-only">80%</span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col (right) -->
		  </div>
		  <!-- /.row -->
		  <!-- END PROGRESS BARS -->

		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection