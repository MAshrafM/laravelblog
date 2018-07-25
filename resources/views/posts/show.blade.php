@extends('layouts.app')

@section('content')
<style>
.del-form {
  display: inline-block;
}
</style>
  <h1 class="text-center">{{$post->subject}}</h1>
  <hr>
  <div class="container">
  <div class="card mb-12">
      <div class="card-body">
        <h4 class="card-title">Created at: {{$post->created_at}}</h4>
        <p class="card-text">{!! $post->body !!}</p>
      </div>
      @if(Auth::user()->id == $post->uid)
      <div class="card-footer text-muted">
        <a href="./{{$post->id}}/edit" class="btn btn-info float-right">Edit</a>
        
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'del-form float-right mr-3'] ) !!}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
      </div>
      @endif
    </div>
  </div>
@endsection

