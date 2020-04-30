<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Add Video | Barq</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bower_components/admin-lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">0 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 0 new messages
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 0 friend requests
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 0 new reports
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="bower_components/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Barq</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ahmad Sha'lan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Main Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add and list videos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Main Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Main Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Add and lidt videos</h5>
              </div>
              <div class="card-body">
                @if($videos->count())
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Stored videos</h3>

                                <div class="card-tools">
                                
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>video url</th>
                                    <th>image url</th>
                                    <th>notifications</th>
                                    <th>keyword</th>
                                    <th>type</th>
                                    <th>created_by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($videos as $video)
                                    <tr>
                                    <td>{{$video->id}}</td>
                                    <td>{{asset($video->video_url)}}</td>
                                    <td>{{asset($video->image_url)}}</td>
                                    <td>
                                        @if($video->is_send_notification)
                                            <span class="badge bg-success">yes</span>
                                        @else
                                            <span class="badge bg-danger">no</span>
                                        @endif
                                    </td>
                                    <td>{{$video->keyword}}</td>
                                    <td>
                                        @if($video->type == 'free')
                                            <span class="badge bg-success">free</span>
                                        @else
                                            <span class="badge bg-primary">paid</span>
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($created_by_options as $admin)
                                            @if($admin['value'] == $video->created_by)
                                                {{$admin['option']}}
                                                @break
                                            @endif
                                        @endforeach
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                @else
                    <h6 class="card-title">There is no saved records..</h6>
                    <br>
                @endif
                
                <a href="#" class="btn btn-primary add-new-video">
                    <span class="add-hint">Add New Video</span>
                    <span class="cancel-hint">Cancel Add New Video</span>
                </a>

                <div class="add-video mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Video</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="add-video-form" name='addVideo' action={{ route('addVideo') }} method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Video</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="videoFile" accept="video/*" name="video"> 
                                    <label class="custom-file-label" for="exampleInputFile" id="videoFileLabel">Choose video</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                                </div>
                                @if($errors && $errors->has('video'))
                                    <div class="alert alert-danger">{{ $errors->first('video') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Image</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imageFile" accept="image/*" name="image"> 
                                    <label class="custom-file-label" for="exampleInputFile" id="imageFileLabel">Choose image</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                                </div>
                                @if($errors && $errors->has('image'))
                                    <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is_send_notification" {{old('is_send_notification') != null ? 'checked' : ''}}>
                                <label class="form-check-label" for="exampleCheck1">Send Notification</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keyword</label>
                                <input type="text" class="form-control" name="keyword" id="exampleInputEmail1" placeholder="Enter keyword" value="{{old('keyword')}}">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio1" name="type" value="free" {{(old('type') == 'free' || old('type') == '') ? 'checked' : ''}}>
                                <label for="customRadio1" class="custom-control-label" >Free</label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio2" name="type" value="paid" {{old('type') == 'paid' ? 'checked' : ''}}>
                                <label for="customRadio2" class="custom-control-label">Paid</label>
                                </div>
                                @if($errors && $errors->has('type'))
                                    <div class="alert alert-danger">{{ $errors->first('type') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Created By</label>
                                @foreach($created_by_options as $admin)
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="admin_{{$admin['value']}}" name="created_by" value="{{$admin['value']}}" {{$admin['value'] == old('created_by') ? 'checked' : ''}}>
                                    <label for="admin_{{$admin['value']}}" class="custom-control-label">{{$admin['option']}}</label>
                                </div>
                                @endforeach
                                @if($errors && $errors->has('created_by'))
                                    <div class="alert alert-danger">{{ $errors->first('created_by') }}</div>
                                @endif
                            </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="bower_components/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="bower_components/admin-lte/dist/js/adminlte.min.js"></script>
</body>
<script>
    $(document).ready(function(){
        $(".add-video").hide();
        $(".cancel-hint").toggle();
    });   
    $("#videoFile").on("change", function(e){
        $("#videoFileLabel").text(e.target.files[0].name);
    });
    $("#imageFile").on("change", function(e){
        $("#imageFileLabel").text(e.target.files[0].name);
    });
    $(".add-new-video").on("click", function(){
        $(".add-hint").toggle();
        $(".cancel-hint").toggle();
        $(".add-video").slideToggle();
    });
</script>
</html>
