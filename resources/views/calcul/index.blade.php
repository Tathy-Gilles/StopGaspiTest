@extends('layouts.master')

@section('content')
<div class="container">
  <div class="col-lg-12 well">
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



@endsection
