@extends('layouts.app')
@section('content')
{{-- <div class="jumbotron text-left"> --}}

<h1>Posts</h1>
@if (count($posts)>0)
@foreach ($posts as $post)
<div class="card">
    <div class="row">
        <div class="col-md-4 col-sm-4">
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-4 col-sm-8">
            <h4 style="text-align: left"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
            <small style="text-align: left">Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
    </img>
</div>
@endforeach

@else
<p>No post found</p>
@endif
</div>
@endsection