@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">  
		<!-- left content -->
		<section class="left-block content">
			<a class="mdi mdi-close mdi-menu btn btn-success open-left-block d-block d-md-none" href="javascript:void(0)"></a>
				<div class="scrollable" style="height: 100%;">
					<div class="left-content-area">
						<div class="h-p100">

						  <div class="p-20">
							<a href="mailbox_inbox.html" class="btn btn-rounded btn-success btn-block">Back to Inbox</a>
						  </div>

						  <div class="box mb-0 no-shadow bg-transparent b-0">
							<div class="box-header with-border p-20">
							  <h4 class="box-title">Folders</h4>
							</div>
							<div class="box-body mailbox-nav p-20">
							  <ul class="nav nav-pills flex-column">
								<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i> Inbox
								  <span class="label label-success pull-right">12</span></a></li>
								<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i> Sent</a></li>
								<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Drafts</a></li>
								<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right">14</span></a>
								</li>
								<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i> Trash</a></li>
							  </ul>
							</div>
							<!-- /.box-body -->
						  </div>
						  <!-- /. box -->
						  <div class="box no-shadow bg-transparent b-0">
							<div class="box-header with-border p-20">
							  <h4 class="box-title">Labels</h4>
							</div>
							<div class="box-body mailbox-nav p-20">
							  <ul class="nav nav-pills flex-column">
								<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
								<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-warning"></i> Promotions</a></li>
								<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-info"></i> Social</a></li>
							  </ul>
							</div>
							<!-- /.box-body -->
						  </div>
						  <!-- /.box -->	
						</div>				
					</div>
				</div>
		</section>
		<!-- /.left content -->

		<!-- right content -->
		<section class="right-block content">

			<div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Compose New Message</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="form-group">
					<input class="form-control" placeholder="To:">
				  </div>
				  <div class="form-group">
					<input class="form-control" placeholder="Subject:">
				  </div>
				  <div class="form-group">
						<textarea id="compose-textarea" class="form-control" style="height: 300px">
						  <p>Your Message Here....</p>
						</textarea>
				  </div>
				  <div class="form-group">
					<div class="btn btn-rounded btn-info btn-file">
					  <i class="fa fa-paperclip"></i> Attachment
					  <input type="file" name="attachment">
					</div>
					<p class="help-block">Max. 32MB</p>
				  </div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
				  <div class="pull-right">
					<button type="button" class="btn btn-rounded btn-default"><i class="fa fa-pencil"></i> Draft</button>
					<button type="submit" class="btn btn-rounded btn-success"><i class="fa fa-envelope-o"></i> Send</button>
				  </div>
				  <button type="reset" class="btn btn-rounded btn-danger"><i class="fa fa-times"></i> Discard</button>
				</div>
				<!-- /.box-footer -->
			</div>
		 <!-- /. box -->

		</section>
		<!-- /.right content -->	  
  </div>
  <!-- /.content-wrapper -->

@endsection