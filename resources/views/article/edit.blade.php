@extends('layout')

@section('title') Article Edit @stop

@section('content')
<div class="content">
<h1 class="title">Edit Article</h1>

<div class="article-form">
    {!! Form::open(['url' => '/article/store']) !!}
    {!! Form::token() !!}

    @if($article)
        {!! Form::hidden('id', $article->id) !!}
    @endif

    <div class="article-form-column">
        <div class="article-form-label">
            {!! Form::label('title', 'Title') !!}
        </div>
        <div class="article-form-input">
            {!! Form::text('title', ($article) ? $article->title : '') !!}
        </div>
    </div>

    <div class="article-form-column">
        <div class="article-form-label">
            {!! Form::label('summary', 'Summary') !!}
        </div>
        <div class="article-form-input">
            {!! Form::text('summary', ($article) ? $article->summary : '') !!}
        </div>
    </div>

    <div class="article-form-column">
        <div class="article-form-label">
            {!! Form::label('content', 'Content') !!}
        </div>
        <div class="article-form-input">
            {!! Form::textarea('content', ($article) ? $article->content : '') !!}
        </div>
    </div>

    <div class="article-form-column">
        {!! Form::submit('Post Content!') !!}
    </div>

    {!! Form::close() !!}
</div>

</div>
@stop
