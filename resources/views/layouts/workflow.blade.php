
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ Session::token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/fullcalendar/fullcalendar.min.css">

    <title>Workflow StopGaspi</title>

  <body>

    <nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">StopGaspi | Workflow</a>
        </div>
        @if (auth()->check())
          @if (auth()->user()->isAdviser())
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/logout">Deconnexion</a></li>
              </ul>
            </div>
          @endif
        @endif
      </div>
    </nav>

    <div class="container-fluid">

        @yield('content')

    </div><!-- /.container -->

    <script src='/js/app.js'></script>
    @yield('scripts')

  </body>
</html>
