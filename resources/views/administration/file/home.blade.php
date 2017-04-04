@extends('layouts.admin')


@section('content')

  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Administration des Fiches Conseils</h3>
    </div>
    <div class="panel-body">
      <a href='/admin/file/create'><button class='btn btn-success'>Ajouter une Fiche Conseil</button></a><br /><br />

      <table class="table table-striped table-bordered table-hover">
        <th>id</th><th>Nom</th><th>Description</th><th>URL</th><th>Date d'ajout</th><th>Date de MAJ</th><th>Action</th>
        @foreach($files as $file)
          <tr>
            <td>{{ $file->id }}</td>
            <td>{{ $file->title }}</td>
            <td>{!! \Illuminate\Support\Str::words($file->description, 10, '...') !!}</td>
            <td><a href='{{ Storage::disk('local')->url($file->file) }}'>{{ Storage::disk('local')->url($file->file) }}</a></td>
            <td>{{ $file->created_at }}</td>
            <td>{{ $file->updated_at }}</td>
            <td>
              <a href='/admin/file/edit/{{ $file->id }}'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
              <a href='#' data-toggle="modal" data-target="#Modal{{ $file->id }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
          </tr>
          <div class="modal fade" id="Modal{{ $file->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">{{ $file->title}}</h4>
                </div>
                <div class="modal-body">
                  Etes vous sur de vouloir effacer la vidéo : {{ $file->title}} ?
                  <br />Attention vous ne pourrez pas retourner en arrière.
                </div>
                <div class="modal-footer">
                  <form action='/admin/file/delete/{{ $file->id }}' method='POST'>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type='submit' class="btn btn-danger" aria-hidden="true">Effacer la Fiche</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </table>
    </div>
  </div>

@endsection
