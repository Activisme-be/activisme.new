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
                            <a href="" role="button" class="btn shadow-sm btn-secondary">
                                <i class="fe fe-list mr-1"></i> Onze visie
                            </a>

                            <a href="" role="button" class="btn shadow-sm btn-secondary">
                                <i class="fe fe-users mr-1"></i> Ondersteun ons
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
