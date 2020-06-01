@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-left">
        <div class="col-auto p-0">
            <div class="box-container text-center" id="profile-box-container">
                <h5>{{$user->name}}</h5>
                <span class="profile-box-text">
                    Your {{strtoupper(config('app.name'))}}:
                </span>
                <a class="profile-box-text" href="#">{{config('app.url')}}/user/{{$user->id}}</a>
                <div class="row justify-content-left pt-3 m-0">
                    <div class="col-auto p-0">
                        <div class="profile-avatar-box">
                            <img src="{{asset('/img/res/player.png')}}">
                        </div>
                    </div>
                    <div class="col-auto px-5">
                        <div class="profile-action-box text-left">
                            <a href="#">Inbox</a>
                            <a href="#">Change Character</a>
                            <a href="#">Edit Profile</a>
                            <a href="/user/{{Auth::user()->id}}">View Public Profile</a>
                            <a id="disabled">Create New Place</a>
                            <p>(0 Remaining)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto p-0 pl-2">
            <div class="box-container" id="profile-box-showcase">
                <h5 class="box-header" id="showcase-header">Showcase</h5>
                @foreach($places as $place)
                    @php
                        $owner = $place->uid == Auth::user()->id;
                    @endphp
                    <div class="showcase-place">
                        <h5 onclick="showPlace({{$place->id}})" class="box-header" id="showcase-place-header">{{$place->name}}</h5>
                        <div @if($loop->first) style="display:block;" @else style="display:none" @endif id="place{{$place->id}}" class="showcase-place-content">
                            <span class="place-big-public"></span>
                            <span class="place-big-public-text" style="color: #000">Public</span>
                            <a href="#" class="ml-auto mr-auto place-big-playbtn"></a>
                            <div class="place-big-thumbnail my-2">
                                <a href="/place/{{$place->id}}">
                                    <img src="{{asset('/img/res/place.png')}}">
                                </a>
                            </div>
                            <div class="showcase-place-description">{{$place->desc}}</div>
                            @if($owner)
                            <div class="showcase-place-action">
                                <a href="/place/{{$place->id}}/edit">Configure this place</a>
                            </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
