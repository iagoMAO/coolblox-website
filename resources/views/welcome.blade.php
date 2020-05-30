@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left pb-2">
        <div class="col-auto p-0">
            <div id="login-box" class="box-container">
                <h5 class="box-header">
                    Member Login
                </h5>
            </div>
        </div>
        <div class="col-auto px-2">
            <div id="trailer-box" class="box-container">
                <embed type="application/x-shockwave-flash" src="http://noobtube.asia/2009/player.swf?autoplay=0" style="" id="movie_player" name="movie_player" bgcolor="#000000" quality="high" allowfullscreen="true" allowscriptaccess="always" flashvars="vq=null&amp;video_id=frog&amp;l=167&amp;sk=Vnur-Y_v1_ydWWGwFDo-lWRFyyrJDLQsC&amp;fmt_map=6/720000/7/0/0&amp;t=OEgsToPDskIaTZRI6WGtBuV7RsPGLEwI&amp;hl=en&amp;plid=AART2Y-pHEmXDvDEAAAAoIQ8YAA&amp;playnext=0&amp;enablejsapi=1" width="426" height="252">
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

            </div>
        </div>
        <div class="col-auto p-0 ml-2">
            <div id="roblox-facts" class="box-container">
                <h5>
                    {{config('app.name')}} Facts
                </h5>
                <p>1 - we are awesome</p>
                <p>2 - we are awesome</p>
                <p>3 - we are awesome</p>
            </div>
        </div>
    </div>
</div>
@endsection
