@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Border</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Border</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- Border classes -->
		  <div class="box">
			  <div class="box-header">
				<h4 class="box-title">Following table demonstrates available classes for 1px border.</h4>               
			  </div>
			<div class="box-body">
			  <div class="row">
				<div class="col-12">					
					<div class="d-flex flex-row mb-3 bg-light">
					  <div class="px-25 py-25 w-200">Class name</div>
					  <div class="px-25 py-25">Description</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.bt-1</code></div>
					  <div class="px-25 py-15">border-top: 1px solid ...</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.bb-1</code></div>
					  <div class="px-25 py-15">border-bottom: 1px solid ...</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.bl-1</code></div>
					  <div class="px-25 py-15">border-left: 1px solid ...</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.br-1</code></div>
					  <div class="px-25 py-15">border-right: 1px solid ...</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.bx-1</code></div>
					  <div class="px-25 py-15">border-left: 1px solid ...<br>border-right: 1px solid ...</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.by-1</code></div>
					  <div class="px-25 py-15">border-top: 1px solid ...<br>border-bottom: 1px solid ...</div>
					</div>
										
					<div class="d-flex flex-row mb-3">
					  <div class="px-25 py-15 w-200"><code>.b-1</code></div>
					  <div class="px-25 py-15">border: 1px solid ...</div>
					</div>						
				</div>

				<div class="col-12">
					<p>You can add solid borders to an element using following classes. You're able to change the border color using <a href="../content/utilities-color.html">border color utility classes</a>.</p>
					<p>The classes follows b{side}-{size} format, where <code>{size}</code> is one of <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, or <code>5</code> values. Also, <code>{side}</code> is one of:</p>
					<ul>
					  <li><code>t</code>: Border top</li>
					  <li><code>b</code>: Border bottom</li>
					  <li><code>l</code>: Border left</li>
					  <li><code>r</code>: Border right</li>
					  <li><code>x</code>: Border left and right</li>
					  <li><code>y</code>: Border top and bottom</li>
					  <li><em>null</em>: All sides</li>
					</ul>				


				  <div class="row">
					<div class="col-lg-6 col-12">
						<hr class="d-lg-none">
						<div class="code-preview">
						  <div class="b-3 h-50 p-5 b-dashed"><code>&lt;div class="b-dashed"&gt;&lt;/div&gt;</code></div><br>
						  <div class="b-3 h-50 p-5 b-dotted"><code>&lt;div class="b-dotted"&gt;&lt;/div&gt;</code></div><br>
						  <div class="b-3 h-50 p-5 b-double"><code>&lt;div class="b-double"&gt;&lt;/div&gt;</code></div><br>
						  <div class="b-3 h-50 p-5 b-groove"><code>&lt;div class="b-groove"&gt;&lt;/div&gt;</code></div><br>
						  <div class="b-3 h-50 p-5 b-solid"><code>&lt;div class="b-solid"&gt;&lt;/div&gt;</code></div>							
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<hr class="d-lg-none">
						<div class="code-preview">
						  <div class="b-1 h-30 p-5"><code>&lt;div class="b-1"&gt;&lt;/div&gt;</code></div><br>
						  <div class="bx-2 h-30 p-5"><code>&lt;div class="bx-2"&gt;&lt;/div&gt;</code></div><br>
						  <div class="by-3 h-30 p-5"><code>&lt;div class="by-3"&gt;&lt;/div&gt;</code></div><br>
						  <div class="bl-3 border-primary h-30 p-5"><code>&lt;div class="bl-3 border-primary"&gt;&lt;/div&gt;</code></div><br>
						  <div class="br-2 border-success h-30 p-5"><code>&lt;div class="br-2 border-success"&gt;&lt;/div&gt;</code></div><br>
						  <div class="bt-1 border-danger h-30 p-5"><code>&lt;div class="bt-1 border-danger"&gt;&lt;/div&gt;</code></div><br>
						  <div class="bb-1 border-info h-30 p-5"><code>&lt;div class="bb-1 border-info"&gt;&lt;/div&gt;</code></div><br>
						</div>
					</div>
				  </div>						
				</div>	
				</div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection