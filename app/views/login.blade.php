@extends('layouts.master')

@section('content')

  <h2>Login</h2>
  <div>
  {{ Form::open(array('url' => '/login','class' => 'loginform')) }}
    <div>
      <label>Email Address</label><br>
      {{ Form::email('email', Input::old('email'), array('autocomplete' => 'off')) }}
    </div>
    <div>
      <label>Password</label><br>
      {{ Form::password('password') }}
    </div>
    <div>
      <label>Remember Me?</label><br>
      {{ Form::checkbox('remember', (1 or true), false) }}
    </div>

    <div>{{ Form::submit('Login') }}</div>
  {{ Form::close() }}
  </div>

@stop

@section('sidebar')
@stop
