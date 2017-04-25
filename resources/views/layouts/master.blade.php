<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/app.css" rel="stylesheet" type="text/css" />
     <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{ URL::asset('menu.js') }}"></script>
    <script src="js/app.js"></script>

  </head>
  <body>


  <header style="background-image:url(http://www.hbc333.com/data/out/234/47571339-wallpaper-blur.jpeg); background-size: 100% 100%; ";>
    <div class="green_band" ></div>
    <div class="container" >
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6" >
          <img src='images/logo.png' class='logo'/>
        </div>



 <div class="col-sm-12 col-md-6 col-lg-6" >
        <div class="row text-center">
          <i class="fa fa-facebook-square fa-5x" aria-hidden="true" style="color:#777"></i>
          <i class="fa fa-twitter-square fa-5x" aria-hidden="true" style="color:#777"></i>
          <i class="fa fa-instagram fa-5x" aria-hidden="true" style="color:#777"></i>
          <i class="fa fa-pinterest-square fa-5x" aria-hidden="true" style="color:#777"></i>
        </div>
  </div>
  </div>  
    </div>

<div class="container-fluid">
      <div class="col-md-12">
         <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="/">Accueil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a class="navbar-brand" href="/conseils">Nos Conseils</a></li>
                  <li><a class="navbar-brand" href="/simulateur">Simulateur</a></li>
                  <li><a class="navbar-brand" href="/contact">Contact</a></li>                 
               </ul>


             



               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="http://www.jquery2dotnet.com" class="dropdown-toggle navbar-brand" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Se connecter<b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputEmail2">Pseudo</label>
                                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Nom d'utilisateur" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mots de passe" required>
                                    </div>
                                   
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Connexion</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <p>Créez votre Compte</p>
                           <button type="submit" class="btn btn-primary btn-block"> <a href="/register" style="color:white; text-decoration: none;">Inscription</a></button>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>
      </div>
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
        <div class="col-xs-12 col-sm-4 col-md-4">
        Retrouvez nous sur<br />
         <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
         <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
         <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
         <i class="fa fa-pinterest-square fa-3x" aria-hidden="true"></i>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          Abonnez vous &aacute; notre flux RSS<br />pour avoir acc&egrave;s &aacute; nos conseil<br />en permanence
        </div>
      </div>
    </div>
  </footer>

  </body>
</html>
