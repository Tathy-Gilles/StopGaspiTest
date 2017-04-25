@extends('layouts.master')

@section('content')


  <div class="container" >
    <div class='flex row'>
      <div class="col-md-12">
        <div class='frame margin-fix row'>
          <div class="flex col-xs-12 col-sm-12 col-md-12">
            <div><img src="images/map.png" class="map"/></div>
            <div class='flex column'>
              <h1>Qui sommes-nous</h1>
              <p class="text-left">
StopGaspi est un site de conseil en économies d’énergie, proposé par l'Etat. Notre rôle est aussi d’accompagner les entreprises dans une consommation optimisée visant une plus grande efficacité énergétique. Nous avons aussi conscience du poids de la facture d’énergie dans les budgets des ménages français. On évoque à présent une forme de précarité énergétique pour de nombreuses entreprise.</p>
              <p class="text-right"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='flex row'>
      <div class="frame flex column around col-md-8" >
        <h1>Le programme Stopgaspi</h1>
        <p class="text-left">A travers le Bonus Eco Energie, StopGaspi renforce son engagement en faveur des économies d'énergie et vous permet de bénéficier d'une aide financière encore plus avantageuse. Vous recevrez votre Prime ainsi que votre Bonus directement sur votre carte fidélité Waaoh !
Inscrivez-vous, testez votre éligibilité au Bonus Eco Energie et créez vos dossiers afin de bénéficier de la Prime Eco Energie.</p>
        <p class="text-right"><a href='#'>Comment participer ?</a></p>
      </div>
      <div class="frame flex column around col-md-4" >
        <h1 class="text-center">Calculez votre exoneration</h1>
        <div><img src="images/icons/simulator.png" class="icons" /></div>
        <p class="text-left">Vous ne savez pas à combien de réduction fiscal vous avez le droit. Venez tester notre calculatrice d'exonération fiscal</p>
        <button class="btn btn-default"><a href="/calcul" style="text-decoration:none ;">Calculer</a></button>
      </div>
   </div>
   <div class='flex row'>
     <div class="frame flex column around col-md-4" >
       <h1 class="text-center">Besoin d'aide ?</h1>
       <div class="text-center"><i class="fa fa-calendar fa-4x" aria-hidden="true"></i></div>
       <p class="text-left"><br>Nos possédons des dizaines d'agence répartie sur l'ensemble de la france. N'hésitez pas à rencontrer nos conseillers</p>
       <button type="button" class="btn btn-default">Rendez-vous</button>
     </div>
     <div class="frame flex column around col-md-8" >
       <h1>Suivez nos conseils</h1>
       <p class="text-left">Venez découvrir nos fiches conseils, qui vous guideront dans la réalisation de tous vos travaux.
Des informations simples et détaillées pour répondre efficacement à toutes vos questions.


</p>
       <p class="text-right"><a href='#'>Comment participer ?</a></p>
     </div>
  </div>
  </div>
@endsection
