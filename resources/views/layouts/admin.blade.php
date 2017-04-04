
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <title>Administration StopGaspi</title>

  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">StopGaspi | Administration</a>
        </div>
        @if (auth()->check())
          @if (auth()->user()->isAdmin())
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                    <li><a href="/admin/user">Utilisateurs</a></li>
                    <li><a href="/admin/video">Vidéos</a></li>
                    <li><a href="/admin/file">Fiches Conseils</a></li>
                    <li><a href="/admin/page">Pages du site</a></li>
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

    @yield('scripts')
    <script src='/js/app.js'></script>

  </body>
</html>
