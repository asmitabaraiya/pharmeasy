@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Buttons</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Buttons</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

			<div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">General Buttons</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn</code> <code>.btn-</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-default mb-5">Default</button>
						<button type="button" class="btn btn-primary mb-5">Primary</button>
						<button type="button" class="btn btn-secondary mb-5">Secondary</button>
						<button type="button" class="btn btn-info mb-5">Info</button>
						<button type="button" class="btn btn-success mb-5">Success</button>
						<button type="button" class="btn btn-danger mb-5">Danger</button>
						<button type="button" class="btn btn-warning mb-5">Warning</button>
						<button type="button" class="btn btn-dark mb-5">Dark</button>
						<button type="button" class="btn btn-light mb-5">Light</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Button with outline</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn-outline</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-outline mb-5">Default</button>
						<button type="button" class="btn btn-outline btn-primary mb-5">Primary</button>
						<button type="button" class="btn btn-outline btn-secondary mb-5">Secondary</button>
						<button type="button" class="btn btn-outline btn-info mb-5">Info</button>
						<button type="button" class="btn btn-outline btn-success mb-5">Success</button>
						<button type="button" class="btn btn-outline btn-danger mb-5">Danger</button>
						<button type="button" class="btn btn-outline btn-warning mb-5">Warning</button>
						<button type="button" class="btn btn-outline btn-dark mb-5">Dark</button>
						<button type="button" class="btn btn-outline btn-light mb-5">Light</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Rounded Buttons</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn-rounded</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-rounded mb-5">Default</button>
						<button type="button" class="btn btn-rounded btn-primary mb-5">Primary</button>
						<button type="button" class="btn btn-rounded btn-secondary mb-5">Secondary</button>
						<button type="button" class="btn btn-rounded btn-info mb-5">Info</button>
						<button type="button" class="btn btn-rounded btn-success mb-5">Success</button>
						<button type="button" class="btn btn-rounded btn-danger mb-5">Danger</button>
						<button type="button" class="btn btn-rounded btn-warning mb-5">Warning</button>
						<button type="button" class="btn btn-rounded btn-dark mb-5">Dark</button>
						<button type="button" class="btn btn-rounded btn-light mb-5">Light</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Rounded Outline Buttons</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn-rounded</code><code>.btn-outline</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-outline btn-rounded mb-5">Default</button>
						<button type="button" class="btn btn-outline btn-rounded btn-primary mb-5">Primary</button>
						<button type="button" class="btn btn-outline btn-rounded btn-secondary mb-5">Secondary</button>
						<button type="button" class="btn btn-outline btn-rounded btn-info mb-5">Info</button>
						<button type="button" class="btn btn-outline btn-rounded btn-success mb-5">Success</button>
						<button type="button" class="btn btn-outline btn-rounded btn-danger mb-5">Danger</button>
						<button type="button" class="btn btn-outline btn-rounded btn-warning mb-5">Warning</button>
						<button type="button" class="btn btn-outline btn-rounded btn-dark mb-5">Dark</button>
						<button type="button" class="btn btn-outline btn-rounded btn-light mb-5">Light</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Button Sizes</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn-lg</code><code>.btn-Primary</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-default">Default Normal</button>
						<button type="button" class="btn btn-primary btn-lg">Primary btn Large</button>
						<button type="button" class="btn btn-secondary btn-sm">Secondary Small</button>
						<button type="button" class="btn btn-info btn-xs">Info Extra Small</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Flat Buttons</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn</code> <code>.btn-flat</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-default btn-flat mb-5">Default</button>
						<button type="button" class="btn btn-primary btn-flat mb-5">Primary</button>
						<button type="button" class="btn btn-secondary btn-flat mb-5">Secondary</button>
						<button type="button" class="btn btn-info btn-flat mb-5">Info</button>
						<button type="button" class="btn btn-success btn-flat mb-5">Success</button>
						<button type="button" class="btn btn-danger btn-flat mb-5">Danger</button>
						<button type="button" class="btn btn-warning btn-flat mb-5">Warning</button>
						<button type="button" class="btn btn-flat btn-dark mb-5">Dark</button>
						<button type="button" class="btn btn-flat btn-light mb-5">Light</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Button with icon</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn</code> <code>i class ="fa fa-check</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-default mb-5"><i class="fa fa-check"></i> Default</button>
						<button type="button" class="btn btn-primary mb-5"><i class="fa fa-check"></i> Primary</button>
						<button type="button" class="btn btn-secondary mb-5"><i class="fa fa-check"></i> Secondary</button>
						<button type="button" class="btn btn-info mb-5"><i class="fa fa-check"></i> Info</button>
						<button type="button" class="btn btn-success mb-5"><i class="fa fa-check"></i> Success</button>
						<button type="button" class="btn btn-danger mb-5"><i class="fa fa-check"></i> Danger</button>
						<button type="button" class="btn btn-warning mb-5"><i class="fa fa-check"></i> Warning</button>
						<button type="button" class="btn btn-dark mb-5"><i class="fa fa-check"></i> Dark</button>
						<button type="button" class="btn btn-light mb-5"><i class="fa fa-check"></i> Light</button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title">Split buttons</h4>
					<div class="clearfix">
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-default">Default</button>
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-primary">Primary</button>
						  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-secondary">Secondary</button>
						  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-info">Info</button>
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-success">Success</button>
						  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-danger">Danger</button>
						  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-warning">Warning</button>
						  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>						
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-dark">Dark</button>
						  <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-light">Light</button>
						  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title">Button with Dropdown</h4>
					<div class="clearfix">
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Secondary</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>						
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Dark</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
						<div class="btn-group mb-5">
						  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Light</button>
						  <div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						  </div>
						</div>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Circle Buttons</h4>
				  <p class="subtitle mb-20">Using the base class <code>.btn</code> <code>.btn-circle</code> <code>.btn-</code></p>
					<div class="clearfix">
						<button type="button" class="btn btn-circle btn-default btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-primary btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-secondary btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-info btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-success btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-danger btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-warning btn-xs mb-5"><i class="mdi mdi-check"></i></button>						
						<button type="button" class="btn btn-circle btn-dark btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-light btn-xs mb-5"><i class="mdi mdi-check"></i></button>
						<span><code>.btn-xs</code></span>
					</div>
					<div class="clearfix">
						<button type="button" class="btn btn-circle btn-default btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-primary btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-secondary btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-info btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-success btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-danger btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-warning btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-dark btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-light btn-sm mb-5"><i class="mdi mdi-check"></i></button>
						<span><code>.btn-sm</code></span>
					</div>
					<div class="clearfix">
						<button type="button" class="btn btn-circle btn-default mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-primary mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-secondary mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-info mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-success mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-danger mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-warning mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-dark mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-light mb-5"><i class="mdi mdi-check"></i></button>
						<span>Default</span>
					</div>
					<div class="clearfix">
						<button type="button" class="btn btn-circle btn-default btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-primary btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-secondary btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-info btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-success btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-danger btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-warning btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-dark btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<button type="button" class="btn btn-circle btn-light btn-lg mb-5"><i class="mdi mdi-check"></i></button>
						<span><code>.btn-lg</code></span>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Horizontal Button Group</h4>
				  <p class="subtitle mb-20">Horizontal button groups are easy to create with bootstrap. Just add your buttons inside <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code></p>
					<div class="clearfix">
						<div class="btn-group">
						  <button type="button" class="btn btn-info">Left</button>
						  <button type="button" class="btn btn-info">Middle</button>
						  <button type="button" class="btn btn-info">Right</button>
						</div>
						<div class="btn-group">
						  <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i></button>
						  <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i></button>
						  <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i></button>
						</div>					
						<div class="btn-group">
						  <button type="button" class="btn btn-warning">1</button>
						  <button type="button" class="btn btn-warning">2</button>

						  <div class="btn-group">
							<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
							</button>
							  <div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Vertical Button Group</h4>
				  <p class="subtitle mb-20">Vertical button groups are easy to create with bootstrap. Just add your buttons inside <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code></p>
					<div class="clearfix">
						<div class="btn-group-vertical">
						  <button type="button" class="btn btn-info">Left</button>
						  <button type="button" class="btn btn-info">Middle</button>
						  <button type="button" class="btn btn-info">Right</button>
						</div>
						<div class="btn-group-vertical">
						  <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i></button>
						  <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i></button>
						  <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i></button>
						</div>					
						<div class="btn-group-vertical">
						  <button type="button" class="btn btn-danger">1</button>
						  <button type="button" class="btn btn-danger">2</button>

						  <div class="btn-group">
							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
							  <i class="fa fa-caret-down"></i>
							</button>
							  <div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Social buttons Icon with Name</h4>
				  <p class="subtitle mb-20">Use a classes <code>btn btn-social btn-bitbucket /  &lt; class="fa fa-bitbucket"&gt;&lt;/i&gt;</code> to quickly create a General btn.</p>
					<div class="clearfix">					
					  <button class="btn btn-social btn-bitbucket mb-5">
						<i class="fa fa-bitbucket"></i> Sign in with Bitbucket
					  </button>
					  <button class="btn btn-social btn-dropbox mb-5">
						<i class="fa fa-dropbox"></i> Sign in with Dropbox
					  </button>
					  <button class="btn btn-social btn-facebook mb-5">
						<i class="fa fa-facebook"></i> Sign in with Facebook
					  </button>
					  <button class="btn btn-social btn-flickr mb-5">
						<i class="fa fa-flickr"></i> Sign in with Flickr
					  </button>
					  <button class="btn btn-social btn-foursquare mb-5">
						<i class="fa fa-foursquare"></i> Sign in with Foursquare
					  </button>
					  <button class="btn btn-social btn-github mb-5">
						<i class="fa fa-github"></i> Sign in with GitHub
					  </button>
					  <button class="btn btn-social btn-google mb-5">
						<i class="fa fa-google-plus"></i> Sign in with Google
					  </button>
					  <button class="btn btn-social btn-instagram mb-5">
						<i class="fa fa-instagram"></i> Sign in with Instagram
					  </button>
					  <button class="btn btn-social btn-linkedin mb-5">
						<i class="fa fa-linkedin"></i> Sign in with LinkedIn
					  </button>
					  <button class="btn btn-social btn-tumblr mb-5">
						<i class="fa fa-tumblr"></i> Sign in with Tumblr
					  </button>
					  <button class="btn btn-social btn-twitter mb-5">
						<i class="fa fa-twitter"></i> Sign in with Twitter
					  </button>
					  <button class="btn btn-social btn-vk mb-5">
						<i class="fa fa-vk"></i> Sign in with VK
					  </button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Social buttons Icon</h4>
				  <p class="subtitle mb-20">Use a classes <code>btn btn-social-icon btn-bitbucket</code> to quickly create a General btn.</p>
					<div class="clearfix">
						<button class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></button>
						<button class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></button>
						<button class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
						<button class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></button>
						<button class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></button>
						<button class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></button>
						<button class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></button>
						<button class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
						<button class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></button>
						<button class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></button>
						<button class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
						<button class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Social Icon With Circle buttons</h4>
				  <p class="subtitle mb-20">Use a classes <code>btn btn-social-icon btn-circle</code> to quickly create a General btn.</p>
					<div class="clearfix">
						<button class="btn btn-social-icon btn-circle btn-bitbucket"><i class="fa fa-bitbucket"></i></button>
						<button class="btn btn-social-icon btn-circle btn-dropbox"><i class="fa fa-dropbox"></i></button>
						<button class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></button>
						<button class="btn btn-social-icon btn-circle btn-flickr"><i class="fa fa-flickr"></i></button>
						<button class="btn btn-social-icon btn-circle btn-foursquare"><i class="fa fa-foursquare"></i></button>
						<button class="btn btn-social-icon btn-circle btn-github"><i class="fa fa-github"></i></button>
						<button class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></button>
						<button class="btn btn-social-icon btn-circle btn-instagram"><i class="fa fa-instagram"></i></button>
						<button class="btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></button>
						<button class="btn btn-social-icon btn-circle btn-tumblr"><i class="fa fa-tumblr"></i></button>
						<button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></button>
						<button class="btn btn-social-icon btn-circle btn-vk"><i class="fa fa-vk"></i></button>
					</div>
				</div>
				<!-- /.box -->
			  </div>

			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title mb-5">Application Buttons</h4>
				  <p class="subtitle mb-20">Add the classes <code>.btn.btn-app</code> to an <code>&lt;a&gt;</code> tag to achieve the following:</p>
					<div class="clearfix">
						  <a class="btn btn-app btn-info" href="#">
							<i class="fa fa-edit"></i> Edit
						  </a>
						  <a class="btn btn-app btn-success" href="#">
							<i class="fa fa-play"></i> Play
						  </a>
						  <a class="btn btn-app btn-secondary" href="#">
							<i class="fa fa-pause"></i> Pause
						  </a>
						  <a class="btn btn-app btn-primary" href="#">
							<i class="fa fa-stop"></i> Stop
						  </a>
						  <a class="btn btn-app btn-warning" href="#">
							<i class="fa fa-repeat"></i> Repeat
						  </a>
						  <a class="btn btn-app btn-danger" href="#">
							<i class="fa fa-save"></i> Save
						  </a>
						  <a class="btn btn-app btn-warning" href="#">
							<span class="badge bg-danger">12</span>
							<i class="fa fa-bullhorn"></i> Notifications
						  </a>
						  <a class="btn btn-app btn-warning" href="#">
							<span class="badge bg-primary">41</span>
							<i class="fa fa-users"></i> Users
						  </a>
						  <a class="btn btn-app btn-primary" href="#">
							<span class="badge bg-success">45</span>
							<i class="fa fa-inbox"></i> Orders
						  </a>
						  <a class="btn btn-app btn-success" href="#">
							<span class="badge bg-info">2</span>
							<i class="fa fa-envelope"></i> Inbox
						  </a>
						  <a class="btn btn-app btn-danger" href="#">
							<span class="badge bg-success">48</span>
							<i class="fa fa-barcode"></i> Products
						  </a>
						  <a class="btn btn-app btn-info" href="#">
							<span class="badge bg-danger">31</span>
							<i class="fa fa-heart-o"></i> Likes
						  </a>
					</div>
				</div>
				<!-- /.box -->
			  </div>

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection