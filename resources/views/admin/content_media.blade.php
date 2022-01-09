@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Advanced Medias</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Medias</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				
				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <div class="media-body">
						<p><strong>Johen Doe</strong></p>
						<p>Back-end Developer</p>
					  </div>
					</div>				
				</div>

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="fa fa-phone lead text-info"></span>
					  <div class="media-body">
						<p><strong>(123) 456 - 7890</strong></p>
						<p>Mobile</p>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <div class="media-body">
						<p><strong>Johone Doe@gmail.com</strong></p>
						<p>Work</p>
					  </div>
					  <span class="fa fa-envelope lead text-info"></span>
					</div>				
				</div>

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-white mb-20">
					  <span class="fa fa-phone lead text-info"></span>
					  <div class="media-body">
						<p><strong>(123) 456 - 9874</strong></p>
						<p>Mobile</p>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media bg-img mb-20" style="background-image: url(../images/gallery/landscape14.jpg);" data-overlay="5">
					  <div class="media-body">
						<p class="text-white"><strong>Johen Doe</strong></p>
						<p class="text-white">Back-end Developer</p>
					  </div>
					</div>				
				</div>


				<div class="col-md-6 col-12">
					<div class="media bg-gradient-primary">
					  <span class="fa fa-phone lead text-warning mb-20"></span>
					  <div class="media-body">
						<p class="text-white"><strong>(123) 456 - 7890</strong></p>
						<p class="text-white">Mobile</p>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media bg-gradient-primary mb-20">
					  <div class="media-body">
						<p class="text-white"><strong>Johone Doe@gmail.com</strong></p>
						<p class="text-white">Work</p>
					  </div>
					  <span class="fa fa-envelope lead text-warning"></span>
					</div>				
				</div>

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-primary mb-20">
					  <span class="fa fa-phone lead text-warning"></span>
					  <div class="media-body">
						<p><strong>(123) 456 - 9874</strong></p>
						<p class="text-white">Mobile</p>
					  </div>
					</div>				
				</div>

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johen Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>Donec vitae laoreet neque, id convallis ante.</p>
						<div class="d-inline-block pull-right mt-10">
						  <button type="button" class="btn btn-rounded btn-sm btn-success m-5">Approve</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Delete</button>
						</div>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar2.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johen Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>Donec vitae laoreet neque, id convallis ante.</p>

						<ul class="list-inline mt-10">
							<li><a href="#" class="link-black text-sm">Comments (5) </a></li> 
							<li><a href="#" class="link-black text-sm"> likes (23)</a></li>
							<li class="pull-right">
								<button type="button" class="btn btn-box-tool btn-sm btn-rounded" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-box-tool btn-sm btn-rounded" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></button>
							</li>
						</ul>						

					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar2.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johen Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>Donec vitae laoreet neque, id convallis ante.</p>

						<ul class="list-inline mt-10">
							<li><a href="#" class="link-black text-sm">Comments (5) </a></li> 
							<li><a href="#" class="link-black text-sm"> likes (23)</a></li>
							<li class="pull-right media-hover-show">
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></button>
							</li>
						</ul>						

					  </div>
					</div>				
				</div>				

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <div class="media-body">
						<p><strong>Notifications</strong></p>
						<p>Turn on to receive alerts</p>
					  </div>

					  <label class="switch">
						<input type="checkbox" checked>
						<span class="switch-indicator"></span>
					  </label>
					</div>				
				</div>			

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <div class="media-left">
						<label class="custom-control custom-checkbox">
						  <input type="checkbox" id="md_checkbox_1" class="filled-in chk-col-blue" checked="">
						  <label for="md_checkbox_1"></label>
						</label>
					  </div>
					  <div class="media-body">
						<p><strong>Notifications</strong></p>
						<p>Turn on to receive alerts</p>
					  </div>
					</div>				
				</div>			

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20" data-provide="selectable">
					  <div class="media-left">
						<label class="custom-control custom-checkbox">
						  <input type="checkbox" id="md_checkbox_2" class="filled-in chk-col-blue">
						  <label for="md_checkbox_2"></label>
						</label>
					  </div>
					  <div class="media-body">
						<p><strong>Notifications</strong></p>
						<p>Turn on to receive alerts</p>
					  </div>
					</div>				
				</div>			

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <img class="avatar" src="../images/avatar.png" alt="...">
					  <div class="media-body">
						<p><strong>Johone Doe</strong></p>
						<p>HR</p>
					  </div>
					</div>				
				</div>			

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-white mb-20">
					  <img class="avatar" src="../images/avatar2.png" alt="...">
					  <div class="media-body">
						<p><strong>Johone Doe</strong></p>
						<p>CEO</p>
					  </div>
					  <div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-remove"></i></button>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-white mb-20">
					  <img class="avatar" src="../images/avatar3.png" alt="...">
					  <div class="media-body">
						<p><strong>Johone Doe</strong></p>
						<p>@Johone Doe</p>
					  </div>
					  <div>
						<a class="btn btn-block btn-primary btn-sm btn-rounded" href="#">Follow</a>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-white mb-20">
					  <span class="avatar avatar-sm bg-primary"><i class="fa fa-user"></i></span>
					  <div class="media-body">
						<p>New user registered</p>
						<time datetime="2017-07-14 20:00">24 min ago</time>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-white mb-20">
					  <span class="avatar avatar-sm bg-primary"><i class="fa fa-folder"></i></span>
					  <div class="media-body">
						<p><strong>Photos</strong></p>
						<time datetime="2017-07-14 20:00">Nov 22, 2018</time>
					  </div>
					  <div>
						<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="More info"><i class="fa fa-info"></i></button>
					  </div>
					</div>				
				</div>		

				<div class=" col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <img class="avatar" src="../images/avatar3.png" alt="...">
					  <div class="media-body">
						<p><strong>Johone Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>Updated his profile picture</p>
					  </div>
					</div>				
				</div>

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-primary mb-20">
					  <img class="avatar" src="../images/avatar3.png" alt="...">
					  <div class="media-body">
						<p><strong>Johone Doe</strong></p>
						<p class="text-white">@Johone Doe</p>
					  </div>
					  <div>
						<a class="btn btn-block btn-outline btn-white btn-sm btn-rounded" href="#">Follow</a>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-success mb-20">
					  <span class="avatar avatar-sm bg-white"><i class="fa fa-user"></i></span>
					  <div class="media-body">
						<p>New user registered</p>
						<time datetime="2017-07-14 20:00" class="text-white">24 min ago</time>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media align-items-center bg-info mb-20">
					  <span class="avatar avatar-sm bg-white"><i class="fa fa-folder"></i></span>
					  <div class="media-body">
						<p><strong>Photos</strong></p>
						<time datetime="2017-07-14 20:00" class="text-white">Nov 22, 2018</time>
					  </div>
					  <div>
						<button type="button" class="btn btn-box-tool text-white btn-rounded" data-toggle="tooltip" title="" data-original-title="More info"><i class="fa fa-info"></i></button>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media bg-danger mb-20">
					  <img class="avatar" src="../images/avatar3.png" alt="...">
					  <div class="media-body">
						<p><strong>Johone Doe</strong> <time class="float-right text-white" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p class="text-white">Updated his profile picture</p>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johone Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>Donec vitae laoreet neque, id convallis ante.</p>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar2.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johen Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p class="text-truncate">Donec vitae laoreet neque, id convallis ante.</p>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar3.png" alt="...">
					  </span>
					  <div class="media-body">
						<p>
						  <strong>Mail Chimp this weekend?</strong>
						  <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time>
						</p>
						<p class="fs-14 semibold">Johen Doe</p>
						<p>Donec vitae laoreet neque, id convallis ante.</p>
					  </div>
					</div>				
				</div>

				<div class="col-md-6 col-12">
					<div class="media bg-warning mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johone Doe</strong> <time class="float-right text-white" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p class="text-white">Donec vitae laoreet neque, id convallis ante.</p>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media bg-white b-1 border-success mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar2.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johen Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p class="text-truncate">Donec vitae laoreet neque, id convallis ante.</p>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media bg-info mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar3.png" alt="...">
					  </span>
					  <div class="media-body">
						<p>
						  <strong>Mail Chimp this weekend?</strong>
						  <time class="float-right text-white" datetime="2017-07-14 20:00">24 min ago</time>
						</p>
						<p class="fs-14 semibold">Johen Doe</p>
						<p class="text-white">Donec vitae laoreet neque, id convallis ante.</p>
					  </div>
					</div>				
				</div>	

				<div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar2.png" alt="...">
					  </span>
					  <div class="media-body">
						<p>
						  <strong>Mail Chimp this weekend?</strong>
						  <small class="pl-1"><strong>(10)</strong></small>
						</p>
						<p>
						  <strong class="fs-14 semibold">Johen Doe</strong>
						  <span class="dash"></span>
						  Donec vitae laoreet neque, id convallis ante.
						</p>
					  </div>
					</div>				
				</div>		

				<div class="col-md-6 col-12">
					<div class="media flex-column text-center p-40 bg-white mb-20">
					  <span class="avatar avatar-xxl bg-success opacity-60 mx-auto">
						<i class="align-sub ion ion-checkmark font-size-40"></i>
					  </span>
					  <div class="mt-20">
						  <h6 class="text-uppercase fw-500">Done!</h6>
						  <small>You task has been completed.</small>
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