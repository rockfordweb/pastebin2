@extends('layouts.master')

@section('content')

  <h2>Create a paste!</h2>
  <div>
  {{ Form::open(array('url' => '/new','class' => 'pasteform')) }}
    <div>
      <label>Title</label><br>
      {{ Form::text('title') }}
    </div>
    <div>
      <label>Content</label><br>
      {{ Form::textarea('content') }}
    </div>
    <div>
      <label>Syntax</label><br>
      {{ Form::select('syntax', array('php' => 'PHP', 'javascript' => 'JavaScript', 'css' => 'CSS')) }}
    </div>

    <br><br>

    {{ Form::hidden('id')}}
    <div>{{ Form::submit('Save') }}</div>
  {{ Form::close() }}
  </div>

@stop

@section('sidebar')

  @include('partials.sidebar')

@stop
