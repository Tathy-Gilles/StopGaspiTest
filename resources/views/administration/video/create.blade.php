@extends('layouts.admin')


@section('content')


<div class='panel panel-primary'>
  <div class="panel-heading">
    <h3 class="panel-title">Ajouter une vidéo</h3>
  </div>
  <div class="panel-body">
    <form method='POST' action='/admin/video/create' enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Titre de la vidéo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titre de la vidéo" required>
      </div>
      <div class="form-group">
        <label for="description">Description de la vidéo</label>
        <textarea style='resize: none;' class="form-control" id="description" placeholder="Description de la vidéo" rows="5" name='description' required></textarea>
      </div>
      <div class="form-group">
        <label for="theme">Thème de la vidéo</label>
        <select class="form-control" id="theme" name='theme_id' required>
          @foreach($themes as $theme)
            <option value='{{ $theme->id }}' >{{ $theme->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="file">Fichier Vidéo</label>
        <input type="file" id="file" name='file' required>
        <p class="help-block">Le format de la vidéo doit être .mp4</p>
      </div>
      <button type="submit" class="btn btn-primary">Ajouter la vidéo</button>
    </form>
  </div>
</div>

@endsection
