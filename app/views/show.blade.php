@extends('layouts.master')

@section('content')

<h2>{{{ $paste->title }}}</h2>
<p>Pasted on {{{ $paste->created_at }}}</p>
<div>
	<pre><code class="language-{{{ $paste->syntax }}}">{{{ $paste->content }}}</code></pre>
</div>

@stop

@section('sidebar')

  @include('partials.gohome')

  @include('partials.sidebar')

@stop
