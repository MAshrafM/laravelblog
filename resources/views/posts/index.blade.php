@extends('layouts.app')

@section('content')
  <h1 class="text-center">Posts Index</h1>
  <hr>
  <div class="container">
  @forelse($posts as $post)
    <div class="card text-white bg-primary mb-3">
      <div class="card-header"><a href="posts/{{$post->id}}">{{$post->subject}}</a></div>
      <img class="card-img-top" src="storage/post_thumb/{{$post->thumb}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Created at: {{$post->created_at->format('Y.m.d')}} By: {{$post->user->name}}</h5>
        <p class="card-text">{!! $post->body !!}</p>
      </div>
      <div class="card-footer text-muted">
        @auth
          @if(Auth::user()->id == $post->uid)
            <span class="float-right"><a href="posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></span>
          @endif
        @endauth
        <span class="float-right"><a href="posts/{{$post->id}}" class="btn btn-info mr-1">More</a></span>
      </div>
    </div>
  @empty
    <div class="card text-white bg-primary mb-12">
    <div class="card-header"> No Posts Yet!</div>
    </dic>
  @endforelse
    {{$posts->links()}}
    </div>
@endsection

