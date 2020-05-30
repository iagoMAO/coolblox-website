@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="login-main-box" class="box-container px-3 pt-3">
            <div class="row">
                <div class="col-auto">
                    <h6 style="font-weight: bold">Log In</h6>
                    <div class="login-main-form">
                        <div class="login-input-group">
                            <label for="name">User Name:</label>
                            <input class="login-main-input"></input>
                        </div>
                        <div class="login-input-group">
                            <label for="name">Password:</label>
                            <input class="login-main-input"></input>
                        </div>
                        <div class="login-input-group">
                            <input type="submit" class="button-weird" value="Log In"></input>
                        </div>
                    </div>
                </div>
                <div class="col-auto ml-auto">
                    <div class="login-main-right px-3 py-2">
                        <h6 style="font-weight:bold">New User?</h6>
                        <p>
                            You need an account to play {{config('app.name')}}.
                        </p>
                        <a href="/" class="button-large">Play as Guest</a>
                        <a href="/register" class="button-large">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
