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
                      <a href="mailbox_compose.html" class="btn btn-rounded btn-success btn-block">Compose</a>
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
              <div class="box-body">
                <div class="mailbox-controls with-border clearfix mt-15">                
                  <div class="float-left">
                    <button type="button" class="btn btn-outline btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i></button>
                  </div>
                  <div class="float-right">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                      <i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-outline btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                      <i class="fa fa-reply"></i></button>
                    <button type="button" class="btn btn-outline btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                      <i class="fa fa-share"></i></button>
                  </div>
                  </div>
                  <!-- /.btn-group -->
  
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-info">
                  <h3>Your message title goes here</h3>
                </div>
                <div class="mailbox-read-info bb-0 clearfix">
                  <div class="float-left mr-5"><a href="#"><img src="{{ asset('adminassets')}}/images/1.jpg" alt="user" width="40" class="rounded-circle"></a></div>
                  <h5 class="no-margin"> Jacob<br>
                       <small>From: Jacob@domain.com</small>
                    <span class="mailbox-read-time pull-right">22 JUL. 2018 08:03 PM</span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-read-message">
                  <p>Dear User,</p>
  
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
  
                  <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar.</p>
  
                  <p>Thanks,<br>Jane</p>
                </div>
                <!-- /.mailbox-read-message -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <h5><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h5>
                <ul class="mailbox-attachments clearfix">
                  <li>
                    <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Mag.pdf</a>
                          <span class="mailbox-attachment-size">
                            5,215 KB
                            <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                          </span>
                    </div>
                  </li>
                  <li>
                    <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Documents.docx</a>
                          <span class="mailbox-attachment-size">
                            2,145 KB
                            <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                          </span>
                    </div>
                  </li>
                  <li>
                    <span class="mailbox-attachment-icon has-img"><img src="{{ asset('adminassets')}}/images/photo1.png" alt="Attachment"></span>
  
                    <div class="mailbox-attachment-info">
                      <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Image.png</a>
                          <span class="mailbox-attachment-size">
                            2.67 MB
                            <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                          </span>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-rounded btn-success"><i class="fa fa-reply"></i> Reply</button>
                  <button type="button" class="btn btn-rounded btn-info"><i class="fa fa-share"></i> Forward</button>
                </div>
                <button type="button" class="btn btn-rounded btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                <button type="button" class="btn btn-rounded btn-warning"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /. box -->
  
      </section>
      <!-- /.right content -->
    </div>
    <!-- /.content-wrapper -->

@endsection