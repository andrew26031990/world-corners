<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('menus.index') }}" class="nav-link {{ Request::is('menus*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Категории</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('locations.index') }}" class="nav-link {{ Request::is('locations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Локации</p>
    </a>
</li>
