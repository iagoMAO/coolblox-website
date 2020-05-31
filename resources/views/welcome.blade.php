@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left pb-2">
        <div class="col-auto p-0">
            <div id="login-box" class="box-container">
                <h5 class="box-header">
                    @guest
                    Member Login
                    @else
                    Logged In
                    @endguest
                </h5>
                <div class="box-content">
                    @guest
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login-input-group">
                            <label for="name">Character Name</label>
                            <input id="login-input" type="name" class="input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="login-input-group">
                            <label for="password">Password</label>
                            <input id="login-input" type="password" class="input" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        </div>
                        <div class="login-input-group justify-content-center text-center">
                            <button type="submit" class="button">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="login-input-group justify-content-center text-center">
                            <a href="/register" class="button">
                                {{ __('Register') }}
                            </a>
                        </div>
                    </form>
                    @else
                        <img src="{{asset('/img/res/player.png')}}">
                    @endguest
                </div>
            </div>
        </div>
        <div class="col-auto px-2">
            <div id="trailer-box" class="box-container">
                <embed type="application/x-shockwave-flash" src="http://noobtube.asia/2009/player.swf?flvurl=http://passados.local/trailer.mp4" style="" id="movie_player" name="movie_player" bgcolor="#000000" quality="high" allowfullscreen="true" allowscriptaccess="always" flashvars="vq=null&amp;video_id=frog&amp;l=167&amp;sk=Vnur-Y_v1_ydWWGwFDo-lWRFyyrJDLQsC&amp;fmt_map=6/720000/7/0/0&amp;t=OEgsToPDskIaTZRI6WGtBuV7RsPGLEwI&amp;hl=en&amp;plid=AART2Y-pHEmXDvDEAAAAoIQ8YAA&amp;playnext=0&amp;enablejsapi=1" width="424" height="250">
            </div>
        </div>
        <div class="col-auto p-0">
            <div id="square-ad" class="box-container">
                <img src="{{asset('/img/res/frog.jpg')}}">
            </div>
        </div>
    </div>
    <div class="row justify-content-left">
        <div class="col-auto p-0">
            <a href="/register">
                <div id="playnow-ad" class="box-container">

                </div>
            </a>
            <div id="featured-place" class="box-container my-2">
                <div id="featured-place-header">
                    Featured Free Game: {{$game->name}}
                </div>
                <div class="row justify-content-left ml-2">
                    <div class="col-auto p-0">
                        <div style="border: 0;" class="place-big-thumbnail">
                            <a href="/place/{{$game->id}}">
                                <img src="{{asset('/img/res/place.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto pl-2">
                        <a href="/place/{{$game->id}}">
                            <img src="{{asset('/img/res/PlayThis.png')}}">
                        </a>
                        <div class="featured-place-detail">
                            Updated: {{$game->updated_at->diffForHumans()}}
                        </div>
                        <div class="featured-place-detail">
                            Favorited: 0 times
                        </div>
                        <div class="featured-place-detail">
                            Visited: 0 times
                        </div>
                        <div class="featured-place-avatar">
                            <img src="{{asset('/img/res/player.png')}}">
                        </div>
                        <div class="featured-place-detail">
                            Creator: <a href="/user/{{$user->id}}">{{$user->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto p-0 ml-2">
            <div id="roblox-facts" class="box-container">
                <h5>
                    {{ strtoupper(config('app.name')) }} Facts
                </h5>
                <div class="container">
                    <div class="marqueepls">
                        <div class="frontpage-marquee-text">
                            <span class="frontpage-house-icon float-left"></span>
                            <a href="/place/{{$game->id}}">{{$game->name}}</a>
                            <span>has been favorited <strong>0</strong> times today</span>
                        </div>
                        <div class="frontpage-marquee-text">
                            <span class="frontpage-house-icon float-left"></span>
                            <span>{{config('app.name')}} is cool!</span>
                        </div>
                        <div class="frontpage-marquee-text">
                            <span class="frontpage-house-icon float-left"></span>
                            <span>{{config('app.name')}} is cool!</span>
                        </div>
                        <div class="frontpage-marquee-text">
                            <span class="frontpage-house-icon float-left"></span>
                            <span>{{config('app.name')}} is cool!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
