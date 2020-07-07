@extends('user.app')
@section('content')
<div class="card">
	<img src="{{URL::asset('/user/9.jpg')}}" height="650" width="100%" class="card-img img-responnsive" style="opacity: 0.3;">
	<div class="card-img-overlay d-flex flex-column container justify-content-center text-center">
	  <h1 class="display-1"><b>Contact Us</b></h1>          
	  <p class="lead" style="font-size: 40px;">Any Queries??</p>
	</div>
	</div>
	<div class="container pt-5 mt-5">
	<p class="lead">Drop down your queries below we will try to resolve them soon.</p>
	<div class="container p-4" style="font-family: times new roman;">
	<form role="form" method="POST" action="message" >

		@csrf
	  <input type="text" name="name" class="form-control" placeholder="Name" style="border: 0px; font-size: 25px;"><hr>
	  <input type="text" name="email" class="form-control" placeholder="Email" style="border: 0px; font-size: 25px;"><hr>
	  <input type="text" name="phone"  class="form-control" placeholder="Phone" style="border: 0px; font-size: 25px;"><hr>
	  <textarea name="message" placeholder="Message" class="form-control flex-column" cols="80" rows="4" style="border: 0px; font-size: 25px;"></textarea><hr>
	  <button type="submit" class="btn btn-info btn-large p-2 mt-4" style="font-size: 25px;">Send</button>
	  </form>
	</div>
</div>
@endsection