@extends('layouts.master')

@section('content')

  <h2>¡Change password!</h2>
  <div>
  {{ Form::open(array('url' => '/users/update','class' => 'passwordform')) }}
    <div>
      <label>Password</label><br>
      {{ Form::password('password') }}
    </div>
    <div>
      <label>Confirm password</label><br>
      {{ Form::password('password_confirm') }}
    </div>
    <div>
      <label>Current password</label><br>
      {{ Form::password('old_password') }}
    </div>
    {{ Form::hidden('id',$user->id)}}

    <br><br>
    <div>{{ Form::submit('Save') }}</div>
  {{ Form::close() }}
  </div>

@stop

@section('sidebar')

  @include('partials.sidebar')

@stop
