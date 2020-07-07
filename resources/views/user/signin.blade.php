@extends('user.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="p-3 mb-5 bg-white shadow" style="margin-top: 150px;">
        <div class="m-5">
          <h1 class="text-info text-center pt-5" style="font-family: Geneva;"><b>sBlog</b></h1>
          <input type="text" placeholder="Username" class="form-control mb-4">
          <input type="password" placeholder="Password" class="form-control mb-4">
          <a href="/">
            <button class="btn btn-large btn-info">
              <i class="fas fa-user"> Login</i>
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-4"></div>
  </div>      
</div>
@endsection