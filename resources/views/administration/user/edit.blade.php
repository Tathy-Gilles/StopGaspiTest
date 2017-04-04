@extends('layouts.admin')


@section('content')


<div class='panel panel-primary'>
  <div class="panel-heading">
    <h3 class="panel-title">Modifier un utilisateur</h3>
  </div>
  <div class="panel-body">
    <form method='POST' action='/admin/user/edit/{{ $user->id }}'>
      {{ csrf_field() }}
      <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}" required>
      </div>
      <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Modifier l'utilisateur</button>
    </form>
  </div>
</div>

@endsection
