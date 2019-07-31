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
                        <input type="text" class="form-search border-0 form-control" @input('term') placeholder="Zoek artikel">
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
                        <h3><i class="far fa-newspaper icon-navbar mr-1"></i> Geen nieuws artikelen</h3>
                        <p class="pt-2">Het lijkt erop dat er momenteel geen nieuws artikelen zijn aangemaakt op de website.</p>

                        <a href="{{ route('admin.news.create') }}" class="btn btn-brand shadow-sm">
                            <i class="fe fe-plus mr-1"></i> artikel toevoegen
                        </a>
                    </div>
                @else {{-- There are articles found in the application --}}
                    <div class="card card-body shadow-sm border-0">
                        <h6 class="border-bottom border-gray pb-1 mb-3">Nieuwsberichten overzicht</h6>

                        <div class="table-responsive">
                            <table class="table table-sm table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" scope="col">Auteur</th>
                                        <th class="border-top-0" scope="col">Status</th>
                                        <th class="border-top-0" scope="col">Titel</th>
                                        <th class="border-top-0" scope="col">Weergaves</th>
                                        <th class="border-top-0" scope="col">&nbsp;</th> {{-- Column only dedicated to the function shortcuts --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article) {{-- Loop trough the articles --}}
                                        <tr>
                                            <td class="font-weight-bold text-secondary">{{ $article->creator->name ?? config('app.name') | ucfirst }}</td>

                                            <td> {{-- Status indicator --}}
                                                @if (! $article->is_public)
                                                    <span class="badge text-white badge-info">Klad versie</span>
                                                @elseif ($article->is_public && $article->publicatie_datum->gt(now()))
                                                    <span class="badge badge-light">Geplande publicatie</span>
                                                @elseif ($article->is_public && $article->publicatie_datum->lt(now()))
                                                    <span class="badge badge-success">Gepubliceerd</span>
                                                @else
                                                    <span class="badge badge-secondary">Onbekend</span>
                                                @endif
                                            </td> {{-- /// END status indicator --}}

                                            <td>{{ $article->titel | ucfirst }}</td>

                                            <td class="text-muted">
                                                <i class="fe fe-eye mr-1"></i>  {{ $article->getUniqueViews() }}
                                            </td>

                                            <td>
                                                <span class="float-right">
                                                    <a href="" class="text-decoration-none text-muted">
                                                        <i class="fe fe-eye"></i>
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach {{-- /// END loop --}}
                                </tbody>
                            </table>
                        </div>

                        {{ $articles->links() }} {{-- Pagination view instance --}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
