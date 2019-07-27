@extends ('layouts.frontend')

@section('content')
    @include ('_partials.jumbotron', [
        'title' => config('app.name'),
        'buttons' => true,
        'description' => 'Een vzw die opkomt voor mensenrechten, dakloze, vluchtelingen. En die ook strijd voor een wereldvrede en andere sociale problemen.'
    ])
@endsection
