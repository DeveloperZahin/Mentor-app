@extends('admin.layouts.master')
@section('content')
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
                    <a href="{{ route('dashboard.courses.index') }}">
                        <button class="btn btn-info m-3">Show course</button>
                    </a>
                </div>
            </div>
            <!-- hero form -->
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('dashboard.coursesfeatures.update', ['id' => $courseFeature->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h4 class="card-title">Add Feature</h4><hr>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Course Name <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" value="{{ $course->name }}" readonly required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Title <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" value="{{ $courseFeature->title }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Name <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="{{ $courseFeature->name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Description <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="desc" required>{{ $courseFeature->desc }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
