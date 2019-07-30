@extends ('layouts.app', ['title' => 'Categorie toevoegen'])

@section('content')
    <div class="container-fluid py-3">
        <div class="page-header">
            <h1 class="page-title">Nieuws artikelen</h1>
            <div class="page-subtitle">categorie toevoegen</div>

            <div class="page-options d-flex">
                <a href="{{ route('admin.news.categories.overview') }}" class="btn btn-secondary shadow-sm">
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
                <form action="" method="POST" class="card card-body shadow-sm border-0">
                    <h6 class="border-bottom border-grat pb-1 mb-3">Categorie toevoegen</h6>

                    @csrf {{-- Form field protection --}}
                    @include('flash::message') {{-- Flash session view partial --}}

                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="naam">Naam <span class="text-danger">*</span></label>
                            <input type="text" id="naam" class="form-control @error('naam', 'is-invalid')" @input('naam') placeholder="Categorie naam">
                            @error('naam')
                        </div>

                        <div class="form-group col-12">
                            <label for="beschrijving">Beschrijving <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('beschrijving', 'is-invalid')" placeholder="beschrijving van de categorie" @input('beschrijving') id="beschrijving" rows="6">{{ old('beschrijving') }}</textarea>
                            @error('beschrijving')
                        </div>
                    </div>

                    <hr class="mt-0">

                    <div class="form-row">
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-brand">
                                <i class="fe fe-plus mr-2"></i> Toevoegen
                            </button>

                            <button type="reset" class="btn btn-light">
                                <i class="fe text-danger fe-rotate-ccw"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
