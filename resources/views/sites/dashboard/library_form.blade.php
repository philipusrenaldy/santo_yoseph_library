@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')

<div class="container-fluid col-md-8">
    <form method="POST" action="{{ url('/book-create') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="book_name" class="form-label">Book Name</label>
                    <input type="text" class="form-control" name="book_name" id="book_name">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" id="author">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher" id="publisher">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="published_city" class="form-label">Published City</label>
                    <input type="text" class="form-control" name="published_city" id="published_city">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="NISN" class="form-label">NISN</label>
                    <input type="text" class="form-control" name="NISN" id="NISN">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="ISBN" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="ISBN" id="ISBN">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="book_code" class="form-label">Book Code</label>
                    <input type="text" class="form-control" name="book_code" id="book_code">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="book_size" class="form-label">Book Size</label>
                    <input type="text" class="form-control" name="book_size" id="book_size">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <input type="text" class="form-control" name="note" id="note">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="abstract" class="form-label">Abstract</label>
                    <input type="text" class="form-control" name="abstract" id="abstract">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Cover Book</label>
                    <input class="form-control" name="cover_book" type="file" id="formFile">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="formFile" class="form-label">File</label>
                    <input class="form-control" name="file" type="file" id="formFile">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="synopsis" class="form-label">Sysnopsis</label>
            <textarea type="text" class="form-control" name="synopsis" id="synopsis"></textarea>
        </div>
        <div class="d-flex end-0 justify-content-end mb-4">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
</div>
@endsection @section('footer') @parent @endsection