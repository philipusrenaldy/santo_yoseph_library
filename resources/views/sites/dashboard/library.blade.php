@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')
<!-- Begin Page Content -->

@if (auth()->user()->is_admin == 0 && auth()->user()->is_guru == 0)
<div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{ url('/library') }}">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="input-group justify-content-center">
                <div class="form-outline">
                    <input type="search" name="search" id="form1" class="form-control" placeholder="Search" />
                </div>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    @foreach ($books as $value)
    <div class="card my-2" style="height: 200px;">
        <div class="card-body d-flex">
            <img src="{{ url('/cover_book', $value->path_img) }}" style="max-width:165px;max-height:180px"
                class="img-thumbnail" alt="...">
            <div style="margin: 10px;">
                <div>
                    <h5 class="card-title">{{ $value->book_name }}</h5>
                    <p class="" style="
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;  
                        height: 50px; 
                        max-width: 100%;">
                        {{ $value->synopsis }}
                    </p>
                    <div>
                        <a style="align-self: flex-end;" href="{{ url('/book_detail', $value->id) }}"
                            class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br />
    <div class="d-flex end-0 justify-content-end">
        {{ $books->links("pagination::bootstrap-4") }}
    </div>
</div>
@else
<div class="mx-4 d-sm-flex align-items-center justify-content-between mb-4">
    <a href="{{ url('/library_form_page') }}" type="button" class="btn btn-primary justify-content-between ">
        <i class="fa fa-plus" aria-hidden="true"></i><span class="ml-2">Add Book</span>
    </a>

    <form action="{{ url('/library') }}">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" name="search" id="form1" class="form-control" placeholder="Keywords" />
                </div>
                <button type="button" class="btn btn-primary justify-content-between ">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="mx-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Published Year</th>
                <th scope="col">More Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $id = 1;
            @endphp
            @foreach ($books as $value)
            <tr>
                <th scope="row">{{ $id++ }}</th>
                <td>{{ $value->book_name }}</td>
                <td>{{ $value->author }}</td>
                <td>{{ $value->publisher }}</td>
                <td>{{ $value->published_at }}</td>
                <td><a type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-expanded='false'>
                        <i class='bi bi-three-dots'></i>
                    </a>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                        <a class='dropdown-item' href="{{ url('/library_form_page', $value->id) }}"
                            type='button'>Ubah</a>
                        <a class='dropdown-item' href="{{ url('/book-delete', $value->id) }}" type='button'>Hapus</a>
                    </div>
                </td>
            </tr> @endforeach

    </table>
    <br />
    <div class="d-flex end-0 justify-content-end">
        {{ $books->links("pagination::bootstrap-4") }}
    </div>
    </tbody>
</div>
@endif


@endsection @section('footer') @parent @endsection