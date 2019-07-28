@extends ('layouts.frontend')

@section('content')
    @include ('_partials.jumbotron', [
        'description' => "Bedankt voor het gebruik voor het gebruik van de website. We zijn blij dat je er bent. Lees deze gebruikersvoorwaarden zorgvuldig voor dat u deze website opent en of verder gebruikt. Omdat het zo'n belangrijk contract is tussen ons en onze gebruikers.",
        'buttons' => true,
        'utilities' => 'pb-4'
    ])

    <div class="container pb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow-sm border-0">
                    <p class="card-text lead">
                        Deze website is eigendom van {{ config('app.name') }}. Door de toegang en het gebruik van deze website
                        verklaart u zich uitdrukkelijk akkoord met de volgende algemene voorwaarden.
                    </p>

                    <h3 class="brand-title">Intellectuele eigendomsrechten</h3>

                    <p class="card-text">
                        De inhoud van deze website met inbegrip van de merken, logo's, tekeningen, data, product of
                        bedrijfsnamen, teksten, beelden e.d zijn beschermd door intellectuele rechten en behoren toe aan
                        {{ config('app.name') }} of rechthoudende derden.
                    </p>

                    <h3 class="brand-title">Beperking van aansprakelijkheid</h3>

                    <p class="card-text">
                        De informatie op de website is van algemene aard. De informatie is niet aangepast aan persoonlijke
                        of specifieke omstandigheden. En kan dus niet als een persoonlijk, professioneel of juridisch
                        advies van de gebruiker worden beschouwd.
                    </p>

                    <p class="card-text">
                        {{ config('app.name') }} levert grote inspanningen opdat de ter beschikking gestelde informatie
                        volledig juist, nauwkeurig en bijgewerkt zou zijn. Ondanks deze inspanningen kunnen onjuistheden zich voordoen
                        in de ter beschikking gestelde informatie. Indien de verstrekte informatie onjuistheden zou bevatten of indien bepaalde
                        informatie op of via de site informatie op of via de site onbeschikbaar zou zijn, zal {{ config('app.name') }} de grootst mogelijke inspanning
                        leveren om dit zo snel mogelijk recht te zetten. Activisme_BE kan evenwel niet aansprakelijk worden gesteld voor rechtstreekse of onrechtstreekse schade die
                        ontstaat uit het gebruik van de informatie op deze site. Indien u onjuistheden zou vaststellen in de informatie die via de site ter beschikking wordt gesteld,
                        kan u de beheerder van de site contacteren.
                    </p>

                    <p class="card-text">
                        De inhoud van de site (links inbegrepen) kan ten alle tijde zonder aankondiging of kennisgeving aangepast, gewijzigd of aangevuld worden. {{ config('app.name') }} geeft
                        geen garanties voor de goede werking van de website en kan op geen enkele wijze aansprakelijk gehouden worden voor een slechte werking of tijdelijke (on) beschikbaarheid
                        van de website of voor enige vorm van schade, rechtstreekse of onrecthstreekse, die zou voortvloeien uit de toegang tot of het gebruik van de website.
                    </p>

                    <p class="card-text">
                        {{ config('app.name') }} kan in geen geval tegenover wie dan ook, op directe of indirecte, bijzondere of andere wijze aansprakelijk worden gesteld voor schade te wijten aan het gebruik
                        van deze websute of van een andere, inzonderheid als gevolg van links of hyperlinks, met inbegrip, zonder beperking, van alle verliezen, werkonderbrekingen, beschadiging van programma's of
                        andere gegevens op het computersysteem, van apparatuur, programmatuur of andere van de gedruiker.
                    </p>

                    <p class="card-text">
                        De website kan hyperlinks bevatten naar websites of pagina's van derden, of daar rechtstreeks naar verwijzen. Het plaatsen van links naar deze websites of
                        pagina's impliceert op geen enkele wije een impliciete goedkeuring van de inhoud ervan. {{ config('app.name') }} verklaart uitdrukkelijk dat zij geen zeggenschap heeft over de inhoud of andere kenmerken
                        van deze websites of pagina's en kan in geen geval aansprakelijk gehouden worden voor de inhoud of de kenmerken ervan of voor enige andere vorm van schade door het gebruik ervan.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
