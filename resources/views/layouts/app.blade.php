<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-black" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <a role="button" class="navbar-burger burger"
        aria-expanded="false"
        aria-label="{{ __('Toggle navigation') }}"
        data-target="navbarSupportedContent">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>

        <div class="navbar-menu" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="navbar-start">

            </div>

            <!-- Right Side Of Navbar -->
            <div class="navbar-end">
                <!-- Authentication Links -->
                @guest
                <a class="navbar-item" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                @if (Route::has('register'))
                <a class="navbar-item" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
                @endif
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                        @endguest
                    </ul>
                </div>
        </nav>

        <main class="section">
            @yield('content')
        </main>
    </div>
</body>
</html>
