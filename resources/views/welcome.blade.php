@extends ('layouts.frontend')

@section('content')
    <div class="jumbotron height-hero-img jumbotron-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-6 col-6">
                    <div class="float-right">
                        <h1 class="display-4 text-shadow-sm">{{ config('app.name') }}</h1>
                        <p>
                            Een vzw die opkomt voor mensenrechten, dakloze, vluchtelingen. En die ook strijd voor een wereldvrede en andere sociale problemen.
                        </p>

                        <hr class="breakline-hero my-3">

                        <p class="lead">
                            <a href="" role="button" class="btn btn-secondary">
                                Onze visie
                            </a>

                            <a href="" role="button" class="btn btn-secondary">
                                Ondersteun ons
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">

    </div>
@endsection
