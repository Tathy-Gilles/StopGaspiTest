{{-- 
<h1>Les vidéos</h1>

@foreach($videos as $video)
  {{ $video->id }}
  {{ $video->theme_id }}
  {{ $video->title }}
  {{ $video->description }}
  <img src='{{Storage::disk('local')->url($video->file)}}'/>
@endforeach --}}

@extends('layouts.master')

@section('content')
  <div class="container" >
    <div class="row">
      <div class="frame col-md-12 page-videos">
        <div class='col-md-12 flex title'>
          <div class="col-md-6"><h1>Les conseils en vidéos</h1></div>
          <div class="col-md-6 filtre flex around vertical-center"><label>Filtrer par thème</label><select><option>test</option></select></div>
        </div>
        <div class="col-md-12 content">
          <div class="movies">
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
          </div>
          <div class="movies">
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
          </div>
          <div class="movies">
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
            <div class="col-md-4 item">
              <div class="movie_picture"></div>
              <div class="movie_title">Titre de la vidéo</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
