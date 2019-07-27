@extends ('layouts.frontend')

@section('content')
    @include ('_partials.jumbotron', [
        'title' => config('app.name'),
        'buttons' => true,
        'description' => 'Een vzw die opkomt voor mensenrechten, dakloze, vluchtelingen. En die ook strijd voor een wereldvrede en andere sociale problemen.',
        'utilities' => 'mb-0',
    ])

    <section class="bg-section-cause py-4">
        <div class="container text-center">
            <div class="row py-3">
                <div class="col-md-12">
                    <h1 class="mb-2 title-welcome">Welkom op {{ config('app.name') }}</h1>
                    <p class="lead">Ons hoofdoel momenteel van de VZW is het uitbouwen van een vredesbeweging die zich verzet tegen kernwapens en soepbedelingen organiseren over heel Belgie.</p>

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="card card-body card-body-cause border-0 shadow-sm p-4">
                                <i class="far icon-cause fa-4x fa-map"></i>

                                <a href="" class="pt-3 h4 text-decoration-none title-card">
                                    Soepbedelingen
                                </a>

                                <p class="card-text">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-body border-0 shadow-sm p-4">
                                <i class="fa icon-cause fa-circle fa-4x fa-radiation"></i>

                                <a href="" class="pt-3 text-decoration-none h4 title-card">
                                    Nuclaire ban
                                </a>

                                <p class="card-text">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-body border-0 shadow-sm p-4">
                                <i class="fas icon-cause fa-circle fa-4x fa-dove"></i>

                                <a href="" class="pt-3 text-decoration-none h4 title-card">
                                    Vredesbeweging
                                </a>

                                <p class="card-text">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-section-news py-4">
        <div class="container">
            <div class="row py-3">
                <div class="col-12">
                    <h1 class="mb-4 text-center title-welcome">Nieuws</h1>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card card-body border-0 shadow-sm">
                                <a href="" class="article-title pb-1 text-decoration-none title-welcome">Test artikel</a>
                                <div class="small font-weight-lighter text-muted">
                                    <span class="mr-3"><i class="fe fe-user mr-1"></i> Test gebruiker</span>
                                    <span><i class="fe fe-clock mr-1"></i> 10 seconden geleden</span>
                                </div>

                                <p class="card-text mt-2">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>

                                <p class="card-text mb-0">
                                    <a href="" class="card-link text-decoration-none">Lees meer <i class="fe fe-chevrons-right"></i></a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card card-body border-0 shadow-sm">
                                <a href="" class="article-title pb-1 text-decoration-none title-welcome">Test artikel</a>
                                <div class="small font-weight-lighter text-muted">
                                    <span class="mr-3"><i class="fe fe-user mr-1"></i> Test gebruiker</span>
                                    <span><i class="fe fe-clock mr-1"></i> 10 seconden geleden</span>
                                </div>

                                <p class="card-text mt-2">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>

                                <p class="card-text mb-0">
                                    <a href="" class="card-link text-decoration-none">Lees meer <i class="fe fe-chevrons-right"></i></a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-body border-0 shadow-sm">
                                <a href="" class="article-title pb-1 text-decoration-none title-welcome">Test artikel</a>
                                <div class="small font-weight-lighter text-muted">
                                    <span class="mr-3"><i class="fe fe-user mr-1"></i> Test gebruiker</span>
                                    <span><i class="fe fe-clock mr-1"></i> 10 seconden geleden</span>
                                </div>

                                <p class="card-text mt-2">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>

                                <p class="card-text mb-0">
                                    <a href="" class="card-link text-decoration-none">Lees meer <i class="fe fe-chevrons-right"></i></a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-body border-0 shadow-sm">
                                <a href="" class="article-title pb-1 text-decoration-none title-welcome">Test artikel</a>
                                <div class="small font-weight-lighter text-muted">
                                    <span class="mr-3"><i class="fe fe-user mr-1"></i> Test gebruiker</span>
                                    <span><i class="fe fe-clock mr-1"></i> 10 seconden geleden</span>
                                </div>

                                <p class="card-text mt-2">
                                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                                </p>

                                <p class="card-text mb-0">
                                    <a href="" class="card-link text-decoration-none">Lees meer <i class="fe fe-chevrons-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-section-volunteer py-4">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12">
                    <h1 class="mb-3 title-welcome">Ondersteun ons</h1>

                    <div class="row">
                        <div class="col-md-8">
                            Zin om actie te ondernemen? En ben je gebeten door onze visie? Dan kun jij onze visie en ideén versterken! Simpel weg door je aan te melden als vrijwilliger of door een kleine bijdrage in onze crowdfund.
                        </div>

                        <div class="col-md-4">
                            <a class="btn btn-lg shadow-sm btn-volunteer btn-block" href="#">
                                <i class="fe fe-users mr-2"></i> Ondersteun
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
