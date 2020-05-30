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
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head>
<body>
    <div class="justify-content-center" id="app">
        <div class="page-content ml-auto mr-auto py-2">
            <nav class="nav-nav">
                <div class="banner">
                    <div class="justify-content-center text-center nav-play">
                        <a href="/register">
                            <img class="nav-logo-rbx" src="{{asset('/img/res/Holiday3Button.png')}}">
                        </a>
                    </div>
                    <div class="nav-options">
                        <a href="/login" class="p-1 nav-options-link">Login</a>
                    </div>
                    <div class="nav-logo ml-auto mr-auto text-center">
                        <a href="/">
                            <img src="{{asset('/img/res/roblox_logo.png')}}" class="nav-logo-rbx">
                        </a>
                    </div>
                </div>
                <div class="nav-navbar">
                    <div class="nav-links px-5">
                        <div class="nav-link p-2">
                            <a href="/home">
                                My {{config('app.name')}}
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
        </div>
    </div>
</body>
</html>
