@extends('layout')

@section('title') Article Index @stop

@section('content')
<div class="content">
<h1 class="title">{{ $article->title }}</h1>
    <p>{{ $article->summary }}</p>
    <hr>
    <p>{{ $article->content }}</p>
</div>
@stop
