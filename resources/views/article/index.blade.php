@extends('layout')

@section('title') Article Index @stop

@section('content')
<div class="content">
<h1 class="title">Article List</h1>
@foreach($articles as $article)
    <h2><a href="show/{{ $article->id }}">{{ $article->title }}</a></h2>
    <p>{{ $article->summary }}</p>
    <p><a href="show/{{ $article->id }}">Show</a> <a href="edit/{{ $article->id }}">Edit</a> <a href="delete/{{ $article->id }}">Delete</a></p>

@endforeach
<a href="create/">New Post</a>
</div>
@stop

