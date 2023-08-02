@extends('layouts.app')
@section('title')
    Reset Password
@endsection
@section('content')
    <section class="img js-fullheight" style="background-image: url(images/bg.jpg);">
        <div class="ftco-section" style="background-color: #00000070 ; height: 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        @include('inc.messages')
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Reset Password</h3>
                            <form method="post" action="{{ url('/reset-password') }}" class="signin-form">
                                @csrf
                                <input type="hidden" name="token" value="{{ request()->route('token') }}">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-mail" name="email">
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" placeholder="Password"
                                        name="password">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="password_confirmation">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Reset
                                        Password</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
