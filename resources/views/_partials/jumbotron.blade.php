<div class="jumbotron height-hero-img jumbotron-fluid mb-4">
    <div class="container">
        <div class="row">
            <div class="offset-5 col-7">
                <div class="float-right">
                    <h1 class="display-4 text-shadow-sm">{{ $title }}</h1>
                    <p>{{ $description }}</p>

                    @if ($buttons)
                        <hr class="breakline-hero my-3">

                        <p>
                            <a href="" role="button" class="btn shadow-sm btn-secondary">
                                <i class="fe fe-list mr-1"></i> Onze visie
                            </a>

                            <a href="" role="button" class="btn shadow-sm btn-secondary">
                                <i class="fe fe-users mr-1"></i> Ondersteun ons
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
