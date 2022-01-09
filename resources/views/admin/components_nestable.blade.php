@extends('admin.app')
@section('body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Nestable</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Nestable</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
				<!-- Default box -->
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Nestable 1</h4>
					</div>
					<div class="box-body">
						<div class="myadmin-dd dd" id="nestable">
							<ol class="dd-list">
								<li class="dd-item" data-id="1">
									<div class="dd-handle"> Item 1 </div>
								</li>
								<li class="dd-item" data-id="2">
									<div class="dd-handle"> Item 2 </div>
									<ol class="dd-list">
										<li class="dd-item" data-id="3">
											<div class="dd-handle"> Item 3 </div>
										</li>
										<li class="dd-item" data-id="4">
											<div class="dd-handle"> Item 4 </div>
										</li>
										<li class="dd-item" data-id="5">
											<div class="dd-handle"> Item 5 </div>
											<ol class="dd-list">
												<li class="dd-item" data-id="6">
													<div class="dd-handle"> Item 6 </div>
												</li>
												<li class="dd-item" data-id="7">
													<div class="dd-handle"> Item 7 </div>
												</li>
												<li class="dd-item" data-id="8">
													<div class="dd-handle"> Item 8 </div>
												</li>
											</ol>
										</li>
										<li class="dd-item" data-id="9">
											<div class="dd-handle"> Item 9 </div>
										</li>
										<li class="dd-item" data-id="10">
											<div class="dd-handle"> Item 10 </div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
				</div>
				</div>			
				<div class="col-12">
				<!-- Default box -->
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Nestable 2</h4>
					</div>
					<div class="box-body">
						<div class="myadmin-dd-empty dd" id="nestable2">
							<ol class="dd-list">
								<li class="dd-item dd3-item" data-id="13">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 13 </div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 14 </div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 16 </div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 17 </div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 18 </div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 19 </div>
								</li>
								<li class="dd-item dd3-item" data-id="15">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content"> Item 15 </div>
									<ol class="dd-list">
										<li class="dd-item dd3-item" data-id="16">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content"> Item 16 </div>
										</li>
										<li class="dd-item dd3-item" data-id="17">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content"> Item 17 </div>
										</li>
										<li class="dd-item dd3-item" data-id="18">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content"> Item 18 </div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
				<!-- /.box -->
				</div>

				<div class="col-12">
				<!-- Default box -->
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Nestable 3</h4>
					</div>
					<div class="box-body">
						<div class="dd myadmin-dd" id="nestable-menu">
							<ol class="dd-list">
								<li class="dd-item" data-id="13">
									<div class="dd-handle">Item 13</div>
								</li>
								<li class="dd-item" data-id="13">
									<div class="dd-handle">Item 13</div>
								</li>
								<li class="dd-item" data-id="14">
									<div class="dd-handle">Item 14</div>
								</li>
								<li class="dd-item" data-id="15">
									<div class="dd-handle">Item 15</div>
									<ol class="dd-list">
										<li class="dd-item" data-id="16">
											<div class="dd-handle">Item 16</div>
										</li>
										<li class="dd-item" data-id="17">
											<div class="dd-handle">Item 17</div>
										</li>
										<li class="dd-item" data-id="18">
											<div class="dd-handle">Item 18</div>
										</li>
										<li class="dd-item" data-id="16">
											<div class="dd-handle">Item 19</div>
										</li>
										<li class="dd-item" data-id="17">
											<div class="dd-handle">Item 20</div>
										</li>
										<li class="dd-item" data-id="18">
											<div class="dd-handle">Item 21</div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
				<!-- /.box -->
			  	</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection