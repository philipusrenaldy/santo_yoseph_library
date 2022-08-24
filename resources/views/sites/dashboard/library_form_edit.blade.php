@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')

<div class="container-fluid">
    <form method="POST" action="{{ url('/book-update', $data->id) }}">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="book_name" class="form-label">Book Name</label>
                    <input type="text" class="form-control" name="book_name" id="book_name"
                        value="{{ $data->book_name }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" id="author" value="{{ $data->author }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher" id="publisher"
                        value="{{ $data->publisher }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="published_city" class="form-label">Published City</label>
                    <input type="text" class="form-control" name="published_city" id="published_city"
                        value="{{ $data->published_city }}">
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
                    <label for="ISBN" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="ISBN" id="ISBN" value="{{ $data->ISBN }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="book_code" class="form-label">Book Code</label>
                    <input type="text" class="form-control" name="book_code" id="book_code"
                        value="{{ $data->book_code }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="book_size" class="form-label">Book Size</label>
                    <input type="text" class="form-control" name="book_size" id="book_size"
                        value="{{ $data->book_size }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <input type="text" class="form-control" name="note" id="note" value="{{ $data->note }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="abstract" class="form-label">Abstract</label>
                    <input type="text" class="form-control" name="abstract" id="abstract" value="{{ $data->abstract }}">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <input type="text" class="form-control" name="synopsis" id="synopsis" value="{{ $data->synopsis }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection @section('footer') @parent @endsection