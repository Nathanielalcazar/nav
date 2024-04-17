@extends('temp.nav')
@section('title','HOME')



@section('content')
<section class="aa">
        <h2>Explore Limitless Worlds</h2>
        <p>Embark on epic journeys across vast landscapes, from enchanted realms to post-apocalyptic wastelands.</p>
        <a href="games" class="bb">Get Started</a>
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


<section class="about">
  <div class="container">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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