@extends('admin.layouts.master')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Features Manage</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.courses.index') }}">Course</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Features</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <h5 class="text-center">Course Name: {{ $course->name }}</h5>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- flash message -->
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="col-md-12">
                <div style="float: right">
                    <a href="{{ route('dashboard.coursesfeatures.create',$course->id) }}">
                        <button class="btn btn-info m-3">New Feature Add</button>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Feature</h5>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">

                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>desc</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($coursesfeatures as $courseFeature)
                                    <tr>
                                        <td><img src="{{ asset('images/course/feature') }}/{{ $courseFeature->image ?? ''}}" width="100" height="100"></td>
                                        <td>{{ $courseFeature->title ?? ''}}</td>
                                        <td>{{ $courseFeature->name ?? ''}}</td>
                                        <td>{{ $courseFeature->desc ?? ''}}</td>
                                        <td>
                                            <a href="{{ route('dashboard.coursesfeatures.edit', ['id' => $courseFeature->id]) }}">
                                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                            </a>
                                            <a href="{{ route('dashboard.coursesfeatures.delete', $courseFeature->id) }}">
                                                <button class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
