<!DOCTYPE html>
<html lang="en">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logologo.png')}}">
    <!-- <link rel="stylesheet" href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    


    <head>
        <title>Gaming App - @yield('title')</title>
    </head>

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->


<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="images/logologo.png" style="width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="games">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feature">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> --}}
          <a class="dropdown-item" href="login">Login</a>
          <a class="dropdown-item" href="signup">Sign Up</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-3">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="home">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="games">Games</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="feature">Feature</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Follow Us</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-facebook">Facebook</i></a></li>
          <li><a href="#"><i class="fab fa-twitter">Twitter</i></a></li>
          <li><a href="#"><i class="fab fa-instagram">Instagram</i></a></li>
          <li><a href="#"><i class="fab fa-youtube">Youtube</i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>



<!-- Bootstrap JS (Optional) - Needed for dropdown functionality -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
