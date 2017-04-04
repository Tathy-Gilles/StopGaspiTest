@extends('layouts.workflow')


@section('content')

<div class='col-md-4'></div>
<div class='col-md-4'>
  <div class='jumbotron'>
    <form method='POST' action='/workflow'>
      {{ csrf_field() }}
      <div class='form-group'>
        <label for="email">Email address</label>
        <input type="email" id="email" name='email' class="form-control" placeholder="Email address" required autofocus>
      </div>
      <div class='form-group'>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>
  </div>
</div>
<div class='col-md-4'></div>

@endsection
