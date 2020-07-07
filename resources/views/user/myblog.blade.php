@extends('user.app')
@section('content')
<div class="container mt-5 pt-5">
  <h1>My blog Posts</h1>
  <br>
    
  @foreach($blogs->chunk(3) as $items)
  <div class="container mb-5">
    <div class="row">
      @foreach($items as $item)
      <div class="col-md-4 portfolio-item">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{asset('storage/'. $item->image)}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">{{$item->title}}</h4>
                <p class="card-text">{{$item->description}}</p>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
  @endforeach
</div>
@endsection






<!-- <img src="{{URL::asset('/user/2.jpg')}}" height="600" width="100%" class="card-img img-reponsive" style="opacity: 0.4">
  <div class="display-4 card-img-overlay text-center justify-content-center d-flex flex-column"><b>Read According to your interests</b></div>
  <div class="container pt-5 mt-5 pb-5"> -->
    <!-- Blog 1 -->
    <!-- <a href="blog1"><h1 class="pt-4 text-dark">Blog 1</h1></a>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p> -->
    <!-- /Blog 1 -->
    <!-- Blog 2 -->
    <!-- <a href=""><h1 class="pt-4 text-dark">Blog 2</h1></a>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p> -->
    <!-- /Blog 2 -->
    <!-- Blog 3 -->
    <!-- <a href=""><h1 class="pt-4 text-dark">Blog 3</h1></a>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p> -->
    <!-- /Blog 3 -->
    <!-- Blog 4 -->
   <!--  <a href=""><h1 class="pt-4 text-dark">Blog 4</h1></a>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p> -->
    <!-- /Blog 4 -->



<!--   </div> -->



