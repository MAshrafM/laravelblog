@extends('layout.app')

@section('content')
  <h1 class="text-center">{{$post->subject}}</h1>
  <hr>
  <div class="container">
  <div class="card mb-12">
      <div class="card-body">
        <h4 class="card-title">Created at: {{$post->created_at}}</h4>
        <p class="card-text">{!! $post->body !!}</p>
      </div>
      <div class="card-footer text-muted">
        <span class="float-right"><a href="./{{$post->id}}/edit" class="btn btn-info">Edit</a>
        <a href="posts/{{$post->id}}" class="btn btn-danger">Delete</a>
        </span>
      </div>
    </div>
  </div>
@endsection

