@extends('layout.app')

@section('content')
  <h1 class="text-center">Create Post</h1>
  <hr>
  {!! Form::open(['action' => 'PostsController@store', 'methode' => 'POST']) !!}
  
  <div class="container">
    <div class="form-group row">
    {{Form::label('subject', 'Subject')}}
    {{Form::text('subject', '', ['class'=>'form-control'])}}
    </div>
    <div class="form-group row">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '', ['class'=>'form-control'])}}
    </div>
    <div class="form-group row">
    {{Form::submit('Create', ['class'=>'btn btn-primary btn-lg'])}}
    </div>
  </div>
  
  {!! Form::close() !!}

@endsection

