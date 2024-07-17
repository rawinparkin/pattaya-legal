@php
$route = Route::current()->getName();
@endphp



<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Pattaya<span>Legal Services </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ ($route == 'home')? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ ($route == 'home.about')? 'active' : '' }}"><a href="{{ route('home.about') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ ($route == 'home.blog')? 'active' : '' }}"><a href="{{ route('home.blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item {{ ($route == 'home.contact')? 'active' : '' }}"><a href="{{ route('home.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="{{ route('home.contact') }}" class="nav-link">Get Consultation</a>
                </li>
            </ul>
        </div>
    </div>
</nav>