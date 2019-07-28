<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Index' }} | {{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/94dda7fdbf.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="content">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Onze visie</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Kalender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Petities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Nieuws</a>
                            </li>
                            <li class="nav-item {{ active('support-us') }}">
                                <a class="nav-link" href="{{ route('support-us') }}">Ondersteun ons</a>
                            </li>
                            <li class="nav-item {{ active('guest.contact') }} ">
                                <a class="nav-link" href="{{ route('guest.contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main role="main">
                @yield('content')
            </main>
        </div>
        <footer id="myFooter">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-sm-3 text-left myCols">
                        <h5>Locatie</h5>
                        Activisme_BE<br/>
                        Zonnebeekseweg 343<br/>
                        8900 Ieper, België<br/>
                        00/000.00.00<br/>
                    </div>
                    <div class="col-sm-3 text-left myCols">
                        <h5>Nuttige links</h5>
                        <ul>
                            <li><a href="{{ route('login') }}">Aanmelden</a></li>
                            <li><a href="">Onze visie</a></li>
                            <li><a href="{{ route('support-us') }}">Ondersteun ons</a></li>
                            <li><a href="{{ route('guest.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-left myCols">
                        <h5>Ondersteund</h5>
                        <ul>
                            <li><a href="http://www.icanw.org/">ICAN</a></li>
                            <li><a href="https://vrede.be/">Vrede VZW</a></li>
                            <li><a href="https://nonukes.be/">Belgische Coalitie Kernwapens</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-left myCols">
                        <h5>Voorwaarden</h5>
                        <ul>
                            <li><a href="{{ route('policies.terms-of-service') }}">Algemene voorwaarden</a></li>
                            <li><a href="{{ route('policies.privacy') }}">Privacy beleid</a></li>
                        </ul>

                        <h5>Contact</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/ActivismeBE/"><i class="fe social-facebook fe-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/Activisme_be"><i class="fe social-twitter fe-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{ route('guest.contact') }}"><i class="fe social-mail fe-mail"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    <p class="ml-0 text-left">&copy; {{ date('Y') }} {{ config('app.name') }} - Alle rechten voorbehouden</p>
                </div>
            </div>
        </footer>
    </body>
</html>
