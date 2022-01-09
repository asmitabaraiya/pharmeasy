@extends('admin.app')
@section('body')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Typography</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Typography</li>
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
				<div class="box-header with-border">
				  <h4 class="box-title">Headlines</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <h1>h1. Bootstrap heading</h1>
				  <h2>h2. Bootstrap heading</h2>
				  <h3>h3. Bootstrap heading</h3>
				  <h4>h4. Bootstrap heading</h4>
				  <h5>h5. Bootstrap heading</h5>
				  <h6>h6. Bootstrap heading</h6>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Heading with subtitle</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <h1>h1. heading <small>Sub-heading</small></h1>
				  <h2>h2. heading <small>Sub-heading</small></h2>
				  <h3>h3. heading <small>Sub-heading</small></h3>
				  <h4>h4. heading <small>Sub-heading</small></h4>
				  <h5>h5. heading <small>Sub-heading</small></h5>
				  <h6>h6. heading <small>Sub-heading</small></h6>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
			<div class="col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Text Emphasis</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <p class="lead">Lead to emphasize importance</p>

				  <p class="text-success">Text success to emphasize success</p>

				  <p class="text-info">Text info to emphasize info</p>

				  <p class="text-primary">Text primary to emphasize primary</p>

				  <p class="text-secondary">Text secondary to emphasize secondary</p>

				  <p class="text-danger">Text danger to emphasize danger</p>

				  <p class="text-warning">Text warning to emphasize warning</p>

				  <p class="text-muted">Text muted to emphasize general</p>

				  <p class="text-dark">Text dark to emphasize dark</p>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Alignment text</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<p class="text-left">Left aligned text on all viewport sizes.</p>
					<p class="text-center">Center aligned text on all viewport sizes.</p>
					<p class="text-right">Right aligned text on all viewport sizes.</p>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Font weight and italics</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<p class="font-weight-bold">Bold text.</p>
					<p class="font-weight-normal">Normal weight text.</p>
					<p class="font-italic">Italic text.</p>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
			<div class="col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Block Quotes</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <blockquote class="blockquote">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				  </blockquote>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
			<div class="col-lg-6">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Block Quotes Pulled Right</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body clearfix">
				  <blockquote class="blockquote blockquote-reverse">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				  </blockquote>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Unordered List</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					  <ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					  </ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Ordered Lists</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					  <ol>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					  </ol>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				  </ol>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Unstyled List</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <ul class="list-unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					  <ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					  </ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Description</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>

				  </dl>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Description Horizontal</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">             
				  <dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
					  sit amet risus.
					</dd>
				  </dl>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->
		  <!-- END TYPOGRAPHY -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection