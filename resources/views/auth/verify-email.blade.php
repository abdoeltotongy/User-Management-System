@extends('layouts.app')
@extends('layouts.header')
@section('title')
    verification
@endsection
@section('content')
    <div class="row">
        <div class="container">
            <div style="color: white ; font-size: 25px">
                A new email verification link has been emailed to you!
            </div>

            <div style="text-align: right">
                <form action="{{ url('email/verification-notification') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Resend Email</button>
                </form>
            </div>

        </div>
    </div>
@endsection
