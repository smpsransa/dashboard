<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="d-flex flex-column vh-100">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" style="font-weight: bold;" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ AnyFunc::activeMenu('cctv') }}"
                                href="{{ route('cctv.index') }}">{{ __('CCTV') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ AnyFunc::activeMenu('wifi') }}"
                                href="{{ route('wifi.index') }}">{{ __('Wifi') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ AnyFunc::activeMenu('service') }}"
                                href="{{ route('service.index') }}">{{ __('Layanan Digital') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ AnyFunc::activeMenu('hotspot') }}"
                                href="{{ route('hotspot.index') }}">{{ __('Hotspot') }}</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="h-100 overflow-hidden d-flex flex-row">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 160px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="{{ route('hotspot.index') }}"
                            class="nav-link {{ AnyFunc::sideMenu('hotspot', 'link-dark') }}">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i class="bi bi-table"></i>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i class="bi bi-grid"></i>
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark ">
                            <i class="bi bi-people-fill"></i>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link {{ AnyFunc::subMenu('setup') ? '' : 'link-dark' }}"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                            <i class="bi bi-sliders"></i>
                            Setup
                        </button>
                        <div class="collapse show" id="dashboard-collapse" style="">
                            <ul class="ml-2" style="list-style-type: none;">
                                <li>
                                    <a href="{{ route('setup.index') }}"
                                        class="nav-link {{ AnyFunc::sideMenu('setup', 'link-dark') }}">
                                        Intro
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('setup.api') }}"
                                        class="nav-link {{ AnyFunc::sideMenu('setup/api', 'link-dark') }}">
                                        Api
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('setup.hs') }}"
                                        class="nav-link {{ AnyFunc::sideMenu('setup/hs', 'link-dark') }}">
                                        HS
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('setup.userman') }}"
                                        class="nav-link {{ AnyFunc::sideMenu('setup/userman', 'link-dark') }}">
                                        Userman
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
            </div>
            <main class="p-3 w-100">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
