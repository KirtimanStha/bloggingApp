@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">My Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">My Profile </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row mt-4">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img src="{{URL::asset('/admin/image.jpg')}}" class="img-fluid img-responsive img-circle">
      </div>
      <div class="col-md-4"></div>
    </div>
    <h1 class="text-center p-4 display-4" style="font-family: times new romwn;">Admin</h1>
  </div>
</div>
<!-- /.Main Content -->
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
@endsection