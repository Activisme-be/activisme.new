@extends ('layouts.app', ['title' => 'Nieuwsartikelen'])

@section('content')
    <div class="container-fluid py-3">
        <div class="page-header">
            <h1 class="page-title">Nieuws artikelen</h1>
            <div class="page-subtitle">Overzicht</div>

            @if ($articleCount > 0) {{-- There are articles found in the application --}}
                <div class="page-options d-flex">
                    <a href="{{ route('admin.news.create') }}" class="btn shadow-sm btn-secondary">
                        <i class="fe fe-plus"></i>
                    </a>

                    <form method="GET" action="" class="border-0 shadow-sm form-search ml-2">
                        <input type="text" class="form-search border-0 form-control" @input('term') placeholder="Zoeken">
                    </form>
                </div>
            @endif
        </div>
    </div>

    <div class="container-fluid pb-3">
        <div class="row">
            <div class="col-md-3"> {{-- Side navigation --}}
                @include('articles._partials.sidenav')
            </div> {{-- /// Side navigation --}}

            <div class="col-md-9">
                @if ($articleCount === 0) {{-- No articles found in the application --}}
                    <div class="blankslate py-5 shadow-sm">
                        <h3>Geen nieuws artikelen</h3>
                        <p class="pt-2">Het lijkt erop dat er momenteel geen nieuws artikelen zijn aangemaakt op de website.</p>

                        <a href="{{ route('admin.news.create') }}" class="btn btn-brand shadow-sm">
                            <i class="fe fe-plus mr-1"></i> artikel toevoegen
                        </a>
                    </div>
                @else {{-- There are articles found in the application --}}

                @endif
            </div>
        </div>
    </div>
@endsection
