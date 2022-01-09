@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Grid</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Grid</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div> 

		<!-- Main content -->
		<section class="content">

		  <!-- Default box -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Grid options</h4>
			</div>
			<div class="box-body">
			<p>While Bootstrap uses ems or rems for defining most sizes, pxs are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size.</p>
			  <table class="table table-bordered table-striped">
				  <thead>
					<tr>
					  <th></th>
					  <th class="text-center">
						Extra small<br>
						<small>&lt;576px</small>
					  </th>
					  <th class="text-center">
						Small<br>
						<small>≥576px</small>
					  </th>
					  <th class="text-center">
						Medium<br>
						<small>≥768px</small>
					  </th>
					  <th class="text-center">
						Large<br>
						<small>≥992px</small>
					  </th>
					  <th class="text-center">
						Extra large<br>
						<small>≥1200px</small>
					  </th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <th class="text-nowrap" scope="row">Max container width</th>
					  <td>None (auto)</td>
					  <td>540px</td>
					  <td>720px</td>
					  <td>960px</td>
					  <td>1140px</td>
					</tr>
					<tr>
					  <th class="text-nowrap" scope="row">Class prefix</th>
					  <td><code>.col-</code></td>
					  <td><code>.col-sm-</code></td>
					  <td><code>.col-md-</code></td>
					  <td><code>.col-lg-</code></td>
					  <td><code>.col-xl-</code></td>
					</tr>
					<tr>
					  <th class="text-nowrap" scope="row"># of columns</th>
					  <td colspan="5">12</td>
					</tr>
					<tr>
					  <th class="text-nowrap" scope="row">Gutter width</th>
					  <td colspan="5">30px (15px on each side of a column)</td>
					</tr>
					<tr>
					  <th class="text-nowrap" scope="row">Nestable</th>
					  <td colspan="5">Yes</td>
					</tr>
					<tr>
					  <th class="text-nowrap" scope="row">Column ordering</th>
					  <td colspan="5">Yes</td>
					</tr>
				  </tbody>
				</table>


			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
			
		  <div class="box">
			<div class="box-body">
				<h4 class="box-title mb-5">Example: Stacked-to-horizontal</h4>
				<h6 class="box-subtitle mb-20">Using a single set of <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</h6>
				<div class="row bg-light mb-10 p-10">
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
					<div class="col-md-1">.col-md-1</div>
				</div>
				<div class="row bg-light mb-10 p-10">
					<div class="col-md-8">.col-md-8</div>
					<div class="col-md-4">.col-md-4</div>
				</div>
				<div class="row bg-light mb-10 p-10">
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4">.col-md-4</div>
				</div>
				<div class="row bg-light mb-10 p-10">
					<div class="col-md-6">.col-md-6</div>
					<div class="col-md-6">.col-md-6</div>
				</div>
				<pre class="language-html scrollable">
					<code>
						&lt;div class=&quot;row show-grid&quot;&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
							&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
						&lt;/div&gt;
						&lt;div class=&quot;row show-grid&quot;&gt;
							&lt;div class=&quot;col-md-8&quot;&gt;.col-md-8&lt;/div&gt;
							&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
						&lt;/div&gt;
						&lt;div class=&quot;row show-grid&quot;&gt;
							&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
							&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
							&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
						&lt;/div&gt;
						&lt;div class=&quot;row show-grid&quot;&gt;
							&lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
							&lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
						&lt;/div&gt;
					</code>
				</pre>
			</div>
		</div>
			
	      
			<div class="box">
				<div class="box-body">
					<h4 class="box-title mb-5">Example: Mobile and desktop</h4>
					<h6 class="box-subtitle mb-20">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</h6>
					<div class="row bg-light mb-10 p-10">
						<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
						<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
					</div>
					<div class="row bg-light mb-10 p-10">
						<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
					</div>
					<div class="row bg-light mb-10 p-10">
						<div class="col-xs-6">.col-xs-6</div>
						<div class="col-xs-6">.col-xs-6</div>
					</div>
					<pre class="language-html scrollable">
						<code>
							&lt;div class=&quot;row show-grid&quot;&gt;
								&lt;div class=&quot;col-xs-12 col-md-8&quot;&gt;.col-xs-12 .col-md-8&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
							&lt;/div&gt;
							&lt;div class=&quot;row show-grid&quot;&gt;
								&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
							&lt;/div&gt;
							&lt;div class=&quot;row show-grid&quot;&gt;
								&lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
								&lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
							&lt;/div&gt;
						</code>
					</pre>
				</div>
			</div>
			<div class="box">
				<div class="box-body">
					<h4 class="box-title mb-5">Example: Mobile, tablet, desktops</h4>
					<h6 class="box-subtitle mb-20">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</h6>
					<div class="row bg-light mb-10 p-10">
						<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
						<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
					</div>
					<div class="row bg-light mb-10 p-10">
						<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
						<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
						<!-- Optional: clear the XS cols if their content doesn't match in height -->
						<div class="clearfix visible-xs"></div>
						<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
					</div>
					<pre class="language-html scrollable">
						<code>
							&lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
								&lt;div class=&quot;col-xs-12 col-sm-6 col-md-8&quot;&gt;.col-xs-12 .col-sm-6 .col-md-8&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
							&lt;/div&gt;
							&lt;div class=&quot;row show-grid&quot;&gt;
								&lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
								&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;
								&lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
							&lt;/div&gt;
						</code>
					</pre>
				</div>
			</div>
			<div class="box">
				<div class="box-body">
					<h4 class="box-title mb-5">Responsive column resets</h4>
					<h6 class="box-subtitle mb-20">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our responsive utility classes.</h6>
					<div class="row bg-light mb-10 p-10">
						<div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
							<br> Resize your viewport or check it out on your phone for an example. </div>
						<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
						<!-- Add the extra clearfix for only the required viewport -->
						<div class="clearfix visible-xs"></div>
						<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
						<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
					</div>
					<pre class="language-html scrollable">
						<code>
							&lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
								&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt; .col-xs-6 .col-sm-3
									&lt;br&gt; Resize your viewport or check it out on your phone for an example. &lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
								&lt;!-- Add the extra clearfix for only the required viewport --&gt;
								&lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
								&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
							&lt;/div&gt;
						</code>
					</pre>
				</div>
			</div>
			<div class="box">
				<div class="box-body">
					<h4 class="box-title mb-5">Offsetting columns</h4>
					<h6 class="box-subtitle mb-20">Move columns to the right using <code>.offset-md--*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four columns.</h6>
					<div class="row bg-light mb-10 p-10">
						<div class="col-md-4">.col-md-4</div>
						<div class="col-md-4 offset-md-4">.col-md-4 .col-md-offset-4</div>
					</div>
					<div class="row bg-light m-b-10 p-10">
						<div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
						<div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
					</div>
					<div class="row bg-light mb-10 p-10">
						<div class="col-md-6 offset-md-3">.col-md-6 .col-md-offset-3</div>
					</div>
					<pre class="language-html scrollable">
						<code>
							&lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
								&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
								&lt;div class=&quot;col-md-4 offset-md-4&quot;&gt;.col-md-4 .col-md-offset-4&lt;/div&gt;
							&lt;/div&gt;
							&lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
								&lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
								&lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
							&lt;/div&gt;
							&lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
								&lt;div class=&quot;col-md-6 offset-md-3&quot;&gt;.col-md-6 .col-md-offset-3&lt;/div&gt;
							&lt;/div&gt;
						</code>
					</pre>
				</div>
			</div>

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 

@endsection