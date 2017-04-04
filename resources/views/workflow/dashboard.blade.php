<?php setlocale(LC_TIME, 'fr'); ?>

@extends('layouts.workflow')


@section('content')
<div class='col-md-3'>
  <div class='panel panel-primary' style='max-height: 800px; overflow-y: auto;'>
    <div class="panel-heading">
      <h3 class="panel-title">Aujourd'hui {{ \Carbon\Carbon::now()->format('j/m/Y') }}</h3>
    </div>
    <div class="panel-body">
      @foreach($dayTasks as $task)
        <div class='col-md-12'>
          <h4>{{ $task->type }}
            @if($task->status == 0)
              <span data-toggle="modal" data-target="#Modal-end-{{ $task->id }}" class="label label-info">Terminer l'évenement</span>
              @elseif($task->status == 1)
                <span class="label label-success">Evennement Effectuer</span>
              @elseif($task->status == 20)
                <span class="label label-danger">Annuler par le client</span>
              @elseif($task->status == 21)
                <span class="label label-danger">Client absent</span>
            @endif
          </h4>
          <div class='col-md-12'>
            <div class='col-md-6'>Avec : {{ $task->user->firstname }} {{ $task->user->lastname }}</div>
            <div class='col-md-6'>à : {{ \Carbon\Carbon::parse($task->date)->format('H') }}h{{ \Carbon\Carbon::parse($task->date)->format('i') }}</div>
          </div>
          <div class='col-md-12'>
            <div class='col-md-6'>Entreprise : {{ $task->user->company }}</div>
            <div class='col-md-6'>Siret : {{ $task->user->siret }}</div>
            <hr>
          </div>
        </div>
        @if($task->status == 0)
          {{-- Modal To End Appointment --}}
          <div class="modal fade" id="Modal-end-{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">{{ $task->type }} avec  {{ $task->user->firstname }} {{ $task->user->lastname }}</h4>
                </div>
                <div class="modal-body">
                  Avant d'archiver l'évenement merci de renseigner le champs suivant :
                  <form action='/workflow/appointment/finish/{{ $task->id  }}' method='POST'>
                    {{ csrf_field() }}
                    <div class='form-group'>
                      <select class='form-control' name='status'>
                        <option value='1'>Le rendez-vous s'est dérouler comme prévu</option>
                        <option value='20'>Le rendez-vous est annulé par le client</option>
                        <option value='21'>Le client ne s'est pas présenter</option>
                      </select>
                    </div>
                    <button type='submit' class="btn btn-success" aria-hidden="true">Mettre Fin à l'évenement</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</div>
<div class='col-md-6'>
  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Calendrier Personnel</h3>
    </div>
    <div class="panel-body">
      <div id='calendar'></div>
    </div>
  </div>
</div>
<div class='col-md-3'>
  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Créer un Evenement</h3>
    </div>
    <div class="panel-body">
      <form action='/workflow/appointment/create' method='POST'>
        {{ csrf_field() }}
        <input type='hidden' value='{{ auth()->user()->id }}' id='adviser' name='adviser'/>
        <div class='form-group'>
          <label for="company">Entreprise</label><span onclick="userManager()" class="glyphicon glyphicon-search" style='margin-left: 10px;' aria-hidden="true"></span>
          <input type="text" class="form-control" id="company" placeholder="Siret" disabled>
          <input type="hidden" class="form-control" id="company-hidden" name="company">
        </div>
        <div class='form-group'>
          <label for="type">Type d'évenement</label>
          <select name='type' class="form-control">
            <option value='rendez-vous'>Rendez-vous</option>
            <option value='visio-conference'>Visio-Conference</option>
          </select>
        </div>
        <div class='form-group'>
          <label for="date">Date</label>
          <input type="text" class="form-control" id="date" placeholder="Date" disabled>
          <input type="hidden" class="form-control" id="date-hidden" name="date">
          <p class="help-block">Cliquez sur l'agenda pour récupérer la date et l'heure</p>
        </div>
        <div class='form-group'>
          <center><button type='submit' class='btn btn-primary'>Créer l'évenement</button></center>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src='/fullcalendar/lib/moment.min.js'></script>
  <script src='/fullcalendar/fullcalendar.min.js'></script>
  <script src='/fullcalendar/locale/fr.js'></script>
  <script src='/js/scripts.js'></script>
@endsection
