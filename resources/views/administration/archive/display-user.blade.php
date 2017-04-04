@extends('layouts.admin')


@section('content')

<div class='row'>
  <div class='col-md-12'>
    <div class='col-md-8'>
      <a href='/admin/user'><button class='btn btn-info'>Retour</button></a>
    </div>
    <div class='col-md-4'></div>
    <br /><br />
    <div class='col-md-8'>

      <div class='panel panel-primary'>
        <div class="panel-heading">
          <h3 class="panel-title">Les Utilisateurs Archivés</h3>
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
                  <a href='#' data-toggle="modal" data-target="#Modal-{{ $user->id }}"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                </td>
                <div class="modal fade" id="Modal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{ $user->email}}</h4>
                      </div>
                      <div class="modal-body">
                        Etes vous sur de vouloir Ré-Activer l'utilisateur : {{ $user->email}} ?
                        <br />Toutes ses données précédente lui seront réattribué
                      </div>
                      <div class="modal-footer">
                        <form action='/admin/archive/user/{{ $user->id }}' method='POST'>
                          {{ csrf_field() }}
                          <button type='submit' class="btn btn-success" aria-hidden="true">Activer l'utilisateur</button>
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
                  <a href='#' data-toggle="modal" data-target="#Modal-{{ $admin->id }}"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
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
                      Etes vous sur de vouloir Ré-Activer l'utilisateur : {{ $admin->email}} ?
                      <br />Toutes ses données précédente lui seront réattribué
                    </div>
                    <div class="modal-footer">
                      <form action='/admin/archive/user/{{ $admin->id }}' method='POST'>
                        {{ csrf_field() }}
                        <button type='submit' class="btn btn-success" aria-hidden="true">Activer l'utilisateur</button>
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
                <a href='#' data-toggle="modal" data-target="#Modal-{{ $adviser->id }}"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
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
                    Etes vous sur de vouloir Ré-Activer l'utilisateur : {{ $adviser->email}} ?
                    <br />Toutes ses données précédente lui seront réattribué
                  </div>
                  <div class="modal-footer">
                    <form action='/admin/archive/user/{{ $adviser->id }}' method='POST'>
                      {{ csrf_field() }}
                      <button type='submit' class="btn btn-success" aria-hidden="true">Activer l'utilisateur</button>
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
