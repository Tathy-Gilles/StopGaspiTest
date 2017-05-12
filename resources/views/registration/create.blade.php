@extends('layouts.master')

@section('content')


@if (count($errors) > 0)
    <div class="container-fluid">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  </div>

@endif

  <div class="container-fluid">
    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        <h3 class="dark-grey">&nbsp;&nbsp;S'enregister</h3>
        
<form class="form-horizontal" method='POST' action='/register'>

  {{ csrf_field() }}


       <div class="form-group col-lg-12">
          
          <div class="col-lg-6">
          <label>Siret</label>
          <input class="form-control" id='siret' type='text' name='siret' required>
        </div>

         <div class="col-lg-6">
          <label>Entreprise</label>
          <input class="form-control" id='company' type='text' name='company' required>
        </div>

        </div>


         <div class="form-group col-lg-12">
          
          <div class="col-lg-6">
          <label>Nom</label>
          <input class="form-control" id='lastname' type='text' name='lastname' required>
        </div>

         <div class="col-lg-6">
          <label>Prénom</label>
          <input class="form-control" id='firstname' type='text' name='firstname' required>
        </div>

        </div>

      <div class="form-group col-lg-12">
          
          <div class="col-lg-12">
          <label>Email</label>
          <input class="form-control" id='email' type='text' name='email' required>
        </div>


        </div>


  

         <div class="form-group col-lg-12">
          
          <div class="col-lg-6">
          <label>Password</label>
          <input class="form-control" id='password' type='password' name='password' required>
        </div>

         <div class="col-lg-6">
          <label>Repeat Password</label>
          <input type="password" class="form-control" id='password_confirmation' type='password' name='password_confirmation' required>
        </div>

        </div>

         <div class="form-group col-lg-12">
          
          <div class="col-lg-12">
         
         <button type="submit" class="btn btn-primary">S'enregister</button>
        </div>


        </div>

         

        
    
      
          
      </form>    
        
      </div>
    
      <div class="col-md-6">
        <h3 class="dark-grey">Pourquoi créer un compte ?</h3>

        <h4 class="dark-grey"><i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>&nbsp; Gagnez du temps</h3>
        <p>
         Publiez vos annonces rapidement, avec vos informations pré-remplies chaque fois que vous souhaitez déposer une nouvelle annonce.
        </p>
         <h4 class="dark-grey"><i class="fa fa-bell fa-3x" aria-hidden="true"></i> &nbsp;Soyez les premiers informés</h3>
        <p>
          Créez des alertes Immo ou Emploi et ne manquez jamais l'annonce qui vous intéresse.
        </p>
         <h4 class="dark-grey"><i class="fa fa-bell fa-3x" aria-hidden="true"></i> &nbsp;Visibilité</h3>
        <p>
          Suivez les statistiques de vos annonces (nombre de fois où votre annonce a été vue, nombre de contacts reçus).
        </p>
      
        
        
      </div>
    </div>
  </section>
</div>

@endsection
