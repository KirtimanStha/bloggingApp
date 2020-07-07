<div class="jumbotron-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a href="#" class="navbar-brand text-info p-2" style="font-size: 30px; font-family: Geneva;"><b>sBlog</b></a>
      <button class="navbar-toggler text-black" style="background-color: " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">MENU
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav" style="font-size: 20px;">
          <li class="nav-item"><a class="nav-link text-black pr-5 ml-3 active" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link text-black pr-5 ml-3" href="about">About</a></li>
          <li class="nav-item"><a class="nav-link text-black pr-5 ml-3" href="myblog">My Blogs</a></li>
          <li class="nav-item"><a class="nav-link text-black pr-5 ml-3" href="contact">Contacts</a></li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pr-5 ml-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <i class="fas fa-cog"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('admin.login')}}">Sign in</a>
                </div>
            </li>
        </ul>
     </div>
    </nav>
  </div>
      