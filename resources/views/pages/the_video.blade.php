@extends('layouts.master')

@section('content')
  <div class="container" >
    <div class="row">
      <div class="frame col-md-12 page-videos">
        <div class='col-md-12 title'>
          <div class="col-md-8">
            <video controls poster='img/holder.jpg'></video>
          </div>
          <div class="col-md-4"></div>
        </div>
        <div class="col-md-12 content">
          <div class="col-md-8">
            <h1>Titre de la vidéo</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.</p>
          </div>
        </div>
    </div>
  </div>
@endsection
