@extends('admin.layouts.master')
@section('title')
    Profile
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href=""{{route('admin.dashboard')}}>Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row mt-sm-4">

                <div class="col-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{route('admin.profile.update')}}" class="needs-validation"
                        enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h4>Update Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="mb-3">
                                            <img src="{{Auth()->user()->image ? asset(Auth()->user()->image) : asset('admin/assets/img/avatar/avatar-1.png')}}" alt="" height="100px">
                                        </div>
                                        <label>Name</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="card">
                        <form method="post" action="{{route('admin.password.update')}}" class="needs-validation">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h4>Change Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
