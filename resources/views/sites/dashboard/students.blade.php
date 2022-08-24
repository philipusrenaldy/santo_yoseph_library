@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection

@section('content')

<div class="mx-4 d-sm-flex align-items-center justify-content-between mb-4">

    <a href="{{ url('/student_form_page') }}" type="button" class="btn btn-primary justify-content-between ">
        <i class="fa fa-plus" aria-hidden="true"></i><span class="ml-2">Add Students</span>
    </a>
    <form action="{{ url('/student') }}">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" id="form1" name="search" class="form-control" placeholder="Keywords" />
                </div>
                <div>
                    <button type="button" class="btn btn-primary justify-content-between ">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>

<div class="mx-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Murid</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">NISN</th>
                <th scope="col">More Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $id = 1;
            @endphp
            @foreach ($students as $value)
            <tr>
                <th scope="row">{{ $id++ }}</th>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phoneNumber }}</td>
                <td>{{ $value->NISN }}</td>
                <td><a type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-expanded='false'>
                        <i class='bi bi-three-dots'></i>
                    </a>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                        <a class='dropdown-item' href="{{ url('/student_form_page', $value->id) }}"
                            type='button'>Ubah</a>
                        <a class='dropdown-item' href="{{ url('/student-delete', $value->id) }}" type='button'>Hapus</a>
                    </div>
                </td>
            </tr> @endforeach

    </table>
    <br />
    <div class="d-flex end-0 justify-content-end">
        {{ $students->links("pagination::bootstrap-4") }}
    </div>
    </tbody>
</div>


@endsection @section('footer') @parent @endsection