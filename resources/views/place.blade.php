@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-left">
        <div class="box-container" id="place-box">
            <h5 id="box-header-large" class="box-header">{{$place->name}}</h5>
            <div class="place-box-container">
                <div class="row justify-content-left p-0 m-0">
                    <div class="col-auto p-0">
                        <div class="place-big-thumbnail">
                            <img src="{{asset('/img/res/place.png')}}">
                        </div>
                        <div class="place-big-area my-2 text-center py-3">
                            <span class="place-big-public"></span>
                            <span class="place-big-public-text">Public</span>
                            <span class="place-big-copy"></span>
                            <span class="place-big-public-text">Copy Protection: </span>
                            <span class="place-big-public-text">CopyLocked</span>
                            <a href="#" class="ml-auto mr-auto place-big-playbtn mt-1"></a>
                        </div>
                    </div>
                    <div class="col-auto pl-2 pr-0">
                        <div class="place-big-info">
                            <h3>{{strtoupper(config('app.name'))}} Place</h3>
                            <div class="place-big-avatar">
                                <img src="{{asset('/img/res/player.png')}}">
                            </div>
                            <div id="place-big-details" class="place-details">
                                <span class="place-detail-label">Creator:</span>
                                <span class="place-detail-string"><a href="/user/{{$user->id}}">{{$user->name}}</a></span>
                            </div>
                            <div id="place-big-details" class="place-details">
                                <span class="place-detail-label">Updated:</span>
                                <span class="place-detail-string">{{$place->updated_at->diffForHumans()}}</span>
                            </div>
                            <div id="place-big-details" class="place-details">
                                <span class="place-detail-label">Favorited:</span>
                                <span class="place-detail-string">0 times</span>
                            </div>
                            <div id="place-big-details" class="place-details">
                                <span class="place-detail-label">Visited:</span>
                                <span class="place-detail-string">0 times</span>
                            </div>
                            <div id="place-big-details" class="place-details mt-2">
                                <span class="place-detail-label">Description:</span>
                            </div>
                            <div class="place-big-description my-1">
                                {{$place->desc}}
                            </div>
                        </div>
                        @if($owner)
                            <div class="place-big-action">
                                <a href="{{$place->id}}/edit">Configure this place</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
