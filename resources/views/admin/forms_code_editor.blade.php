@extends('admin.app')
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Code Editor</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Code Editor</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- Example Javascript Mode -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Ace Editor (Javascript Mode)</h4>
			  <h6 class="box-subtitle">You can find the <a href="https://github.com/ajaxorg/ace-builds" target="_blank">offical website </a></h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<pre class="ace-editor" id="editorJS" data-plugin="ace" data-mode="javascript" style="width: 100%;">
	/**
	 * In fact, you're looking at ACE right now. Go ahead and play with it!
	 *
	 * We are currently showing off the JavaScript mode. ACE has support for 45
	 * language modes and 24 color themes!
	 */
	function add(x, y) {
		var resultString = "Hello, ACE! The result of your math is: ";
		var result = x + y;
		return resultString + result;
	}
	var addResult = add(3, 2);
	console.log(addResult);
				</pre>        	
			  </div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- Example Html Mode And Emmet Mode -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Ace Editor (Html Mode And Emmet)</h4>
			  <h6 class="box-subtitle">You can find the <a href="https://github.com/ajaxorg/ace-builds" target="_blank">offical website </a></h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<pre class="ace-editor" id="editorHTML" data-plugin="ace" data-mode="html"
				  style="width: 100%;">&lt;!--
	* We are currently showing off the Html mode. ACE has support for 45
	* language modes and 24 color themes!
	 -->
	&lt;!DOCTYPE html>
	&lt;html lang="en">
	&lt;head>
	&lt;title>ACE in Action&lt;/title>
	&lt;style>
		#editor {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}
	&lt;/style>
	&lt;/head>
	&lt;body>
	&lt;div id="editor">function foo(items) {
		var x = "All this is syntax highlighted";
		return x;
	}&lt;/div>
	&lt;script src="/ace-builds/src-noconflict/ace.js" charset="utf-8">&lt;/script>
	&lt;script>
		var editor = ace.edit("editor");
		editor.setTheme("ace/theme/monokai");
		editor.getSession().setMode("ace/mode/javascript");
	&lt;/script>
	&lt;/body>
	&lt;/html>
				</pre>        	
			  </div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- Example Css Mode -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Ace Editor (Css Editor)</h4>
			  <h6 class="box-subtitle">You can find the <a href="https://github.com/ajaxorg/ace-builds" target="_blank">offical website </a></h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<pre class="ace-editor" id="editorCSS" data-plugin="ace" data-mode="text/css" style="width: 100%;">

		/* Some example CSS */

		@import url("something.css");

		body {
		margin: 0;
		padding: 3em 6em;
		font-family: tahoma, arial, sans-serif;
		color: #000;
		}

		#navigation a {
		font-weight: bold;
		text-decoration: none !important;
		}

		h1 {
		font-size: 2.5em;
		}

		h2 {
		font-size: 1.7em;
		}

		h1:before, h2:before {
		content: "::";
		}

		code {
		font-family: courier, monospace;
		font-size: 80%;
		color: #418A8A;
		}
				</pre>        	
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