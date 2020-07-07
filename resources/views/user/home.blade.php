@extends('user.app')
 @section('content')
 <div class="jumbotron-fluid">
  <img src="{{URL::asset('/user/8.jpg')}}" class="card-img img-fluid img-responsive" style="background-size: cover; width: 100%; height: 650px; opacity: 0.4;">
  <div class="container card-img-overlay d-flex flex-column text-center justify-content-center">
    <h1 class="display-1 pt-md-5"><b>Blogging Page</b></h1>
    <p class="lead" style="font-size: 25px;">Read Blogs on different topics with different views.</p>
  </div>
</div>

@include('user.carousel')
@endsection
<!--  <div class="jumbotron-fluid">
    <div class="container mt-5 pt-5">
      <h1 class="pb-3">Recent Posts</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
          <div class="carousel-item col-md-4 active">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">Blog 1</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">Blog 2</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">Blog 3</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">BLog 4</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container mt-5 pt-5 pb-3">
      <h1 class="pb-3">Mostly Liked</h1>
      <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
          <div class="carousel-item col-md-4 active">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">Blog 1</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">Blog 2</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">Blog 3</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{URL::asset('/user/4.jpg')}}" alt="Blog">
              <div class="card-body">
                <h4 class="card-title">BLog 4</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container pt-5 pb-5">
      <a href="my_blog.html">
        <button class="btn btn-info float-right text-center p-2" style="font-size: 20px;">
          View all Posts  <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
        </button>
      </a>
    </div>
</div> -->
