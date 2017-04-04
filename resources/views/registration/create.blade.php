@extends('layouts.master')

@section('content')
  

  
    
    <form method='POST' action='/register'>

  {{ csrf_field() }}

<div class="container">
  <div class="form-group row">
  <label for="siret" class="col-2 col-form-label">Siret</label>
    <div class="col-10">
      <input class="form-control" id='siret' type='text' name='siret' required>
    </div>
  </div>
</div>



<div class="container">
  <div class="form-group row">
  <label for="company" class="col-2 col-form-label">Entreprise</label>
    <div class="col-10">
      <input class="form-control" id='company' type='text' name='company' required>
    </div>
  </div>
</div>



<div class="container">
  <div class="form-group row">
  <label for="lastname" class="col-2 col-form-label">Nom</label>
    <div class="col-10">
      <input class="form-control" id='lastname' type='text' name='lastname' required/>
    </div>
  </div>
</div>


<div class="container">
  <div class="form-group row">
  <label for="firstname" class="col-2 col-form-label">Prénom</label>
    <div class="col-10">
      <input class="form-control" id='firstname' type='text' name='firstname' required/>
    </div>
  </div>
</div>



<div class="container">
  <div class="form-group row">
  <label for="email" class="col-2 col-form-label">Mail</label>
    <div class="col-10">
      <input class="form-control" id='email' type='text' name='email' required/>
    </div>
  </div>
</div>



<div class="container">
  <div class="form-group row">
  <label for="password" class="col-2 col-form-label">Password</label>
    <div class="col-10">
      <input class="form-control" id='password' type='password' name='password' required/>
    </div>
  </div>
</div>


<div class="container">
  <div class="form-group row">
  <label for="siret" class="col-2 col-form-label">Password Confirmation</label>
    <div class="col-10">
      <input class="form-control" id='password_confirmation' type='password' name='password_confirmation' required/>
    </div>
  </div>
</div>


  <div class="container">
    <button type='submit' class="btn btn-primary">Register</button>
  </div>

</form>

@endsection



