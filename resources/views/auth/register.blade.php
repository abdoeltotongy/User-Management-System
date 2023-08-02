@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <div class="img js-fullheight" style="background-image: url(images/bg.jpg);">
        <section class="ftco-section" style="background-color: #00000070 ; height: 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Register</h3>
                            @include('inc.messages')
                            <form method="POST" action="{{ url('/register') }}" class="signin-form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name" name="name">

                                </div>
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
                                    <select class="form-select" name="role">
                                        <option selected>Select Your Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                                </div>

                            </form>

                            <div class="ml-4 text-center">
                                <button class="btn btn-danger">
                                    <a href="{{ route('login') }}" style="color: #fff"> Have Account</a>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
