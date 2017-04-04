@extends('layouts.admin')


@section('content')


<div class='panel panel-primary'>
  <div class="panel-heading">
    <h3 class="panel-title">Créer un utilisateur</h3>
  </div>
  <div class="panel-body">
    <form method='POST' action='/admin/user/create'>
      {{ csrf_field() }}
      <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" class="form-control" id="lastname" name="lastname"  required>
      </div>
      <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control" id="firstname" name="firstname"  required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="role[]" id="admin" value="admin" checked>
          Administrateur
        </label>
        <label>
          <input type="checkbox" name="role[]" id="adviser" value="adviser">
          Conseiller
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Ajouter l'utilisateur</button>
    </form>
  </div>
</div>

@endsection
