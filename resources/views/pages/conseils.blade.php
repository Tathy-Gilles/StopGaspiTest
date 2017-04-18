@extends('layouts.master')

@section('content')
  <div class="container" >
    <div class="row">
      <div class="frame col-md-12 page-conseil well">
        <div class="col-md-12 title"><h1>Les conseils stopgaspi</h1></div>
        <div class="col-md-12 content">
          <div class="col-md-4 item">
            <div><img src="images/icons/videos.png" /></div>
            <h2>Vidéos</h2>
            <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
            <a href='/videos'><button>voir les vidéos</button></a>
          </div>
          <div class="col-md-4 item">
            <div><img src="images/icons/fiche.png" /></div>
            <h2>Fiches Conseils</h2>
            <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
            <a href='/fiche'><button>voir les fiches</button></a>
          </div>
          <div class="col-md-4 item">
            <div><img src="images/icons/rss.png" /></div>
            <h2>Flux RSS</h2>
            <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
            <button>s'abonner au flux</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
