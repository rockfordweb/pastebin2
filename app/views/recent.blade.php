@extends('layouts.master')

@section('content')

  <h2>Recent Pastes</h2>
  <div>
    <ul>
    @foreach ($pastes as $paste)
      <li><a href="/paste/{{{ $paste->id }}}">{{{ $paste->title }}}</a>
    @endforeach
    </ul>
  </div>

@stop

@section('sidebar')

  @include('partials.gohome')

@stop
