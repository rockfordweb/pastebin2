<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pastebin Clones!</title>

    {{HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}
    {{HTML::style('/bower_components/prism/themes/prism-okaidia.css')}}
    {{HTML::style('/css/style.css')}}
  </head>
  <body>
    @if (Session::has('message') || Session::has('error'))
      <div class="alert alert-dismissable alert-success">
        <span>{{ Session::get('message') }}{{ Session::get('error') }}</span>
        <button data-dismiss="alert"></button>
      </div>
    @endif
    <div class="alert-container">
    </div>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Paste Something</a>
          <ul class="nav navbar-nav">
            <li><a href="/recent">Recent Pastes</a></li>
            @if ($loggedIn)
              <li><a href="/logout">Logout</a></li>
              <li><a href="/users/{{{ $user->id }}}">{{{ $user->email }}}</a></li>
            @else
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
            @endif
          </ul>
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">

      <div class="main row">
        <div class="content col-xs-8">
          @yield('content')
        </div>
        <div class="sidebar col-xs-4">
          @yield('sidebar')
        </div>
      </div>
    </div>

    {{HTML::script('/script.min.js')}}
  </body>
</html>
