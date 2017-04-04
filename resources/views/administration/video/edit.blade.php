@extends('layouts.admin')


@section('content')


<div class='panel panel-primary'>
  <div class="panel-heading">
    <h3 class="panel-title">Editer une vidéo</h3>
  </div>
  <div class="panel-body">
    <form method='POST' action='/admin/video/edit/{{ $videos->id }}' enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Titre de la vidéo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $videos->title }}" >
      </div>
      <div class="form-group">
        <label for="description">Description de la vidéo</label>
        <textarea style='resize: none;' class="form-control" id="description" rows="5" name='description'>{{ $videos->description }}</textarea>
      </div>
      <div class="form-group">
        <select class="form-control" name='theme_id'>
          <option value='{{ $videos->theme_id }}'>{{ $videos->theme->title }}</option>
          @foreach($themes as $theme)
            @if($theme->id != $videos->theme_id)
              <option value='{{ $theme->id }}'>{{ $theme->title }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="file">Fichier Vidéo</label>
        <input type="file" id="file" name='file' value='{{ $videos->file }}'>
        <p class="help-block">Le format de la vidéo doit être .mp4</p>
      </div>
      <button type="submit" class="btn btn-primary">Editer la vidéo</button>
    </form>
  </div>
</div>

@endsection
