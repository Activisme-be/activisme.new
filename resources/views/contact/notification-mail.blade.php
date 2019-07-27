@component('mail::message')
# Nieuwe reactie

Geachte,

Een bezoeker heeft het contact formulier ingevuld op [{{ config('app.name') }}]({{ url('/') }}).<br>

@component('mail::panel')
### Contact gegevens

**Naam:** {{ $contactEntity->naam }} <br>
**Tel. nummer:** {{ $contactEntity->telefoon_nummer }}<br>
**E-mail:** {{ $contactEntity->email }} <br>
@endcomponent

@component('mail::panel')
### Inhoud bericht

**Onderwerp:** {{ $contactEntity->onderwerp }}<br>
**Bericht:** {{ $contactEntity->bericht }}
@endcomponent

@slot('subcopy')
De informatie in dit elektronisch bericht is vertrouwelijk en uitsluitend bestemd voor de geadresseerde(n).
*Gebruik, bekendmaking, publicatie of vermenigvuldiging van deze informatie is zonder toestemming onrechtmatig. Wanneer dit bericht niet voor u bestemd is, wordt u verzocht contact op te nemen
met de afzender en het bericht te verwijderen.*
@endslot
@endcomponent
