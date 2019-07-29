<a class="nav-link {{ active('home') }}" href="{{ route('home') }}">
    <i class="fe icon-navbar fe-home mr-1"></i> Dashboard
</a>

<a class="nav-link {{ active(['admin.news.*', 'admin.news.categories.*']) }}" href="{{ route('admin.news.overview') }}">
    <i class="far fa-newspaper icon-navbar mr-1"></i> Nieuws
</a>
