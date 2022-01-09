@extends('admin.app')
@section('body')

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Modals</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Modals</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="callout callout-success">
			<h4>Reminder!</h4>
			Instructions for how to use modals are available on the
			<a href="https://getbootstrap.com/docs/4.1/components/modal/">Bootstrap documentation</a>
		  </div>

		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title">Modal Examples</h4>
				  <div>
					  <button type="button" class="btn btn-rounded btn-default" data-toggle="modal" data-target="#modal-default">
						Launch Default Modal
					  </button>              

					  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-info">
						Launch Info Modal
					  </button>

					  <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#modal-primary">
					   Launch Primary Modal
					  </button>

					  <button type="button" class="btn btn-rounded btn-danger" data-toggle="modal" data-target="#modal-danger">
						Launch Danger Modal
					  </button>

					  <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#modal-warning">
						Launch Warning Modal
					  </button>

					  <button type="button" class="btn btn-rounded btn-success" data-toggle="modal" data-target="#modal-success">
						Launch Success Modal
					  </button>					
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Left Modal</h4>
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-left">
					Launch demo modal
				  </button>

				</div>
			  </div>

			</div>		
			<div class="col-12 col-lg-6">			
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Center Modal</h4>
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-center">
					Launch demo modal
				  </button>

				</div>
			  </div>

			</div>		
			<div class="col-12 col-lg-6">			
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Fill Modal</h4>
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-fill">
					Launch demo modal
				  </button>

				</div>
			  </div>

			</div>		
			<div class="col-12 col-lg-6">			
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Right Modal</h4>
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-right">
					Launch demo modal
				  </button>

				</div>
			  </div>			
			</div>

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Large modal</h4>			  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">
					Large modal
				  </button>
				</div>
			  </div>
			</div><!-- /.col -->

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Medium model</h4>				  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#myModal">
					Medium model
				  </button>
				</div>
			  </div>
			</div><!-- /.col -->

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-body">	
				  <h4 class="box-title d-block">Small model</h4>			  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-sm">
					Small model
				  </button>
				</div>
			  </div>
			</div><!-- /.col -->
		  </div><!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
	
  <!-- modal Area -->              
  <div class="modal fade" id="modal-default">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Default Modal</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-info fade" id="modal-info">
	  <div class="modal-dialog">
		<div class="modal-content bg-info">
		  <div class="modal-header">
			<h4 class="modal-title">Info Modal</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-primary fade" id="modal-primary">
	  <div class="modal-dialog">
		<div class="modal-content bg-primary">
		  <div class="modal-header">
			<h4 class="modal-title">Primary Modal</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-danger fade" id="modal-danger">
	  <div class="modal-dialog">
		<div class="modal-content bg-danger">
		  <div class="modal-header">
			<h4 class="modal-title">Danger Modal</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-info float-right">Save changes</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-warning fade" id="modal-warning">
	  <div class="modal-dialog">
		<div class="modal-content bg-warning">
		  <div class="modal-header">
			<h4 class="modal-title">Warning Modal</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-info float-right">Save changes</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-success fade" id="modal-success">
	  <div class="modal-dialog">
		<div class="modal-content bg-success">
		  <div class="modal-header">
			<h4 class="modal-title">Success Modal</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p>One fine body&hellip;</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-info float-right">Save changes</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
	
  <!-- Modal -->
  <div class="modal modal-left fade" id="modal-left" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Your content comes here</p>
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
  <!-- /.modal -->
	
  <!-- Modal -->
  <div class="modal center-modal fade" id="modal-center" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Your content comes here</p>
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
  <!-- /.modal -->

  <!-- Modal -->
  <div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Your content comes here</p>
			<br><br><br><br><br><br>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
  <!-- /.modal -->

  <!-- Modal -->
  <div class="modal modal-right fade" id="modal-right" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Your content comes here</p>
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
  <!-- /.modal -->

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<h4>Overflowing text to show scroll behavior</h4>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-rounded text-left" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
  <!-- /.modal -->

  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Medium model</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<h4>Overflowing text to show scroll behavior</h4>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info btn-rounded" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
  <!-- /.modal -->

  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body"> content will be here </div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
  <!-- /.modal -->	
  <!--/ modal Area -->
	



@endsection