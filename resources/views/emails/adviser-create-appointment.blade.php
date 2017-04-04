@component('mail::message')
# Bonjour {{ $user->firstname }} {{ $user->lastname }}

@if($appointment->type == 'rendez-vous')
  Votre Conseiller {{$appointment->adviser->firstname}} {{$appointment->adviser->lastname}} vous à planifier un rendez-vous dans nos locaux le
  {{ \Carbon\Carbon::parse($appointment->date)->format('d-m-Y') }} à
  {{ \Carbon\Carbon::parse($appointment->date)->format('H') }}h{{ \Carbon\Carbon::parse($appointment->date)->format('i') }}.
@endif

@if($appointment->type == 'visio-conference')
  Votre Conseiller {{$appointment->adviser->firstname}} {{$appointment->adviser->lastname}} vous à planifier une viso-conference le
  {{ \Carbon\Carbon::parse($appointment->date)->format('d-m-Y') }} à
  {{ \Carbon\Carbon::parse($appointment->date)->format('H') }}h{{ \Carbon\Carbon::parse($appointment->date)->format('i') }}.
  Un E-Mail de rappel contenant le lien de la viso-conference vous sera envoyer quelques minutes avant le rendez-vous.
@endif

{{ config('app.name') }}
@endcomponent
