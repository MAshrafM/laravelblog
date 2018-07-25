@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="card-deck">
    @forelse($posts as $post) 
      <div class="card border-light my-3" style="max-height: 600px; ">
        <div class="card-header">{{$post->subject}}</div>
        <div class="card-body" style="overflow: hidden;">
          <h5 class="card-title">Created at: {{$post->created_at->format('Y.m.d')}} By: {{$post->user->name}}</h5>
          <p class="card-text">{!! $post->body !!}</p>
        </div>
        <div class="card-footer text-muted">
          <span class="float-right"><a href="posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></span>
          <span class="float-right"><a href="posts/{{$post->id}}" class="btn btn-info mr-1">More</a></span>
        </div>
      </div>
    @empty
      <div class="card my-3">
        <div class="card-header">Posts</div>
        <div class="card-body">No Posts for this user yet. Start your first post now. <a href=" ">Create Post</a>.</div>
      </div>
    @endforelse
    </div>
</div>
@endsection
