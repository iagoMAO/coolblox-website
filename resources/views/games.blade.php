@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-left">
        <div class="col-auto p-0">
            <div class="games-category">
                <h2>Games</h2>
                <div class="pb-4">
                    <div class="games-category-header">
                        Browse
                    </div>
                    <div class="games-categories">
                        <div>
                            <span class="games-bullet"></span>
                            <a class="game-category" href="#"><strong>Most Popular</strong></a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Top Favorites</a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Recently Updated</a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Featured Games</a>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="games-category-header">
                        Time
                    </div>
                    <div class="games-categories">
                        <div>
                            <span class="games-bullet"></span>
                            <a class="game-category" href="#"><strong>Now</strong></a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Past Day</a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Past Week</a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Past Month</a>
                        </div>
                        <div>
                            <a class="game-category" href="#">All Month</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto pl-5 pr-0">
            <div class="games-games">
                <div class="games-header">
                    Most Popular (Now)
                    <div class="games-pagination float-right">
                        Page 1 of 1: <a href="#">Next >></a>
                    </div>
                </div>
                <div class="games-games-container ml-auto mr-auto">
                    <div class="row justify-content-left">
                        @foreach($games as $game)
                            @php
                                $user = \App\User::where('id','=',$game->uid)->first();
                            @endphp
                            <div class="col-auto p-0 pr-4 pb-3">
                                <div class="place-container">
                                    <div class="place-thumbnail">
                                        <a href="/place/{{$game->id}}">
                                            <img src="{{asset('/img/res/place.png')}}">
                                        </a>
                                    </div>
                                    <div class="place-name">
                                        <a href="/place/{{$game->id}}">{{$game->name}}</a>
                                    </div>
                                    <div class="place-details">
                                        <span class="place-detail-label">Updated:</span>
                                        <span class="place-detail-string">{{$game->updated_at->diffForHumans()}}</span>
                                    </div>
                                    <div class="place-details">
                                        <span class="place-detail-label">Creator:</span>
                                        <span class="place-detail-string"><a href="/user/{{$user->id}}">{{$user->name}}</a></span>
                                    </div>
                                    <div class="place-details">
                                        <span class="place-detail-label">Favorited:</span>
                                        <span class="place-detail-string">0 times</span>
                                    </div>
                                    <div class="place-details">
                                        <span class="place-detail-label">Played:</span>
                                        <span class="place-detail-string">0 times</span>
                                    </div>
                                    <div id="place-counter" class="place-details">
                                        <span class="place-detail-label">0 players online</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
