@extends('layouts.master')

@section('content')

  <h2>Register</h2>
  <div>
  {{ Form::open(array('url' => '/register','class' => 'registerform')) }}
    <div>
      <label>Email Address</label><br>
      {{ Form::email('email') }}
    </div>
    <div>
      <label>Password</label><br>
      {{ Form::password('password') }}
    </div>

    <div>{{ Form::submit('Register') }}</div>
  {{ Form::close() }}
  </div>

@stop

@section('sidebar')
@stop
