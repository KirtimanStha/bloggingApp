<div class="container mt-5 pt-5">
  <h1>My blog Posts</h1>
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner row w-100 mx-auto">
      @foreach ($blogs as $key => $blog)
      <div class="carousel-item col-md-4 {{$key == 0 ? 'active' : '' }}">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{asset('storage/'. $blog->image)}}" alt="Blog">
          <div class="card-body">
            <h4 class="card-title">{{$blog->title}}</h4>
            <p class="card-text">{{$blog->description}}</p>
          </div>
        </div>
      </div>
      @endforeach
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