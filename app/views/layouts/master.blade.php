<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pastebin Clones!</title>

    {{HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}
    {{HTML::style('/bower_components/prism/themes/prism-funky.css')}}
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Paste Something</a>
          <ul class="nav navbar-nav">
            <li><a href="/recent">Recent Pastes</a></li>
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

    {{HTML::script('/bower_components/jquery/dist/jquery.min.js')}}
    {{HTML::script('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}
    {{HTML::script('/bower_components/prism/prism.js')}}
    {{HTML::script('/js/scripts.js')}}
  </body>
</html>
