<a class="nav-link {{ active('kiosk.dashboard') }}" href="{{ route('kiosk.dashboard') }}">
    <i class="fe icon-navbar fe-home mr-1"></i> Dashboard
</a>

@if ($currentUser->hasAnyRole(['admin', 'webmaster']))
    <a class="nav-link {{ active('users.*') }}" href="{{ route('users.index') }}">
        <i class="fe icon-navbar fe-users mr-1"></i> Gebruikers
    </a>

    <a class="nav-link {{ active('audit.*') }}" href="{{ route('audit.overview') }}">
        <i class="fe icon-navbar fe-activity mr-1"></i> Audit
    </a>
@endif

@if ($currentUser->hasRole('webmaster'))
    <a class="nav-link {{ active('alerts.*') }}" href="{{ route('alerts.index') }}">
        <i class="fe icon-navbar fe-bell mr-1"></i> Alerts
    </a>
@endif
