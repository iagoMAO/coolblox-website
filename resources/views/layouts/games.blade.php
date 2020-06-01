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