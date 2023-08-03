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

                    <a type="button" href=" " class="btn btn-info"data-bs-toggle="modal" data-bs-target="#add-modal"
                        data-toggle="modal" data-target="#add-modal" style="padding: 12px;">
                        Add New User
                    </a>
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
                                            {!! $user->image ? '<img src="' . asset($user->image) . '" alt="x"  >' : '' !!}
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


        <!--   Add New User -->
        <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark">
                        <form method="POST" action="{{ route('user.store') }}" class="signin-form">
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
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control" placeholder="Image" name="image">
                            </div>

                            <div class="form-group">
                                <select class="form-select" name="role">
                                    <option selected>Select Your Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- js -->

@endsection
