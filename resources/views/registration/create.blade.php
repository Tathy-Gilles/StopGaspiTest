@extends('layouts.master')

@section('content')


  <div class="container">


<div class="row well">

<form class="form-horizontal" method='POST' action='/register'>

  {{ csrf_field() }}

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Siret</label>
    <div class="col-sm-4">
      <input class="form-control" id='siret' type='text' name='siret' required>
    </div>
  </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Entreprise</label>
    <div class="col-sm-4">
      <input class="form-control" id='company' type='text' name='company' required>
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Nom</label>
    <div class="col-sm-4">
      <input class="form-control" id='lastname' type='text' name='lastname' required>
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Prénom</label>
    <div class="col-sm-4">
      <input  class="form-control" id='firstname' type='text' name='firstname' required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Mail</label>
    <div class="col-sm-4">
      <input class="form-control" id='email' type='text' name='email' required>
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-4">
      <input class="form-control" id='password' type='password' name='password' required>
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Password Confirmation</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id='password_confirmation' type='password' name='password_confirmation' required>
    </div>
</div>
<br><br>

<div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
      <button type="submit" class="btn btn-default">Register</button>
    </div>

    
  </div>



@endsection
