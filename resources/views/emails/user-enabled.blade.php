@component('mail::message')
# Bienvenue {{ $user->firstname }} {{ $user->lastname }}

Votre compte est désormais activer, Vous pouvez vous connecter sur le site.

@component('mail::button', ['url' => 'http://stopgaspi.dev'])
C'est partie !
@endcomponent

{{ config('app.name') }}
@endcomponent
