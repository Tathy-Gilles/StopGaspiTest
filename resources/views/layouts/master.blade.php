<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <script src="js/app.js"></script>
     <link href="css/font-awesome.css" rel="stylesheet" media="all" type="text/css">
  </head>
  <body>

  <header>
    <div class="green_band" ></div>
    <div class="container" >
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8" >
          <img src='images/logo.png' class='logo'/>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4" >
          <div class="form">
            <div class='title flex'>
              <div><img src='images/icons/login.png' /></div><div>connectez vous &aacute; votre <br />espace membre</div>
            </div>
            <div class='flex'>
              <div>
                <label for='id'>Adresse e-mail</label><br />
                <input id='mail' type='text'/>
              </div>
              <div>
                <label for='pass'>Mot de Passe</label><br />
                <input id='pass' type='password'/>
                <br />
                <button>Connexion</button><a href="#"></i></a>
              </div>


            </div>
            <div class="text-center"><p>vous ne possedez pas de compte ?</p></div>

            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
          </div>
        </div>
      </div>



      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
  

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    <li><a href="/">Accueil</a></li>
     <li><a href="/conseils">Nos Conseils</a></li>
    <li><a href="/simulateur">Simulateur</a></li>
    <li><a href="/contact">Contact</a></li>
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connexion<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Se connecter</a></li>
            <li><a href="/register">S'inscrire</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    </div>
  </header>

  <section class="main" >
    @yield('content')
  </section>

  <footer>
    <div class="container" >
      <div class="row" >
        <div class="col-xs-12 col-sm-4 col-md-4">
          Contact <br />
          Plan Du Site <br />
          Mentions L&eacute;gales <br />
          FAQ
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4" >
          Retrouvez nous sur : <br />
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          Abonnez vous &aacute; notre flux RSS<br />pour avoir acc&egrave;s &aacute; nos conseil<br />en permanence
        </div>
      </div>
    </div>
  </footer>


  </body>
</html>
