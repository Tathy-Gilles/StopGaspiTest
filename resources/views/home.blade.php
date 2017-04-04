@extends('layouts.master')

@section('content')
  <div class="container" >
    <div class='flex row'>
      <div class="col-md-12">
        <div class='frame margin-fix row'>
          <div class="flex col-xs-12 col-sm-12 col-md-12">
            <div><img src="images/map.png" class="map" /></div>
            <div class='flex column around'>
              <h1>Qui sommes-nous</h1>
              <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
              <p class="text-right"><a href='#'>En savoir plus</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='flex row'>
      <div class="frame flex column around col-md-8" >
        <h1>Le programme Stopgaspi</h1>
        <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
        <p class="text-right"><a href='#'>Comment participer ?</a></p>
      </div>
      <div class="frame flex column around col-md-4" >
        <h1 class="text-center">Calculez votre exoneration</h1>
        <div><img src="images/icons/simulator.png" class="icons" /></div>
        <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
        <button>Faire une simulation</button>
      </div>
   </div>
   <div class='flex row'>
     <div class="frame flex column around col-md-4" >
       <h1 class="text-center">Besoin d'aide ?</h1>
       <div><img src="images/icons/agenda.png" class="icons" /></div>
       <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
       <button>Prendre rendez-vous</button>
     </div>
     <div class="frame flex column around col-md-8" >
       <h1>Suivez nos conseil</h1>
       <p class="text-left">Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.Left aligned text.</p>
       <p class="text-right"><a href='#'>Comment participer ?</a></p>
     </div>
  </div>
  </div>
@endsection
