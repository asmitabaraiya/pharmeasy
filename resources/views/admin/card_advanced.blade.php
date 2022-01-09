@extends('admin.app')
@section('body')
<body class="hold-transition dark-skin sidebar-mini theme-primary">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>			
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-check-box"></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="calendar.html" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-calendar"></i>
			    </a>
			</li>
		  </ul>
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="ti-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">	
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
				<img src="../images/avatar/1.jpg" alt="">
			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
			  </li>
			</ul>
          </li>	
		  <li>
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
			  	<i class="ti-settings"></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="index.html">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Application</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>
            <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
            <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
            <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
            <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
            <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
          </ul>
        </li> 		  
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Cards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
			<li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
			<li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
		  </ul>
        </li>  
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="hard-drive"></i>
            <span>Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="content_typography.html"><i class="ti-more"></i>Typography</a></li>
            <li><a href="content_media.html"><i class="ti-more"></i>Media</a></li>
            <li><a href="content_grid.html"><i class="ti-more"></i>Grid</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="package"></i>
            <span>Utilities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="utilities_border.html"><i class="ti-more"></i>Border</a></li>
            <li><a href="utilities_color.html"><i class="ti-more"></i>Color</a></li>
            <li><a href="utilities_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
            <li><a href="utilities_tab.html"><i class="ti-more"></i>Tabs</a></li>
            <li><a href="utilities_animations.html"><i class="ti-more"></i>Animation</a></li>
          </ul>
        </li>
		  
		<li class="treeview">
          <a href="#">
            <i data-feather="edit-2"></i>
            <span>Icons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
            <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
            <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>	
            <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
            <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
            <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
            <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
            <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="inbox"></i>
			<span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
            <li><a href="forms_editors.html"><i class="ti-more"></i>Editors</a></li>
            <li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
            <li><a href="forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
            <li><a href="forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
            <li><a href="forms_general.html"><i class="ti-more"></i>General Elements</a></li>
            <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i data-feather="server"></i>
			<span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
            <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
            <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
            <li><a href="charts_inline.html"><i class="ti-more"></i>Inline</a></li>	
            <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
            <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
            <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
          </ul>
        </li>  
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="map"></i>
			<span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
            <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
          </ul>
        </li> 			  
		  
		<li class="treeview">
          <a href="#">
            <i data-feather="alert-triangle"></i>
			<span>Authentication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
			<li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
			<li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
			<li><a href="auth_user_pass.html"><i class="ti-more"></i>Password</a></li>
			<li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
			<li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>	
          </ul>
        </li> 		  		  
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="layers"></i>
			<span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>  
		  
		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Advanced Box</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Box</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

			<div class="row">

			<!--Slided up box!-->
			  <div class="col-md-6 col-12">
				<div class="box box-slided-up">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>slided up</strong></h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				  </div>

				  <div class="box-body">
					<div class="callout callout-warning mb-0" role="alert">
					  Toggle button requires the box body to be wrapped inside a <code>.box-body</code>.
					</div>
					<div class="box-body">
					  <p>Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
					</div>
				  </div>
				</div>
			  </div>

			<!--Box options!-->
			  <div class="col-md-6 col-12">
				<div class="box box-solid box-inverse box-info">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>options</strong></h4>
					<ul class="box-controls pull-right">
					  <li class="dropdown">
						<a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
						  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
						  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
						</div>
					  </li>
					</ul>
				  </div>

				  <div class="box-body">
					<label>Other icon suggestions</label>
					<p>
					  <span class="pr-1"><i class="ti-settings"></i></span>
					  <span><i class="ti-menu"></i></span>
					</p>
					<p>Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
				  </div>
				</div>
			  </div>

			  <!--box button!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header">
					<h4 class="box-title">Box button</h4>
					<div class="box-controls pull-right">
					  <button class="btn btn-xs btn-info" href="#">Click here</button>
					</div>                
				  </div>

				  <div class="box-body">
					<p>Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
				  </div>
				</div>
			  </div>

			  <!--Box progress!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box progress</h4>
					<div class="box-controls pull-right">
					  <div class="progress progress-xs w-100 mb-0 mt-10">
						  <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>					  
						</div>
					</div> 
				  </div>

				  <div class="box-body">
					<p>Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit.</p>
				  </div>
				</div>
			  </div>

			  <!--box switch!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header">
					<h4 class="box-title">Box switch</h4>
					<div class="box-controls pull-right">
						<label class="switch switch-border switch-danger">
						  <input type="checkbox" checked>
						  <span class="switch-indicator"></span>
						  <span class="switch-description"></span>
						</label>
					</div>
				  </div>

				  <div class="box-body">
					<p>Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit.</p>
				  </div>
				</div>
			  </div>

			  <!--Box search!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box search</h4>
					  <div class="box-controls pull-right">
						<div class="lookup lookup-circle lookup-right">
						  <input type="text" name="s">
						</div>
					  </div>
				  </div>

				  <div class="box-body">
					<p>Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit.</p>
				  </div>
				</div>
			  </div>

			  <!--Box pagination!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box pagination</h4>
					  <div class="box-controls pull-right">
						<nav>
						  <ul class="pagination pagination-sm mb-0">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
						  </ul>
						</nav>
					  </div>
				  </div>

				  <div class="box-body">
					<p>Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra.</p>
				  </div>
				</div>
			  </div>

			  <!--Multi elements!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Multi elements</h4>
					  <div class="box-controls pull-right">
						<div class="box-header-actions">
						  <label class="switch switch-border switch-danger">
							<input type="checkbox" checked>
							<span class="switch-indicator"></span>
							<span class="switch-description"></span>
						  </label>
						  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
							<input type="text" name="s" placeholder="Search">
						  </div>
						  <button class="btn btn-xs btn-primary">Button</button>
						</div>
					  </div>
				  </div>

				  <div class="box-body">
					<p>Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis.</p>
				  </div>
				</div>
			  </div>

			  <!--Scrollable!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Scrollable</h4>
				  </div>

				  <div class="box-body">
					<div class="inner-content-div">
					  <p>Wrao the content inside a <code>.box-body .inner-content-div</code> Defoult height 200px.</p>

					  <p>Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem. Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>

					  <p>Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem. Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
					</div>
				  </div>
				</div>
			  </div>

			  <!--With alert!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header">
					<h4 class="box-title">With <strong>alert</strong></h4>
				  </div>

				  <div class="box-body">
					  <div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
						<strong>Congratulations!</strong><br> You successfully submitted your request. We'll process it soon.
					  </div>

					<p>Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi. Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
				  </div>
				</div>
			  </div>

			  <!--With table!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">With <strong>table</strong></h4>
				  </div>

				  <table class="table">
					<thead>
					  <tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<th scope="row">1</th>
						<td>Easton</td>
						<td>Don</td>
						<td>@easton</td>
					  </tr>
					  <tr>
						<th scope="row">2</th>
						<td>Eric</td>
						<td>Clark</td>
						<td>@eric</td>
					  </tr>
					</tbody>
				  </table>
				</div>
			  </div>

			<!--Box controls!-->
			  <div class="col-md-6 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>controls</strong></h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide"  href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				  </div>

				  <div class="box-body">
					<div class="callout callout-warning mb-0" role="alert">
					  Toggle button requires the box content to be wrapped inside a <code>.box-body</code>.
					</div>
					<div class="box-body">
					  <p>Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
					</div>
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