@extends('layouts.app')
@section('title')
    Forgot Password
@endsection
@section('content')
    <section class="img js-fullheight" style="background-image: url(images/bg.jpg);">
        <div class="ftco-section" style="background-color: #00000070 ; height: 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        @include('inc.messages')
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Forgot Password</h3>
                            <form method="post" action="{{ url('/forgot-password') }}" class="signin-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Forgot
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
