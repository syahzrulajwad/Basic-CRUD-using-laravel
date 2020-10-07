@extends('layouts.app')
@section('content')
<div class="jumbotron text-left">
  <h1>Create Posts</h1>
  {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data' ]) !!}
  <div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
  </div>
  <div class="form-group">
    {{Form::file('cover_image')}}
  </div>
  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {{-- <a href="/home" class="btn btn-secondary">Go Back</a> --}}
  {!! Form::close() !!}

  @endsection