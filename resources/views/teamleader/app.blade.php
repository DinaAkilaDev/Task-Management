<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
@include('layouts.css')
<!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">TASK MANGEMENT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex">
                <div class=" btn-group">
                    @guest
                        @if (Route::has('login'))

                            <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Login') }}</a>

                        @endif
                    @else
                        <button type="button" class="menu-btn  btn btn-outline-dark dropdown-toggle text-light"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="menu dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/teamleader/profile') }}">Setting</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                </div>
                <img src="{{'/storage/'. Auth::user()->photo}}" alt=""
                     style="width: 40px ; height: 40px; margin-right: 15px;">
                @endguest
            </div>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>

</div>
{{--    @include('layouts.js')--}}
</body>
</html>
