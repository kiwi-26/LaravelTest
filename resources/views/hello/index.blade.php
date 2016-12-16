@extends('layout')

@section('title') Hello Laravel! @stop

@section('content')
<div class="content">
<h1 class="title">Attack Logs</h1>
<p>
@foreach($logs as $log)
    {{ $log }}<br />
@endforeach
</p>
</div>
@stop

