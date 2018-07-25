@extends('layouts.app')

@section('content')
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
@endsection

