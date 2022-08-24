@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div>
        <a style="align-self: flex-end;" href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    </div>
    <!-- Page Heading -->
    <div class="card my-2">
        <div class="card-body d-flex">
            <img src="{{ url('$books->path_img') }}" style="max-width:180px;max-height:210px" class="img-thumbnail"
                alt="...">
            <div style="margin: 10px;">
                <div>
                    <h4 class="card-title">{{ $books->book_name }}</h4>
                    <h5>Deskripsi Buku</h5>
                    <p>
                        {{ $books->synopsis }}
                    </p>
                    <br>
                    <h4>Detail</h4>
                    <div class="row">
                        <div class="col">
                            <h5>Author</h5>
                            <p class="card-text">{{ $books->author }}</p>
                        </div>
                        <div class="col">
                            <h5>Publisher</h5>
                            <p class="card-text">{{ $books->publisher }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>NISN</h5>
                            <p class="card-text">{{ $books->NISN }}</p>
                        </div>
                        <div class="col">
                            <h5>Book Code</h5>
                            <p class="card-text">{{ $books->book_code }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>ISBN</h5>
                            <p class="card-text">{{ $books->ISBN }}</p>
                        </div>
                        <div class="col">
                            <h5>Book Size</h5>
                            <p class="card-text">{{ $books->book_size }}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">
                            <div>
                                <a target="_blank" style="align-self: flex-end;"
                                    href="{{ url('/book_read', $books->id) }}" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
@endsection

@section('footer')
@parent
@endsection