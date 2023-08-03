@extends('layouts.app')
@section('title', 'My Profile')
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
            width: 70px;
            height: 70px;
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
                    <h4 class="card-title color-white">My Profile</h4>
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
                                <tr>

                                    <td style="width: 100px">
                                        {!! Auth::user()->image ? '<img src="' . asset(Auth::user()->image) . '">' : ' ' !!}
                                    </td>

                                    <td>
                                        {{ Auth::user()->name }}
                                    </td>
                                    <td>
                                        {{ Auth::user()->email }}

                                    </td>

                                    <td>
                                        <a type="button" class="btn btn-success edit-btn" data-id="{{ Auth::user()->id }}"
                                            data-email="{{ Auth::user()->email }}" data-name="{{ Auth::user()->name }}"
                                            href="{{ url('profile/update/{Auth::user()->id}') }}" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal" data-toggle="modal" data-target="#edit-modal">
                                            Edit & ADd Image
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>



        <!-- Edit & Add Image -->
        <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit My Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('profile.update') }}" id="edit-form"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name </label>
                                    <input type="text" name="name" class="form-control" placeholder="New Name">
                                </div>

                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" name="email" class="form-control" placeholder="New Email">
                                </div>
                                <div class="form-group">
                                    <label for="team">Add Image To My Profile</label>
                                    <input type="file" class="form-control" name="image" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" form="edit-form" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- js -->
@section('scripts')
    <script>
        $('.edit-btn').click(function() {
            let id = $(this).attr('data-id');
            let email = $(this).attr('data-email');
            let name = $(this).attr('data-name');


            $("#edit-form input[name|='id']").val(id)
            $("#edit-form input[name|='email']").val(email)
            $("#edit-form input[name|='name']").val(name)
        })
    </script>
@endsection

@endsection
