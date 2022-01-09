@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Notification</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Notification</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			  <div class="col-lg-6">
				  <div class="box">
					<div class="box-header">
					  <h4 class="box-title">Simple Toastr Alerts</h4>
					   <p class="subtitle mb-0">You can use four different alert <code>info, warning, success, and error</code> message.</p>
					</div>
					<div class="box-body pad res-tb-block">
					  <div class="button-box">
							<button class="tst1 btn btn-info btn-block mb-15">Info Message</button>
							<button class="tst2 btn btn-warning btn-block mb-15">Warning Message</button>
							<button class="tst3 btn btn-success btn-block mb-15">Success Message</button>
							<button class="tst4 btn btn-danger btn-block mb-15">Danger Message</button>
						</div>              
					</div>
					<!-- /.box-body -->
				  </div>
				  <div class="box">
					<div class="box-body">
					  <div class="row">
							<div class="col-12">
								<h4>Alert Full top </h4>
								<button class="btn btn-success btn-outline btn-sm showtop btn-block mb-15">Alert Top Full width</button>
								<!-- Start an Alert -->
								<div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttop"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish. <a href="#" class="closed">&times;</a> </div>
							</div>
							<div class="col-12">
								<h4>Alert Full Bottom </h4>
								<button class="btn btn-danger btn-outline btn-sm showbottom btn-block mb-15">Alert Bottom Full width</button>
								<!-- Start an Alert -->
								<div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-danger myadmin-alert-bottom alertbottom"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish. <a href="#" class="closed">&times;</a> </div>
							</div>
							<div class="col-12">
								<h4>Alert Full top </h4>
								<button class="btn btn-info btn-outline btn-sm showtop2 btn-block mb-15">Alert Fullwidth Top with image</button>
								<!-- Start an Alert -->
								<div class="myadmin-alert myadmin-alert-img myadmin-alert-click alert-info myadmin-alert-top alerttop2"> <img src="../images/avatar5.png" class="img" alt="img"><a href="#" class="closed">&times;</a>
									<h4>You have a Message!</h4> <b>John Doe</b> sent you a message. <a href="#" class="closed">&times;</a> </div>
							</div>
							<div class="col-12">
								<h4>Alert Full Bottom with image </h4>
								<button class="btn btn-warning btn-outline btn-sm showbottom2 btn-block mb-15">Alert Bottom Full width</button>
								<!-- Start an Alert -->
								<div class="myadmin-alert myadmin-alert-img myadmin-alert-click alert-warning myadmin-alert-bottom alertbottom2"> <img src="../images/avatar2.png" class="img" alt="img"><a href="#" class="closed">&times;</a>
									<h4>You have a Message!</h4> <b>John Doe</b> sent you a message. <a href="#" class="closed">&times;</a> </div>
							</div>
						</div>              
					</div>
					<!-- /.box-body -->
				  </div>
				  <div class="box">
					<div class="box-body">
					  <div class="row">
							<div class="col-12">
								<h4>Alert Top Right </h4>
								<button id="showtopright" class="btn btn-success btn-sm btn-block mb-15">Show Top Right</button>
								<!-- Start an Alert -->
								<div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-success myadmin-alert-top-right"> <img src="../images/avatar.png" class="img" alt="img"><a href="#" class="closed">&times;</a>
									<h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
							</div>
							<div class="col-12">
								<h4>Alert Top Left</h4>
								<button id="showtopleft" class="btn btn-danger btn-sm btn-block mb-15">Show Top Left</button>
								<!-- Start an Alert -->
								<div id="alerttopleft" class="myadmin-alert myadmin-alert-img alert-danger myadmin-alert-top-left"> <img src="../images/avatar2.png" class="img" alt="img"><a href="#" class="closed">&times;</a>
									<h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
							</div>
							<div class="col-12">
								<h4>Alert Bottom Left </h4>
								<button id="showbottomleft" class="btn btn-primary btn-sm btn-block mb-15">Show Bottom Left</button>
								<!-- Start an Alert -->
								<div id="alertbottomleft" class="myadmin-alert myadmin-alert-img alert-primary myadmin-alert-bottom-left"> <img src="../images/avatar3.png" class="img" alt="img"><a href="#" class="closed">&times;</a>
									<h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
							</div>
							<div class="col-12">
								<h4>Alert Bottom Right </h4>
								<button id="showbottomright" class="btn btn-info btn-sm btn-block mb-15">Show Top Right</button>
								<!-- Start an Alert -->
								<div id="alertbottomright" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-bottom-right"> <img src="../images/avatar5.png" class="img" alt="img"><a href="#" class="closed">&times;</a>
									<h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
							</div>
						</div>              
					</div>
					<!-- /.box-body -->
				  </div>
				  <div class="box">
					<div class="box-header with-border">
					  <h3 class="box-title">Callouts</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <div class="callout callout-secondary">
						<h4>I am a danger callout!</h4>

						<p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
						  like these sweet mornings of spring which I enjoy with my whole heart.</p>
					  </div>
					  <div class="callout callout-primary">
						<h4>I am a danger callout!</h4>

						<p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
						  like these sweet mornings of spring which I enjoy with my whole heart.</p>
					  </div>
					  <div class="callout callout-danger">
						<h4>I am a danger callout!</h4>

						<p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
						  like these sweet mornings of spring which I enjoy with my whole heart.</p>
					  </div>
					  <div class="callout callout-info">
						<h4>I am an info callout!</h4>

						<p>Follow the steps to continue to payment.</p>
					  </div>
					  <div class="callout callout-warning">
						<h4>I am a warning callout!</h4>

						<p>This is a yellow callout.</p>
					  </div>
					  <div class="callout callout-success">
						<h4>I am a success callout!</h4>

						<p>This is a green callout.</p>
					  </div>
					</div>
					<!-- /.box-body -->
				  </div>
			  </div>
			  <div class="col-lg-6">
				  <div class="box">
					<div class="box-header">
					  <h3 class="box-title">Normal Alerts</h3>
					</div>
					<div class="box-body pad res-tb-block">
						<div class="alert alert-secondary"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-primary"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-success"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-info"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-warning"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-danger"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>              
					</div>
					<!-- /.box-body -->
				  </div>
				  <div class="box">
					<div class="box-header">
					  <h3 class="box-title">Dismissable Alerts</h3>
					</div>
					<div class="box-body pad res-tb-block">
						<div class="alert alert-secondary alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-primary alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
						<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>              
					</div>
					<!-- /.box-body -->
				  </div>
				  <div class="box">
					<div class="box-header with-border">
					  <h3 class="box-title">Dismissable Alerts with title</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-ban"></i> Alert!</h4>
						Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
						soul, like these sweet mornings of spring which I enjoy with my whole heart.
					  </div>
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-info"></i> Alert!</h4>
						Info alert preview. This alert is dismissable.
					  </div>
					  <div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-warning"></i> Alert!</h4>
						Warning alert preview. This alert is dismissable.
					  </div>
					  <div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

						<h4><i class="icon fa fa-check"></i> Alert!</h4>
						Success alert preview. This alert is dismissable.
					  </div>
					  <div class="alert alert-secondary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Alert!</h4>
						secondary alert preview. This alert is dismissable.
					  </div>
					  <div class="alert alert-primary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Alert!</h4>
						primary alert preview. This alert is dismissable.
					  </div>
					</div>
					<!-- /.box-body -->
				  </div>
			  </div>
		  </div>
		  <!-- ./row -->
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection