@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-auto p-0">
            <div class="box-container justify-content-center" id="user-edit-box">
                <h5 id="box-header-large" class="box-header">Edit Profile</h5>
                <div class="alert-session ml-auto mr-auto">
                    @if(session()->has('msg'))
                        <div class="place-edit-alert mt-2 mb-0 text-center">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                </div>
                <div class="user-edit-box-container p-3 ml-auto mr-auto">
                    <fieldset>
                        <legend>Change your password</legend>
                        <div class="register-fieldset-p">
                            Click the button below to change your password.
                            <div class="text-center edit-link">
                                <a href="#">Change Password</a>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Update Your Email Address</legend>
                        <div class="register-fieldset-p">
                            Click the button below to change your email address.
                            <div class="text-center edit-link">
                                <a href="#">Update Email</a>
                            </div>
                        </div>
                    </fieldset>
                    <form method="POST" action="">
                        @csrf
                        <fieldset>
                            <legend>Update your personal blurb</legend>
                            <div class="register-fieldset-p">
                                Describe yourself here (max. 1000 characters). Make sure not to provide any details that can be used to identify you outside {{strtoupper(config('app.name'))}}.
                            </div>
                            <textarea placeholder="{{ Auth::user()->blurb }}" class="edit-profile-blurb float-right" type="text" name="blurb"></textarea>
                        </fieldset>
                        <div class="text-center pt-2">
                            <button class="button" type="submit">Update</button>
                            <a class="button" href="">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
