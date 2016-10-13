@extends('layout')

@section('title') Article Delete? @stop

@section('content')
<div class="content">
<h1 class="title">Are you sure?</h1>
    <p>Delete {{ $article->title }}?</p>
    <div class="article-form">
        {!! Form::open(['url' => '/article/destroy']) !!}
        {!! Form::token() !!}

        @if($article)
            {!! Form::hidden('id', $article->id) !!}
        @endif

        <div class="article-form-column">
            {!! Form::submit('Delete Content!') !!}
        </div>
    </div>
</div>
@stop
