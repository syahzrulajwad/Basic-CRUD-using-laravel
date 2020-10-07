@extends('layouts.app')
@section('content')
<div class="jumbotron text-left">

    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <div>
        {!!$post->body!!}
    </div>
    <small>Written on {{$post->created_at}}by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
    @if (Auth::user()->id==$post->user_id)

    {{-- <a href="/posts" class="btn btn-primary">Go Back</a>
<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a> --}}
    {{-- <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a> --}}
    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

</div>
@endif
@endif
@endsection