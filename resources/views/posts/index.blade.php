@extends('layout.app')

@section('content')
  <h1 class="text-center">Posts Index</h1>
  <hr>
  <div class="container">
  @forelse($posts as $post)
    <div class="card text-white bg-primary mb-3">
      <div class="card-header"><a href="posts/{{$post->id}}">{{$post->subject}}</a></div>
      <div class="card-body">
        <h4 class="card-title">Created at: {{$post->created_at}}</h4>
        <p class="card-text">{!! $post->body !!}</p>
      </div>
      <div class="card-footer text-muted">
        <span class="float-right"><a href="posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></span>
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

