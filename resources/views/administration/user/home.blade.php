@extends('layouts.admin')


@section('content')

<div class='row'>
  <div class='col-md-12'>
    <div class='col-md-8'>
      <a href='/admin/user/create'><button class='btn btn-success'>Créer Un Utilisateur</button><a>
      <a href='/admin/archive/user'><button class='btn btn-info'>Voir les utilisateur archivés</button></a>
    </div>
    <div class='col-md-4'></div>
    <br /><br />
    <div class='col-md-8'>
      @if(!$pendingUsers->isEmpty())
        <div class='panel panel-warning'>
          <div class="panel-heading">
            <h3 class="panel-title">Utilisateur en attente de validation</h3>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-hover">
              <th>N° Siret</th><th>Entreprise</th><th>Responsable</th><th>Email</th><th>Date d'ajout</th><th>Action</th>
              @foreach($pendingUsers as $pendingUser)
              <tr>
                <td>{{ $pendingUser->siret }}</td>
                <td>{{ $pendingUser->company }}</td>
                <td>{{ $pendingUser->firstname }} {{ $pendingUser->lastname }}</td>
                <td>{{ $pendingUser->email }}</td>
                <td>{{ $pendingUser->created_at }}</td>
                <td>
                  <a href='#' data-toggle="modal" data-target="#Modal-{{ $pendingUser->id }}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                </td>
                <div class="modal fade" id="Modal-{{ $pendingUser->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{ $pendingUser->email}}</h4>
                      </div>
                      <div class="modal-body">
                        Valider l'inscription de l'utilisateur : {{ $pendingUser->email }}
                      </div>
                      <div class="modal-footer">
                        <form action='/admin/user/validate/{{ $pendingUser->id }}' method='POST'>
                          {{ csrf_field() }}
                          <button type='submit' class="btn btn-success" aria-hidden="true">Valider l'utilisateur</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      @endif

      <div class='panel panel-primary'>
        <div class="panel-heading">
          <h3 class="panel-title">Tous les Utilisateurs</h3>
        </div>
        <div class="panel-body">

          <table class="table table-striped table-bordered table-hover">
            <th>N° Siret</th><th>Entreprise</th><th>Responsable</th><th>Email</th><th>Date d'ajout</th><th>Date de MAJ</th><th>Action</th>
              @foreach($users as $user)
              <tr>
                <td>{{ $user->siret }}</td>
                <td>{{ $user->company }}</td>
                <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                  <a href='/admin/user/edit/{{ $user->id }}'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <a href='#' data-toggle="modal" data-target="#Modal-{{ $user->id }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
                <div class="modal fade" id="Modal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{ $user->email}}</h4>
                      </div>
                      <div class="modal-body">
                        Etes vous sur de vouloir effacer l'utilisateur : {{ $user->email}} ?
                        <br />Attention toutes les données lié à cet utilisateur seront effacer !
                      </div>
                      <div class="modal-footer">
                        <form action='/admin/user/delete/{{ $user->id }}' method='POST'>
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type='submit' class="btn btn-danger" aria-hidden="true">Effacer l'utilisateur</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>

    <div class='col-md-4'>
      <div class='panel panel-success'>
        <div class="panel-heading">
          <h3 class="panel-title">Compte Administrateur</h3>
        </div>
        <div class="panel-body">

          <table class="table table-striped table-bordered table-hover">
            <th>id</th><th>Identité</th><th>Email</th><th>Date d'ajout</th><th>Date de MAJ</th><th>Action</th>
              @foreach($admins as $admin)
              <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->firstname }} {{ $admin->lastname }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->created_at }}</td>
                <td>{{ $admin->updated_at }}</td>
                <td>
                  <a href='/admin/user/edit/{{ $admin->id }}'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <a href='#' data-toggle="modal" data-target="#Modal-{{ $admin->id }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
              </tr>
              <div class="modal fade" id="Modal-{{ $admin->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">{{ $admin->email}}</h4>
                    </div>
                    <div class="modal-body">
                      Etes vous sur de vouloir effacer l'utilisateur : {{ $admin->email}} ?
                      <br />Attention toutes les données lié à cet utilisateur seront effacer !
                    </div>
                    <div class="modal-footer">
                      <form action='/admin/user/delete/{{ $admin->id }}' method='POST'>
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type='submit' class="btn btn-danger" aria-hidden="true">Effacer l'utilisateur</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
          </table>
        </div>
      </div>
      <div class='panel panel-info'>
        <div class="panel-heading">
          <h3 class="panel-title">Compte Conseiller</h3>
        </div>
        <div class="panel-body">

          <table class="table table-striped table-bordered table-hover">
            <th>id</th><th>Identité</th><th>Email</th><th>Date d'ajout</th><th>Date de MAJ</th><th>Action</th>
            @foreach($advisers as $adviser)
            <tr>
              <td>{{ $adviser->id }}</td>
              <td>{{ $adviser->firstname }} {{ $adviser->lastname }}</td>
              <td>{{ $adviser->email }}</td>
              <td>{{ $adviser->created_at }}</td>
              <td>{{ $adviser->updated_at }}</td>
              <td>
                <a href='/admin/user/edit/{{ $adviser->id }}'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                <a href='#' data-toggle="modal" data-target="#Modal-{{ $adviser->id }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
              </td>
            </tr>
            <div class="modal fade" id="Modal-{{ $adviser->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ $adviser->email}}</h4>
                  </div>
                  <div class="modal-body">
                    Etes vous sur de vouloir effacer l'utilisateur : {{ $adviser->email}} ?
                    <br />Attention toutes les données lié à cet utilisateur seront effacer !
                  </div>
                  <div class="modal-footer">
                    <form action='/admin/user/delete/{{ $adviser->id }}' method='POST'>
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type='submit' class="btn btn-danger" aria-hidden="true">Effacer l'utilisateur</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
