@extends('layouts.master')

@section('content')


 <div class="container" >
  <div class='flex row'>
      <div class="frame flex column around col-md-12 well" >
        <h1>Le programme Stopgaspi</h1>
         <p class="text-left">Utiliser le simulateur de calcul de l'impôt 2017 sur les revenus 2016, selon vos besoins : 
            <br>
              <ul>
               <li>en version simplifiée ;</li>
               <li>en version complète.</li>
            </ul>
Le simulateur détermine, à titre indicatif, le montant de votre impôt sur le revenu uniquement si vous résidez en France.<br>
Particulier - 17 janvier 2017
        </p>
        <p class="text-right"><button class="btn btn-default"><a href='/calcul'>Calculer</a></button></p>
      </div>
    </div>
  </div>



@endsection
