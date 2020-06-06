@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div id="login-main-box" class="box-container px-3 pt-3">
            <div class="row">
                <div class="col-auto">
                    <h6 style="font-weight: bold; font-size: 16px; letter-spacing: 2px;">Log In</h6>
                    <div class="login-main-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-input-group">
                                <label for="name">User Name:</label>
                                <input type="text" name="name" class="login-main-input"></input>
                            </div>
                            <div class="login-input-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="login-main-input"></input>
                            </div>
                            <div class="login-input-group">
                                <input type="submit" class="button-weird" value="Log In"></input>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-auto ml-auto">
                    <div class="login-main-right px-3 py-2">
                        <h6 style="font-weight:bold; font-size: 16px; letter-spacing: 2px;">New User?</h6>
                        <p>
                            You need an account to play {{ strtoupper(config('app.name')) }}.
                        </p>
                        <a href="/register" class="button-large">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
