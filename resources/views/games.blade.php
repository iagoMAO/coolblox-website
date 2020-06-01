@extends('layouts.app')

@section('content')
<head>
    @stack('ajax_games')
</head>
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
                            <span id="games-bullet-category" class="games-bullet"></span>
                            <a href="#" style="font-weight: bold;" data-category="1" class="game-category">Most Popular</a>
                        </div>
                        <div>
                            <a class="game-category" href="#">Top Favorites</a>
                        </div>
                        <div>
                            <a class="game-category" data-category="3" href="#">Recently Updated</a>
                        </div>
                        <div>
                            <a class="game-category" href="#" data-category="4">Featured Games</a>
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
        <div class="col-auto pl-5 pr-0 ml-auto">
            <div class="games-games">
                <div class="games-header">
                    Most Popular (Now)
                    <div class="games-pagination float-right">
                        @if($games->currentPage() > 1)
                            <a href="{{ $games->previousPageUrl() }}"><< Previous</a> 
                        @endif
                        Page {{$games->currentPage()}} of {{$games->lastPage()}}
                        @if($games->currentPage() < $games->lastPage())
                        
                        :<a href="{{ $games->nextPageUrl() }}">Next >></a>
                        @endif
                    </div>
                </div>
                <div class="games-games-container ml-auto mr-auto">
                    <div id="games-page" class="row justify-content-left">
                        @include('layouts.games')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection