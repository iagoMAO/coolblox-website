<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/jquery.marquee.js') }}"></script>
    @stack('ajax_games')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head>
<body>
    <div class="justify-content-center" id="app">
        <div class="page-content ml-auto mr-auto py-2">
            <nav class="nav-nav">
                <div class="banner">
                    <div class="justify-content-center text-center nav-play">
                        @guest
                            <a href="/register">
                                <img class="nav-logo-rbx" src="{{asset('/img/res/Holiday3Button.png')}}">
                            </a>
                        @else
                            <div class="box-container" id="user-panel">
                                <div class="user-panel-content">
                                    <span class="tickets-icon"></span>
                                    <span class="tickets-label">0 Tickets</span>
                                </div>
                            </div>
                        @endguest
                    </div>
                    <div class="nav-options">
                        @guest
                        <a href="/login" class="p-1 nav-options-link">Login</a>
                        @else
                            <span class="pl-1 nav-options-link">Logged in as {{ Auth::user()->name }} |</span>
                            <a class="nav-options-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id='logout-form' action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                    <div class="nav-logo ml-auto mr-auto text-center">
                        <a href="/">
                            <img src="{{asset('/img/res/roblox_logo.png')}}" class="nav-logo-rbx">
                        </a>
                    </div>
                </div>
                <div class="nav-navbar">
                    <div class="nav-links px-5 text-center">
                        <div class="nav-link p-2">
                            <a href="/home">
                                My {{ strtoupper(config('app.name')) }}
                            </a>
                        </div>
                        <span class="nav-seperator">|</span>
                        <div class="nav-link p-2">
                            <a href="/games">
                                Games
                            </a>
                        </div>
                        <span class="nav-seperator">|</span>
                        <div class="nav-link p-2">
                            <a href="/catalog">
                                Catalog
                            </a>
                        </div>
                        <span class="nav-seperator">|</span>
                        <div class="nav-link p-2">
                            <a href="/browse">
                                People
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="content py-3">
                @yield('content')
            </main>
            <footer>
                <hr>
                <a href="#">
                    <strong>Privacy Policy</strong>
                </a>
                |
                <a href="#">Advertise with Us</a>
                |
                <a href="#">Contact Us</a>
                |
                <a href="#">About Us</a>
                |
                <a href="#">Related Resources</a>
                |
                <a href="#">Jobs</a>
                <hr>
                <div class="legalase ml-auto mr-auto">
                    {{ strtoupper(config('app.name')) }}, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of {{config('app.name')}} Corporation, ©{{now()->year}}. Patents pending.
                    {{ strtoupper(config('app.name')) }} is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,
                    and no resemblance to the products of these companies is intended.
                    Use of this site signifies your acceptance of the Terms and Conditions.
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
