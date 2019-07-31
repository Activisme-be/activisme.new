@extends ('layouts.app', ['title' => 'Nieuws categorieen'])

@section('content')
    <div class="container-fluid py-3">
        <div class="page-header">
            <h1 class="page-title">Nieuws artikelen</h1>
            <div class="page-subtitle">categorieen</div>

            @if ($categoryCount > 0) {{-- There are news categories found in the application --}}
                <div class="page-options d-flex">
                    <a href="{{ route('admin.news.categories.create') }}" class="btn shadow-sm btn-secondary">
                        <i class="fe fe-plus"></i>
                    </a>

                    <form method="GET" action="" class="border-0 shadow-sm form-search ml-2">
                        <input type="text" class="form-search border-0 form-control" @input('term') placeholder="Zoek een category">
                    </form>
                </div>
            @endif
        </div>
    </div>

    <div class="container-fluid pb-3">
        <div class="row">
            <div class="col-md-3"> {{-- Side navigation --}}
                @include ('articles._partials.sidenav')
            </div> {{-- /// Side navigation --}}

            <div class="col-md-9"> {{-- Content --}}
                @if ($categoryCount === 0) {{-- No news categories are added in the application --}}
                    <div class="blankslate py-5 shadow-sm">
                        <h3><i class="fas fa-tags icon-navbar mr-1"></i> Geen nieuws categorieen</h3>
                        <p class="pt-2">Het lijkt erop dat er momenteel geen nieuws categorieen zijn aangemaakt op de website.</p>

                        <a href="{{ route('admin.news.categories.create') }}" class="btn btn-brand shadow-sm">
                            <i class="fe fe-plus mr-1"></i> categorie toevoegen
                        </a>
                    </div>
                @else {{-- There are news categories found --}}
                    <div class="card card-body border-0 shadow-sm">
                        <h6 class="border-bottom border-gray pb-1 mb-3">Nieuws categorieen</h6>
                         @include('flash::message') {{-- Flash session view partial --}}

                        <div class="table-responsive">
                            <table class="mb-0 table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" scope="col">Naam</th>
                                        <th class="border-top-0" scope="col">Toegevoegd door</th>
                                        <th class="border-top-0" scope="col">Aantal nieuwsartikelen</th>
                                        <th class="border-top-0" scope="col">Toegevoegd op</th>
                                        <th class="border-top-0" scope="col">&nbsp;</th> {{-- Column only dedicated for the functions --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category) {{-- Loop trough the categories --}}
                                        <tr>
                                            <td class="text-secondary font-weight-bold">{{ $category->naam | ucfirst  }}</td>
                                            <td>{{ $category->creator->name ?? config('app.name') | ucfirst }}</td>
                                            <td>{{ $category->articles->count() }} berichten</td>
                                            <td>{{ $category->created_at->diffForHumans() }}</td>

                                            <td> {{-- Option shortcuts --}}
                                                <span class="float-right">
                                                    <a href="" class="text-secondary mr-1 text-decoration-none">
                                                        <i class="fe fe-eye"></i>
                                                    </a>

                                                    <a href="{{ route('admin.news.categories.destroy', $category) }}" data-method="delete" class="text-danger text-decoration-none">
                                                        <i class="fe fe-trash-2"></i>
                                                    </a>
                                                </span>
                                            </td> {{-- /// Option shortcuts --}}
                                        </tr>
                                    @endforeach {{-- /// END loop --}}
                                </tbody>
                            </table>
                        </div>

                        {{ $categories->links() }} {{-- Pagination view partial --}}
                    </div>
                @endif {{-- /// End view dispaly logic --}}
            </div> {{-- /// Content --}}
        </div>
    </div>
@endsection
