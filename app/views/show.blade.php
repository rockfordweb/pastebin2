@extends('layouts.master')

@section('content')

<h2>{{{ $paste->title }}}</h2>
<p>Pasted on {{{ $paste->created_at }}}</p>
<div>
	<pre>{{{ $paste->content }}}</pre>
</div>

@stop

@section('sidebar')

  @include('partials.gohome')

  @include('partials.sidebar')

@stop
