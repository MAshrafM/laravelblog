@extends('layouts.app')

@section('content')
  <h1 class="text-center">Edit Post</h1>
  <hr>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'methode' => 'POST']) !!}
  
  <div class="container">
    <div class="form-group">
    {{Form::label('subject', 'Subject')}}
    {{Form::text('subject', $post->subject, ['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Update', ['class'=>'btn btn-primary btn-lg'])}}
    </div>
  </div>
  
  {!! Form::close() !!}

@endsection

