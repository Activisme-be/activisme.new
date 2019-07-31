<a class="nav-link {{ active('home') }}" href="{{ route('home') }}">
    <i class="fe fa-fw icon-navbar fe-home mr-1"></i> Dashboard
</a>

<a class="nav-link {{ active(['admin.news.*', 'admin.news.categories.*']) }}" href="{{ route('admin.news.overview') }}">
    <i class="far fa-fw fa-newspaper icon-navbar mr-1"></i> Nieuws
</a>

<a class="nav-link" href="">
    <i class="far fa-fw fa-calendar-alt icon-navbar mr-1"></i> Evenementen
</a>

<a class="nav-link" href="">
    <i class="fas fa-fw fa-pencil-alt icon-navbar mr-1"></i> Petities
</a>
