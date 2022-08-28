@extends('sites/dashboard/layout')

@section('sidebar')
@parent
@endsection

@section('topbar')
@parent
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
{{--    <div class="d-sm-flex align-items-center justify-content-between mb-4">--}}
{{--        <h5 class="h3 mb-0 title-header">Overview</h5>--}}
{{--    </div>--}}

    <!-- Area Chart -->
    <div class="d-flex flex-row align-items-center justify-content-between">
        <div class="card shadow mb-4 row col-sm-6">
            <!-- Card Header - Dropdown -->
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 card-header-title" id="clinicName">Your Profile</h4>
                <!-- <div class="dropdown no-arrow">
                    <button data-toggle="modal" data-target="#editProfileModal" class="btn"
                        style="background-color: white; color: #8BC43F; font-weight: bold;">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                </div> -->
            </div>
            <!-- Card Body -->
            <div>
                <div class="card-body">
                    <form>
                        <div class="row justify-content-center">
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label"> <strong>NISN</strong> </label>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext"
                                        placeholder="{{ auth()->user()['NISN'] }}" id="cCode">
                                </div>
                                <label class="col-md-6 col-form-label"> <strong>Username</strong> </label>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext"
                                        placeholder="{{ auth()->user()['username'] }}" id="cPhoneNumber">
                                </div>
                                <label class="col-md-6 col-form-label"> <strong>Name</strong> </label>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext"
                                        placeholder="{{ auth()->user()['name'] }}" id="cPhoneNumber">
                                </div>
                                <label class="col-md-6 col-form-label"> <strong>Email</strong> </label>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext"
                                        placeholder="{{ auth()->user()['email'] }}" id="cPhoneNumber">
                                </div>
                                <label class="col-md-6 col-form-label"> <strong>Address</strong> </label>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext"
                                        placeholder="{{ auth()->user()['address'] }}" id="cPhoneNumber">
                                </div>
                                <label class="col-md-6 col-form-label"> <strong>Phone Number</strong> </label>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext"
                                        placeholder="{{ auth()->user()['phoneNumber'] }}" id="cPhoneNumber">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4 row col-sm-6">
            <!-- Card Header - Dropdown -->
            <!-- Card Body -->
            <div>
                <div class="card-body" id="app">
                    {!! $chart->container() !!}
                </div>
                <script src="https://unpkg.com/vue"></script>
                <script>
                var app = new Vue({
                    el: '#app',
                });
                </script>
                <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8>
                </script>
                {!! $chart->script() !!}
            </div>
        </div>
        <!-- <div class="card shadow mb-4 col-sm-6 "> -->
        <!-- Card Body -->
        <!-- <div class="card-body rounded-circle">
                <div class="justify-content-center ">
                    <div class="">
                        <img class="rounded-circle" src="{{ asset('images/teacher/adrianus.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection

@section('footer')
@parent
@endsection
