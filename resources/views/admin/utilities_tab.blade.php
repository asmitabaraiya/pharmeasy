@extends('admin.app')
@section('body')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Tabs</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Tabs</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- tabs -->

		  <div class="row">

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Vertical Tab</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>vtabs & tabs-vertical</code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<div class="vtabs">
						<ul class="nav nav-tabs tabs-vertical" role="tablist">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home4" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span> </a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home4" role="tabpanel">
								<div class="p-15">
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								</div>
							</div>
							<div class="tab-pane" id="profile4" role="tabpanel">
								<div class="p-15">
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								</div>
							</div>
							<div class="tab-pane" id="messages4" role="tabpanel">
								<div class="p-15">
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Customtab vertical Tab</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>vtabs, tabs-vertical & customvtab</code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<div class="vtabs customvtab">
						<ul class="nav nav-tabs tabs-vertical" role="tablist">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home3" role="tab" aria-expanded="true"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span> </a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-expanded="false"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages3" role="tab" aria-expanded="false"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home3" role="tabpanel" aria-expanded="true">
								<div class="p-15">
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								</div>
							</div>
							<div class="tab-pane" id="profile3" role="tabpanel" aria-expanded="false">
								<div class="p-15">
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								</div>
							</div>
							<div class="tab-pane" id="messages3" role="tabpanel" aria-expanded="false">
								<div class="p-15">
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Tab with dropdown</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border</code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-expanded="true"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Dropdown</span>
							</a>
							<div class="dropdown-menu"> <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">@fat</a> <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a> </div>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border p-15" id="myTabContent">
						<div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">
							<p> Pellentesque posuere non mi nec feugiat. Sed mattis neque non nisi consequat fringilla. Mauris justo risus, mattis sollicitudin nulla ac, mattis mollis neque. Vestibulum eget ante magna. Aenean lobortis, neque ac consequat eleifend, eros tortor ultrices mi, a scelerisque mauris libero quis quam. Vivamus luctus dolor ac sodales suscipit. Aenean dictum nisi sapien, non sodales sem pellentesque nec.</p>
						</div>
						<div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">
							<p>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia. Duis vitae feugiat purus. Nulla facilisi. Ut vitae euismod lorem. Donec sed pellentesque mi. Nullam quam urna, tincidunt eu metus sed, pretium luctus tellus. Integer viverra turpis urna, ut facilisis nulla luctus vitae. Maecenas blandit turpis pretium sollicitudin facilisis. Nam vitae aliquet massa, vel posuere tortor.</p>
						</div>
						<div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
							<p>Donec vitae laoreet neque, id convallis ante. Phasellus a tellus molestie, varius massa in, suscipit diam. Nulla vulputate, nisi eget porttitor semper, quam justo volutpat lacus, in pretium augue tortor at leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at nisl fringilla, malesuada quam eu, eleifend odio. Nulla nunc orci, aliquam quis ligula vel, porttitor tempus nibh. Praesent semper fermentum massa. Proin id maximus metus, vitae ultricies ante. Duis tempus, arcu a vulputate congue, purus ex rutrum elit, at imperdiet nisi nibh at purus. Nunc in fringilla erat.</p>
						</div>
						<div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
							<p>Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio. Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi. Fusce commodo eros a vulputate accumsan.</p>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Customtab2 Tab</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>customtab</code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home7" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="profile7" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="messages7" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Customtab vertical Tab Icon</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>vtabs & tabs-vertical</code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<div class="vtabs">
						<ul class="nav nav-tabs tabs-vertical" role="tablist">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home9" role="tab"><span><i class="ion-home mr-15"></i>Home</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile9" role="tab"><span><i class="ion-person mr-15"></i>Person</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages9" role="tab"><span><i class="ion-email mr-15"></i>Email</span></a> </li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home9" role="tabpanel">
								<div class="p-15">
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								</div>
							</div>
							<div class="tab-pane" id="profile9" role="tabpanel">
								<div class="p-15">
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								</div>
							</div>
							<div class="tab-pane" id="messages9" role="tabpanel">
								<div class="p-15">
									<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
									<h3>Donec vitae laoreet neque, id convallis ante.</h3>
									<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->	

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Tab with icon</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home8" role="tab"><span><i class="ion-home mr-15"></i>Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span><i class="ion-person mr-15"></i>Person</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages8" role="tab"><span><i class="ion-email mr-15"></i>Email</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">
						<div class="tab-pane active" id="home8" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="profile8" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="messages8" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Nav Pills Tabs</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-pills justify-content-end mb-20">
						<li class=" nav-item"> <a href="#navpills2-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Tab One</a> </li>
						<li class="nav-item"> <a href="#navpills2-2" class="nav-link" data-toggle="tab" aria-expanded="false">Tab Two</a> </li>
						<li class="nav-item"> <a href="#navpills2-3" class="nav-link" data-toggle="tab" aria-expanded="true">Tab Three</a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="navpills2-1" class="tab-pane active">
							<div class="row">
								<div class="col-md-2"> <img src="../images/card/img1.jpg" class="img-fluid" alt=""> </div>
								<div class="col-md-10"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
									<p>
										<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
								</div>
							</div>
						</div>
						<div id="navpills2-2" class="tab-pane">
							<div class="row">
								<div class="col-md-10"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
									<p>
										<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
								</div>
								<div class="col-md-2"> <img src="../images/card/img2.jpg" class="img-fluid" alt=""> </div>
							</div>
						</div>
						<div id="navpills2-3" class="tab-pane">
							<div class="row">
								<div class="col-md-2"> <img src="../images/card/img3.jpg" class="img-fluid" alt=""> </div>
								<div class="col-md-10"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
									<p>
										<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>		  
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Nav Pills Tabs</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-pills mb-20">
						<li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Tab One</a> </li>
						<li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Tab Two</a> </li>
						<li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Tab Three</a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="navpills-1" class="tab-pane active">
							<div class="row">
								<div class="col-md-2"> <img src="../images/card/img1.jpg" class="img-fluid" alt=""> </div>
								<div class="col-md-10">Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
									<p>
										<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
								</div>
							</div>
						</div>
						<div id="navpills-2" class="tab-pane">
							<div class="row">
								<div class="col-md-10"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
									<p>
										<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
								</div>
								<div class="col-md-2"> <img src="../images/card/img2.jpg" class="img-fluid" alt=""> </div>
							</div>
						</div>
						<div id="navpills-3" class="tab-pane">
							<div class="row">
								<div class="col-md-2"> <img src="../images/card/img3.jpg" class="img-fluid" alt=""> </div>
								<div class="col-md-10"> Morbi ac mi vel tellus condimentum semper. In nec finibus erat. Sed ultrices ligula mi, a euismod metus egestas in. Nulla imperdiet neque at massa fringilla dignissim a id orci. Nam faucibus, ipsum interdum bibendum rutrum, libero odio vestibulum purus, non sollicitudin risus nunc et odio.
									<p>
										<br/> Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Fill</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>nav-tabs &amp; nav-fill </code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-fill" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home11" role="tab"><span><i class="ion-home"></i></span> <span class="hidden-xs-down ml-15">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile11" role="tab"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages11" role="tab"><span><i class="ion-email"></i></span> <span class="hidden-xs-down ml-15">Messages</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setting11" role="tab"><span><i class="ion-settings"></i></span> <span class="hidden-xs-down ml-15">Setting</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#about11" role="tab"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">About</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact11" role="tab"><span><i class="ion-camera"></i></span> <span class="hidden-xs-down ml-15">Contact</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">
						<div class="tab-pane active" id="home11" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
							</div>
						</div>
						<div class="tab-pane" id="profile11" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
							</div>
						</div>
						<div class="tab-pane" id="messages11" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="setting11" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
							</div>
						</div>
						<div class="tab-pane" id="about11" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="contact11" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Horizontal alignment</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>nav-tabs &amp; justify-content-center </code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs justify-content-center" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home12" role="tab"><span><i class="ion-home"></i></span> <span class="hidden-xs-down ml-15">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile12" role="tab"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages12" role="tab"><span><i class="ion-email"></i></span> <span class="hidden-xs-down ml-15">Messages</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setting12" role="tab"><span><i class="ion-settings"></i></span> <span class="hidden-xs-down ml-15">Setting</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#about12" role="tab"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">About</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact12" role="tab"><span><i class="ion-camera"></i></span> <span class="hidden-xs-down ml-15">Contact</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">
						<div class="tab-pane active" id="home12" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="profile12" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
							</div>
						</div>
						<div class="tab-pane" id="messages12" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="setting12" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="about12" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="contact12" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Horizontal alignment</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>nav-tabs &amp; justify-content-end </code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs justify-content-end" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home13" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile13" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages13" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">
						<div class="tab-pane active" id="home13" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="profile13" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
						<div class="tab-pane" id="messages13" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->	

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Default Tab</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">
						<div class="tab-pane active" id="home" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="profile" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="messages" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
			  <div class="box box-default">
				<div class="box-header with-border">
				  <h4 class="box-title">Customtab Tab</h4>
				  <h6 class="box-subtitle">Use default tab with class <code>customtab</code></h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home2" role="tabpanel">
							<div class="p-15">
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
						<div class="tab-pane" id="profile2" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
							</div>
						</div>
						<div class="tab-pane" id="messages2" role="tabpanel">
							<div class="p-15">
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
							</div>
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
		  <!-- END tabs -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection