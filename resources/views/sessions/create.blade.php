@extends('layouts.master')

@section('content')

<div class="container">

<form class="form-horizontal" method='POST' action='/login'>

  {{ csrf_field() }}


    <div class="form-group">
    <label for="siret" class="col-sm-4 control-label">Siret</label>
    <div class="col-sm-4">
      <input class="form-control" id='siret' type='text' name='siret' required>
    </div>
  </div>

    <div class="form-group">
    <label for="siret" class="col-sm-4 control-label">Mail</label>
    <div class="col-sm-4">
      <input class="form-control" id='email' type='text' name='email' required>
    </div>
  </div>

      <div class="form-group">
    <label for="siret" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-4">
      <input class="form-control" id='password' type='text' name='password' required>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
      <button type="submit" class="btn btn-default">Login</button>
    </div>
 </div>

</form>

</div>

@endsection