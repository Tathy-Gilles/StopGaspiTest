@component('mail::message')
# Bienvenu Sur Stopgaspi {{ $user->firstname }} {{ $user->lastname }}

Merci de votre inscription, nos équipe vont à présent vérifier vos informations,
vous recevrez un mail quand votre compte sera valider et accessible

A Bientot,<br>
{{ config('app.name') }}
@endcomponent
