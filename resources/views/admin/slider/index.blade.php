@extends('admin.layouts.master')
@section('title')
    sliders
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sliders</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Manage Web</a></div>
                <div class="breadcrumb-item">Slider</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Slider Data</h4>
                            <div class="card-header-action">
                                <a href="{{route('admin.sliders.create')}}" class="btn btn-primary">New Slider</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Irwansyah Saputra</td>
                                        <td>2017-01-09</td>
                                        <td><div class="badge badge-success">Active</div></td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                        {{--      add pagination here      --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
