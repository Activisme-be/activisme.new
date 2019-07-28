@extends ('layouts.frontend', ['title' => $title])

@section('content')
    @include ('_partials.jumbotron', [
        'description' => "Dank u omdat u " . config('app.name') . " toevertrouwd met je persoonlijke gegevens. Het opslaan van uw gegevens is een serieuze verantwoordelijkheid en daarom willen we dat u weet hoe we ermee omgaan.",
        'buttons' => true,
        'utilities' => 'pb-4'
    ])

    <div class="container pb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body border-0 shadow-sm">
                    <p class="card-text lead">In het geval de gebruiker van de website om persoonlijke informatie gevraagd wordt.</p>

                    <p class="card-text">
                        De verantwoordelijke voor de verwerking. {{ config('app.name') }} respecteert de Belgische wetgeving van
                        25 mei 2018 met betrekking tot de bescherming van het privéleven in de verwerking van de persoonlijke gegevens.
                        De door u meegedeelde persoonsgegevens zullen gebruikt worden voor de volgende doeleinden. Ons leden en het ondertekene van petities.
                    </p>

                    <p class="card-text">
                        U beschikt over wettelijk recht op inzage en eventuele correctie van uw persoonsgegevens.
                        Met bewijs van identiteit (kopie identiteitskaart) kun y via een schriftelijke gedateerde en ondertekenende aanvraag
                        aan {{ config('app.name') }} (info@activisme.be) gratis de schriftelijke mededeling bekomen van uw persoons gegevens.
                        Indien nodig kunt u ook vragen de gegevens te corrigeren die onjuist, niet volledig of pertinent zouden zijn.
                    </p>

                    <p class="card-text">
                        Het is mogelijk dat de verkrgene persoonsgegevens worden doorgegeven aan de technische mensen van {{ config('app.name') }}.
                        Uw persoonsgegevens worden niet doorgegeven aan derden. Indien dit van troepassing is zaal dit worden meegedeeld.
                    </p>

                    <p class="card-text">
                        De technische mensen van {{ config('app.name') }} kunnen ook tevens geaggregeerde gegevens verzamelen van niet persoonlijke aard. zoals browser type of IP adres. Het besturingsprogramma
                        dat u gebruikt of de domeinnaam van de website waar u op deze website gekomen bent. Of waarlangs u deze verlaat. Dit maakt
                        het ons mogelijk deze website permanent te optimaliseren voor de gebruikers.
                    </p>

                    <h3 class="brand-title">Het gebruik van "cookies"</h3>

                    <p class="card-text">
                        Tijdens een bezoek aan de website kunnen 'cookies' op de harde schijf van uw computer geplaatst worden. Een cookie is een tekstbestand
                        dat door de server van een website in de browser van uw computer of mobiel apperaat geplaatst worden wanneer u een website
                        raadpleegt. Cookies kunnen niet worden gebruikt worden om personen te identificeren, een cookie kan slechts een machine identificeren.
                    </p>

                    <p class="card-text">
                        U kan uw internetbrowser zodanig instellen dat cookies niet worden geaccepteerd. Dat u een waarschuwing ontvangt wanneer
                        een cookie wordt geinstalleerd of dat de cookies nadien van uw harde schijf worden verwijderd. Dit kan u doen via de instellingen
                        van uw browser (via de hulp-functie). Hou hierbij wel rekening mee dat bepaalde grafische elementen niet correct kunnen verschijnen
                        of dat u bepaalde functies niet optimaal zal kunnen gebruiken.
                    </p>

                    <p class="card-text">Door gebruik van onze website, gaat u akkoord met ons gebruik van cookies.</p>

                    <h3 class="brand-title">Google analytics</h3>

                    <p class="card-text">
                        Deze website maakt gebruik van Google analytics. een webanalyse service die wordt aangeboden door Google Inc. Google analytics maakt gebruik van
                        "cookies". (tekstbestandjes die op uw computer worden geplaatst). Om de website te helpen analyseren hoe de
                        gebruiker de website gebruiken. De door het cookie gegenereerde informatie over uw gebruik van de website
                        (met inbegrip van uw IP-adres) wordt overgebracht naar en door Google opgeslagen op server in de Verenigde Staten.
                        Google gebruikt deze informatie om bij te houden hoe u de website gebruikt, rapporten over de website-activiteit
                        op te stellen voor de website-exploitanten en andere diensten aan te bieden met betrekking tot website-activiteit
                        en internetgebruik. Google mag deze informatie aan derden verschaffen inien Google hiertoe wettelijk wordt verplicht, of voor zover deze derden deze informatie verwerken namens Google. Google zal uw IP-adres niet combineren met andere gegegevens waariver Google beschikt.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
