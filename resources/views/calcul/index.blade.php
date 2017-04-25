@extends('layouts.master')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-4" >
            <ul class="list-group nav" role="tablist">
                <li class="list-group-item">
                    <br>
                    <div class="text-center"><i class="fa fa-calculator fa-5x" aria-hidden="true"></i><br>
                    <br>UNE PRIME ECO<br> ENERGIE EN EUROS
                  </div>
                    
                </li>

                  <li class="list-group-item">
                   
                    <div class="text-center"><i class="fa fa-clock-o fa-5x" aria-hidden="true"></i><br>
                    <br>UN PAIEMENT SOUS <br>4 SEMAINES
                  </div>
                    
                </li>

                  <li class="list-group-item">
                  
                    <div class="text-center"><i class="fa fa-child fa-5x" aria-hidden="true"></i><br>
                    <br>DES CONSEILLERS <br>À VOTRE DISPOSITON
                  </div>
                    
                </li>

                  <li class="list-group-item">
                 
                    <div class="text-center"><i class="fa fa-check-circle-o fa-5x" aria-hidden="true"></i><br>
                    <br>UN MONTANT<br> ATTRACTIF<br>
                  </div>
                    
                </li>

                  
                
            </ul>
        </div>
        <div class="col-md-8 tab-content">
            <div class="row">
        <form>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Nom société</label>
                <input type="text" placeholder="Nom société" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Siret</label>
                <input type="text" placeholder="Siret" class="form-control">
              </div>
            </div>          
            <div class="form-group">
              <label>Adresse</label>
              <textarea placeholder="Adresse" rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Ville</label>
                <input type="text" placeholder="Ville" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Pays</label>
                <input type="text" placeholder="Pays" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Email</label>
                <input type="text" placeholder="Email" class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Tél</label>
                <input type="text" placeholder="Tel" class="form-control">
              </div>  
            </div>            
         <div class="row">
              <div class="col-sm-6 form-group">
                <label>Dépence énergétique année n-1 (en €)</label>
                <input type="text" placeholder="Année n-1" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Dépence énergétique année n (en €)</label>
                <input type="text" placeholder="Année n" class="form-control">
              </div>
            </div>   
            
          
          <button type="button" class="btn btn-lg btn-info">Envoyer</button>         
          </div>
        </form> 
        </div>
    
           </div>
        </div>
    </div>
</div>

@endsection
