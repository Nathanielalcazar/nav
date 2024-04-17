@extends('temp.nav')
@section('title','LOGIN')


@section('content')
  
<body>
  <center>
    <div class="container d-flex justify-content-center align-items-center"
    style="min-height: 100vh">
        <form class="border shadow p-3 rounded"
        method="post" 
        style="width: 450px"
        font color:white;>
        <h1 class="text-center p-3">Login</h1>
        <div class="" >
       </div>
  
      <div class="form-group">
        <label for="email" >Email</label>
        <input type="text" class="form-control" placeholder="Enter Email"
        name="email" value="">
     </div>
     <div class="form-group">
      <label for="password" >Password</label>
      <input type="password" class="form-control" placeholder="Enter Password"
      name="password" value="">
           <br>
     

       <button type="submit" class="btn btn-primary">Login</button>
       <br>
       <a href="registration">New User !! Register Here.</a>
     </form>
     </div>

     </center>
    </body>
    </section>



<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="feature-item">
          <img src="feature1.jpg" alt="Feature 1">
          <h3>Feature 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-item">
          <img src="feature2.jpg" alt="Feature 2">
          <h3>Feature 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-item">
          <img src="feature3.jpg" alt="Feature 3">
          <h3>Feature 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="games-showcase">
  <div class="container">
    <h2>Games Showcase</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="game-item">
          <img src="game1.jpg" alt="Game 1">
          <h3>Game 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="game-item">
          <img src="game2.jpg" alt="Game 2">
          <h3>Game 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="game-item">
          <img src="game3.jpg" alt="Game 3">
          <h3>Game 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="testimonials">
  <div class="container">
    <h2>Testimonials</h2>
    <div class="testimonial">
      <img src="avatar1.jpg" alt="Avatar 1">
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      <p class="author">- John Doe</p>
    </div>
    <div class="testimonial">
      <img src="avatar2.jpg" alt="Avatar 2">
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      <p class="author">- Jane Smith</p>
    </div>
  </div>
</section>


<section class="blog">
  <div class="container">
    <h2>Latest Blog Posts</h2>
    <div class="blog-post">
      <img src="post1.jpg" alt="Blog Post 1">
      <h3>Post Title 1</h3>
      <p class="post-date">Published on March 12, 2024</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
    <div class="blog-post">
      <img src="post2.jpg" alt="Blog Post 2">
      <h3>Post Title 2</h3>
      <p class="post-date">Published on March 10, 2024</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
</section>



<section class="newsletter">
  <div class="container">
    <h2>Subscribe to Our Newsletter</h2>
    <p>Stay updated with the latest news, game releases, and special offers!</p>
    <form class="newsletter-form">
      <input type="email" placeholder="Enter your email address" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>
</section>

@endsection