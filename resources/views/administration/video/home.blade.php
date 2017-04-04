@extends('layouts.admin')


@section('content')

  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Administration des Vidéos</h3>
    </div>
    <div class="panel-body">
      <a href='/admin/video/create'><button class='btn btn-success'>Ajouter une Vidéo</button></a><br /><br />

      <table class="table table-striped table-bordered table-hover">
        <th>id</th><th>Nom</th><th>Description</th><th>URL</th><th>Date d'ajout</th><th>Date de MAJ</th><th>Action</th>
        @foreach($videos as $video)
          <tr>
            <td>{{ $video->id }}</td>
            <td>{{ $video->title }}</td>
            <td>{!! \Illuminate\Support\Str::words($video->description, 10, '...') !!}</td>
            <td><a href='{{ Storage::disk('local')->url($video->file) }}'>{{ Storage::disk('local')->url($video->file) }}</a></td>
            <td>{{ $video->created_at }}</td>
            <td>{{ $video->updated_at }}</td>
            <td>
              <a href='/admin/video/edit/{{ $video->id }}'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
              <a href='#' data-toggle="modal" data-target="#Modal{{ $video->id }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
          </tr>
          <div class="modal fade" id="Modal{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">{{ $video->title}}</h4>
                </div>
                <div class="modal-body">
                  Etes vous sur de vouloir effacer la vidéo : {{ $video->title}} ?
                  <br />Attention vous ne pourrez pas retourner en arrière.
                </div>
                <div class="modal-footer">
                  <form action='/admin/video/delete/{{ $video->id }}' method='POST'>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type='submit' class="btn btn-danger" aria-hidden="true">Effacer la vidéo</button>
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
