<nav class="navbar flex align-center space-between pr-4 pl-4 container">
    <a href="/" class="navbar-brand">Jigsaw</a>
    <ul class="flex align-center nav-list">
        <li class="nav-list__item">
            <a class="nav-link {{ $page->selected('/') }}" href="{{ $page->baseUrl }}">Home</a>
        </li>
        <li class="nav-list__item">
            <a class="nav-link {{ $page->selected('about') }}" href="{{ $page->baseUrl }}about">About</a>
        </li>
        <li class="nav-list__item">
            <a class="nav-link {{ $page->selected('team') }}" href="{{ $page->baseUrl }}team/">Team</a>
        </li>
        <li class="nav-list__item">
            <a class="nav-link {{ $page->selected('blog') }}" href="{{ $page->baseUrl }}blog/">Blog</a>
        </li>
    </ul>
</nav>