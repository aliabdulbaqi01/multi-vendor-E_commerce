@extends('admin.layouts.master')
@section('title')
    Create slider
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sliders</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Manage Web</a></div>
                <div class="breadcrumb-item">Create Slider</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.sliders.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Banner</label>
                                    <input type="file" class="form-control" data-tribute="true" name="banner">
                                </div>
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <input type="text" class="form-control" name="type" value="{{old('type')}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}">

                                </div>
                                <div class="form-group">
                                    <label for="">Starting Price</label>
                                    <input type="text" class="form-control" name="starting_price" value="{{old('starting_price')}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Button Url</label>
                                    <input type="text" class="form-control" name="btn_url" value="{{old('btn_url')}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Serial</label>
                                    <input type="text" class="form-control" name="serial" value="{{old('serial')}}">
                                </div>
                                <div class="from-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                    <option @selected(old('status') == 1) value="1">Active</option>
                                    <option @selected(old('status') == 0) value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
