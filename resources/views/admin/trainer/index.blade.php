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

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

            <h1 style="text-align: center">Trainers</h1>
        </div>
        <div class="col-md-12">
            <a href="{{ route('dashboard.trainer.create') }}">
                <button class="btn btn-info m-3">Add Trainer</button>
            </a>
        </div>

        <!-- content -->
        <div class="col-md-12">
            @foreach ($trainer as $data=>$trainer)

            <div class="row">
                <div class="card">
                    <div style="padding: 50px">
                      <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/trainer') }}/{{ $trainer->image ?? ''}}" class="float-start" style="height: 200px; width: 200px; border-radius: 50%;">
                        </div>
                        <div class="col-md-9">
                            <h3>{{ $trainer->name ?? ''}}</h3>
                            <h4>{{ $trainer->department ?? ''}}</h4>

                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $trainer->description ?? ''}}
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <div>
                                <a href="{{ route('dashboard.trainer.edit', $trainer->id) }}">
                                    <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                </a>
                                <a href="{{ route('dashboard.trainer.delete', $trainer->id) }}">
                                    <button class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- End trainer item -->
            @endforeach
        </div>

    </div>
</div>



@endsection
