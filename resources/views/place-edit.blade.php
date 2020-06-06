@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-left">
        <div class="col-auto p-0">
            <div class="box-container justify-content-center" id="place-edit-box">
                <h5 id="box-header-large" class="box-header">Configure Place</h5>
                <div class="place-edit-box-container p-3 ml-auto mr-auto">
                    <div class="place-edit-container">
                        @if(session()->has('msg'))
                            <div class="place-edit-alert">
                                {{ session()->get('msg') }}
                            </div>
                        @endif
                        <form method="POST" action="">
                            @csrf
                            <label for="name">Name:</label>
                            <input placeholder="{{$place->name}}" class="input" name="name" type="text">

                            <div class="place-edit-thumbnail my-2">
                                <a href="/place/{{$place->id}}">
                                    <img src="{{asset('/img/res/place.png')}}">
                                </a>
                            </div>

                            <label for="name">Description:</label>
                            <textarea placeholder="{{$place->desc}}" class="input" name="desc" type="text"></textarea>

                            <label for="ipv4">IPV4 Address:</label>
                            <input placeholder="{{$place->ipv4}}" class="input" name="ipv4" type="text">

                            <label for="port">Server Port:</label>
                            <input placeholder="{{$place->port}}" class="input" name="port" type="text">

                            <div class="text-center pt-2">
                                <button class="button" type="submit">Update</button>
                                <a class="button" href="/place/{{$place->id}}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
