@extends('layouts.app')
@section('title', 'Dashboard')
@include('layouts.header')
@section('style')
    <style>
        .color-white {
            color: white
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            padding: 15px 60px;
        }

        img {
            width: 50px;
            height: 50px;
            border-radius: 50%
        }

        #edit-modal input {
            border-radius: 0%;
            border-bottom: 1px solid #666;
            color: #666 !important;

        }

        #edit-modal input::placeholder {
            color: #666 !important;
        }
    </style>
@endsection
@section('content')
    @include('inc.messages')
    <div class="row m-0">


        <div class="col-lg-12 stretch-card">
            <div class="card bg-dark">
                <div class="card-header">
                    <h4 class="card-title color-white">All Users</h4>
                </div>


                <div class="card-body">
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered color-white">
                            <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td style="width: 100px">
                                            <img
                                                src="{{ $user->image ? asset('images/avatar.png') : asset('storage/users/profile/' . $user->image) }}">

                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}

                                        </td>

                                        @if ($user->id == Auth::user()->id)
                                            <td>
                                                Can not access
                                            </td>
                                        @else
                                            <td>
                                                <a type="button" href="{{ url("user/delete/{$user->id}") }}"
                                                    class="btn btn-danger btn-rounded p-2" title="Delate">
                                                    Delete
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <!-- js -->

@endsection
