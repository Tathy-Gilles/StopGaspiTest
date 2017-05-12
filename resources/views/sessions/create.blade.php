@extends('layouts.master')

@section('content')

<div class="container">
@if(Session::has('success'))

 <div class="container-fluid">
  <div>
    <div class="alert alert-success">
      Enregistré ! Maintenent connectez-vous !
    </div>
@endif


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
<form class="form-horizontal" method='POST' action='/login'>

  {{ csrf_field() }}




    <div class="form-group">
    <label for="siret" class="col-sm-4 control-label">Mail</label>
    <div class="col-sm-4">
      <input class="form-control" id='email' type='text' name='email' >
    </div>
  </div>

      <div class="form-group">
    <label for="siret" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-4">
      <input class="form-control" id='password' type='password' name='password' >
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