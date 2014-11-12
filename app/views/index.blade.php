@extends('layouts.master')

@section('content')

  <h2>Create a paste!</h2>
  <div>
  {{ Form::open(array('url' => '/new')) }}
    <div>
      <label>Title</label><br>
      {{ Form::text('title') }}
    </div>
    <div>
      <label>Content</label><br>
        {{ Form::textarea('content') }}
      </div>
      <div>{{ Form::submit('Create') }}</div>
  {{ Form::close() }}
  </div>

@stop

@section('sidebar')

  @include('partials.sidebar')

@stop
