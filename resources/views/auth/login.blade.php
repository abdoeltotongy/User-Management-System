@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <section class="img js-fullheight" style="background-image: url(images/bg.jpg);">
        <div class="ftco-section" style="background-color: #00000070 ; height: 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            @include('inc.messages')
                            <h3 class="mb-4 text-center">Have an account?</h3>
                            <form method="post" action="{{ url('/login') }}" class="signin-form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" placeholder="Password"
                                        name="password">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50">
                                        <label class="checkbox-wrap checkbox-primary">Remember Me
                                            <input type="checkbox" name="remember" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="{{ url('/forgot-password') }}" style="color: #fff">Forgot Password ? </a>
                                    </div>
                                </div>
                            </form>
                            <div class="ml-4 text-center">
                                <button class="btn btn-danger">
                                    <a href="{{ route('register') }}" style="color: #fff">Don`t Have Account</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
