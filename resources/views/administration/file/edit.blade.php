@extends('layouts.admin')


@section('content')


<div class='panel panel-primary'>
  <div class="panel-heading">
    <h3 class="panel-title">Editer une vidéo</h3>
  </div>
  <div class="panel-body">
    <form method='POST' action='/admin/file/edit/{{ $files->id }}' enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Titre de la vidéo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $files->title }}" >
      </div>
      <div class="form-group">
        <label for="description">Description de la vidéo</label>
        <textarea style='resize: none;' class="form-control" id="description" rows="5" name='description'>{{ $files->description }}</textarea>
      </div>
      <div class="form-group">
        <select class="form-control" name='theme_id'>
          <option value='{{ $files->theme_id }}'>{{ $files->theme->title }}</option>
          @foreach($themes as $theme)
            @if($theme->id != $files->theme_id)
              <option value='{{ $theme->id }}'>{{ $theme->title }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="file">Fiche Conseil</label>
        <input type="file" id="file" name='file' value='{{ $files->file }}'>
        <p class="help-block">La fiche doit être au format .pdf</p>
      </div>
      <button type="submit" class="btn btn-primary">Editer la vidéo</button>
    </form>
  </div>
</div>

@endsection
