@extends('user.app')
@section('content')
<div class="card">
	<img src="{{URL::asset('/user/9.jpg')}}" height="650" width="100%" class="card-img img-responnsive" style="opacity: 0.3;">
	<div class="card-img-overlay d-flex flex-column container justify-content-center text-center">
	  <h1 class="display-1"><b>About</b></h1>
	</div>
</div>
  <br>
<div class="container pt-5 mt-5">
  <h1>About Me</h1>
  <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe odio a eligendi impedit incidunt ad nemo? Dolores rerum reiciendis perspiciatis quas, laudantium laborum, ad suscipit repudiandae atque fugit in nihil!</p>
  <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium numquam saepe nisi facilis ullam quibusdam fuga dignissimos explicabo modi? Voluptatibus, unde sunt voluptas qui ea libero laborum vitae sit consequatur.</p>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, voluptates fuga ratione, mollitia blanditiis distinctio perspiciatis debitis unde ullam magnam labore non doloribus tenetur? Similique neque pariatur quod voluptatum iure?</p>
</div>
@endsection