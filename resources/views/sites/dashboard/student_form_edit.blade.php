@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')

<div class="container-fluid col-md-6">
    <form method="POST" action="{{ url('student-update', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="NISN" class="form-label">NISN</label>
                    <input type="text" class="form-control" name="NISN" id="NISN" value="{{ $data->NISN }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                        value="{{ $data->phoneNumber }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ $data->address }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection @section('footer') @parent @endsection