@extends ('layouts.app', ['title' => 'Nieuwsartikelen'])

@section('content')
    <div class="container-fluid py-3">
        <div class="page-header">
            <h1 class="page-title">Nieuws artikelen</h1>
            <div class="page-subtitle">artikel toevoegen</div>

            <div class="page-options d-flex">
                <a href="{{ route('admin.news.overview') }}" class="btn btn-secondary shadow-sm">
                    <i class="fe fe-list mr-2"></i> Overzicht
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-3">
        <div class="row">
            <div class="col-md-3">
                @include ('articles._partials.sidenav')
            </div>

            <div class="col-md-9">
                <form action="{{ route('admin.news.store') }}" method="POST" class="card card-body border-0 shadow-sm">
                    <h6 class="border-bottom border-gray pb-1 mb-3">Nieuwsbericht toevoegen</h6>

                    @csrf {{-- Form field protection --}}
                    @include ('flash::message') {{-- Flash session view partial --}}

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="titel">Titel <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('titel', 'is-invalid')" placeholder="Titel van het nieuwsbericht" id="titel" @input('titel')>
                            @error('titel')
                        </div>

                        <div class="form-group col-md-4">
                            <label for="publishDate">Publicatie datum: <span class="text-danger">*</span></label>
                            <input id="publishDate" type="date" class="form-control @error('publicatie_datum', 'is-invalid')" @input('publicatie_datum')>
                            @error('publicatie_datum')
                        </div>

                        <div class="form-group col-md-4">
                            <label for="status">Status <span class="text-danger">*</span></label>

                            <select id="status" class="custom-select @error('is_public', 'is-invalid')" @input('is_public')>
                                @options($statusTypes, 'is_public', old('is_public'))
                            </select>

                            @error('is_public') {{-- Validation error view partial --}}
                        </div>

                        <div class="form-group col-md-4">
                            <label for="category">Categorie <span class="text-danger">*</span></label>

                            <select id="category" class="custom-select @error('category_id', 'is-invalid')" @input('category_id')>
                                @options($categories, 'category_id', old('category_id'))
                            </select>

                            @error('category_id') {{-- Validation error view partial --}}
                        </div>
                    </div>

                    <hr class="mt-0">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="bericht">Bericht <span class="text-danger">*</span></label>
                            <textarea rows="7" placeholder="Uw nieuwsbericht" aria-describedby="berichtHelpInline" class="form-control @error('bericht', 'is-invalid')" id="bericht" @input('bericht')>{{ old('bericht') }}</textarea>

                            @if ($errors->has('bericht'))   {{-- There are validation errors found --}}
                                @error('bericht')           {{-- Display validation error view partial --}}
                            @else                           {{-- No validation errors found so display the help text--}}
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    <i class="fe fe-info mr-1"></i> Dit veld is markdown ondersteund
                                </small>
                            @endif
                        </div>
                    </div>

                    <hr class="mt-0">

                    <div class="form-row">
                        <div class="form-group mb-0 col-12">
                            <button type="submit" class="btn btn-brand">
                                <i class="fe fe-plus mr-2"></i> Toevoegen
                            </button>

                            <button type="reset" class="btn btn-light">
                                <i class="fe fe-rotate-ccw text-danger"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
