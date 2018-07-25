@extends('layouts.app')

@section('content')
<div id="hero">
  <div id="carousel-intro" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Laravel Blog</h5>
          <p>First Slide</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Laravel Blog</h5>
          <p>Second Slide</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Laravel Blog</h5>
          <p>Third Slide</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/4.jpg" alt="Fourth slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Laravel Blog</h5>
          <p>Fourth Slide</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-intro" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-intro" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="Latest" class="my-4">
  <div class="container">
    <h1 class="text-center">Latest In The Blog</h1>
    <div class="row">
      <div class="col">
        <h2 class="text-center">Latest Posts</h2>
        <ul class="list-group list-group-flush">
          @foreach($posts as $post)
            <li class="list-group-item"><a href="/posts/{{$post->id}}">{{$post->subject}}</a> <span class="author float-right">by {{$post->user->name}}</span></li>
          @endforeach
        </ul>
      </div>
      
      <div class="col">
        <h2 class="text-center">Latest Users</h2>
        <div class="media-cont">
          @foreach($users as $user)
            <div class="media">
              <img class="align-self-center rounded-circle auth-img" src="https://www.law.berkeley.edu/wp-content/uploads/2015/04/Blank-profile.png" alt="pic">
              <div class="media-body">
                <h5 class="mt-0">{{$user->name}}</h5>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<div id="testimonial" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Testimonial</h1>
    <p class="lead text-center">A word from our customers.</p>
    
    <blockquote class="blockquote text-left mt-5">
      <p class="mb-0">You made it so simple. My new blog is so much faster and easier to work with than my old blog. I just choose the page, make the change and click save. Thanks, guys!</p>
      <footer class="blockquote-footer">Deku <cite title="Source Title">Developer</cite></footer>
    </blockquote>
    
    <blockquote class="blockquote text-right my-5">
      <p class="mb-0">Wow. I just updated my site and it was SO SIMPLE. I am blown away. You guys truly kick ass. Thanks for being so awesome. High fives!</p>
      <footer class="blockquote-footer">Hisho <cite title="Source Title">Artist</cite></footer>
    </blockquote>

  </div>
</div>

<div id="contact" class="my-5">
<div class="container">
  <div class="row">
    <div class="col">
    <ul>
      <li><a href="#">Get Started</a></li>
      <li><a href="#">Company</a></li>
      <li><a href="#">Blog</a></li>
    </div>
    </ul>
    <div class="col">
    <ul>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Our Team</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">News</a></li>
    </ul>
    </div>
    <div class="col">
    <ul>
      <li><a href="#">Get The App</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Support</a></li>
      </ul>
    </div>
    <form class="col-6 subscribe" action="javascript:void(0)">
      <h4 class="caption">Subscribe for updates</h4>
      <p class="summary">Stay informed on LaravelBlog news, announcements and developer features!</p>
      <input class="email" type="email" placeholder="Enter your email" />
      <button type="submit" class="btn-primary">Submit</button>
    </form>
  </div>
  </div>
</div>
@endsection

