@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-auto p-0">
            <div class="box-container justify-content-center" id="register-box">
                <h5 id="box-header-large" class="box-header">Create a Free {{ strtoupper(config('app.name')) }} Account</h5>
                <div class="register-box-container p-3 ml-auto mr-auto">
                    <h5 id="register-box-header">Welcome to our really quick signup</h5>
                    <div class="register-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="register-block">
                                <fieldset class="register-fieldset">
                                    <legend>Choose a name for your {{ strtoupper(config('app.name')) }} character</legend>
                                    <div class="register-fieldset-p">
                                        Use 3-20 alphanumeric characters: A-Z, a-z, 0-9, no spaces.
                                        Please do not use your name or any other information that identifies you in real life.
                                    </div>
                                    <div class="register-fieldset-username my-5">
                                        <label for="name">Character Name:</label>
                                        <input type="text" name="name" class="input">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="register-block">
                                <fieldset class="register-fieldset">
                                    <legend>Choose an e-mail for your {{ strtoupper(config('app.name')) }} account</legend>
                                    <div class="register-fieldset-p">
                                        Use 3-20 alphanumeric characters: A-Z, a-z, 0-9, no spaces.
                                    </div>
                                    <div class="register-fieldset-username my-5">
                                        <label for="email">E-Mail Address:</label>
                                        <input type="email" name="email" class="input">
                                    </div>
                                </fieldset>
                            </div>
                            <div id="last" class="register-block">
                                <fieldset class="register-fieldset">
                                    <legend>Choose your {{ strtoupper(config('app.name')) }} password</legend>
                                    <div class="register-fieldset-p">
                                    6-20 characters, no spaces This is the KEY to your account. Don't pick something obvious like "password", "asdf" or "qwerty".
                                    </div>
                                    <div class="register-fieldset-username my-5">
                                        <div>
                                            <label for="password">Password:</label>
                                            <input type="password" name="password" class="input">
                                        </div>
                                        <div>
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" class="input">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <button type="submit" id="sign-up-button" class="button-large">Sign Up!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto ml-auto p-0">
            <div class="box-container" id="register-already-box">
                <h5 id="box-header-medium" class="box-header">Already Registered?</h5>
                <div class="register-already-content">
                    <div>
                        If you just need to login, go to the <a href="/login">Login</a> page.
                    </div>
                    <div class="py-2">
                        If you have already registered but you still need to download the game installer, go directly to <a href="/">download</a>.
                    </div>
                </div>
            </div>
            <div class="box-container my-4" id="register-terms-box">
                <h5 id="box-header-medium" class="box-header">Terms & Conditions</h5>
                <div class="register-terms-content">
                    <div>
                        Registration does not provide any guarantees of service. See our <a href="/">Terms of Service</a> and <a href="/">Licensing Agreement</a> for details.
                    </div>
                    <div class="py-2">
                        {{ strtoupper(config('app.name')) }} will not share your email address with 3rd parties. See our <a href="/">Privacy Policy</a> for details.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
