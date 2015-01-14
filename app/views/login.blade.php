@extends('layouts.master')

@section('content')

  <h2>Login</h2>
  <div>
  {{ Form::open(array('url' => '/login','class' => 'loginform')) }}
    <div>
      <label>Email Address</label><br>
      {{ Form::email('email') }}
    </div>
    <div>
      <label>Password</label><br>
      {{ Form::password('password') }}
    </div>

    <div>{{ Form::submit('Login') }}</div>
  {{ Form::close() }}
  </div>

@stop

@section('sidebar')
@stop
