@extends('layout.app')

@section('content')
  <h1 class="text-center">Posts Index</h1>
  <hr>
  @forelse($posts as $post)
    <div class="card text-white bg-primary mb-12">
      <div class="card-header">{{$post->subject}}</div>
      <div class="card-body">
        <h4 class="card-title">Created at: {{$post->created_at}}</h4>
        <p class="card-text">{{$post->body}}</p>
      </div>
    </div>
  @empty
    <h2 class="text-center"> No Posts Yet!</h2>
  @endforelse
@endsection

