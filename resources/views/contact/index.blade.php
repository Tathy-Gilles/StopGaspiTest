@extends('layouts.master')

@section('content')
 
<div class="container">

    <h1 class="well">Contactez-nous</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Nom" required="required" />
                        </div>

                        <div class="form-group">
                            <label for="name">
                                Société</label>
                            <input type="text" class="form-control" id="name" placeholder="Société" required="required" />
                        </div>

                        <div class="form-group">
                            <label for="email">
                                Adresse Mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Votre adresse" required="required" /></div>
                        </div>
                          <div class="form-group">
                            <label for="name">
                                Objet</label>
                            <input type="text" class="form-control" id="name" placeholder="Objet" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Nos bureau</legend>
            <address>
                <strong>Stop Gaspi.</strong><br>
                10 Cours Louis Loumière<br>
                94300 Vincennes<br>
                <abbr title="Phone">
                    Tél :</abbr>
                0149575959
            </address>
            <address>
                <strong>Notre email</strong><br>
                <a href="mailto:#">Stopgaspi@gmail.com</a>
            </address>

             <address>
                <strong>Télé-conseil</strong><br>
                <a href="mailto:#">Pour joindre nos conseillers en ligne cliquez ici</a>
            </address>
            </form>
        </div>
    </div>
</div>
@endsection
