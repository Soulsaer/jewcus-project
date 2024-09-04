@extends('adminlte::page')

@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0 mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{URL::to('/admin/users')}}">Customers</a></li>
            <!-- <li class="breadcrumb-item active"><a href="{{URL::to('/admin/user/'.$user->id)}}">{{ $user->id }}</a></li> -->
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                    <div class="card-tools">
                        <!-- <a class="btn btn-primary btn-sm" href="{{ url('admin/user/'.$user->id) }}"><i class="fas fa-eye"></i> View</a> -->
                        <a class="btn btn-primary btn-sm" href="{{ route('user.wallet', ['id' => $user->id]) }}"><i class="fas fa-wallet"></i> Wallet</a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url('admin/user/'.$user->id.'/update') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Title" value="{{ old('name', $user->name) }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="onclick_value">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ old('email', $user->email) }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="{{ old('username', $user->username) }}" required>
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <label for="mobile">Mobile</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" value="{{ old('mobile', $user->mobile) }}" required>
                                    </div>
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="is_block" id="is_block" <?php if($user->is_blocked == 1) echo "checked"; ?>>
                                            <label class="custom-control-label" for="is_block">Block this user</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="is_suspend" id="is_suspend" <?php if($user->is_suspend == 1) echo "checked"; ?>>
                                            <label class="custom-control-label" for="is_suspend">Suspend this user</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="ml-1 btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                  Click here to change password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer clearfix">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-lg" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="change_password_form">
                        <div class="row">
                            <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{ $user->id }}">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <input type="text" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Confirm Password</label>
                                    <input type="text" name="confirm_password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="change_password" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
<!-- #/ container -->
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#change_password").click(function(e) {
            e.preventDefault();

            var password = $('#password').val();
            var user_id = $('#user_id').val();

            $.ajax({
                type: "POST",
                url: "{{ url('admin/user/change-password') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "user_id": user_id,
                    "password": password
                },
                success: function(data){
                    if (data.success == true) {
                        $('#modal-lg').modal('toggle');
                        toastr.success(data.message);
                    }
                    else {
                        $('#modal-lg').modal('toggle');
                        toastr.error("Something went wrong")

                    }
                    $('#password').val('');
                    $('#confirm_password').val('');
                }
            });
        })

        $('#change_password_form').validate({ // initialize the plugin
            rules: {
                password: {
                    required: true,
                    minlength: 6,
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                }
            },
            errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });


</script>
@stop
